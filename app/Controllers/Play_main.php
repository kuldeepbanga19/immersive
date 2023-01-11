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

class Play_main extends BaseController
{

    public function __construct()
    {
     $session = session();
      if(!$session->has('us')){
               return redirect()->to('login');	
        }
   }
  
  
  public function play_main()
      {	
  
    $session = session();
      if(!$session->has('us')){
               return redirect()->to('login');	
        }
  
      else{ 
          
      $db = \Config\Database::connect();
      $session = session();//abhishek
      $username =$session->get('username');
      $SessionModel = new SessionModel();
      $userData = $SessionModel->where('email',$username)->first();
      $usernameID = $userData['id'];
      $usertb=$db->prefixTable("single_player_setup"); 
      $scenariotb=$db->prefixTable("crisis_scenrio"); 
      $data['selected_scen']=$usernameID;

      // var_dump( $usernameID);die;
      $companyDb = new Industory_sectorDb();
	$data['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();

    $attack_vectorDb = new Attack_vectorDb();
	$data['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
  $threat_actorDb = new Threat_actorDb();
	$data['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();
  $data['industory_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_industry_sector ')->getResultArray();
  $data['attack_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_attack_vector ')->getResultArray();
  $data['threat_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_threat_actor')->getResultArray();

      if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1 AND user_id='. $usernameID)->getResult()){
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
              $fstl=$tempvv->firstname;
              $lstl=$tempvv->lastname;
              $data["firstletter"]=$fstl[0];
              $data["lastletter"]=$lstl[0];
            //   $presentation_data=$db->query("SELECT * FROM $usertb WHERE published_status=1 AND created_by=$usernameID ORDER BY id DESC")->getResultArray();
              // print_r($usernameID);die;

              $presentation_data=$db->query("SELECT usb.*,imp.*,usb.id as usbid FROM $usertb usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id WHERE usb.published_status=1 AND (imp.userid=$usernameID) AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC")->getResultArray();
            //   print_r($presentation_data);die;
            // $data["pre_data"]=$presentation_data2;
              $data["presentation_data"]= $presentation_data;
              $publish_scenario_data=$db->query("SELECT * FROM $scenariotb WHERE publish_status=1 ORDER BY id DESC")->getResultArray();

              $data["published_secnario"]= $publish_scenario_data;
              // print_r($publish_scenario_data);die;
        echo view('layout/header0',$data);
        return view('play_main',$data);
  
      }
      elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE ( role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult()){
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
        $fstl=$tempvv->firstname;
        $lstl=$tempvv->lastname;
        $data["firstletter"]=$fstl[0];
        $data["lastletter"]=$lstl[0];
        $presentation_data=$db->query("SELECT usb.*,imp.*,usb.id as usbid FROM $usertb usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id WHERE usb.published_status=1 AND (imp.userid=$usernameID) AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC")->getResultArray();
            //   print_r($presentation_data);die;
            // $data["pre_data"]=$presentation_data2;
              $data["presentation_data"]= $presentation_data;
        $publish_scenario_data=$db->query("SELECT * FROM $scenariotb WHERE publish_status=1 ORDER BY id DESC")->getResultArray();

        $data["published_secnario"]= $publish_scenario_data;
        echo view('layout/header1',$data);
        return view('play_main',$data);
      }
      else{
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
        $fstl=$tempvv->firstname;
        $lstl=$tempvv->lastname;
        $data["firstletter"]=$fstl[0];
        $data["lastletter"]=$lstl[0];

        // for student with setup type=3 By Piyusha
        // $presentation_data=$db->query("SELECT usb.*,imp.* FROM $usertb usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id WHERE usb.published_status=1 AND (imp.userid=$usernameID) AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC")->getResultArray();
        // end

        $presentation_data=$db->query("SELECT usb.*,imp.*,usb.id as usbid FROM $usertb usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id WHERE usb.published_status=1 AND (imp.userid=$usernameID) AND imp.status=0 ORDER BY usb.id DESC")->getResultArray();
        //   print_r($presentation_data);die;
        // $data["pre_data"]=$presentation_data2;
          $data["presentation_data"]= $presentation_data;
        $publish_scenario_data=$db->query("SELECT * FROM $scenariotb WHERE publish_status=1 ORDER BY id DESC")->getResultArray();

        $data["published_secnario"]= $publish_scenario_data;
        echo view('layout/student_header',$data);
        return view('play_main',$data);
      }
         
  
  
      }
  
       
      
        
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
        $dddd=(int)$data_array;
        $data["selected_scen"]=$dddd;
        // var_dump($data_array);die;
        // $crisis_scenrioDb = new Crisis_scenrioDb();
        // $data['published_crisis'] = $crisis_scenrioDb->where('publish_status=1')->orderby('id','DESC')->findAll();
        $indusrtrywhere="";
        $attackwhere="";
        $threatwhere="";
        $searchwhere="";
        $db=\Config\Database::connect();
        $scenarioTb=$db->preFixtable('crisis_scenrio');
        $usertb=$db->prefixTable("single_player_setup"); 
        if($industry_array){
          $indust=implode(", ",$industry_array);
          $indusrtrywhere="AND industry_sector IN (".$indust.")";
      
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
        $searchwhere="AND ( exercise_name LIKE '%{$search_array}%' OR  briefing LIKE  '%{$search_array}%')";
      
      }
      // if($data_array){
      //   $data["selected_scen"]=$data_array;
      // } 
      
      // if($data_array){
      // $presentation_data=$db->query("SELECT usb.*,imp.* FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id WHERE usb.published_status=1 AND  imp.userid=1 AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC")->getResultArray();
        
      // $presentation_data=$db->query("SELECT usb.*,imp.* FROM imr_single_player_setup usb
      // LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id 
      // left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id 
      // WHERE   usb.published_status=1 
      // AND (imp.userid=$dddd) AND imp.status=0 $indusrtrywhere $attackwhere $threatwhere $searchwhere ORDER BY usb.id DESC")->getResultArray(); 

      //  $presentation_data=$db->query("SELECT usb.*,ics.industry_sector,usb.id as singlep_id FROM imr_single_player_setup usb
      
      // left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id 
      // WHERE   usb.published_status=1 AND usb.id IN (SELECT singlep_id FROM imr_player_assignment WHERE userid=1 AND status=0) $indusrtrywhere $attackwhere $threatwhere $searchwhere ORDER BY usb.id DESC")->getResultArray(); 
      //  print_r($dddd);die;

      if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1 AND user_id='. $data_array)->getResult()){


        $presentation_data=$db->query("SELECT  usb.* FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$data_array AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC) $indusrtrywhere $attackwhere $threatwhere $searchwhere")->getResultArray();


      }

      elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE ( role_id=2 or role_id=3) AND user_id='. $data_array)->getResult()){

        $presentation_data=$db->query("SELECT  usb.* FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$data_array AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC) $indusrtrywhere $attackwhere $threatwhere $searchwhere")->getResultArray();

      }
      else{

        $presentation_data=$db->query("SELECT  usb.* FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$data_array AND imp.status=0  ORDER BY usb.id DESC) $indusrtrywhere $attackwhere $threatwhere $searchwhere")->getResultArray();


      }

       
       
        
         //cse.publish_status=1  AND
      // print_r($presentation_data[0]["id"]);die;
      // $data["pre_data"]=$presentation_data2;
        $data["presentation_data"]= $presentation_data;
        // $data["single_ep"]=$db->query("SELECT  * FROM  imr_player_assignment WHERE  userid=1 and singlep_id=14")->getResultArray();
      // }
        
        // $sdata=$db->query("SELECT * FROM $scenarioTb WHERE publish_status=1 $indusrtrywhere $attackwhere $threatwhere $searchwhere")->getResultArray();
        // $data['published_crisis'] =$sdata;
      // var_dump($sdata);die;
      //   if($dill_array){
      //     $count=0;
      //     // print_r($data['published_crisis']['id']);die;
      //     foreach($data['published_crisis'] as $published){
      //      $db=\Config\Database::connect();
      //      $tbname=$db->prefixTable("scenario_role_cate");
      //      $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $published['id']."")->getRow();
      //      if($max_role->max_role_no>1) {continue;}else{ $count=$count+1;}
      //   }
      //   $data['count']=$count;
        
      // }
      
      
        $companyDb = new Industory_sectorDb();
        $data['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();
      
      
        
        $attack_vectorDb = new Attack_vectorDb();
        $data['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
        $threat_actorDb = new Threat_actorDb();
        $data['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();
        $json["filterddata"]=view("filterplay_main",$data);
        $json["success"]=true;
        echo json_encode($json);
      }

      //abhishek

      
}

