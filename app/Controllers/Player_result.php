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


class Player_result extends BaseController
{
 
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
 }

// view scenario ranking
  public function player_result($spid=0)
  {	
    // print_r($spid);die;
    $session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
    $session = session();//abhishek
    $username =$session->get('username');
    $SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    $usernameID = $userData['id'];
    // print_r($usernameID);die;
    helper(['form', 'url']);
    $db=\Config\Database::connect();
        $setuptb=$db->prefixTable("result");
        $setuptb2=$db->prefixTable("single_player_setup");
        $crisis=$db->prefixTable("scenario_role_cate");
        $injects=$db->prefixTable("injects");
        $feedback_performance=$db->prefixTable("feedback_performance");
        $data=array();
  $setup_data= $db->query("SELECT * FROM $setuptb WHERE player_setup_id=$spid AND user_id=$usernameID")->getFirstRow();
  $setup_data2= $db->query("SELECT * FROM $setuptb2 WHERE id=$spid")->getFirstRow();
//    print_r($setup_data2);die;
$data['player_setup_id']=$setup_data->player_setup_id;
// print_r($data['player_setup_id']);die;
$data['start_date']=$setup_data->start_date;
$data['end_date']=$setup_data->end_date;
$data['exercise_name']=$setup_data2->exercise_name;
$scenario_id=$setup_data2->crisis_scenario_id;
$setup_data3= count($db->query("SELECT * FROM $crisis WHERE crisis_scenario_id=$scenario_id")->getResultArray());
$setup_data4= count($db->query("SELECT * FROM $injects WHERE scenario_id=$scenario_id")->getResultArray());
// print_r($setup_data4);die;
$data['scenario_role']=$setup_data3;
$data['injects_count']=$setup_data4;
$injectMd=new injectDb();
$injects23=$injectMd->getAllinjects($scenario_id,$usernameID);
$fit=$db->query("SELECT * FROM $injects WHERE scenario_id=$scenario_id")->getResultArray();
$data["scenar_injects"]=$injects23;


$response= $db->query("SELECT * FROM $feedback_performance WHERE crisis_scenario_id=$scenario_id")->getFirstRow();
$data["response"]=$response;



$performanceindicatorTb=$db->preFixtable("performance_indicator");
$performance_indicators=$db->query("SELECT * FROM $performanceindicatorTb WHERE crisis_scenario_id=$scenario_id")->getResultArray();
$data["performance_indicators"]=$performance_indicators;
// print_r($data["performance_indicators"]);die;

$json=array();
$record = $db->query("SELECT id as count, confidence_response as s, DAYNAME(start_date) as day FROM imr_result WHERE status=1 AND player_setup_id=$spid AND user_id=$usernameID")->getResult();
// print_r($record);die();
$products = [];
foreach($record as $row) {
    $products[] = array(
        'day'   => $row->day,
        'sell' => floatval($row->s)
    );
}
// print_r($products);die();
$data['products'] = ($products); 
$graph = $db->query("SELECT ind.pvalue,ind.pindicatorid  FROM imr_indicator_option as ind inner Join imr_result as res ON ind.option_id=res.option_id Where res.player_setup_id =$spid  AND user_id=$usernameID")->getResult();
$graph_v=[];

foreach($graph as $g){
  $graph_v[]=array(
    'pvalue'=> floatval($g->pvalue),
    'indicator' =>$g->pindicatorid,
    
  );
}
$json["graph_v"]=($graph_v);
$json["success"]=true;
$data["graph_data"]=json_encode($graph_v);    

// echo json_encode($json);
// die;
        return view("player_result",$data);
       
        
      
}
 
  
   
}

public function inject_result($spid,$inject_id=0)
  {	
    // print_r($id);die;
    $session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
  // print_r($inject_id);die;
    $session = session();//abhishek
    $username =$session->get('username');
    $SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    $usernameID = $userData['id'];
    // print_r($usernameID);die;
    helper(['form', 'url']);
    $db=\Config\Database::connect();
        $setuptb=$db->prefixTable("result");
        $setuptb2=$db->prefixTable("single_player_setup");
        
        $injects=$db->prefixTable("injects");
        $feedback_performance=$db->prefixTable("feedback_performance");

        $userTb=$db->prefixTable("user");
        $data=array();
  $setup_data= $db->query("SELECT * FROM $setuptb WHERE player_setup_id=$spid AND user_id=$usernameID")->getFirstRow();
  $setup_data2= $db->query("SELECT * FROM $setuptb2 WHERE id=$spid")->getFirstRow();
//    print_r($setup_data2);die;
$data['player_setup_id']=$setup_data->player_setup_id;
// print_r($data['player_setup_id']);die;
$data['start_date']=$setup_data->start_date;
$data['end_date']=$setup_data->end_date;
$data['exercise_name']=$setup_data2->exercise_name;
$scenario_id=$setup_data2->crisis_scenario_id;
$user_id=$data['user_id']=$setup_data->user_id;
// print_r($data['user_id']);die;

$user=$db->query("SELECT * FROM $userTb WHERE id=$user_id")->getFirstRow();
$data['user_name']=$user->firstname;
$data['user_name2']=$user->lastname;
// print_r($data['user_name']);die;
$injectMd=new injectDb();
$injects23=$injectMd->getAllinjects($scenario_id,$usernameID);
$fit=$db->query("SELECT * FROM $injects WHERE scenario_id=$scenario_id")->getResultArray();
$data["scenar_injects"]=$injects23;


$performanceindicatorTb=$db->preFixtable("performance_indicator");
$performance_indicators=$db->query("SELECT * FROM $performanceindicatorTb WHERE crisis_scenario_id=$scenario_id")->getResultArray();
$data["performance_indicators"]=$performance_indicators;
// print_r($data["performance_indicators"]);die;

$response= $db->query("SELECT * FROM $feedback_performance WHERE crisis_scenario_id=$scenario_id")->getFirstRow();
$data["response"]=$response;


$inject_name=$db->query("SELECT * FROM imr_inject_data WHERE inject_id=$inject_id")->getFirstRow();
// print_r($inject_name);die;
$data['inject_name']=$inject_name->title;
$data['inject_desc']=$inject_name->description;
$inject_role=$inject_name->role;

$inject_num=$db->query("SELECT * FROM $injects WHERE id=$inject_id")->getFirstRow();
$data['inject_num']=$inject_num->order_id;

$role_name=$db->query("SELECT * FROM imr_scenario_role_cate WHERE id=$inject_role")->getFirstRow();
$data['role_name']=$role_name->job_title;
$scenario_role=$role_name->scenario_role_id;
$scenario_role_name=$db->query("SELECT * FROM imr_scenario_role WHERE id=$scenario_role")->getFirstRow();
$data['scenario_role_name']=$scenario_role_name->scenario_role_name;

$player_result=$db->query("SELECT * FROM imr_result WHERE player_setup_id=$spid AND inject_id=$inject_id")->getFirstRow();
$result_option_id=$player_result->option_id;
// tuesday
$option_data=$db->query("SELECT * FROM imr_inject_option WHERE inject_id=$inject_id AND id!=$result_option_id")->getResultArray();
if($option_data!=''){
  $data['another_option']=$option_data;
}
$all_option_data=$db->query("SELECT * FROM imr_inject_option WHERE inject_id=$inject_id")->getResultArray();
{
  $data['all_option']=$all_option_data;
  $data['result_option_id']=$result_option_id;
}
// print_r($all_option_data);die;
// print_r($result_option_id);die;
// tuesday

// piyusha
$player_result_just=$db->query("SELECT * FROM imr_result WHERE player_setup_id=$spid AND inject_id=$inject_id")->getFirstRow();
$result_option_confidence1=$player_result_just->confidence_response;
$result_option_justifcation1=$player_result_just->justification;
$data['result_option_confidence']=$result_option_confidence1;
$data['result_option_justifcation']=$result_option_justifcation1;
// end




$inject_option=$db->query("SELECT * FROM imr_inject_option WHERE id=$result_option_id")->getFirstRow();
// print_r($inject_option);die;
$data['option_order']=$inject_option->order_no;
$data['option_title']=$inject_option->option_title;
$data['option_description']=$inject_option->option_description;
$data['option_feedback']=$inject_option->option_feedback;
        return view("inject_result",$data);
       
        
      
}
 
  
   
}


}