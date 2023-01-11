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


class Scenario_preview extends BaseController
{
 
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
 }

// view scenario ranking
  public function scenario_preview($id=0)
  {	
    $session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
     
    $userModel = new Crisis_scenrioDb();   
    helper(['form', 'url']);
    $crisis_scenrioDb = new Crisis_scenrioDb();
    $data['Crisis'] = $crisis_scenrioDb->findAll();

 
   $db=\config\Database::connect();
   $injectTb=$db->preFixtable("injects");
   
   if ($db->query("SELECT id FROM $injectTb WHERE scenario_id=$id order By order_id")->getResult()){
   $datatemp['datatemp1']=$db->query("SELECT id FROM $injectTb WHERE scenario_id=$id order By order_id")->getResult(); 

  $data['user_obj1'] = $crisis_scenrioDb->where('id',$id)->first();
  $data['user_obj'] = $userModel->where('id', $id)->first();
  if($data['user_obj']['modified']){
    $data['time']=time()-$data['user_obj']['modified'];
  }
  else{
    $data['time']=time()-$data['user_obj']['created'];
  }

  //wwd
  $data["scenario_title"]="";
  $data["injectoptions"]=array();
  $data["performanceindicatorsv"]=array();
  $data["injectscreated"]="";
  $data["inject_id"]="";
  $data["scenario_id"]=$id;
  $data["order_no"]="";
  $data["pmf_ids"]=array();
  $senariotb=$db->preFixtable("crisis_scenrio");
  $scdata=$db->query("SELECT * FROM $senariotb WHERE id=$id")->getFirstRow();
  if($scdata){
    $data["scenario_title"]=$scdata->scenrio_title;
    

  }
   $injectTb=$db->preFixtable("injects");
   $injdTb=$db->preFixtable("inject_data");
   $roleTb=$db->preFixtable("scenario_role_cate");
   $optionsTb=$db->preFixtable("inject_option");
   $performanceindicatorTb=$db->preFixtable("performance_indicator");
   $injectsscreated=$db->query("SELECT  injd.*,rl.job_title as jtitle,inj.order_id,inj.timecreated FROM $injectTb inj LEFT JOIN $injdTb injd ON inj.id=injd.inject_id LEFT JOIN $roleTb rl ON rl.id=injd.role WHERE inj.scenario_id=$id ORDER BY inj.order_id")->getFirstRow();
   
   $data["injectstest"]=$db->query("SELECT  injd.*,rl.job_title as jtitle,inj.order_id,inj.timecreated FROM $injectTb inj LEFT JOIN $injdTb injd ON inj.id=injd.inject_id LEFT JOIN $roleTb rl ON rl.id=injd.role WHERE inj.scenario_id=$id ORDER BY inj.order_id")->getResultArray();
  //  print_r($injectstest[0]["file"]);die;

   if($injectsscreated){
      
      $injctid=$injectsscreated->inject_id;
      $data["inject_id"]=$injctid;
      $injectsoptions=$db->query("SELECT * FROM $optionsTb WHERE inject_id=$injctid")->getResultArray();
      $data["injectscreated"]=$injectsscreated;
      $data["order_no"]=$injectsscreated->order_id;
      $data["injectoptions"]=$injectsoptions;
      $pmf_indicators=$db->query("SELECT * FROM $performanceindicatorTb WHERE crisis_scenario_id=$id")->getResultArray();
      $data["performanceindicatorsv"]=$pmf_indicators;
      $tmparr=array();
      foreach($pmf_indicators as $pmf){
        $tmparr[]=$pmf['id'];
      }
      $data["pmf_ids"]=$tmparr;


   }
   


      
      return view('scenario_preview',$data);
  }
  else{
    return redirect()->to(base_url('/Scenario_summary/scenario_summary/'.$id));
  }
  
  

  }
   // end
  // add or update scenario ranking
    
}
 
   public function previewData(){
    $optionid=$this->request->getVar("rval");
    $scenarioid=$this->request->getVar("scenarioid");
    $order_no=$this->request->getVar("order_no");
    $injectid=$this->request->getVar("injectid");
    
    
    $json=array();
    $db=\Config\Database::connect();
    $optionsTb=$db->preFixtable("indicator_option");
    $injectTb=$db->preFixtable("injects");
    $injdTb=$db->preFixtable("inject_data");
    $roleTb=$db->preFixtable("scenario_role_cate");
    $injoptionsTb=$db->preFixtable("inject_option");
    $feedbackTb=$db->preFixtable("feedback_performance");
    $option_vals=$db->query("SELECT * FROM $optionsTb WHERE option_id=$optionid")->getResultArray();
    // order_no
    //next inject
    $feedback_vals=$db->query("SELECT * FROM $feedbackTb WHERE crisis_scenario_id=$scenarioid")->getResultArray();

    
    
    $optiondata=$db->query("SELECT * FROM $injoptionsTb WHERE id=$optionid")->getFirstRow();
    $nextinject=array();
    if($optiondata){
      $nextinj=$optiondata->value;
      // print_r($nextinj);die;
      if($nextinj==-1){
        $nextinject=[];
        
      }
      else if($nextinj>0){
         $nextinject=$db->query("SELECT  injd.*,rl.job_title as jtitle,inj.order_id,inj.timecreated FROM $injectTb inj LEFT JOIN $injdTb injd ON inj.id=injd.inject_id LEFT JOIN $roleTb rl ON rl.id=injd.role WHERE inj.scenario_id=$scenarioid AND inj.id=$nextinj ORDER BY inj.order_id")->getFirstRow();

      }
      else{
        $nextinject=$db->query("SELECT  injd.*,rl.job_title as jtitle,inj.order_id,inj.timecreated FROM $injectTb inj LEFT JOIN $injdTb injd ON inj.id=injd.inject_id LEFT JOIN $roleTb rl ON rl.id=injd.role WHERE inj.scenario_id=$scenarioid AND inj.order_id>$order_no ORDER BY inj.order_id")->getFirstRow();
      }
    }
    
    

    if($nextinject){
    	$json["nextv"]=true;
      // var_dump(strlen($optiondata->option_justification));die;
      if($feedback_vals[0]['confidence_response']=="1"){
        $json["response"]=true;

        $json["sorderR"]=$optiondata->order_no;
        $json["stitleR"]=$optiondata->option_title;
        $json["sdesR"]=$optiondata->option_description;
        
      }else{
        $json["response"]=false;
      }

      if(strlen($optiondata->option_justification)>=1 && $feedback_vals[0]['justification_response']=="1" && $optiondata->option_justification_option=="1"){
        $json["justify"]=true;
        $json["justval"]=$optiondata->option_justification;
      }else{
        $json["justify"]=false;
      }

      if($feedback_vals[0]['rank_option']=="1"){
        $json["rank"]=true;

        $json["srank"]=$optiondata->option_rank;
        // var_dump($json["srank"]);die;
        $json["sorder"]=$optiondata->order_no;
        $json["stitle"]=$optiondata->option_title;
        $json["sdes"]=$optiondata->option_description;

        
      }else{
        $json["rank"]=false;
      }
    
      if($feedback_vals[0]['feedback_type']=="1"){
        $json["feed"]=true;
        // var_dump($optiondata->option_feedback);die;
        $json["sfeedback"]=$optiondata->option_feedback;
      }else{
        $json["feed"]=false;
      }

      // var_dump((int)$nextinject->timecreated);die;
      $timecreated=strtoupper(date("H:i__j F Y",(int)$nextinject->timecreated));

      
        $json["injecttime"]=$timecreated;
        $json["newinjectid"]=$nextinject->inject_id;
        $json["neworderno"]=$nextinject->order_id;
        $json["nextinjecttitle"]=$nextinject->title;
        $json["nextinjectrole"]=$nextinject->jtitle;
        $json["nextinjectdesc"]=$nextinject->description;

        // get options
        $injctid=$nextinject->inject_id;
        
        $injectsoptions=$db->query("SELECT * FROM $injoptionsTb WHERE inject_id=$injctid")->getResultArray();

        $injecttest=$db->query("SELECT order_id FROM $injectTb WHERE id=$injectid")->getResultArray();
        $json["previousorderno"]=$injecttest[0]["order_id"];
        // $optionhtml='<button class="btn" id="rvlopt">Next</button>';
        $optionhtml='<p>choose your response</p>';
        $itr=1;
        foreach($injectsoptions as $ijop){
        $optionhtml.='<div class="opt_v">
                     <p>option'.$itr.'<p>
                     <input type="radio" class="optinput" name="optinput" value="'.$ijop['id'].'"><span>'.$ijop['option_title'].'</span>
					<p>'.$ijop['option_description'].'<p>	
				    </div>	
                     ';
              $itr++;
         }    
        $json["optionhtml"]=$optionhtml;
			
    
        
    }
    else{
    	$json["nextv"]=false;
      //next inject code 

      if($feedback_vals[0]['confidence_response']=="1"){
        $json["response"]=true;

        $json["sorderR"]=$optiondata->order_no;
        $json["stitleR"]=$optiondata->option_title;
        $json["sdesR"]=$optiondata->option_description;
        
      }else{
        $json["response"]=false;
      }

      if(strlen($optiondata->option_justification)>=1 && $feedback_vals[0]['justification_response']=="1" && $optiondata->option_justification_option=="1"){
        $json["justify"]=true;
        $json["justval"]=$optiondata->option_justification;
      }else{
        $json["justify"]=false;
      }

      if($feedback_vals[0]['rank_option']=="1"){
        $json["rank"]=true;

        $json["srank"]=$optiondata->option_rank;
        // var_dump($json["srank"]);die;
        $json["sorder"]=$optiondata->order_no;
        $json["stitle"]=$optiondata->option_title;
        $json["sdes"]=$optiondata->option_description;

        
      }else{
        $json["rank"]=false;
      }
    
      if($feedback_vals[0]['feedback_type']=="1"){
        $json["feed"]=true;
        // var_dump($optiondata->option_feedback);die;
        $json["sfeedback"]=$optiondata->option_feedback;
      }else{
        $json["feed"]=false;
      }

      // var_dump((int)$nextinject->timecreated);die;
      // $timecreated=strtoupper(date("H:i__j F Y",(int)$nextinject->timecreated));

      
        // $json["injecttime"]=$timecreated;
        // $json["newinjectid"]=$nextinject->inject_id;
        // $json["neworderno"]=$nextinject->order_id;
        // $json["nextinjecttitle"]=$nextinject->title;
        // $json["nextinjectrole"]=$nextinject->jtitle;
        // $json["nextinjectdesc"]=$nextinject->description;

        // get options
        // $injctid=$nextinject->inject_id;
        
        // $injectsoptions=$db->query("SELECT * FROM $injoptionsTb WHERE inject_id=$injctid")->getResultArray();

        $injecttest=$db->query("SELECT order_id FROM $injectTb WHERE id=$injectid")->getResultArray();
        $json["previousorderno"]=$injecttest[0]["order_id"];
        // $optionhtml='<button class="btn" id="rvlopt">Next</button>';
        // $optionhtml='<p>choose your response</p>';
        // $itr=1;
        // foreach($injectsoptions as $ijop){
        // $optionhtml.='<div class="opt_v">
        //              <p>option'.$itr.'<p>
        //              <input type="radio" class="optinput" name="optinput" value="'.$ijop['id'].'"><span>'.$ijop['option_title'].'</span>
				// 	<p>'.$ijop['option_description'].'<p>	
				//     </div>	
        //              ';
        //       $itr++;
        //  }    
        // $json["optionhtml"]=$optionhtml;
			


      //next inject code 

      $json["nexten"]='<style>
      .center2 button{
          outline: none;
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-size: medium;
    font-weight: 700;
    position: relative;
    user-select: none;
    transition: background-color 0.2s linear 0s;
    white-space: nowrap;
    border-radius: 4px;
    line-height: 1.25rem;
    padding: 0.5rem 1rem;
    background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
    color: rgb(255, 255, 255);
    border: 1.5px solid rgb(36, 45, 147);
    }
  </style><div class="center2" style="display: flex; align-items: center; justify-content: center; flex-direction: column; height: 100vh;">
  <img src="'.base_url().'/images/capture.jpg">
  <p style="    font-size: 1.875rem;
    color: rgb(33, 37, 26);
    font-weight: 700;
    line-height: 1.2;">You have reached the end of the scenario preview</p>
    <button class="" ><span><a href="'.base_url().'/Scenario_summary/scenario_summary/'.$scenarioid.'">Exit Preview</a></span></button>
</div>';

    }
    foreach($option_vals as $optval){
        
          $json[$optval['pindicatorid']]=$optval['pvalue'];


    }
   

    
    $json["success"]=true;
    

    echo json_encode($json);
   }
   public function endscenario(){
    return view("scenario_end");
   }
  

    
    //end
}

