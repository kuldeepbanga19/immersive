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


class scenario_analysis extends BaseController
{
 
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
     $this->userid=$session->get("userid");  
 }

// view scenario analysis
  public function scenario_analysis($id=0)
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

 
  $feedback_performanceDb = new Feedback_performanceDb();
	$data['analysis'] = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  if($data['analysis']==""){
    $data['analysis1'] = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  }
  else{
    $data['analysis1'] = $feedback_performanceDb->where('crisis_scenario_id',$id)->first();
  }

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
      return view('scenario_analysis',$data);
  
  

}
   // end
  // add or update scenario analysis
    
  }

  public function updateAnalysis($id){
    

   
    $scenario_id = $this->request->getVar("id");
    $confidence_type =$this->request->getVar("confidence_type");
    $justification_type =$this->request->getVar("justification_type");


    $time = new Time('now');
    $session = session();
    $username =$session->get('username');
    $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        if($userData){
          $usernameID = $userData['id'];
        }
        else{
          $usernameID ="";
        }
        
     
     helper(['form', 'url']);
    
    
    
     $feedback_performanceDb=new Feedback_performanceDb();
     $data34 = ['crisis_scenario_id'=>$scenario_id,'created' =>strtotime($time),'created_by'=>$usernameID,'confidence_response'=>$confidence_type,'justification_response'=>$justification_type];
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
          
      $bid=$feedback_performance['id'];
      // print_r($bid);die;
      $db = \Config\Database::connect();
      $builder = $db->table('imr_feedback_performance');
      $builder->update(['modified' =>strtotime($time),'modified_by'=>$usernameID,'confidence_response'=>$confidence_type,'justification_response'=>$justification_type] , ['id' => $bid]);
      $json=array();
      $json['success']=true;
     echo json_encode($json);
      }
    }
}

