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

class Scenario extends BaseController
{
protected $sessionVar;
 protected $injectMd;
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
      
      $this->injectMd=new injectDb();
      $this->sessionVar=session();
      helper(['form','gettime']);
 }


// view scenario dashboard
    
public function new()
{	

$session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
    
  helper(['form', 'url']);
  $crisis_scenrioDb = new Crisis_scenrioDb();
  $data['Crisis'] = $crisis_scenrioDb->where('publish_status=0')->orderby('id','DESC')->findAll();
  $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){
          echo view('layout/header2',$data);
          echo view('scenario',$data);
          echo view('layout/footer');
        }
        else{
            echo view('layout/header1');
            echo view('new_index2'); 
            echo view('layout/footer');
        }
    


}

 

  
}


// add new scenario 
public function add_scenario() {
  $new_scenario = $this->request->getVar("newVal");

$time = new Time('now');
$session = session();
$username =$session->get('username');
$SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    $usernameID="";
    if($userData){
      $usernameID = $userData['id'];  
    }
  
 helper(['form', 'url']);

$scenario_epilougeDb = new Scenario_epilogueDb();
 $feedback_performanceDb = new Feedback_performanceDb();
 $scenario_performanceDb = new Scenario_performanceDb();
 $crisis_scenrioDb=new Crisis_scenrioDb();

 $scenario_role_cate34=new Scenario_role_cateDb();

// {


      $data = ['scenrio_title'=>$new_scenario,'status'=>1,'created' =>strtotime($time),'created_by'=>$usernameID,'deleted'=>0,'publish_status'=>0];
      // print_r($data);die;
     $crisis_scenrioDb->insert($data);
     $user_id=$crisis_scenrioDb->getInsertID();
    
    $session->set("scenario_val",$user_id);

     $data_feed=['crisis_scenario_id'=>$user_id,'created' =>strtotime($time),'created_by'=>$usernameID];
     $feedback_performanceDb->insert($data_feed);

     $scenario_performanceDb->insert($data_feed);
     $data_scenario_role=['crisis_scenario_id'=>$user_id,'created' =>strtotime($time),'created_by'=>$usernameID,'status'=>1];
     $scenario_role_cate34->insert($data_scenario_role);

     $data_epilogue=['crisis_scenario_id'=>$user_id,'created' =>strtotime($time),'created_by'=>$usernameID,'brief_status'=>0];
     $scenario_epilougeDb->insert($data_epilogue);
     $json=array();
       $json['success']=true;
       $json['insertid']=$user_id;
    echo json_encode($json);
// }
}


// end


// view scenario overview for newly created scenario
public function singleUser4($id = null){
  $db = \Config\Database::connect();
  $userModel = new Crisis_scenrioDb();
  $builder = $db->table('crisis_scenrio');
  $query = $db->query("SELECT * FROM imr_crisis_scenrio ORDER BY id DESC LIMIT 1");
  $result = $query->getRow('id');
  // print_r($result);die;


	$companyDb = new Industory_sectorDb();
	$data['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();

  $attack_vectorDb = new Attack_vectorDb();
	$data['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
  $threat_actorDb = new Threat_actorDb();
	$data['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();


  $data['user_obj'] = $userModel->where('id',$result)->first();
  if($data['user_obj']['modified']){
    $data['time']=$data['user_obj']['modified'];
  }
  else{
    $data['time']=$data['user_obj']['created'];
  }
  // $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){
          // echo view('layout/side-bar',$data);
          echo view('scenario_overview', $data);
          echo view('layout/footer');
        }
        else{
            echo view('layout/header1');
            echo view('new_index2'); 
            echo view('layout/footer');
        }
  
}



// end



// view scenario overview for edit scenario
public function singleUser($id = null){
  $userModel = new Crisis_scenrioDb();

  $userid=$this->sessionVar->get("userid");

	$companyDb = new Industory_sectorDb();
	$data['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();

  $attack_vectorDb = new Attack_vectorDb();
	$data['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
  $threat_actorDb = new Threat_actorDb();
	$data['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();


  $data['user_obj'] = $userModel->where('id', $id)->first();
  if($data['user_obj']['modified']){
    $data['time']=$data['user_obj']['modified'];
  }
  else{
    $data['time']=$data['user_obj']['created'];
  }
  $injects=$this->injectMd->getAllinjects($id,$userid);
   $data["scenar_injects"]=$injects;
   $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){


          
          // echo view('layout/side-bar',$data);
          echo view('scenario_overview', $data);
          echo view('layout/footer');
        }
        else{
            echo view('layout/header1');
            echo view('new_index2'); 
            echo view('layout/footer');
        }
 
}

// end


    // edit scenario overview
    public function update($id){
    

      $db      = \Config\Database::connect();
$builder = $db->table('crisis_scenrio');
$scenario_epilouge = $db->table('scenario_epilogue');

      $id = $this->request->getVar('id');
      $name=$this->request->getVar('name');
      $industry = $this->request->getVar('industry');
    $attack = $this->request->getVar('attack');

    $threat= $this->request->getVar('threat');
$briefing=$this->request->getVar('briefing');

    $time = new Time('now');
$session = session();
$username =$session->get('username');

$SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    if($userData)
    $usernameID = $userData['id'];
    else{
     $usernameID =""; 
    }

      $data = [
          'scenrio_title'=>$name,
          'industry_sector'=>$industry,
          'attack_vector' =>$attack,
          'threat_actor' => $threat,
          'modified' =>strtotime($time),
          'modified_by'=>$usernameID,
          'briefing'=>$briefing,

      ];
      // print_r($data);die;

      $builder->where('id', $id);
$builder->update($data);

$epilogue_data = ['epilogue_value'=>$briefing,'created'=>strtotime($time),'created_by'=>$usernameID,'brief_status'=>0];
$epilouge_array=['crisis_scenario_id'=>$id,'brief_status'=>0];
$scenario_epilouge->where($epilouge_array);
$scenario_epilouge->update($epilogue_data);


   $json=array();
   			$json['success']=true;
				echo json_encode($json);
      // $userModel->update($id, $data);
      // return $this->response->redirect(site_url('Scenario/scenario_role_cate/'.$id.''));
  }
 // end

// delete drafted scenario
 public function deleteScenario($id)
 {  
  // print_r($id);die;


 
  $userid=$this->sessionVar->get("userid");
$crisis_scenrioDB= new Crisis_scenrioDb();
$scenario_role_cateDb = new Scenario_role_cateDb();
$feedback_performanceDb = new Feedback_performanceDb();
$scenario_performanceDb = new Scenario_performanceDb();
$scenario_epilougeDb = new Scenario_epilogueDb();
$injectDb = new injectDb();
$injectDb->deleteinject($id);
print_r("hello");die;
$crisis_scenrio= $crisis_scenrioDB->where('id',$id)->first();
$scenario_role_cate= $scenario_role_cateDb->where('crisis_scenario_id',$id)->findAll();
$feedback_performance= $feedback_performanceDb->where('crisis_scenario_id',$id)->findAll();
$scenario_performance= $scenario_performanceDb->where('crisis_scenario_id',$id)->findAll();
$scenario_epilouge= $scenario_epilougeDb->where('crisis_scenario_id',$id)->findAll();
// $inject= $injectDb->where('scenario_id',$id)->findAll();

print_r($inject);die;
$scenario_role_cateDb->where('crisis_scenario_id',$id)->delete();
$crisis_scenrioDB->where('id',$id)->delete();
$feedback_performanceDb->where('crisis_scenario_id',$id)->delete();
$scenario_performanceDb->where('crisis_scenario_id',$id)->delete();
$scenario_epilougeDb->where('crisis_scenario_id',$id)->delete();

$json=array();
$json['success']=true;
echo json_encode($json);

}

// end

// view Templated scenario dashboard
    
public function template()
{	

$session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
    
  helper(['form', 'url']);
  $crisis_scenrioDb = new Crisis_scenrioDb();
  $data['published_crisis'] = $crisis_scenrioDb->where('publish_status=1')->orderby('id','DESC')->findAll();
	$companyDb = new Industory_sectorDb();
	$data['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();


  
  $attack_vectorDb = new Attack_vectorDb();
	$data['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
  $threat_actorDb = new Threat_actorDb();
	$data['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();

$role_cateDb = new Scenario_role_cateDb();
$data['Role_cate']=$role_cateDb->orderBy('LTRIM(job_title)')->findAll();


  // print_r($data);die;
  $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
        $data['industory_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_industry_sector ')->getResultArray();
        $data['attack_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_attack_vector ')->getResultArray();
        $data['threat_nam']=$db->query('SELECT * FROM yatharth_immersive.imr_threat_actor')->getResultArray();
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){
          echo view('layout/header2',$data);
          echo view('template',$data);
          echo view('layout/footer');
        }
        else{
            echo view('layout/header1');
            echo view('new_index2'); 
            echo view('layout/footer');
        }
    


}

 

  
}

public function getfilterscenario(){
  $json=array();
  $attack_array=$this->request->getVar("attackvall");
  $threat_array=$this->request->getVar("threatvaal");
  $industry_array=$this->request->getVar("industryvall");
  $search_array=$this->request->getVar("searchvaal");
  $dill_array=$this->request->getVar("dillvall");
  $data['dill']=$dill_array;
  $data['count']=0;
  // $crisis_scenrioDb = new Crisis_scenrioDb();
  // $data['published_crisis'] = $crisis_scenrioDb->where('publish_status=1')->orderby('id','DESC')->findAll();
  $indusrtrywhere="";
  $attackwhere="";
  $threatwhere="";
  $searchwhere="";
  $db=\Config\Database::connect();
  $scenarioTb=$db->preFixtable('crisis_scenrio');
  if($industry_array){
    $indust=implode(", ",$industry_array);
    $indusrtrywhere="AND industry_sector IN (".$indust.") ";

  }
 
 if($attack_array){
  $attacks=implode(", ",$attack_array);
  $attackwhere="AND attack_vector IN (".$attacks.") ";

 }
 if($threat_array){
  $threats=implode(", ",$threat_array);
  $threatwhere="AND threat_actor IN (".$threats.") ";

 }
 if($search_array){
  // $indust=implode(", ",$industry_array);
  $searchwhere="AND ( scenrio_title LIKE '%{$search_array}%' OR  briefing LIKE  '%{$search_array}%')";

}


  

  
  $sdata=$db->query("SELECT * FROM $scenarioTb WHERE publish_status=1 $indusrtrywhere $attackwhere $threatwhere $searchwhere")->getResultArray();
  $data['published_crisis'] =$sdata;

  if($dill_array){
    $count=0;
    // print_r($data['published_crisis']['id']);die;
    foreach($data['published_crisis'] as $published){
     $db=\Config\Database::connect();
     $tbname=$db->prefixTable("scenario_role_cate");
     $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $published['id']."")->getRow();
     if($max_role->max_role_no>1) {continue;}else{ $count=$count+1;}
  }
  $data['count']=$count;
  
}

	$companyDb = new Industory_sectorDb();
	$data['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();


  
  $attack_vectorDb = new Attack_vectorDb();
	$data['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
  $threat_actorDb = new Threat_actorDb();
	$data['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();
  $json["filterddata"]=view("filterscernario",$data);
  $json["success"]=true;
  echo json_encode($json);
}


//  To save overview data with validation

  public function save_overview($id){
    // print_r($id);die;

    $db      = \Config\Database::connect();

$builder = $db->table('crisis_scenrio');
$scenario_epilouge = $db->table('scenario_epilogue');

    $id = $this->request->getVar('id');
    $name=$this->request->getVar('name');
    $industry = $this->request->getVar('industry');
  $attack = $this->request->getVar('attack');

  $threat= $this->request->getVar('threat');
$briefing=$this->request->getVar('briefing');

  $time = new Time('now');
$session = session();
$username =$session->get('username');




$SessionModel = new SessionModel();
  $userData = $SessionModel->where('email',$username)->first();
  if($userData)
  $usernameID = $userData['id'];
  else{
   $usernameID =""; 
  }

  if (! $this->validate(['industry'=>'required','attack'=>'required','threat'=>'required','briefing'=>'required'],
  ['industry'=>['required' => 'Industry sector is required'],
    'attack'=>['required' =>'Attack vector is required'],
    'threat'=>['required' =>'Threat actor is required'],
    'briefing'=>['required'=>'Briefing is required']
  ]))
{
    
    $json=array();
    $validation =  \Config\Services::validation();
 $json['msg'] = $validation->listErrors();
$json['success']=false;
echo json_encode($json);
return;
}
    $data = [
        'scenrio_title'=>$name,
        'industry_sector'=>$industry,
        'attack_vector' =>$attack,
        'threat_actor' => $threat,
        'modified' =>strtotime($time),
        'modified_by'=>$usernameID,
        'briefing'=>$briefing,

    ];
    // print_r($data);die;

    $builder->where('id', $id);
$builder->update($data);

$epilogue_data = ['epilogue_value'=>$briefing,'created'=>strtotime($time),'created_by'=>$usernameID,'brief_status'=>0];
$epilouge_array=['crisis_scenario_id'=>$id,'brief_status'=>0];
$scenario_epilouge->where($epilouge_array);
$scenario_epilouge->update($epilogue_data);


 $json=array();
       $json['success']=true;
      echo json_encode($json);
    // $userModel->update($id, $data);
    // return $this->response->redirect(site_url('Scenario/scenario_role_cate/'.$id.''));
}

// end
}

