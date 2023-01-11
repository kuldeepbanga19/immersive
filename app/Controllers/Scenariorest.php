<?php 
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;
use CodeIgniter\API\ResponseTrait;
use App\Models\injectDb;
use App\Models\Scenario_role_cateDb;



class Scenariorest extends BaseController{
	 use ResponseTrait;
	protected $injectMd;
	public function __construct(){
		   $this->sessionVar=session();
       $this->injectMd=new injectDb();
     
	}
	 public function index(){
	 	
	   $db=\Config\Database::connect();
	   $data=$db->query("SELECT * FROM imr_crisis_scenrio")->getResultArray();
     
	   
	    return $this->response->setJSON($data,200);
	    // return $this->respond($data2, 200);
	 }

	public function show($id = null)
    {
      $db=\Config\Database::connect();
	   $data=$db->query("SELECT * FROM imr_crisis_scenrio WHERE id=$id")->getResultArray();
	    return $this->response->setJSON($data);
    }

    public function create()
    {
        $db=\Config\Database::connect();
        $data = [
            'created' => $this->request->getPost('created'),
            'created_by' => $this->request->getPost('created_by'),
            'scenrio_title' => $this->request->getPost('scenrio_title'),
            'briefing' => $this->request->getPost('briefing'),
            'status' => $this->request->getPost('status')   

        ];
        $data = json_decode(file_get_contents("php://input"));
         
         $db->table("crisis_scenrio")
        ->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
         
        return $this->respondCreated($data, 201);
    }
    public function update($id=null){
    	 $db=\Config\Database::connect();
    	  $json = $this->request->getJSON();
    	 

        $json = $this->request->getJSON();
        if($json){
            $data = [
                'created' => $json->created,
                'modified' => $json->modified,
                'created_by' => $json->created_by,
                'modified_by' => $json->modified_by,
                'scenrio_title' => $json->scenrio_title,
                'industry_sector' => $json->industry_sector,
                'attack_vector' => $json->attack_vector,
                'briefing' => $json->briefing,
                'status' => $json->status,
                'publish_status' => $json->publish_status,
                
                
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [

                'created' => $input['created'],
                'modified' => $input['modified'],
                'created_by' => $input['created_by'],
                'modified_by' => $input['modified_by'],
                'scenrio_title' => $input['scenrio_title'],
                'industry_sector' => $input['industry_sector'],
                'attack_vector' => $input['attack_vector'],
                'briefing' => $input['briefing'],
                'status' => $input['status'],
                'publish_status' => $input['publish_status'],
            ];
        }
        // Insert to Database
         $db->table("crisis_scenrio")->where('id',$id)->update($data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
         $db=\Config\Database::connect();
         $data=$db->query("SELECT * FROM imr_crisis_scenrio WHERE id=$id")->getResultArray();
        if($data){
        	$dv=[
        		'deleted'=>1
        	];
           $db->table("crisis_scenrio")->where('id',$id)->update($dv);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
             
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
         
    }
    public function addrole($id){
        $scenario_role = $this->request->getVar("scenario_role");
    $scenario_id = $this->request->getVar("id");;
    $avataar = $this->request->getVar("img1");
    $responsibility = $this->request->getVar("response");
    $job = $this->request->getVar("briefing");
    
    $time = new Time('now');
    $session = session();
    
        
      
         $usernameID ="";
      
     
     helper(['form', 'url']);
    
    
    
     $scenario_role_cateDb=new Scenario_role_cateDb();
     $data34 = ['crisis_scenario_id'=>$scenario_id,'status'=>1,'created' =>strtotime($time),'created_by'=>$usernameID,'scenario_role_id'=>$scenario_role,'avatar_id'=>$avataar,'responsiblity'=>$responsibility,'job_title'=>$job];
     
     // $data34 = json_decode(file_get_contents("php://input"));
     
     
     $query= $scenario_role_cateDb->insert($data34);
      $json=array();
      $json['success']=true;
      $json['insertid']=$scenario_role_cateDb->getInsertID();
      
      $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
         
    return $this->respondCreated($json, 201);
   

    }
    public function summary($sid){
        $db = \Config\Database::connect();
        $data=array();
        $tablenm=$db->prefixTable("scenario_role_cate");
        $roleTb=$db->prefixTable("scenario_role");
        $tablenm2=$db->prefixTable("inject_data");
        $tablenm3=$db->prefixTable("injects");
        $tablenm4=$db->prefixTable("feedback_performance");
        $tablenm5=$db->prefixTable("scenario_epilogue");
        $tablenm6=$db->prefixTable("performance_indicator");
        $overview=$db->query("SELECT * FROM imr_crisis_scenrio WHERE id=$sid")->getFirstRow();
        $data["overviewdata"]=$overview;
        $roledatav=$db->query("SELECT t1.*,t2.scenario_role_name FROM $tablenm t1 LEFT JOIN $roleTb t2 ON t1.scenario_role_id=t2.id WHERE t1.crisis_scenario_id=$sid AND t1.status=1" )->getResult();

            
     foreach ($roledatav as $rkey => $rvalue) {
        $rolev=$rvalue->id;
        $data_temp=$db->query("SELECT t2.inject_id,t2.title FROM $tablenm2 t2 LEFT JOIN $tablenm3 t3 ON t2.inject_id=t3.id WHERE t3.scenario_id=$sid AND t2.role=$rolev")->getResult();
    
        
        
        $roledatav[$rkey]->assignedinjects=$data_temp;

      
      }
      $data["roledata"]=$roledatav;
      $data["feedback_type"]="";
      $data["rank_option"]="";
      $data["justification_response"]="";
      $data["epilogue_value"]="";
      $resdata=$db->query("SELECT * FROM $tablenm4 WHERE crisis_scenario_id=$sid")->getFirstRow();
      if($resdata){
          $data["feedback_type"]=$resdata->feedback_type;
          $data["rank_option"]=$resdata->rank_option;
          $data["confidence_response"]=$resdata->confidence_response;
          $data["justification_response"]=$resdata->justification_response;
      }
      $data["injects"]=$db->query("SELECT t2.inject_id,t2.title FROM $tablenm2 t2 LEFT JOIN $tablenm3 t3 ON t2.inject_id=t3.id WHERE t3.scenario_id=$sid")->getResult();
      
     $epilogue_data=$db->query("SELECT epilogue_value FROM $tablenm5 WHERE crisis_scenario_id=$sid")->getFirstRow();
     if($epilogue_data)
     $data["epilogue_value"]=$epilogue_data->epilogue_value;
     $data["pindicators"]=$db->query("SELECT id,performance_title,unit,custom_unit,starting_value FROM $tablenm6 WHERE crisis_scenario_id=$sid")->getResult();
     
    return $this->response->setJSON($data,200);

    }
    public function createinject($sid){
      $userid="";
      $db=\Config\Database::connect();
      $tablenm=$db->prefixTable("injects");
      $maxval=$db->query("SELECT max(order_id) as mid FROM $tablenm WHERE scenario_id=$sid")->getFirstRow();

      $order=1;
        if($maxval){
          $order=$order+($maxval->mid);
        }
        $data=[
          'scenario_id'=>$sid,
          'created_by'=>$userid,
          'status'=>1,
          'timecreated'=>strtotime("now"),
          'order_id'=>$order
        ];
        $db->table("injects")
        ->insert($data);
        $injjid=$db->insertID();
        $title="inject ".$order;
        $data2=[
          "title"=>$title,
          "inject_id"=>$injjid
        ];
        $db->table("inject_data")
        ->insert($data2);
        $json=array();
        $json["injectid"]=$injjid;
        $this->addinjoption($injjid,1);
        return $this->respondCreated($json, 201);
    }

     public function addinjoption($injid,$order_no=NULL){
       $db=\Config\Database::connect();
       $tablenm1=$db->prefixTable("inject_option");
       $returnarray=array();

        $maxval=$db->query("SELECT max(order_no) as mid FROM $tablenm1 WHERE  inject_id=$injid")->getFirstRow();

        if($maxval){
         $order_no=1+($maxval->mid); 
        }
       $data=[
        "inject_id"=>$injid,
        "value"=>0,
        "order_no"=>$order_no
       ];
       
       $db->table("inject_option")
       ->insert($data);
       $returnarray["orderno"]=$order_no;
       $returnarray["optionid"]=$db->insertID();
       if($order_no>1){
        return $this->respondCreated($returnarray, 201);
       }
       return $returnarray;

    }
    public function getinjectdata($injid){
      $db=\Config\Database::connect();
      $tablename=$db->prefixTable("inject_data");
      $injectdata=$db->query("SELECT * FROM $tablename WHERE inject_id=$injid")->getFirstRow();
      $alloptions=$this->injectMd->getinjectoptions($injid);
      $injectdata->options=$alloptions;
      
      return $this->response->setJSON($injectdata,200);
    }
    public function Allinjects($scenarid){
      $db=\Config\Database::connect();
      $table_name=$db->prefixTable("injects");
        $table2_name=$db->prefixTable("inject_data");
        $injectsdata=$db->query("SELECT t1.id,t2.title FROM $table_name t1 LEFT JOIN $table2_name t2 on t1.id=t2.inject_id WHERE scenario_id=$scenarid ORDER BY t1.order_id")->getResult();
        return $this->response->setJSON($injectsdata,200);
    }
    public function injectsdatashow($scenarid){

       $db=\Config\Database::connect();
      $table_name=$db->prefixTable("injects");
      $option_table=$db->prefixTable("inject_option");
        $table2_name=$db->prefixTable("inject_data");
        $injectsdata=$db->query("SELECT t1.id,t2.title FROM $table_name t1 LEFT JOIN $table2_name t2 on t1.id=t2.inject_id WHERE scenario_id=$scenarid ORDER BY t1.order_id")->getResult();
        foreach ($injectsdata as $ikey => $ivalue) {
                   $injid=$ivalue->id;
            $injectsdata[$ikey]->options=$db->query("SELECT * FROM $option_table WHERE inject_id=$injid")->getResultArray();
          # code...
        }
        return $this->response->setJSON($injectsdata,200);

    }
     

}



?>