<?php
namespace App\Controllers;
use App\Models\Crisis_scenrioDb;
use App\Models\injectDb;
use App\Models\injectDataDb;
use CodeIgniter\Files\File;
class Inject extends BaseController{
  protected $sessionVar;
  protected $injectMd;
  protected $injectdataMd;
  protected $dbv;
  public function __construct(){
           $this->sessionVar=session();
           $this->injectMd=new injectDb();
           $this->injectdataMd=new injectDataDb();
           $this->dbv=\Config\Database::connect();
           helper(['form','gettime']);

  }
  public function index($id,$inj_id=NULL){

    if($this->request->getMethod()=="post"){
    	    $redirecturl=$this->request->getVar("nextsend");

            $injectdata=array();
            $injecttitle=$this->request->getVar("injecttitle");

            // $injct=$this->request->getVar("redio");
            // print_r($injct);die;
            if($injecttitle)
            $injectdata["title"]=$injecttitle;
            $injectdata["role"]=$this->request->getVar("injectrole");
            
            $datval=$this->request->getVar("injectdate");
            $injectdata["date"]=strtotime($datval);

            $timeval=$this->request->getVar("injecttime");
            $injectdata["timetext"]=$timeval;
            if($timeval){
              $injectdata["time"]=strtotime($datval." ".$timeval);
            }

            $injectdata["description"]=$this->request->getVar("injectdescription");
            
            // $filev = $this->request->getFiles('injectfile');
            // foreach ($filev as $img) {
            // var_dump($filev);
            // }
            
            $injectdata["inject_id"]=$this->request->getVar("injectidid");
            $injectdata["status"]=1;
            $injid=$injectdata["inject_id"];
            $filename=array();
            if ($imagefile = $this->request->getFiles()) {
              foreach ($imagefile['injectfile'] as $img) {
           if ($img->isValid() && ! $img->hasMoved()) {
            $filevals="";
             $filevals=$img->getRandomName();
            array_push($filename,$filevals);
            // var_dump($filename);die;
            $findfile=$img->move(WRITEPATH . 'uploads',$filevals);
            // var_dump(WRITEPATH.$findfile);die;
            

     
             }
            }
          }
          $storefile=implode(",",$filename);
          // var_dump($testff);die;
          $injectdata["file"]=$storefile;
            
             $this->injectdataMd->updatedatainject($injectdata,$injectdata["inject_id"]);
             //option update.
             $max_options=$this->injectdataMd->getlastoption($injectdata["inject_id"]);
             if($max_options){
                 
                  $optiondata=[];
                  
               for($it=1;$it<=$max_options;$it++){
                  
                  $optiondata["inject_id"]=$injid;
                  $optiondata["option_title"]=$this->request->getVar("optionname".$it);
                  $optiondata["option_description"]=$this->request->getVar("optiondescrip".$it);
                  $optiondata["option_feedback"]=$this->request->getVar("optionfeed".$it);
                  $optiondata["option_justification"]=$this->request->getVar("optionjustify".$it);
                  $optiondata["option_justification_option"]=$this->request->getVar("redio");
                   $optiondata["option_rank"]=$this->request->getVar("optionrank".$it);
                  $optiondata["value"]=$this->request->getVar("selectopt".$it);
                  $optiondata["order_no"]=$it;
                
                  $this->injectdataMd->updateoption($optiondata,$injid);
               }
             }


        // 
         $db=\config\Database::connect();
         $injectoptionvals=$this->injectMd->getinjectoptions($injid);
         $pefromancetable=$db->preFixtable("performance_indicator");
         $performancevals=$db->query("SELECT * FROM $pefromancetable WHERE crisis_scenario_id=$id")->getResultArray();
         
         foreach($injectoptionvals as $injectop){

            foreach ($performancevals as $prkey => $prvalue) {
                  $dval=$this->request->getVar($injectop->id."pval".$prvalue["id"]);
                  $this->injectdataMd->updateindicatoroption($dval,$prvalue["id"],$injectop->id);
             }

         }

        //redirect code

         return redirect()->to($redirecturl);



        //     
       
    }

    
    $userid=$this->sessionVar->get("userid");
    $data=[];
    $data["prev_tag"]="Performance Indicators";
    $data["next_action"]=base_url()."/Scenario_epilogue/scenario_epilogue/".$id;
    $data["next_tag"]="Epilogue";
    $data["prev_action"]=base_url()."/Scenario_performance/scenario_performance/".$id;
     $inject_data_info=$this->injectdataMd->getinjectdata($inj_id);
     if($inject_data_info){
     
      if($inject_data_info->status)   
      $data["injtitle"]=$inject_data_info->title;

      $data["injdescription"]=$inject_data_info->description;
      if($inject_data_info->date)
      $data["injectdate"]=date('Y-m-d', $inject_data_info->date);
      
      $data["injecttime"]=$inject_data_info->timetext;
      $data["injectrole"]=$inject_data_info->role;
     }
     $last_option=$this->injectdataMd->getlastoption($inj_id);
     $option_data_val=array();
     for($j=1;$j<=$last_option;$j++){
       $temp_array=array();
       $optiondata_st=$this->injectdataMd->getoptioninfo($inj_id,$j);
       $temp_array["option_title"]=$optiondata_st->option_title;
       $temp_array["option_descp"]=$optiondata_st->option_description;
       $temp_array["option_feed"]=$optiondata_st->option_feedback;
       $temp_array["option_justification"]=$optiondata_st->option_justification;
       $temp_array["option_rank"]=$optiondata_st->option_rank;
       $temp_array["option_val"]=$optiondata_st->value;
       if($optiondata_st){
        
         $option_data_val[$j]=$temp_array;
 
       }
      
     }
     $data["options_dataval"]=$option_data_val;
    
    $userModel = new Crisis_scenrioDb();
            $data['user_obj'] = $userModel->where('id', $id)->first();
       if($data['user_obj']['modified']){
           $data['time']=$data['user_obj']['modified'];
         }
       else{
           $data['time']=$data['user_obj']['created'];
        }
        $option_array=[0=>"Select inject",-1=>"End scenario",-2=>"Create new inject"];



        $rankoption=[0=>"Select Rank",1=>"Weak Answer",2=>"Okay Answer",3=>"Good Answer",4=>"Great Answer"];
        $injects=$this->injectMd->getAllinjects($id,$userid);

        if($inj_id){
            $data['inject_options']=$this->injectMd->getinjectoptions($inj_id);
            foreach($injects as $inject){
              if($inject->id==$inj_id)continue;
             $option_array[$inject->id]=$inject->title;
             
            }
            $rls=$this->injectMd->getAllroles($id,$userid);
            
            if($rls)
            $data["scenar_roles"]=$rls;
           // $injectdata=$this->injectMd->getinjectData($inj_id);
        }
        if($inj_id) {
            
             $db=\config\Database::connect();
             $injectTb=$db->preFixtable("injects");
             $injectdTb=$db->preFixtable("inject_data");
             $datatemp=$db->query("SELECT * FROM $injectTb WHERE id=$inj_id")->getFirstRow();
             $nextvall=($datatemp->order_id)+1;
             $nextdata=$db->query("SELECT inj.*,injd.title FROM $injectTb inj LEFT JOIN $injectdTb injd ON inj.id=injd.inject_id WHERE inj.scenario_id=$id AND inj.created_by=$userid AND inj.order_id=$nextvall")->getFirstRow();
             $prevall=($datatemp->order_id)-1;
             $prevdata=$db->query("SELECT inj.*,injd.title FROM $injectTb inj LEFT JOIN $injectdTb injd ON inj.id=injd.inject_id WHERE inj.scenario_id=$id AND inj.created_by=$userid AND inj.order_id=$prevall")->getFirstRow();
             
             if($nextdata){
               $data["next_tag"]=$nextdata->title;
               $data["next_action"]=base_url()."/inject/index/".$id.'/'.$nextdata->id;
             }
             if($prevdata){
              $data["prev_tag"]=$prevdata->title;
               $data["prev_action"]=base_url()."/inject/index/".$id.'/'.$prevdata->id;

             }
              
        }
      
         $db=\config\Database::connect();
         $pefromancetable=$db->preFixtable("performance_indicator");
         $performancedata=$db->query("SELECT * FROM $pefromancetable WHERE crisis_scenario_id=$id AND modified>0")->getResultArray();
         // print_r($performancedata);die;
         if($performancedata){
          $data["performance_indicators"]=$performancedata;
         }
         $feedtable=$db->preFixtable("feedback_performance");
         $feeddata=$db->query("SELECT * FROM $feedtable WHERE crisis_scenario_id=$id AND feedback_type>0")->getResultArray();
         // print_r($performancedata);die;
         if($feeddata!=''){
          $data["performance_feedback"]=$feeddata;
         }
         $justifydata=$db->query("SELECT * FROM $feedtable WHERE crisis_scenario_id=$id AND justification_response=1")->getResultArray();
         // print_r($performancedata);die;
         if($justifydata!=''){
          $data["justification_response"]=$justifydata;
         }
         $rankdata=$db->query("SELECT * FROM $feedtable WHERE crisis_scenario_id=$id AND rank_option=1")->getResultArray();
         // print_r($performancedata);die;
         if($rankdata!=''){
          $data["rank_option"]=$rankdata;
         }

        $data["injectval"]=$inj_id;
        $data["scenarioid"]=$id;
        $data["optionarray"]=$option_array;
        $data["rank_option_data"]=$rankoption;
        $data["scenar_injects"]=$injects;
       echo view('layout/side-bar',$data);
       echo view("injects",$data);
        
  }
  public function create($id=3){
         $userid=$this->sessionVar->get("userid");
         
         if($userid){
           $order_no=1;
           $injectid=$this->injectMd->createinject($userid,$id);
           $options=$this->injectMd->addoption($injectid,$order_no); 

         }

         
       return redirect()->to(base_url().'/inject/index/'.$id.'/'.$injectid);


  }
  public function quickcreate($id){

         $userid=$this->sessionVar->get("userid");
         $json=array();
         if($userid){
           $order_no=1;
           $injectid=$this->injectMd->createinject($userid,$id);
           $options=$this->injectMd->addoption($injectid,$order_no);
           $json["success"]=true; 

         }
         

         echo json_encode($json);

  }
  public function addoption($sid){
        $json=array();
        $data=array();
        
        $injectid=$this->request->getVar("injectidid");
        $option_array=[0=>"Select inject",-1=>"End scenario",-2=>"Create new inject"];

        $rankoption=[0=>"Select Rank",1=>"Weak Answer",2=>"Okay Answer",3=>"Good Answer",4=>"Great Answer"];
        if($injectid){
           $userid=$this->sessionVar->get("userid");
          $optionval=$this->injectMd->addoption($injectid);
            $data["endval"]=$optionval['orderno'];
            $data["option_id"]=$optionval['optionid'];
            $injectvalues=$this->injectMd->getAllinjects($sid,$userid);
            $inject_count=1;
            foreach($injectvalues as $inject){
              if($inject->id==$injectid)continue;
             $option_array[$inject->id]="inject ".$inject->order_id;
             $inject_count++;
            }  

        }
         $db=\config\Database::connect();
         $pefromancetable=$db->preFixtable("performance_indicator");
         $performancedata=$db->query("SELECT * FROM $pefromancetable WHERE crisis_scenario_id=$sid")->getResultArray();
         if($performancedata){
          $data["performance_indicators"]=$performancedata;
         }
        
         $feedtable=$db->preFixtable("feedback_performance");
         $feeddata=$db->query("SELECT feedback_type FROM $feedtable WHERE crisis_scenario_id=$sid AND feedback_type>0")->getResultArray();
         // print_r($performancedata);die;
         if($feeddata){
          $data["performance_feedback"]=$feeddata;
         }

         $justifydata=$db->query("SELECT * FROM $feedtable WHERE crisis_scenario_id=$sid AND justification_response=1")->getResultArray();
         // print_r($performancedata);die;
         if($justifydata!=''){
          $data["justification_response"]=$justifydata;
         }
         $rankdata=$db->query("SELECT * FROM $feedtable WHERE crisis_scenario_id=$sid AND rank_option=1")->getResultArray();
         // print_r($performancedata);die;
         if($rankdata!=''){
          $data["rank_option"]=$rankdata;
         }
        $data["options"]=$option_array;

        $data["rankoption_data"]=$rankoption;
    $json["success"]=true;
    $json["html"]=view("addoption",$data);
    echo json_encode($json);

  }

  public function checkforloop(){
  	$json=array();
  	
   $targetinj=$this->request->getVar("targinjval");
   $currinj=$this->request->getVar("currinjval");
    if($this->isloop($targetinj,$currinj)){
    	$json['isloop']=true;
    }
  	$json['success']=true;
  	echo json_encode($json);
  }
  public function isloop($targetinj,$currinj){
  	   if($targetinj<0)
  	   	return false;
       if($targetinj==$currinj)
       	return true;

       $injects=$this->dbv->query("SELECT * FROM imr_inject_option where inject_id=$targetinj")->getResultArray();
        foreach ($injects as $ikey => $ivalue) {
       	 $temp=$this->isloop($ivalue["value"],$currinj);
       	 if($temp==true){
       	 	
       	 	return true;
       	   }
       	
        }

   }

}



?>