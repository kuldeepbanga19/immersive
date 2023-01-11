<?php namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\SessionModel;
use App\Models\RoleDb;
use App\Models\Industory_sectorDb;
use App\Models\Attack_vectorDb;
use App\Models\Threat_actorDb;


use App\Models\User_RoleDb;

class Crisis_Sim extends BaseController
{
 
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
 }


public function crisis()
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

      echo view('layout/header0',$data);
      return view('crisis_sim');

    }
    elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE ( role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult()){
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
      $fstl=$tempvv->firstname;
      $lstl=$tempvv->lastname;
      $data["firstletter"]=$fstl[0];
      $data["lastletter"]=$lstl[0];
      
      echo view('layout/header1',$data);
      return view('crisis_sim');
    }
    else{
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
      $fstl=$tempvv->firstname;
      $lstl=$tempvv->lastname;
      $data["firstletter"]=$fstl[0];
      $data["lastletter"]=$lstl[0];
      
      echo view('layout/student_header',$data);
      return view('crisis_sim2');
    }
       


    }

     
	
	  
	}  

    
public function scenario()
{	

$session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
    
   
    echo view('layout/header2');
    return view('scenario');


}

 

  
}
}

