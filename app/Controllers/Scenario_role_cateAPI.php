<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

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


class Scenario_role_cateAPI extends BaseController
{
//   protected $sessionVar;
//   protected $injectMd;

//  public function __construct()
//   {
//    $session = session();
//     if(!$session->has('us')){
//         	 return redirect()->to('login');	
//       }
//       $this->injectMd=new injectDb();
//       $this->sessionVar=session();
//  }

     use ResponseTrait;
// view scenario role category
  public function scenario_role_cate_get($id = null)
  {	
//     $session = session();
// if(!$session->has('us')){
//          return redirect()->to('login');	
//   }

// else{ 
     
//   $userid=$this->sessionVar->get("userid");
//     $userModel = new Crisis_scenrioDb();  
//     helper(['form', 'url','gettime']);
//     $crisis_scenrioDb = new Crisis_scenrioDb();
//     $data['Crisis'] = $crisis_scenrioDb->findAll();

    
	// $scenario_roleDb = new Scenario_roleDb();
	// $data['Scenario_role'] = $scenario_roleDb->orderBy('LTRIM(scenario_role_name)')->findAll();
  
  $scenario_role_cateDb = new Scenario_role_cateDb();
	$data['scenario_role_cate'] = $scenario_role_cateDb->where('crisis_scenario_id',$id)->orderBy('LTRIM(id)')->findAll();
  
  

//   $data['user_obj1'] = $crisis_scenrioDb->where('id',$id)->first();
   // $db = \Config\Database::connect();
   //                       $supplist = $db->prefixTable('scenario_role_cate'); 
   //                       $query = $db->query('SELECT GROUP_CONCAT(scenario_role_id) FROM '.$supplist.'  WHERE crisis_scenario_id='. $data['user_obj1']['id'].'')->getRow();
   //                      foreach ($query as $key => $queryVal) {
   //                              $arr =   explode(",", $queryVal) ;
                                
   //                              }
   //                              print_r($query);die;
//   $data['user_obj'] = $userModel->where('id', $id)->first();
//   if($data['user_obj']['modified']){
    
//     $data['time']=$data['user_obj']['modified'];
    
//   }
//   else{
    
//     $data['time']=$data['user_obj']['created'];
    
//   }
// // echo "DAYS=".$data['days']." hours=".$data['hours']." minutes=".$data['minutes']." seconds=".$data['seconds'];die;
// // echo "hello";die;
//   $data["rolecount"]=$this->getlastoption($id);
//   $data90["role_category"] = $scenario_role_cateDb->where('crisis_scenario_id',$id)->orderBy('LTRIM(id)')->findAll();
// // print_r($data90);die;
//   $injects=$this->injectMd->getAllinjects($id,$userid);
//   $data["scenar_injects"]=$injects;
//       echo view('layout/side-bar',$data);
//       return view('scenario_role_cate',$data);
  
  

  
   

// }
      // end
  // add or update scenario role category
  
    if($data){
        return $this->respond($data);
    } else{
        return $this->failNotFound('No Data Found with id '.$id);
    }


  }


  public function scenario_role_get_all()
  {
      $scenario_roleDb = new Scenario_roleDb();
	$data['Scenario_role'] = $scenario_roleDb->orderBy('LTRIM(scenario_role_name)')->findAll();

    if($data){
        return $this->respond($data);
    } else{
        return $this->failNotFound('No Data Found with id '.$id);
    }


  }

  public function scenario_feedback($id = null)
  {
    $feedback_performanceDb = new Feedback_performanceDb();
	$d = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  if($d==""){
    $data['feedback1'] = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  }
  else{
    $data['feedback1'] = $feedback_performanceDb->where('crisis_scenario_id',$id)->first();
  }

  if($data){
    return $this->respond($data);
    } else{
    return $this->failNotFound('No Data Found with id '.$id);
    }
  
  }


  public function scenario_ranking($id=null)
  {
    $feedback_performanceDb = new Feedback_performanceDb();
	$da = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  if($da==""){
    $data['ranking1'] = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  }
  else{
    $data['ranking1'] = $feedback_performanceDb->where('crisis_scenario_id',$id)->first();
  }

  if($data){
    return $this->respond($data);
    } else{
    return $this->failNotFound('No Data Found with id '.$id);
    }


  }



  public function scenario_analysis($id=null)
  {
    $feedback_performanceDb = new Feedback_performanceDb();
	$dat = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  if($dat==""){
    $data['analysis1'] = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  }
  else{
    $data['analysis1'] = $feedback_performanceDb->where('crisis_scenario_id',$id)->first();
  }

  if($data){
    return $this->respond($data);
    } else{
    return $this->failNotFound('No Data Found with id '.$id);
    }


  }













  //code below you see have no use but don't touch it 


  public function getlastoption($id){
		$db=\Config\Database::connect();
		$tbname=$db->prefixTable("scenario_role_cate");
		$max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=$id")->getRow();
		return $max_role->max_role_no;
    // print_r($max_role);die;

	}
  
  public function updateRole($id){
    
    
    $scenario_role = $this->request->getVar("scenario_role");
    $scenario_id = $this->request->getVar("id");
    $avataar = $this->request->getVar("img1");
    $responsibility = $this->request->getVar("response");
    $job = $this->request->getVar("briefing");
    // print_r($briefing);die;
    $time = new Time('now');
    $session = session();
    $username =$session->get('username');
    $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];
     
     helper(['form', 'url']);
    
    
    
     $scenario_role_cateDb=new Scenario_role_cateDb();
     $data34 = ['crisis_scenario_id'=>$scenario_id,'status'=>1,'created' =>strtotime($time),'created_by'=>$usernameID,'scenario_role_id'=>$scenario_role,'avatar_id'=>$avataar,'responsiblity'=>$responsibility,'job_title'=>$job];
     $data345 = ['crisis_scenario_id'=>$scenario_id,'status'=>1,'job_title'=>$job];
    
     $scenario_role_cate =  $scenario_role_cateDb->where($data345)->first();    
     if(!$scenario_role_cate){
     $query= $scenario_role_cateDb->insert($data34);
      $json=array();
      $json['success']=true;
      // $json['id']=$query->connID->insert_id;
     echo json_encode($json);
    
    }
    else{
          
      $bid=$scenario_role_cate['id'];
      // print_r($bid);die;
      $db = \Config\Database::connect();
      $builder = $db->table('imr_scenario_role_cate');
      $builder->update(['scenario_role_id'=>$scenario_role,'avatar_id'=>$avataar,'responsiblity'=>$responsibility,'job_title'=>$job,'modified' =>strtotime($time),'modified_by'=>$usernameID,] , ['id' => $bid]);
      $json=array();
      $json['success']=true;
      echo json_encode($json);
      }
     
  }
    public function updateRoles($sid){
      $db=\Config\Database::connect();
      $session = session();
      $usernameID=$session->get("userid");
      $rolcatetable=$db->prefixTable("scenario_role_cate");
     
      $sroles=$db->query("SELECT * FROM $rolcatetable WHERE crisis_scenario_id=$sid")->getResult();
      foreach ($sroles as $skey => $svalue) {
           $sn=$svalue->id;
           $scenario_role = $this->request->getVar("scenario_role".$sn);
           $avataar = $this->request->getVar("img1".$sn);
           $responsibility = $this->request->getVar("response".$sn);
           $job = $this->request->getVar("briefing".$sn);
           $datav=[
            
            'modified'=>strtotime('now'),
            'modified_by'=>$usernameID,
            'scenario_role_id'=>$scenario_role,
            'avatar_id'=>$avataar,
            'responsiblity'=>$responsibility,
            'job_title'=>$job
          ];
           $db->table('scenario_role_cate')->where('id', $sn)->update($datav);
        
      }
      $json=array();
      $json['success']=true;
      echo json_encode($json);
    }

    public function addRole($id){
    
    
    $scenario_role = $this->request->getVar("scenario_role");
    $scenario_id = $this->request->getVar("id");
    $avataar = $this->request->getVar("img1");
    $responsibility = $this->request->getVar("response");
    $job = $this->request->getVar("briefing");
    
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
    
    
    
     $scenario_role_cateDb=new Scenario_role_cateDb();
     $data34 = ['crisis_scenario_id'=>$scenario_id,'status'=>1,'created' =>strtotime($time),'created_by'=>$usernameID,'scenario_role_id'=>$scenario_role,'avatar_id'=>$avataar,'responsiblity'=>$responsibility,'job_title'=>$job];
     
    
     
     
     $query= $scenario_role_cateDb->insert($data34);

      $json=array();
      $json['success']=true;
      $json['insertid']=$scenario_role_cateDb->getInsertID();

     echo json_encode($json);
    
    
  
          
  
     
  }

  // end
  //code above you see have no use but don't touch it 
}

