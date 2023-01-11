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
use App\Models\Scenario_performanceDb;

class Scenario_performance extends BaseController
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

// view scenario feedback
  public function scenario_performance($id=0)
  {	
    $session = session();
    $db=\Config\Database::connect();
    $pmtb=$db->preFixtable('performance_indicator');
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
     
    $userModel = new Crisis_scenrioDb();   
    helper(['form', 'url','gettime']);
    $crisis_scenrioDb = new Crisis_scenrioDb();
    $data['Crisis'] = $crisis_scenrioDb->findAll();
    $data['pmfindicators']=$db->query("SELECT * FROM $pmtb WHERE crisis_scenario_id=$id")->getResultArray();
    
  $feedback_performanceDb = new Feedback_performanceDb();
	$data['feedback'] = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  if($data['feedback']==""){
    $data['feedback1'] = $feedback_performanceDb->orderBy('LTRIM(id)')->findAll();
  }
  else{
    $data['feedback1'] = $feedback_performanceDb->where('crisis_scenario_id',$id)->first();
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
      return view('scenario_performance',$data);
  
  

}
   
  
    
  }
   // end
  // add or update scenario feedback
  public function updatePerformance($id){
    

   
    $scenario_id = $this->request->getVar("id");
    
    $perform_title=$this->request->getVar("perform_title");
        
    $perform_unit=$this->request->getVar("unit");    
    $perform_custom_unit=$this->request->getVar("custom_unit");    
    $starting_value=$this->request->getVar("starting_value");
    
    $performance_type=$this->request->getVar("per");
    $time = new Time('now');
    $session = session();
    $username =$session->get('username');
    $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];
     
     helper(['form', 'url']);
    
     $performanceDb=new Feedback_performanceDb();
    
     $scenario_performanceDb=new Scenario_performanceDb();
     $data34 = ['crisis_scenario_id'=>$scenario_id,'created' =>strtotime($time),'created_by'=>$usernameID,'performance_title'=>$perform_title,'unit'=>$perform_unit,'custom_unit'=>$perform_custom_unit,'starting_value'=>$starting_value];
     $data345 = ['crisis_scenario_id'=>$scenario_id];
    
     $feedback_performance =  $scenario_performanceDb->where($data345)->first();  
     
     
     if(!$feedback_performance){
     $query= $scenario_performanceDb->insert($data34);
      $json=array();
      $json['success']=true;
      // $json['id']=$query->connID->insert_id;
     echo json_encode($json);
    
    }
    else{
          
      $bid=$feedback_performance['id'];
      // print_r($bid);die;
      $db = \Config\Database::connect();
      $builder = $db->table('imr_performance_indicator');
      $builder->update(['modified' =>strtotime($time),'modified_by'=>$usernameID,'performance_title'=>$perform_title,'unit'=>$perform_unit,'custom_unit'=>$perform_custom_unit,'starting_value'=>$starting_value] , ['id' => $bid]);
      $json=array();
      $json['success']=true;
     echo json_encode($json);
      }

    //   $performance =  $performanceDb->where($data345)->first();    
    //   if(!$performance){
    //   $query= $performanceDb->insert($data34);
    //    $json=array();
    //    $json['success']=true;
    //    // $json['id']=$query->connID->insert_id;
    //   echo json_encode($json);
     
    //  }
    //  else{
           
    //    $bid=$performance['id'];
    //    // print_r($bid);die;
    //    $db = \Config\Database::connect();
    //    $builder = $db->table('imr_feedback_performance');
    //    $builder->update(['modified' =>strtotime($time),'modified_by'=>$usernameID,'performance_indicator'=>$performance_type] , ['id' => $bid]);
    //    $json=array();
    //    $json['success']=true;
    //   echo json_encode($json);
    //    }
     

    }
    public function updatepermfindicators($sid){
 
      $json=array();
      $db=\Config\Database::connect();
      $session = session();
      $uid=$session->get('userid');
      $pmtb=$db->preFixtable('performance_indicator');
      $allpmf=$db->query("SELECT * FROM $pmtb WHERE crisis_scenario_id=$sid")->getResultArray();
      $performance_type=$this->request->getVar("per");
      $data=array();
      foreach($allpmf as $pmf){
           
           $data=[];
    
           $data['performance_title']=$this->request->getVar("perform_title".$pmf['id']);
           $data['modified_by']=$uid;
           $data['unit']=$this->request->getVar("unit".$pmf['id']);    
           $data['custom_unit']=$this->request->getVar("custom_unit".$pmf['id']);    
           $data['starting_value']=$this->request->getVar("starting_value".$pmf['id']);
           $data['modified'] = new Time('now');
           $db->table('performance_indicator')->where('id',$pmf['id'])->update($data);

      }

      $json['success']=true;
     echo json_encode($json);
    }
    public function addindicator($sid){
      $json=array();
      
      $db=\Config\Database::connect();
      $session=session();
      $uid=$session->get('userid');
      $datav=[
        'created'=>strtotime('now'),
        'created_by'=>$uid,
        'crisis_scenario_id'=>$sid,


      ];
      $builder=$db->table('performance_indicator')->insert($datav);
      $pmid=$db->insertID();
      $pmtb=$db->preFixtable('performance_indicator');
      $allpmf=$db->query("SELECT * FROM $pmtb WHERE crisis_scenario_id=$sid")->getResult();
      $totalpmf=count($allpmf);
      $json["success"]=true;

      $data=[];
      $phtml='<div class="d-flex justify-content-between delete-text-div">
                     <p><b>Performance Indicator '.$totalpmf.'</b></p>
                     <p><b><a href="#" class="text-decoration-none text-danger me-2 delete-Performance">Delete Performance Indicator</a></b><i class="fa fa-chevron-up up" aria-hidden="true"></i></p>
                  </div>
               <div class="form pt-3 popup-second2">
                  
             

                  
               
                     <div class="mb-4">
                       <label for="fname"><b>Performance Indicator Title:</b></label><br>
                       <input type="text" id="fname" name="perform_title'.$pmid.'" value="Performance Indicator '.$totalpmf.'" class="w-100">
                     </div>
                     <div class="mb-4">
                       <label for="lname"><b>Unit:</b></label><br>
                       <select name="unit'.$pmid.'" id="cars" class="w-100">
                         <option value="3">Custom</option>
                         <option value="1">$</option>
                         <option value="2">%</option>
                         
                       </select>
                     </div>
                     <div class="mb-4">
                       <label for="fname"><b>Enter Custom Unit:</b></label><br>
                       <input type="text" id="fname" name="custom_unit'.$pmid.'" class="w-100">
                     </div>
                     <div class="mb-4">
                       <label for="fname"><b>Starting Value:</b></label><br>
                         <input type="number" id="quantity" name="starting_value'.$pmid.'" min="1" max="5000000">
                     </div>
                     <div class="add_another">
                     <button class="add-performance mb-4" type="button" id="addanotherp" onclick="myfun()"><span>Add another performance indicator</span></button>

                     <div class="d-flex justify-content-end">
                    <input type="submit" value="Back: Analysis" class="d-block back-analysis me-2 submit-btn"  onclick="save_back()">
                    <button type="button" id="btnSave" onclick="save()" class="d-block ms-auto submit-btn">Epilogue</button>
                     </div>
                    </div>
                  
               </div>

               ';
      $json["html2"]=$phtml;
      echo json_encode($json);
    }


    // end
}

