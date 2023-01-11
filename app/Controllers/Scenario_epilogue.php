<?php namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\SessionModel;
use App\Models\Scenario_epilogueDb;
use App\Models\Crisis_scenrioDb;
use App\Models\injectDb;
use App\Models\Feedback_performanceDb;


class scenario_epilogue extends BaseController
{
 protected $userid;
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
    
  $this->userid=$session->get("userid");
 }

// view scenario ranking
  public function scenario_epilogue($id=0)
  {	
    $session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
     
    $userModel = new Crisis_scenrioDb();   
    helper(['form', 'url','gettime']);
    $crisis_scenrioDb = new Crisis_scenrioDb();
    $data['Crisis'] = $crisis_scenrioDb->findAll();

 
  $scenario_epilogueDb = new Scenario_epilogueDb();
	$data['epilogue'] = $scenario_epilogueDb->orderBy('LTRIM(id)')->findAll();
    $data['epilogue1'] = $scenario_epilogueDb->where('crisis_scenario_id',$id)->first();
    // print_r($data['epilogue1']);die;

  $data['user_obj1'] = $crisis_scenrioDb->where('id',$id)->first();
  $data['user_obj'] = $userModel->where('id', $id)->first();
  if($data['user_obj']['modified']){
    $data['time']=$data['user_obj']['modified'];
  }
  else{
    $data['time']=$data['user_obj']['created'];
  } 
    $injectMd=new injectDb();
    $injects=$injectMd->getAllinjects($id,$this->userid);
    $data["scenar_injects"]=$injects;
      echo view('layout/side-bar',$data);
      return view('scenario_epilogue',$data);
  
  

}
  
    
  }
   // end
  // add or update scenario Epilogue

  public function updateEpilogue($id){
    

   
    $scenario_id = $this->request->getVar("id");
    $epilogue =$this->request->getVar("epilogue");
    
    $time = new Time('now');
    $session = session();
    $username =$session->get('username');
    $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];
     
     helper(['form', 'url']);
    
    
    
     $feedback_performanceDb=new Scenario_epilogueDb();
     $data34 = ['crisis_scenario_id'=>$scenario_id,'created' =>strtotime($time),'created_by'=>$usernameID,'epilogue_value'=>$epilogue,'brief_status'=>1];
     $data345 = ['crisis_scenario_id'=>$scenario_id];
    
     $feedback_performance =  $feedback_performanceDb->where($data345)->first();    
     if(!$feedback_performance){
     $query= $feedback_performanceDb->insert($data34);
      $json=array();
      $json['success']=true;
      // $json['id']=$query->connID->insert_id;
     echo json_encode($json);
    
    }
    else{
      $crisis_scenrioDb = new Crisis_scenrioDb();   
      $crisis_scenrio = $crisis_scenrioDb->where('id',$scenario_id)->first();

      $brief=$crisis_scenrio['briefing'];
// print_r($pic);die;


      $bid=$feedback_performance['id'];
      // print_r($bid);die;
      $db = \Config\Database::connect();
      $builder = $db->table('imr_scenario_epilogue');

if($brief==$epilogue){

  $builder->update(['epilogue_value'=>$epilogue] , ['id' => $bid]);
}
else{
  $builder->update(['modified' =>strtotime($time),'modified_by'=>$usernameID,'epilogue_value'=>$epilogue,'brief_status'=>1] , ['id' => $bid]);
}
      
     
      $json=array();
      $json['success']=true;
     echo json_encode($json);
      }
    }

    
    //end
}

