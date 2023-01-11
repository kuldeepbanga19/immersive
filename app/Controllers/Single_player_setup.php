<?php namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\SessionModel;
use App\Models\Scenario_roleDb;
use App\Models\Industory_sectorDb;
use App\Models\Attack_vectorDb;
use App\Models\Crisis_scenrioDb;
use App\Models\injectDb;
use App\Models\Threat_actorDb;
use App\Models\Scenario_role_cateDb;
use App\Models\Feedback_performanceDb;
use App\Models\Scenario_epilogueDb;
use App\Models\Scenario_performanceDb;

class Single_player_setup extends BaseController
{
protected $sessionVar;
 protected $injectMd;
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
      
      $this->injectMd=new injectDb();
      $this->sessionVar=session();
      helper(['form','gettime']);
 }


// view Templated scenario dashboard
    
public function single_player($scen_id=NULL)
{	

$session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
    
  helper(['form', 'url']);
  $data["selected_scen"]="";
  $crisis_scenrioDb = new Crisis_scenrioDb();
  $data['published_crisis'] = $crisis_scenrioDb->where('publish_status=1')->orderby('id','DESC')->findAll();


  $db=\Config\Database::connect();
  $tbname=$db->prefixTable("crisis_scenrio");
  $max_role=$data['max_role']=$db->query("SELECT count(id) as max_role_no FROM $tbname WHERE publish_status=1")->getRow();
  $data['published']= $max_role->max_role_no; 
   if($scen_id){
   	$data["selected_scen"]=$scen_id;
   } 



	$companyDb = new Industory_sectorDb();
	$data['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();


  
  $attack_vectorDb = new Attack_vectorDb();
	$data['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
  $threat_actorDb = new Threat_actorDb();
	$data['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();

$role_cateDb = new Scenario_role_cateDb();
$data['Role_cate']=$role_cateDb->orderBy('LTRIM(job_title)')->findAll();


  // print_r($data);die;
  $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];
        $data['industory_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_industry_sector ')->getResultArray();
        $data['attack_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_attack_vector ')->getResultArray();
        $data['threat_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_threat_actor')->getResultArray();
        // var_dump( $usernameID);die;
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){
          echo view('layout/set_up_header');
          return view('published',$data);
        }
        else{
            echo view('layout/header1');
            return view('new_index2'); 
        }
    


}

 

  
}

 
public function scenario_choose($id,$spid=NULL){
    // print_r($id);die;
    $db=\Config\Database::connect();
    $tablenm=$db->prefixTable("crisis_scenrio");
    $tablenm2=$db->prefixTable("single_player_setup");
    $scenario_id = $id;
    // print_r($scenario_id);die;
    $session = session();
    $data["scen_name"]="";
    $session->set('scenario_id', $scenario_id);
    $data=[];
    $data["s_date"]="";
    $data["e_date"]="";
    $scen_name=$db->query("SELECT * FROM $tablenm WHERE id=$scenario_id")->getFirstRow();
    
   
    
    $scen_data=$db->query("SELECT * FROM $tablenm2 WHERE crisis_scenario_id=$scenario_id AND published_status=0")->getFirstRow();
   
    if($scen_name && !$scen_data){
    	$data["scen_name"]="Async Exercise for ".$scen_name->scenrio_title." ".date("Y-m-d H:i");
    	
    }
    else{
    	$data["scen_name"]=$scen_data->exercise_name;
    	if($scen_data->start_date)
    	$data["s_date"]=date('Y-m-d',$scen_data->start_date);
        if($scen_data->end_date)
    	$data["e_date"]=date('Y-m-d', $scen_data->end_date);
    }
    $data["scenid"]=$scenario_id;
    $data["sp_id"]=$spid;
    
    //scenrio_title
    return view("singleplayerchoose",$data);

   
    }
    public function addinfo(){
    	$db=\Config\Database::connect();
    	 $session = session();
    	 $uid=$session->get("userid");
        $tablenm=$db->prefixTable("single_player_setup");
        $data=array();
        $data["created"]=strtotime("now");
        $data["created_by"]=$uid;
        $sid=$this->request->getVar("scenid");
        $spid=$this->request->getVar("spid");

        if($spid){
          $scenrio=$db->query("SELECT * FROM $tablenm WHERE id=$spid")->getFirstRow();
        }
        else{
          $scenrio=$db->query("SELECT * FROM $tablenm WHERE crisis_scenario_id=$sid AND published_status=0 AND set_up_type=1")->getFirstRow();
        }
        
        
        $data["crisis_scenario_id"]=$this->request->getVar("scenid");
        $data["exercise_name"]=$this->request->getVar("sname");
        $data["start_date"]=strtotime($this->request->getVar("startdate"));
        $data["end_date"]=strtotime($this->request->getVar("enddate"));
        $data["set_up_type"]=1;
         if($scenrio){
         	$s_id=$scenrio->crisis_scenario_id;
         	$data["modified"]=strtotime("now");
            $data["modified_by"]=$uid;
            $json["sp_id"]=$scenrio->id;
            $spidv=$scenrio->id;
         	$db->table("single_player_setup")->where("id",$spidv)->update($data);
         }
         else{
         	$db->table("single_player_setup")->insert($data);
          $json["sp_id"]=$db->insertID();
         }
    	
    	$json["success"]=true;
    	echo json_encode($json);
    }
    public function addusers($spid,$scid=NULL){
      $db=\Config\Database::connect();
      $usertb=$db->prefixTable("user");
      $sptb=$db->prefixTable("player_assignment");

      $data=array();
      $userflagarray=array();
      $users_data=$db->query("SELECT * FROM $usertb")->getResultArray();
      foreach ($users_data as $ukey => $uvalue) {
             $uid=$uvalue['id'];
             $res=$db->query("SELECT * FROM $sptb WHERE userid=$uid AND singlep_id=$spid")->getFirstRow();
        if($res){
          $userflagarray[$uvalue["id"]]=1;
        }
        else{
          $userflagarray[$uvalue["id"]]=0;
        }     
        
      }
      $data["userflagarray"]=$userflagarray;
      $data["sp_id"]=$spid;
      $data["backurl"]=base_url().'/Single_player_setup/scenario_choose/'.$scid.'/'.$spid;
      // $data["backurl"]="";
      $data["usersdata"]= $users_data;
      return view("addusers",$data);
    }
    public function assignusers(){
      $json=array();
      $db=\Config\Database::connect();
      $usid=$this->request->getVar("userid");
      $spid=$this->request->getVar("sp_id");
      // print_r($usid);die;
      $data=[
        "userid"=>$usid,
        "singlep_id"=>$spid
      ];
      $db->table("player_assignment")->insert($data);
      $json["success"]=true;
      $json["textval"]="remove";
      $json["flag"]=1;
      echo json_encode($json);
    }
    public function removeusers(){
       $json=array();
       $db=\Config\Database::connect();
       $tablenm=$db->prefixTable("player_assignment");
       $usid=$this->request->getVar("userid");

       $spid=$this->request->getVar("sp_id");
       $res=$db->query("SELECT * FROM $tablenm WHERE singlep_id=$spid AND userid=$usid")->getResult();
       
       if($res){
          $db->query("DELETE FROM $tablenm WHERE singlep_id=$spid AND userid=$usid");
       }
       $json["success"]=true;
       $json["textval"]="Add";
       $json["flag"]=0;
       echo json_encode($json);

    }
    public function review($id=NULL){
      $data=array();
      $db=\Config\Database::connect();
      $tablenm=$db->prefixTable("single_player_setup");
      $tablenm2=$db->prefixTable("crisis_scenrio");
      $tablenm3=$db->prefixTable("player_assignment");
      $result=$db->query("SELECT tb1.*,tb2.scenrio_title FROM $tablenm tb1 LEFT JOIN $tablenm2 tb2 ON tb1.crisis_scenario_id=tb2.id WHERE tb1.id=$id")->getFirstRow();
      $data["partiipants"]=count($db->query("SELECT * FROM $tablenm3 WHERE singlep_id=$id")->getResultArray());
      $data["result"]=$result;
      $data["spid"]=$id;
      $sid=$result->crisis_scenario_id;
      $data["excercise_edit"]=base_url().'/Single_player_setup/scenario_choose/'.$sid.'/'.$id;
       $data["scenario_edit"]=base_url().'/Single_player_setup/single_player/'.$sid;
       $data["singleplayeredit"]=base_url().'/Single_player_setup/addusers/'.$id.'/'.$sid;
      echo view("reviewsingle_player",$data);
    }
    public function publishstatus(){
      $json=array();
      $db=\Config\Database::connect();
      $sp_id=$this->request->getVar("spid");
      $data=[
        "published_status"=>1
      ];
      $db->table("single_player_setup")->where("id",$sp_id)->update($data);
      $json["success"]=true;
      $json["sp_id"]=$sp_id;
      echo json_encode($json);
    }
    public function savedata(){
    	$json=array();
    	$db=\Config\Database::connect();
    	$spid=$this->request->getVar("spid");
    	$tablenm=$db->prefixTable("single_player_setup");

    	$res=$db->query("SELECT * FROM $tablenm WHERE id=$spid")->getFirstRow();
    	if($res->published_status==0){
    		$db->query("DELETE FROM $tablenm WHERE id=$spid");
    	}
    	$json["success"]=true;
    	echo json_encode($json);
    }
    public function publishdata($spid){
    	// $data
    	$data=array();
    	$db=\Config\Database::connect();
      $session = session();//abhishek
      $username =$session->get('username');
      $SessionModel = new SessionModel();
      $userData = $SessionModel->where('email',$username)->first();
      $usernameID = $userData['id'];


    	$tablenm=$db->prefixTable("single_player_setup");
    	$tablenm2=$db->prefixTable("crisis_scenrio");
    	$tablenm3=$db->prefixTable("scenario_role_cate");
    	$tablenm4=$db->prefixTable("scenario_role");
    	$tablenm5=$db->prefixTable("player_assignment");
    	$tablenm6=$db->prefixTable("user");
    	$data['roles']=array();
    	$data['assignusers_val']=array();
    	 $result=$db->query("SELECT tb1.*,tb2.scenrio_title,tb2.briefing FROM $tablenm tb1 LEFT JOIN $tablenm2 tb2 ON tb1.crisis_scenario_id=tb2.id WHERE tb1.id=$spid")->getFirstRow();
       $result2=$db->query("SELECT tb2.scenrio_title,tb2.briefing,tb2.id FROM $tablenm tb1 LEFT JOIN $tablenm2 tb2 ON tb1.crisis_scenario_id=tb2.id WHERE tb1.id=$spid")->getFirstRow();

      //  print_r($result2);die;
    	 if($result){
    	 	$scid=$result->crisis_scenario_id;
    	 	$temp=$db->query("SELECT * FROM $tablenm3 WHERE crisis_scenario_id=$scid")->getResultArray();
    	 	$temp_arr=$db->query("SELECT tb1.*,tb2.firstname as fname FROM $tablenm5 tb1 LEFT JOIN $tablenm6 tb2 ON tb1.userid=tb2.id WHERE tb1.singlep_id=$spid")->getResultArray();
            $data['roles']=$temp;
            $data['assignusers_val']=$temp_arr;
    	 }
    	 $Allroles=$db->query("SELECT * FROM $tablenm4")->getResultArray();
    	 $temp_arry=array();
    	 foreach ($Allroles as $rkey => $rvalue) {
    	 	# code...
    	 	$temp_arry[$rvalue['id']]=$rvalue['scenario_role_name'];
    	 }
    	 $data["rolesinfo"]=$temp_arry;

    	$data["scenario_name"]=$result->scenrio_title;
      $data["scenario_briefing"]=$result->briefing;
    	$data["exercise_name"]=$result->exercise_name;
      $data["start_status"]=$result->start_status;
      $data["exercise_start_date"]=$result->exercise_start_date;
      $data["set_up_id"]=$result->id;
      $data["scenario_id"]=$result2->id;
      // print_r($data["scenario_id"]);die;




      if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1  AND user_id='. $usernameID)->getResult()){
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
    $fstl=$tempvv->firstname;
    $lstl=$tempvv->lastname;
    $data["firstletter"]=$fstl[0];
    $data["lastletter"]=$lstl[0];
    $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1) AND user_id='. $usernameID)->getResultArray();
    $data["usernameID"]=$usernameID; 
      //   echo view('layout/set_up_header2');
      echo view('layout/header0',$data);
    	echo view("singleplayer_publish",$data);
      }
      elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult()){
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
        $fstl=$tempvv->firstname;
        $lstl=$tempvv->lastname;
        $data["firstletter"]=$fstl[0];
        $data["lastletter"]=$lstl[0];



        $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
        // print_r( $data['admin']);die;
          //   echo view('layout/set_up_header2');
          $data["usernameID"]=$usernameID;
          echo view('layout/header1',$data);
          echo view("singleplayer_publish",$data);
      }
      else{
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
        $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
    $fstl=$tempvv->firstname;
    $lstl=$tempvv->lastname;
    $data["firstletter"]=$fstl[0];
    $data["lastletter"]=$lstl[0];
    $data["usernameID"]=$usernameID;
          echo view('layout/student_header',$data);
          echo view("singleplayer_publish",$data); 
      }
    }

  // code by Piyusha

  public function exercise_start_status($id,$start_status){
    // print_r($start_status);die;
      $db = \Config\Database::connect();
      $builder = $db->table('single_player_setup');
      $builder->update(['start_status' => $start_status,'exercise_start_date' => strtotime("now")] , ['id' => $id]);
      $json=array();
      $json['success']=true;
      echo json_encode($json);
    
    
      }

  // end

    public function getfilterscenario(){
      $json=array();
      $attack_array=$this->request->getVar("attackvall");
      $threat_array=$this->request->getVar("threatvaal");
      $industry_array=$this->request->getVar("industryvall");
      $search_array=$this->request->getVar("searchvaal");
      $dill_array=$this->request->getVar("dillvall");
      $data_array=$this->request->getVar("datavall");
      $data['dill']=$dill_array;
      $data['count']=0;
      $data["selected_scen"]="";
      // var_dump($data_array);die;
      // $crisis_scenrioDb = new Crisis_scenrioDb();
      // $data['published_crisis'] = $crisis_scenrioDb->where('publish_status=1')->orderby('id','DESC')->findAll();
      $indusrtrywhere="";
      $attackwhere="";
      $threatwhere="";
      $searchwhere="";
      $db=\Config\Database::connect();
      $scenarioTb=$db->preFixtable('crisis_scenrio');
      if($industry_array){
        $indust=implode(", ",$industry_array);
        $indusrtrywhere="AND industry_sector IN (".$indust.") ";
    
      }
     
     if($attack_array){
      $attacks=implode(", ",$attack_array);
      $attackwhere="AND attack_vector IN (".$attacks.") ";
    
     }
     if($threat_array){
      $threats=implode(", ",$threat_array);
      $threatwhere="AND threat_actor IN (".$threats.") ";
    
     }
     if($search_array){
      // $indust=implode(", ",$industry_array);
      $searchwhere="AND ( scenrio_title LIKE '%{$search_array}%' OR  briefing LIKE  '%{$search_array}%')";
    
    }
    if($data_array){
      $data["selected_scen"]=$data_array;
    } 
    
    
      
    
      
      $sdata=$db->query("SELECT * FROM $scenarioTb WHERE publish_status=1 $indusrtrywhere $attackwhere $threatwhere $searchwhere")->getResultArray();
      $data['published_crisis'] =$sdata;
    // var_dump($sdata);die;
      if($dill_array){
        $count=0;
        // print_r($data['published_crisis']['id']);die;
        foreach($data['published_crisis'] as $published){
         $db=\Config\Database::connect();
         $tbname=$db->prefixTable("scenario_role_cate");
         $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $published['id']."")->getRow();
         if($max_role->max_role_no>1) {continue;}else{ $count=$count+1;}
      }
      $data['count']=$count;
      
    }
    
    
      $companyDb = new Industory_sectorDb();
      $data['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();
    
    
      
      $attack_vectorDb = new Attack_vectorDb();
      $data['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
      $threat_actorDb = new Threat_actorDb();
      $data['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();
      $json["filterddata"]=view("filterpublished",$data);
      $json["success"]=true;
      echo json_encode($json);
    }
  
    
   
}

