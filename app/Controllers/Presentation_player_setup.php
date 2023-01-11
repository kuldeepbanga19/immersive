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

class Presentation_player_setup extends BaseController
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
    
public function presentation_player($scen_id=NULL)
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
        // $test=$db->query("SELECT id  from immersive.imr_industry_sector where industory_name like'%o%'")->getResultArray();
        //  var_dump($test);die; 
        // var_dump( $usernameID);die;
        $data['industory_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_industry_sector ')->getResultArray();
        $data['attack_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_attack_vector ')->getResultArray();
        $data['threat_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_threat_actor')->getResultArray();
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){
          echo view('layout/set_up_header2');
          return view('presentation',$data);
        }
        else{
            echo view('layout/student_header');
            return view('new_index2'); 
        }
    


}

 

  
}

 
public function scenario_choose($id){
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
    	$data["scen_name"]="Presentation Exercise for ".$scen_name->scenrio_title." ".date("Y-m-d H:i");
    	
    }
    else{
    	$data["scen_name"]=$scen_data->exercise_name;
    	if($scen_data->start_date)
    	$data["s_date"]=date('Y-m-d',$scen_data->start_date);
        if($scen_data->end_date)
    	$data["e_date"]=date('Y-m-d', $scen_data->end_date);
    }
    $data["scenid"]=$scenario_id;
    
    //scenrio_title
    echo view('layout/set_up_header2');
    return view("presenation_player_choose",$data);

   
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
        $scenrio=$db->query("SELECT * FROM $tablenm WHERE crisis_scenario_id=$sid AND set_up_type=3 AND published_status=0")->getFirstRow();
        
        $data["crisis_scenario_id"]=$this->request->getVar("scenid");
        $data["exercise_name"]=$this->request->getVar("sname");
        $data["start_date"]=strtotime($this->request->getVar("startdate"));
        $data["end_date"]=strtotime($this->request->getVar("enddate"));
        $data["set_up_type"]=3;
         if($scenrio){
         	$s_id=$scenrio->crisis_scenario_id;
         	$data["modified"]=strtotime("now");
            $data["modified_by"]=$uid;
            $json["sp_id"]=$scenrio->id;

            $where = ['crisis_scenario_id'=>$s_id,'published_status'=>0,'set_up_type'=>3];
         	$db->table("single_player_setup")->where($where)->update($data);
         }
         else{
         	$db->table("single_player_setup")->insert($data);
          $json["sp_id"]=$db->insertID();
         }
    	
    	$json["success"]=true;
    	echo json_encode($json);
    }
    public function review($spid){
      $db=\Config\Database::connect();
      $usertb=$db->prefixTable("single_player_setup");
      $data=array();
      $presentation_data=$db->query("SELECT * FROM $usertb WHERE id=$spid")->getResultArray();
    //   print_r($users_data);die;
      $data["sp_id"]=$spid;
      $data["presentation_data"]= $presentation_data;

      $crisis_scenrioData=$db->query("SELECT id,scenrio_title FROM imr_crisis_scenrio")->getResult();
      $crisis_scenriodata_array=array();
      foreach($crisis_scenrioData as $crisis_scenrioVal){
        $crisis_scenriodata_array[$crisis_scenrioVal->id]=$crisis_scenrioVal->scenrio_title;
      }
      $data['crisis_scenriovalues']=$crisis_scenriodata_array;
      // echo view('layout/set_up_header2');
      return view("review_presentation_setup",$data);
    }
// 


public function publish(){
    
    $db=\Config\Database::connect();
    $session = session();
    $uid=$session->get("userid");
    $tablenm=$db->prefixTable("single_player_setup");
    $data=array();

    $sid=$this->request->getVar("id");
   
    $scenrio=$db->query("SELECT * FROM $tablenm WHERE crisis_scenario_id=$sid AND published_status=0 AND set_up_type=3")->getFirstRow();

     if($scenrio){
         $s_id=$scenrio->crisis_scenario_id;
         $data["published_status"]=1;
         $presentation_id=$json["sp_id"]=$scenrio->id;
         $db->table("single_player_setup")->where("crisis_scenario_id",$s_id)->update($data);

        //  published_presentation_exercise_database

        
        //  $data2["created"]=strtotime("now");
        //  $data2["created_by"]=$uid;
        //  $data2["exercise_id"]=$presentation_id;
        //  $data2["status"]=1;
        //  $db->table("published_presentation_exercise")->insert($data2);
         
     }
    
    
    $json["success"]=true;
    echo json_encode($json);
}
public function delete(){
    
  $db=\Config\Database::connect();

  $tablenm=$db->prefixTable("single_player_setup");
  $data=array();

  $sid=$this->request->getVar("id");
 
  $scenrio=$db->query("SELECT * FROM $tablenm WHERE crisis_scenario_id=$sid AND published_status=0")->getFirstRow();

   if($scenrio){
       $s_id=$scenrio->crisis_scenario_id;
      //  $data["published_status"]=1;
      //  $json["sp_id"]=$scenrio->id;
      
      $where = ['crisis_scenario_id'=>$s_id,'published_status'=>0,'set_up_type'=>3];
      $db->table("single_player_setup")->where($where)->delete();
      //  $db->table("presentation_player_setup")->where("crisis_scenario_id",$s_id)->delete();
   }
  
  
  $json["success"]=true;
  echo json_encode($json);
}

    
public function published_exercise($spid)
{	

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


        // var_dump( $usernameID);die;
        // $getrole = $db->query('SELECT * FROM immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1  AND user_id='. $usernameID)->getResult()){
          $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
      $fstl=$tempvv->firstname;
      $lstl=$tempvv->lastname;
      $data["firstletter"]=$fstl[0];
      $data["lastletter"]=$lstl[0];
      $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1) AND user_id='. $usernameID)->getResultArray();
          
        //   echo view('layout/set_up_header2');
        echo view('layout/header0',$data);
          return view("published_exercise",$data);
        }
        elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult()){
          $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
          $fstl=$tempvv->firstname;
          $lstl=$tempvv->lastname;
          $data["firstletter"]=$fstl[0];
          $data["lastletter"]=$lstl[0];



          $data['admin']=  $db->query('SELECT role_id FROM immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
          // print_r( $data['admin']);die;
            //   echo view('layout/set_up_header2');
            echo view('layout/header1',$data);
              return view("published_exercise",$data);
        }
        else{
          $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
          $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
      $fstl=$tempvv->firstname;
      $lstl=$tempvv->lastname;
      $data["firstletter"]=$fstl[0];
      $data["lastletter"]=$lstl[0];
            echo view('layout/header1',$data);
            return view('published_exercise',$data); 
        }
    




    

   
}




public function exercise_start_status($id,$start_status){
// print_r($start_status);die;
  $db = \Config\Database::connect();
  $builder = $db->table('single_player_setup');
  $builder->update(['start_status' => $start_status,'exercise_start_date' => strtotime("now")] , ['id' => $id]);
  $json=array();
  $json['success']=true;
  echo json_encode($json);


  }

  //abhishek
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
  // if($search_array){
  
  //   $searchwhere="AND ( scenrio_title LIKE '%{$search_array}%' OR  briefing LIKE  '%{$search_array}%' OR industry_sector IN (SELECT id  from immersive.imr_industry_sector where industory_name like'%{$search_array}%') OR attack_vector in (SELECT id from immersive.imr_attack_vector WHERE attack_name like '%{$search_array}%') OR threat_actor in (SELECT id from immersive.imr_threat_actor WHERE threat_name like '%{$search_array}%'))";
  
  // }
  if($data_array){
    $data["selected_scen"]=$data_array;
  } 
  
  
  
    
    $sdata=$db->query("SELECT * FROM $scenarioTb WHERE publish_status=1 $indusrtrywhere $attackwhere $threatwhere $searchwhere")->getResultArray();
    $data['published_crisis'] =$sdata;
    //  print_r($sdata);die;
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
    $json["filterddata"]=view("filterpresentation",$data);
    $json["success"]=true;
    echo json_encode($json);
  }
  //abhishek
    
   
}

