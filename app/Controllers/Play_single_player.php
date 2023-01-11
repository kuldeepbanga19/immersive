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


class Play_single_player extends BaseController
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
    // print_r($id);die;
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
   $set_up=$db->preFixtable("single_player_setup");
   $set_up_crisis_id=$db->query("SELECT * FROM $set_up WHERE id=$id")->getFirstRow();
   $set_up_crisis=$set_up_crisis_id->crisis_scenario_id;
   $set_up_id=$set_up_crisis_id->id;
$data['set_up_id']=$set_up_id;

//    print_r($data['set1']);die;


   if ($db->query("SELECT id FROM $injectTb WHERE scenario_id=$set_up_crisis order By order_id")->getResult()){
   $datatemp['datatemp1']=$db->query("SELECT id FROM $injectTb WHERE scenario_id=$set_up_crisis order By order_id")->getResult(); 

  $data['user_obj1'] = $crisis_scenrioDb->where('id',$set_up_crisis)->first();
  $data['user_obj'] = $userModel->where('id', $set_up_crisis)->first();
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
  $data["scenario_id"]=$set_up_crisis;
  $data["order_no"]="";
  $data["pmf_ids"]=array();
  $senariotb=$db->preFixtable("crisis_scenrio");
  $scdata=$db->query("SELECT * FROM $senariotb WHERE id=$set_up_crisis")->getFirstRow();
  if($scdata){
    $data["scenario_title"]=$scdata->scenrio_title;
    

  }
   $injectTb=$db->preFixtable("injects");
   $injdTb=$db->preFixtable("inject_data");
   $roleTb=$db->preFixtable("scenario_role_cate");
   $optionsTb=$db->preFixtable("inject_option");
   $performanceindicatorTb=$db->preFixtable("performance_indicator");
   $injectsscreated=$db->query("SELECT  injd.*,rl.job_title as jtitle,inj.order_id FROM $injectTb inj LEFT JOIN $injdTb injd ON inj.id=injd.inject_id LEFT JOIN $roleTb rl ON rl.id=injd.role WHERE inj.scenario_id=$set_up_crisis ORDER BY inj.order_id")->getFirstRow();
   
   if($injectsscreated){
      
      $injctid=$injectsscreated->inject_id;
      $data["inject_id"]=$injctid;
      $injectsoptions=$db->query("SELECT * FROM $optionsTb WHERE inject_id=$injctid")->getResultArray();
      $data["injectscreated"]=$injectsscreated;
      $data["order_no"]=$injectsscreated->order_id;
      $data["injectoptions"]=$injectsoptions;
      $pmf_indicators=$db->query("SELECT * FROM $performanceindicatorTb WHERE crisis_scenario_id=$set_up_crisis")->getResultArray();
      $data["performanceindicatorsv"]=$pmf_indicators;
      $tmparr=array();
      foreach($pmf_indicators as $pmf){
        $tmparr[]=$pmf['id'];
      }
      $data["pmf_ids"]=$tmparr;


   }
   


      
      return view('play_single_player',$data);
  }
  else{
    return redirect()->to(base_url('/Scenario_summary/scenario_summary/'.$set_up_crisis));
  }
  
  

  }
   // end
  // add or update scenario ranking
    
}
 
   public function previewData(){
    $optionid=$this->request->getVar("rval");
    $scenarioid=$this->request->getVar("scenarioid");
    $setup_id=$this->request->getVar("setup_id");
    // print_r($scenarioid1);die;
    $order_no=$this->request->getVar("order_no");
    $current_resultid=$this->request->getVar("current_resultid");
    //current_resultid
   
    $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];
        $time=time();
        // print_r($usernameID);die;
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
    if($current_resultid){
      // print_r($current_resultid);die;
      $temp1["just_status"]=1;
      $db->table("result")->where("id",$current_resultid)->update($temp1);
    }

    
    $optiondata=$db->query("SELECT * FROM $injoptionsTb WHERE id=$optionid")->getFirstRow();
    $nextinject=array();
    if($optiondata){
      $nextinj=$optiondata->value;
      $inj_id=$optiondata->inject_id;
      // print_r($nextinj);die;
      if($nextinj==-1){
        $nextinject=[];
       
    $data_result=array();
    $data_result['player_setup_id']=$setup_id;
    $data_result['scenario_id']=$scenarioid;
    $data_result['inject_id']=$inj_id;
    $data_result['option_id']=$optionid;
    $data_result['user_id']=$usernameID;
    $data_result['status']=0;
    $data_result['start_date']=$time;
    $data_result1['end_date']=$time;
    $data_result1['status']=1;
    $data_result2['end_date1']=$time;
    $data_result2['status']=1;
   $result=$db->query("SELECT * FROM imr_result WHERE inject_id=$inj_id AND user_id=$usernameID AND status=0")->getFirstRow();
   if($result){
    $result_id= $result->id;
    // print_r($result_id);die;
    $db->table("result")->where("id",$result_id)->update($data_result);



  }
  else{
    $db->table("result")->insert($data_result);
  }
     

      $user_data=['userid'=>$usernameID,'singlep_id'=>$setup_id];
      $db->table("player_assignment")->where($user_data)->update($data_result2);


      $result_data=$db->query("SELECT * FROM imr_result WHERE inject_id=$inj_id AND user_id=$usernameID AND status=1")->getFirstRow();
      if($result_data){
        $json["player_setup_id"]=$result_data->player_setup_id;
      }
      
      }
      else if($nextinj>0){
         $nextinject=$db->query("SELECT  injd.*,rl.job_title as jtitle,inj.order_id FROM $injectTb inj LEFT JOIN $injdTb injd ON inj.id=injd.inject_id LEFT JOIN $roleTb rl ON rl.id=injd.role WHERE inj.scenario_id=$scenarioid AND inj.id=$nextinj ORDER BY inj.order_id")->getFirstRow();
       
    $data_result=array();
    $data_result['player_setup_id']=$setup_id;
    $data_result['scenario_id']=$scenarioid;
    $data_result['inject_id']=$inj_id;
    $data_result['option_id']=$optionid;
    $data_result['user_id']=$usernameID;
    $data_result['status']=0;
    $data_result['start_date']=$time;
    $result=$db->query("SELECT * FROM imr_result WHERE inject_id=$inj_id AND user_id=$usernameID AND status=0")->getFirstRow();
  //  print_r($result);die;
  if($result){
    $result_id= $result->id;
    // print_r($result_id);die;
    $db->table("result")->where("id",$result_id)->update($data_result);
  }
  else{
    $db->table("result")->insert($data_result);
  }
    
      }
      else{
        $nextinject=$db->query("SELECT  injd.*,rl.job_title as jtitle,inj.order_id FROM $injectTb inj LEFT JOIN $injdTb injd ON inj.id=injd.inject_id LEFT JOIN $roleTb rl ON rl.id=injd.role WHERE inj.scenario_id=$scenarioid AND inj.order_id>$order_no ORDER BY inj.order_id")->getFirstRow();
      
    $data_result=array();
       $data_result['player_setup_id']=$setup_id;
    $data_result['scenario_id']=$scenarioid;
    $data_result['inject_id']=$inj_id;
    $data_result['option_id']=$optionid;
    $data_result['user_id']=$usernameID;
    $data_result['status']=0;
    $data_result['start_date']=$time;
    $result=$db->query("SELECT * FROM imr_result WHERE inject_id=$inj_id AND user_id=$usernameID  AND status=0")->getFirstRow();
    if($result){
      $result_id= $result->id;
      // print_r($result_id);die;
      $db->table("result")->where("id",$result_id)->update($data_result);
    }
    else{
      $db->table("result")->insert($data_result);
    }
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
    	
 
        $json["newinjectid"]=$nextinject->inject_id;
        $json["neworderno"]=$nextinject->order_id;
        $json["nextinjecttitle"]=$nextinject->title;
        $json["nextinjectrole"]=$nextinject->jtitle;
        $json["nextinjectdesc"]=$nextinject->description;

        // get options
        $injctid=$nextinject->inject_id;
        
        $injectsoptions=$db->query("SELECT * FROM $injoptionsTb WHERE inject_id=$injctid")->getResultArray();
        // print_r($injectsoptions);die;
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

        $injecttest=$db->query("SELECT order_id FROM $injectTb WHERE id=$inj_id")->getResultArray();
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
  <p style="font-size: 1.875rem;color: rgb(000, 000, 000);font-weight: 700;line-height: 1.2;">Congratulations! <br> You just completed your exercise</p>
    <button class=""><span><a href="'.base_url().'/Play_single_player/publishdata/'.$setup_id.'" style="color:#fff;">Exit to Exercise</a></span></button>
</div>';

    }
    foreach($option_vals as $optval){
        
          $json[$optval['pindicatorid']]=$optval['pvalue'];


    }
   

    
    $json["success"]=true;
    

    echo json_encode($json);
   }
   public function result($spid){
    // $spid=15;
    $data=array();
    $db=\Config\Database::connect();
    $session = session();//abhishek
    $username =$session->get('username');
    $SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    $usernameID = $userData['id'];


    $tablenm=$db->prefixTable("single_player_setup");
    $tablenm2=$db->prefixTable("crisis_scenrio");
    $tablenm3=$db->prefixTable("scenario_role_cate");
    $tablenm4=$db->prefixTable("scenario_role");
    $tablenm5=$db->prefixTable("player_assignment");
    $tablenm6=$db->prefixTable("user");
    $tablenm7=$db->prefixTable("result");
    $data['roles']=array();
    $data['assignusers_val']=array();
     $result=$db->query("SELECT tb1.*,tb2.scenrio_title,tb2.briefing FROM $tablenm tb1 LEFT JOIN $tablenm2 tb2 ON tb1.crisis_scenario_id=tb2.id WHERE tb1.id=$spid")->getFirstRow();
     $result2=$db->query("SELECT tb2.scenrio_title,tb2.briefing,tb2.id FROM $tablenm tb1 LEFT JOIN $tablenm2 tb2 ON tb1.crisis_scenario_id=tb2.id WHERE tb1.id=$spid")->getFirstRow();

    //  print_r($result2);die;
     if($result){
       $scid=$result->crisis_scenario_id;
       $temp=$db->query("SELECT * FROM $tablenm3 WHERE crisis_scenario_id=$scid")->getResultArray();
       $temp_arr=$db->query("SELECT tb1.*,tb2.firstname as fname FROM $tablenm5 tb1 LEFT JOIN $tablenm6 tb2 ON tb1.userid=tb2.id WHERE tb1.singlep_id=$spid")->getResultArray();
       $temp_arr2=$db->query("SELECT tb1.*,tb2.firstname as fname FROM $tablenm7 tb1 LEFT JOIN $tablenm6 tb2 ON tb1.user_id=tb2.id WHERE tb1.player_setup_id=$spid")->getResultArray();
      //  print_r($temp_arr2);die;
          $data['roles']=$temp;
          $data['assignusers_val']=$temp_arr;
          $data['assignusers_result']=$temp_arr2;

     }
     $Allroles=$db->query("SELECT * FROM $tablenm4")->getResultArray();
     $temp_arry=array();
     foreach ($Allroles as $rkey => $rvalue) {
       # code...
       $temp_arry[$rvalue['id']]=$rvalue['scenario_role_name'];
     }
     $data["rolesinfo"]=$temp_arry;

    $data["scenario_name"]=$result->scenrio_title;
    $data["scenario_briefing"]=$result->briefing;
    $data["exercise_name"]=$result->exercise_name;
    $data["start_status"]=$result->start_status;
    $data["exercise_start_date"]=$result->exercise_start_date;
    $data["set_up_id"]=$result->id;
    $data["scenario_id"]=$result2->id;
    // print_r($data["scenario_id"]);die;




    if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1  AND user_id='. $usernameID)->getResult()){
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
  $fstl=$tempvv->firstname;
  $lstl=$tempvv->lastname;
  $data["firstletter"]=$fstl[0];
  $data["lastletter"]=$lstl[0];
  $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1) AND user_id='. $usernameID)->getResultArray();
  $data["usernameID"]=$usernameID; 
    //   echo view('layout/set_up_header2');
    echo view('layout/header0',$data);
    echo view("single_player_result",$data);
    }
    elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult()){
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
      $fstl=$tempvv->firstname;
      $lstl=$tempvv->lastname;
      $data["firstletter"]=$fstl[0];
      $data["lastletter"]=$lstl[0];



      $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
      // print_r( $data['admin']);die;
        //   echo view('layout/set_up_header2');
        $data["usernameID"]=$usernameID;
        echo view('layout/header1',$data);
        echo view("single_player_result",$data);
    }
    else{
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
      $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
  $fstl=$tempvv->firstname;
  $lstl=$tempvv->lastname;
  $data["firstletter"]=$fstl[0];
  $data["lastletter"]=$lstl[0];
  $data["usernameID"]=$usernameID;
        echo view('layout/student_header',$data);
        echo view("single_player_result",$data); 
    }



    // return view("single_player_result");
   }
  

    
    //end
    public function delete(){
      $session = session();//abhishek
      $username =$session->get('username');
      $SessionModel = new SessionModel();
      $userData = $SessionModel->where('email',$username)->first();
      $usernameID = $userData['id'];
      $db=\Config\Database::connect();
    
      $tablenm=$db->prefixTable("result");
      $tablenm2=$db->prefixTable("player_assignment");
    
      $setup_id=$this->request->getVar("setup_id_val");
     
     
      $scenrio=$db->query("SELECT * FROM $tablenm WHERE player_setup_id=$setup_id AND user_id=$usernameID AND status=0")->getFirstRow();
      $scenrio2=$db->query("SELECT * FROM $tablenm2 WHERE singlep_id=$setup_id AND userid=$usernameID AND status=1")->getFirstRow();
    
       if($scenrio){
        $json["set_up_id"]=$scenrio->player_setup_id;
        
          $db->table("result")->where('status',0)->delete();
        
          
       }
       else{
        echo view("crisis"); 
       }
       if($scenrio2){
        $assign_id=$scenrio2->id;
        // print_r($assign_id);die;
        $play_data=['status'=>0,'end_date1'=>''];
        // print_r($assign_id);die; 
        $db->table("player_assignment")->where("id",$assign_id)->update($play_data);
      }
      
      $json["success"]=true;
      echo json_encode($json);
    }


    public function justy_Data(){
      $json=array();
      // $why=$this->request->getVar("otinput");
      $why = $this->request->getPost('why');
      $d['confidence_response']=$why;
      // $d['just_status']=1;
      $d1['confidence_response']=$why;
      $db=\Config\Database::connect();
    
      $tablenm=$db->prefixTable("result");
   $confi_data=$db->query("SELECT * FROM $tablenm WHERE status=0 AND confidence_response!='' AND just_status=0 ")->getFirstRow();
   $pit=$confi_data->confidence_response;
   $pit2=$confi_data->just_status;
   $pit3=$confi_data->id;
  //  print_r($pit3);die;
   $json['ste']=$pit3;
   if($pit==0 && $pit2==0){
    $confi_data2=$db->query("SELECT * FROM $tablenm WHERE id=$pit3 ")->getFirstRow();
    $result_id=$confi_data2->id;
    
    // print_r($result_id);
 $db->table('result')->where('id',$result_id)->update($d);
   }
   else{
    $confi_data2=$db->query("SELECT * FROM $tablenm WHERE id=$pit3 ")->getFirstRow();
    // print_r($confi_data2);die;
    $result_id=$confi_data2->id;
   
 $db->table('result')->where('id',$result_id)->update($d);
   }

   $json["success"]=true;
 echo json_encode($json);


    }

    public function justification_Data(){
      $json=array();
      // $why=$this->request->getVar("otinput");
      $justification = $this->request->getPost('justification');
      // print_r($what);die;
      $d['justification']=$justification;
      // $d['just_status']=1;
      $d1['justification']=$justification;
      $db=\Config\Database::connect();
    
      $tablenm=$db->prefixTable("result");
   $confi_data=$db->query("SELECT * FROM $tablenm WHERE status=0 AND justification!='' AND just_status=0 ")->getFirstRow();
   $pit=$confi_data->justification;
   $pit2=$confi_data->just_status;
   $pit3=$confi_data->id;
   $json['ste']=$pit3;
   if($pit==0 && $pit2==0){
    $confi_data2=$db->query("SELECT * FROM $tablenm WHERE id=$pit3 ")->getFirstRow();
    $result_id=$confi_data2->id;
    
    // print_r($result_id);
 $db->table('result')->where('id',$result_id)->update($d);
   }
   else{
    $confi_data2=$db->query("SELECT * FROM $tablenm WHERE id=$pit3 ")->getFirstRow();
    // print_r($confi_data2);die;
    $result_id=$confi_data2->id;
   
 $db->table('result')->where('id',$result_id)->update($d);
   }

   $json["success"]=true;
 echo json_encode($json);


    }




    public function publishdata($spid){
    	// $data
      // print_r($spid);die;
    	$data=array();
    	$db=\Config\Database::connect();
      $session = session();//abhishek
      $username =$session->get('username');
      $SessionModel = new SessionModel();
      $userData = $SessionModel->where('email',$username)->first();
      $usernameID = $userData['id'];
      $time=time();
      $result_just=$db->query("SELECT * FROM imr_result WHERE user_id=$usernameID AND player_setup_id=$spid AND just_status=0")->getFirstRow();
      if($result_just){
        $result_just_id=$result_just->id;
        $data_just_rank['just_status']=1;
        $db->table("result")->where("id",$result_just_id)->update($data_just_rank);
      
      }




      $data_result1['end_date']=$time;
      $data_result1['status']=1;
      $data_update=['status'=>0,'user_id'=>$usernameID,'player_setup_id'=>$spid];
      $db->table("result")->where($data_update)->update($data_result1);
      

    $tablenm=$db->prefixTable("single_player_setup");
    $tablenm2=$db->prefixTable("crisis_scenrio");
    $tablenm3=$db->prefixTable("scenario_role_cate");
    $tablenm4=$db->prefixTable("scenario_role");
    $tablenm5=$db->prefixTable("player_assignment");
    $tablenm6=$db->prefixTable("user");
    $tablenm7=$db->prefixTable("result");
    $data['roles']=array();
    $data['assignusers_val']=array();
     $result=$db->query("SELECT tb1.*,tb2.scenrio_title,tb2.briefing FROM $tablenm tb1 LEFT JOIN $tablenm2 tb2 ON tb1.crisis_scenario_id=tb2.id WHERE tb1.id=$spid")->getFirstRow();
     $result2=$db->query("SELECT tb2.scenrio_title,tb2.briefing,tb2.id FROM $tablenm tb1 LEFT JOIN $tablenm2 tb2 ON tb1.crisis_scenario_id=tb2.id WHERE tb1.id=$spid")->getFirstRow();

    //  print_r($result2);die;
     if($result){
       $scid=$result->crisis_scenario_id;
       $temp=$db->query("SELECT * FROM $tablenm3 WHERE crisis_scenario_id=$scid")->getResultArray();
       $temp_arr=$db->query("SELECT tb1.*,tb2.firstname as fname FROM $tablenm5 tb1 LEFT JOIN $tablenm6 tb2 ON tb1.userid=tb2.id WHERE tb1.singlep_id=$spid")->getResultArray();
       $temp_arr2=$db->query("SELECT tb1.*,tb2.firstname as fname FROM $tablenm7 tb1 LEFT JOIN $tablenm6 tb2 ON tb1.user_id=tb2.id WHERE tb1.player_setup_id=$spid")->getResultArray();
      //  print_r($temp_arr2);die;
          $data['roles']=$temp;
          $data['assignusers_val']=$temp_arr;
          $data['assignusers_result']=$temp_arr2;

     }
     $Allroles=$db->query("SELECT * FROM $tablenm4")->getResultArray();
     $temp_arry=array();
     foreach ($Allroles as $rkey => $rvalue) {
       # code...
       $temp_arry[$rvalue['id']]=$rvalue['scenario_role_name'];
     }
     $data["rolesinfo"]=$temp_arry;

    $data["scenario_name"]=$result->scenrio_title;
    $data["scenario_briefing"]=$result->briefing;
    $data["exercise_name"]=$result->exercise_name;
    $data["start_status"]=$result->start_status;
    $data["exercise_start_date"]=$result->exercise_start_date;
    $data["set_up_id"]=$result->id;
    $data["scenario_id"]=$result2->id;
    // print_r($data["scenario_id"]);die;




    if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1  AND user_id='. $usernameID)->getResult()){
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
  $fstl=$tempvv->firstname;
  $lstl=$tempvv->lastname;
  $data["firstletter"]=$fstl[0];
  $data["lastletter"]=$lstl[0];
  $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1) AND user_id='. $usernameID)->getResultArray();
  $data["usernameID"]=$usernameID; 
    //   echo view('layout/set_up_header2');
    echo view('layout/header0',$data);
    echo view("single_player_result",$data);
    }
    elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult()){
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
      $fstl=$tempvv->firstname;
      $lstl=$tempvv->lastname;
      $data["firstletter"]=$fstl[0];
      $data["lastletter"]=$lstl[0];



      $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
      // print_r( $data['admin']);die;
        //   echo view('layout/set_up_header2');
        $data["usernameID"]=$usernameID;
        echo view('layout/header1',$data);
        echo view("single_player_result",$data);
    }
    else{
      $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
      $data['admin']=  $db->query('SELECT role_id FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResultArray();
  $fstl=$tempvv->firstname;
  $lstl=$tempvv->lastname;
  $data["firstletter"]=$fstl[0];
  $data["lastletter"]=$lstl[0];
  $data["usernameID"]=$usernameID;
        echo view('layout/header1',$data);
        echo view("single_player_result",$data); 
    }



    }

  // code by Piyusha
}

