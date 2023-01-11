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


class Main extends BaseController
{
 
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
 }

// view scenario ranking
  public function main($spid=0)
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
        return view("main",$data);
       
        
      
}
 
  
   
}


}