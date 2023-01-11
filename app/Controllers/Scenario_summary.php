<?php namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\SessionModel;
use App\Models\Scenario_epilogueDb;
use App\Models\Crisis_scenrioDb;
use App\Models\Scenario_role_cateDb;
use App\Models\injectDb;
use App\Models\Feedback_performanceDb;
use App\Models\Scenario_performanceDb;


class Scenario_summary extends BaseController
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
  public function scenario_summary($id=0)
  {	
    $session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
  $db = \Config\Database::connect();
  //roles
  $sessionVar=session(); 
  $usid=$sessionVar->get("userid");
  $Andwhere="";
  if($usid){
    // $Andwhere="AND t1.created_by=$usid";
  }
  $tablenm=$db->prefixTable("scenario_role_cate");
  $tablenm2=$db->prefixTable("inject_data");
  $tablenm3=$db->prefixTable("injects");
  $roledatav=$db->query("SELECT t1.* FROM $tablenm t1 WHERE t1.crisis_scenario_id=$id AND t1.status=1 $Andwhere" )->getResultArray();

  // $inject_datav=$db->query("SELECT t2.* FROM $tablenm2 t2 LEFT JOIN $tablenm3 t3 ON t2.inject_id=t3.id WHERE t3.scenario_id=$id")->getResultArray();
  // print_r($roledatav);die;
  $data["roles_datavals"]=$roledatav;
  
  $temparray=array();
  foreach ($roledatav as $rkey => $rvalue) {
    $rolev=$rvalue["id"];
    $data_temp=$db->query("SELECT t2.* FROM $tablenm2 t2 LEFT JOIN $tablenm3 t3 ON t2.inject_id=t3.id WHERE t3.scenario_id=$id AND t2.role=$rolev")->getResultArray();
    
    $temparray[$rvalue["id"]]=$data_temp;
    # code...
  }

  $data["inject_datavals"]=$temparray;
  // print_r($data["roles_datavals"]);die;

// summary overview attack vector
  $attackData=$db->query("SELECT id,attack_name FROM imr_attack_vector")->getResult();
  $attackdata_array=array();
  foreach($attackData as $attackVal){
    $attackdata_array[$attackVal->id]=$attackVal->attack_name;
  }
  $data['attackvalues']=$attackdata_array;
// end
// summary overview industry sector
  $industryData=$db->query("SELECT id,industory_name FROM imr_industry_sector")->getResult();
  $industrydata_array=array();
  foreach($industryData as $industryVal){
    $industrydata_array[$industryVal->id]=$industryVal->industory_name;
  }
  $data['industryvalues']=$industrydata_array;
// end
// summary overview threat name
  $threatData=$db->query("SELECT id,threat_name FROM imr_threat_actor")->getResult();
  $threatdata_array=array();
  foreach($threatData as $threatVal){
    $threatdata_array[$threatVal->id]=$threatVal->threat_name;
  }
  $data['threatvalues']=$threatdata_array;

// end
// summary role category
  $rolecateData=$db->query("SELECT crisis_scenario_id,job_title,responsiblity FROM imr_scenario_role_cate")->getResult();
  $rolecateData_array=array();
  $rolecateData_array2=array();
  foreach($rolecateData as $rolecateVal){
    $rolecateData_array[$rolecateVal->crisis_scenario_id]=$rolecateVal->job_title;
    $rolecateData_array2[$rolecateVal->crisis_scenario_id]=$rolecateVal->responsiblity;
  }
  $data['role_cate_values']=$rolecateData_array;
  // print_r($rolecateData_array);die;
  $data['role_cate_values2']=$rolecateData_array2;


  $roleData=$db->query("SELECT id,scenario_role_name FROM imr_scenario_role")->getResult();
  $roledata_array=array();
  foreach($roleData as $roleVal){
    $roledata_array[$roleVal->id]=$roleVal->scenario_role_name;
  }
  $data['rolevalues']=$roledata_array;
  
  $scenario_role_cateModel = new Scenario_role_cateDb();
  $data['scenario_role_cate'] = $scenario_role_cateModel->where('crisis_scenario_id', $id)->first();
  // end

  $feed_proformData=$db->query("SELECT crisis_scenario_id,feedback_type,rank_option,confidence_response,justification_response,performance_indicator FROM imr_feedback_performance")->getResult();
 $feed_prodata_array=array();
 $feed_prodata_array1=array();
 foreach($feed_proformData as $feed_proformVal){
  $feed_prodata_array[$feed_proformVal->crisis_scenario_id]=$feed_proformVal->feedback_type;
  $feed_prodata_array1[$feed_proformVal->crisis_scenario_id]=$feed_proformVal->rank_option;
  $feed_prodata_array2[$feed_proformVal->crisis_scenario_id]=$feed_proformVal->confidence_response;
  $feed_prodata_array3[$feed_proformVal->crisis_scenario_id]=$feed_proformVal->justification_response;
  $feed_prodata_array4[$feed_proformVal->crisis_scenario_id]=$feed_proformVal->performance_indicator;
 }
 $data['feed_proform']=$feed_prodata_array;
 $data['feed_proform1']=$feed_prodata_array1;
 $data['feed_proform2']=$feed_prodata_array2;
 $data['feed_proform3']=$feed_prodata_array3;
 $data['feed_proform4']=$feed_prodata_array4;

//  print_r($feed_prodata_array);die;
  
  $rolecateData_array=array();
  $rolecateData_array2=array();

  foreach($rolecateData as $rolecateVal){
    $rolecateData_array[$rolecateVal->crisis_scenario_id]=$rolecateVal->job_title;
    $rolecateData_array2[$rolecateVal->crisis_scenario_id]=$rolecateVal->responsiblity;
  }
  $data['role_cate_values']=$rolecateData_array;
  $data['role_cate_values2']=$rolecateData_array2;
 
// summary epilogue value
  $scenario_epilogueDb = new Scenario_epilogueDb();
	$data['epilogue'] = $scenario_epilogueDb->orderBy('LTRIM(id)')->findAll();
    $data['epilogue1'] = $scenario_epilogueDb->where('crisis_scenario_id',$id)->first();
    // end



    $performData=$db->query("SELECT crisis_scenario_id,performance_title,unit,custom_unit,starting_value FROM imr_performance_indicator")->getResult();
    $performData_array=array();
    $performData_array2=array();
    foreach($performData as $performVal){
      $performData_array[$performVal->crisis_scenario_id]=$performVal->performance_title;
      $performData_array2[$performVal->crisis_scenario_id]=$performVal->unit;
      $performData_array3[$performVal->crisis_scenario_id]=$performVal->custom_unit; 
      $performData_array4[$performVal->crisis_scenario_id]=$performVal->starting_value; 
    }
    $data['performData_values']=$performData_array;
    $data['performData_values2']=$performData_array2;
    $data['performData_values3']=$performData_array3;
    $data['performData_values4']=$performData_array4;
    $userModel = new Crisis_scenrioDb();   
    helper(['form', 'url','gettime']);
    $crisis_scenrioDb = new Crisis_scenrioDb();
  $data['user_obj1'] = $crisis_scenrioDb->where('id',$id)->first();
  $data['user_obj'] = $userModel->where('id', $id)->first();
  if($data['user_obj']['modified']){
    $data['time']=$data['user_obj']['modified'];
  }
  else{
    $data['time']=$data['user_obj']['created'];
  }
  
  $scenario_performance = new Scenario_performanceDb();
  $data['scenario_performance'] = $scenario_performance->where('crisis_scenario_id', $id)->findAll();
// print_r($data['scenario_performance']);die;

    $injectMd=new injectDb();
    $injects=$injectMd->getAllinjects($id,$this->userid);
    $data["scenar_injects"]=$injects;
      echo view('layout/side-bar',$data);
      return view('scenario_summary');
  
  

}
  
    
  }
   // end



   
  public function updateSummary($id){
    

   
   
    $overview_title = $this->request->getVar("overview_title");
    $overview_breifing = $this->request->getVar("overview_briefing");
    $overview_industry =$this->request->getVar("overview_industry");
    $overview_attack_vector =$this->request->getVar("overview_attack_vector");
    $overview_industry =$this->request->getVar("overview_industry");


     
     helper(['form', 'url']);

     if (! $this->validate(['overview_title'=>'required','overview_briefing'=>'required','overview_industry'=>'required','overview_attack_vector'=>'required','overview_threat_actor'=>'required','epilogue_value'=>'required',],
        	['overview_briefing'=>['required'=>"Briefing can't be blank"],
          'overview_industry'=>['required'=>' At least one Industry Sector must be selected'],
          'overview_attack_vector'=>['required'=>'At least one Attack Vector must be selected'],
          'overview_threat_actor'=>['required'=>'At least one Threat Actor must be selected'],
          'epilogue_value'=>['required'=>"Epilogue can't be blank"]

        	]))
        {
            
            $json=array();
            $validation =  \Config\Services::validation();
   			$json['msg'] = $validation->listErrors();
			$json['success']=false;
			echo json_encode($json);
			return;
        }
        else{

          
      $db      = \Config\Database::connect();
      $builder = $db->table('crisis_scenrio');
      
              $data =['publish_status'=>1];
              $builder->where('id', $id);
              $builder->update($data);
          
          $json=array();
          $json['success']=true;
       echo json_encode($json);
        }
    
    }

    

 }
