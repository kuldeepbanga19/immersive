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

class published_exercise extends BaseController
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
    
public function published_exercise($spid)
{	

$session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
    
  helper(['form', 'url']);
  $db=\Config\Database::connect();
      $usertb=$db->prefixTable("single_player_setup");
      $data=array();

 
      $presentation_data=$db->query("SELECT * FROM $usertb WHERE id=$spid AND published_status=1")->getResultArray();
    //   print_r($users_data);die;
      $data["sp_id"]=$spid;
      $data["presentation_data"]= $presentation_data;



      $Crisis_scenario_id=$db->query("SELECT * FROM imr_single_player_setup WHERE id=$spid AND published_status=1 ")->getFirstRow();


      $data['crisis_scenriorole']=$Crisis_scenario_id->crisis_scenario_id;

      $crisis_scenario_id=$data['crisis_scenriorole'];

      // print_r($itt);die;
      $crisis_scenrioData=$db->query("SELECT id,scenrio_title,briefing FROM imr_crisis_scenrio")->getResult();
      $crisis_scenriodata_array=array();
      foreach($crisis_scenrioData as $crisis_scenrioVal){
        $crisis_scenriodata_array[$crisis_scenrioVal->id]=$crisis_scenrioVal->scenrio_title;
        $crisis_scenriodata_array2[$crisis_scenrioVal->id]=$crisis_scenrioVal->briefing;
      }
      $data['crisis_scenriovalues']=$crisis_scenriodata_array;
      $data['crisis_scenriovalues2']=$crisis_scenriodata_array2;
      // echo view('layout/set_up_header2');
     
  // print_r($data);die;
  $Andwhere="";
  $tablenm=$db->prefixTable("scenario_role_cate");
  $roledatav=$db->query("SELECT t1.* FROM $tablenm t1 WHERE t1.crisis_scenario_id=$crisis_scenario_id AND t1.status=1 $Andwhere" )->getResultArray();

  $data["roles_datavals"]=$roledatav;
  $roleData=$db->query("SELECT id,scenario_role_name FROM imr_scenario_role")->getResult();
  $roledata_array=array();
  foreach($roleData as $roleVal){
    $roledata_array[$roleVal->id]=$roleVal->scenario_role_name;
  }
  $data['rolevalues']=$roledata_array;
// print_r($roledatav);die;
  $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];
        
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



          $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
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

 

  
}

    

   
}

