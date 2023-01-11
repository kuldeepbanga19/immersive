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

class Set_up_scenario extends BaseController
{

    public function __construct()
    {
     $session = session();
      if(!$session->has('us')){
               return redirect()->to('login');	
        }
   }
  
  
  public function set_up()
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
  
      // var_dump( $usernameID);die;
      
      if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1 AND user_id='. $usernameID)->getResult()){
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
              $fstl=$tempvv->firstname;
              $lstl=$tempvv->lastname;
              $data["firstletter"]=$fstl[0];
              $data["lastletter"]=$lstl[0];
  
        echo view('layout/set_up_header',$data);
        return view('set_up_scenario');
  
      }
      elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE ( role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult()){
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
        $fstl=$tempvv->firstname;
        $lstl=$tempvv->lastname;
        $data["firstletter"]=$fstl[0];
        $data["lastletter"]=$lstl[0];
        
        echo view('layout/set_up_header',$data);
        return view('set_up_scenario');
      }
      else{
        $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
        $fstl=$tempvv->firstname;
        $lstl=$tempvv->lastname;
        $data["firstletter"]=$fstl[0];
        $data["lastletter"]=$lstl[0];
        
        echo view('layout/header1',$data);
        return view('crisis_sim2');
      }
         
  
  
      }
  
       
      
        
      }  
}

