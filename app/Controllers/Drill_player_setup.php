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

class Drill_player_setup extends BaseController
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


// view Published scenario 
    
public function drill_player($scen_id=NULL)
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
        
        // var_dump( $usernameID);die;
        $data['industory_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_industry_sector ')->getResultArray();
        $data['attack_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_attack_vector ')->getResultArray();
        $data['threat_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_threat_actor')->getResultArray();
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){
          echo view('layout/set_up_header2');
          return view('drill',$data);
        }
        else{
            echo view('layout/header1');
            return view('new_index2'); 
        }
    


}

 

  
}

// end


// choose scenario for drill
 
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
    $scen_data=$db->query("SELECT * FROM $tablenm2 WHERE crisis_scenario_id=$scenario_id AND published_status=0 ORDER BY id desc")->getFirstRow();
    if($scen_name && !$scen_data){
    	$data["scen_name"]="Drill Exercise for ".$scen_name->scenrio_title." ".date("Y-m-d H:i");
    	
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
    return view("drill_player_choose",$data);

   
    }

// end

    // add choosed scenario info to database
    public function addinfo(){
    	$db=\Config\Database::connect();
    	 $session = session();
    	 $uid=$session->get("userid");
        $tablenm=$db->prefixTable("single_player_setup");
        $data=array();
        $data["created"]=strtotime("now");
        $data["created_by"]=$uid;
        $sid=$this->request->getVar("scenid");
        $scenrio=$db->query("SELECT * FROM $tablenm WHERE crisis_scenario_id=$sid  AND set_up_type=2 AND published_status=0")->getFirstRow();
        
        $data["crisis_scenario_id"]=$this->request->getVar("scenid");
        $data["exercise_name"]=$this->request->getVar("sname");
        $data["start_date"]=strtotime($this->request->getVar("startdate"));
        $data["end_date"]=strtotime($this->request->getVar("enddate"));
        $data["set_up_type"]=2;
         if($scenrio){
         	$s_id=$scenrio->crisis_scenario_id;
         	$data["modified"]=strtotime("now");
            $data["modified_by"]=$uid;
            $json["sp_id"]=$scenrio->id;

            $where = ['crisis_scenario_id'=>$s_id,'published_status'=>0,'set_up_type'=>2];
         	$db->table("single_player_setup")->where($where)->update($data);
         }
         else{
         	$db->table("single_player_setup")->insert($data);
          $json["sp_id"]=$db->insertID();
         }
    	
    	$json["success"]=true;
    	echo json_encode($json);
    }
// end

    
    // add users for particular role
    public function addUser($spid)
   {
    # code...
    // print_r($spid);die;
   }
//    end
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
  // var_dump($dill_array);die;
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
  $json["filterddata"]=view("filterdrill",$data);
  $json["success"]=true;
  echo json_encode($json);
}//abhishek

public function assignment($spid,$active=NULL){
    $db=\Config\Database::connect();
    $table1=$db->preFixtable("single_player_setup");
    $table2=$db->preFixtable("scenario_role_cate");
    $table3=$db->preFixtable("scenario_role");
    $table4=$db->preFixtable("injects");
    $table5=$db->preFixtable("inject_data");
     $usertb=$db->prefixTable("user");
     $playerassign=$db->preFixtable("player_assignment");
    $data=array();
    $data['s_roles']=array();
    $data["job_title"]="";
    $data["singlep_id"]=$spid;
    $data["category"]="";
    $data["description"]="";
    $data["active_job"]="";
    $data["inject_array"]=array();
    $data["user_data"]=array();
    $data["assigned_user"]="";
    $role_index=$active;
    $playdata=$db->query("SELECT * FROM  $table1 WHERE id=$spid")->getFirstRow();

    if($playdata){
      $sid=$playdata->crisis_scenario_id;
      $rolesdata=$db->query("SELECT r.*,rd.scenario_role_name,rd.role_briefing FROM $table2 r LEFT JOIN $table3 rd ON r.scenario_role_id=rd.id WHERE r.crisis_scenario_id=$sid")->getResult();
      $data['s_roles']=$rolesdata;
      $data["spid"]=$spid;
      $data["user_data"]=$db->query("SELECT * FROM $usertb")->getResultArray();
      if($active==NULL){
        $data["job_title"]=$rolesdata[0]->job_title;
        $data["category"]=$rolesdata[0]->scenario_role_name;
        $data["description"]=$rolesdata[0]->role_briefing;
       
        $roleid=$rolesdata[0]->id;
         $data["active_job"]=$roleid;
        $data["inject_array"]=$db->query("SELECT injd.*,inj.scenario_id FROM $table5 injd LEFT JOIN $table4 inj ON inj.id=injd.inject_id WHERE inj.scenario_id=$sid AND injd.role=$roleid")->getResult();
       
      }
      else{
         $rolesdata2=$db->query("SELECT r.*,rd.scenario_role_name,rd.role_briefing FROM $table2 r LEFT JOIN $table3 rd ON r.scenario_role_id=rd.id WHERE r.id=$active")->getFirstRow();
         if($rolesdata2){
           $roleid=$rolesdata2->id;
           $data["job_title"]=$rolesdata2->job_title;
           $data["category"]=$rolesdata2->scenario_role_name;
           $data["description"]=$rolesdata2->role_briefing;
           $data["active_job"]=$rolesdata2->id;
           $data["inject_array"]=$db->query("SELECT injd.*,inj.scenario_id FROM $table5 injd LEFT JOIN $table4 inj ON inj.id=injd.inject_id WHERE inj.scenario_id=$sid AND injd.role=$roleid")->getResult();

         }
       

      }
      $assigned=$db->query("SELECT * FROM $playerassign WHERE singlep_id=$spid AND roleid=$roleid")->getFirstRow();
      if($assigned){
        $data["assigned_user"]=$assigned->userid;
      }
      $data["role_idv"]=$roleid;
     
    }
    echo view("drill_assign",$data);
}

public function assignuser(){
  $json=array();
  $spid=$this->request->getVar("spid");
  $uid=$this->request->getVar("uid");
  $role_idv=$this->request->getVar("role_idv");
  $db=\Config\Database::connect();
  $tablnm=$db->preFixtable("player_assignment");
  $res=$db->query("SELECT * FROM $tablnm WHERE singlep_id=$spid AND status=0 AND roleid=$role_idv")->getFirstRow();
  if($res){

    $id=$res->id;
    $data=[
      "userid"=>$uid,
      "roleid"=>$role_idv
    ];
    $wh=[
      "id"=>$id,
      "status"=>0
    ];
    if($uid==$res->userid){
     $db->query("DELETE FROM $tablnm WHERE id=$id");
     $json["textv"]="Assign";
    }
    else{
      $db->table("player_assignment")->where($wh)->update($data);
       $json["textv"]="Assigned";
    }
    
  }
  else{
    $data2=[
      "userid"=>$uid,
      "singlep_id"=>$spid,
      "roleid"=>$role_idv
    ];
    $db->table("player_assignment")->insert($data2);
     $json["textv"]="Assigned";
  }
  $json["success"]=true;
  echo json_encode($json);


}
public function review_data($id){
  $db=\Config\Database::connect();
  $tablenm=$db->prefixTable("single_player_setup");
  $tablenm2=$db->prefixTable("crisis_scenrio");
  $tablenm3=$db->prefixTable("player_assignment");
  $result=$db->query("SELECT tb1.*,tb2.scenrio_title FROM $tablenm tb1 LEFT JOIN $tablenm2 tb2 ON tb1.crisis_scenario_id=tb2.id WHERE tb1.id=$id")->getFirstRow();
   $data["result"]=$result;
   $data["spid"]=$id;
   $sid=$result->crisis_scenario_id;
  // print_r($result);die;
   $data["palyer_edit"]=base_url().'/Drill_player_setup/assignment/'.$id;
  $data["scenario_edit"]=base_url().'/Drill_player_setup/drill_player/'.$sid;
  $data["excercise_edit"]=base_url().'/Drill_player_setup/scenario_choose/'.$sid;

  $data["partiipants"]=count($db->query("SELECT * FROM $tablenm3 WHERE singlep_id=$id")->getResultArray());
  // print_r($data);die;
   echo view("drill_review",$data);

}
 public function confirmation($spid){
  $json=array();
  $db=\Config\Database::connect();
  $data=[
   "published_status"=>1,
  ];
  // $db->table("single_player_setup")->where("id",$spid)->update($data);
  $json["success"]=true;
  echo json_encode($json);

 }
 public function publishdata($spid=NULL){
  $data=[];
  $hdata=[];
  $db=\Config\Database::connect();
  //
      $session = session();//abhishek
      $username =$session->get('username');
      $SessionModel = new SessionModel();
      $userData = $SessionModel->where('email',$username)->first();
      $usernameID = $userData['id'];
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
            $fstl=$tempvv->firstname;
            $lstl=$tempvv->lastname;
            $hdata["firstletter"]=$fstl[0];
            $hdata["lastletter"]=$lstl[0];
     // print_r($tempvv);die();
  //
  $playerassigntable=$db->preFixtable("player_assignment");     
  $usertable=$db->preFixtable("user");     
  $scenarrio_roletb=$db->preFixtable("scenario_role_cate");
  $tablenm=$db->preFixtable("single_player_setup");
  $scenario_tb=$db->preFixtable("crisis_scenrio");
  $scenario_roletb=$db->preFixtable("scenario_role");
  $inject_tb=$db->preFixtable("inject_data");
  $result=$db->query("SELECT sp.*,sct.scenrio_title FROM $tablenm sp LEFT JOIN $scenario_tb sct ON sp.crisis_scenario_id=sct.id WHERE sp.id=$spid")->getFirstRow();
  $playerdata=$db->query("SELECT pl.*,us.firstname,us.lastname,sct.job_title,scr.scenario_role_name,inj.title as injtitle,inj.date as injdate,inj.timetext as injtime,sct.responsiblity FROM $inject_tb inj LEFT JOIN $playerassigntable pl ON inj.role=pl.roleid LEFT JOIN $usertable us ON pl.userid=us.id LEFT JOIN $scenarrio_roletb sct ON sct.id=pl.roleid LEFT JOIN $scenario_roletb scr ON scr.id=sct.scenario_role_id WHERE singlep_id=$spid")->getResult();
  // print_r($playerdata);die;
  $data["first_excercise"]=$playerdata[0];
  
  $data["rdata"]=$result;
   
   echo view('layout/header0',$hdata);
  echo view("drillpublish",$data);
 }


}

