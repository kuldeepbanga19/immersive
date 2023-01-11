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
use App\Models\injectDataDb;
use App\Models\OtherAnswerDb;

class Play_presentation_other extends BaseController
{
protected $sessionVar;
 protected $injectMd;
 public function __construct()
  {
   $session = session();
    if(0){
        	 return redirect()->to('login');	
      }
      
      $_SESSION["question_session"]=192;
      $this->injectMd=new injectDb();
      $this->sessionVar=session();
      helper(['form','gettime']);
 }


// view scenario dashboard
public function other_exer($spid=null)
{	

$session = session();
if(0){
         return redirect()->to('login');	
  }

else{ 
    
  helper(['form', 'url']);

  // $data['spid']=$spid;
  // $db = \Config\Database::connect();
        // $session = session();//abhishek
        // $username ;
        // $SessionModel = new SessionModel();
        // $userData = $SessionModel->where('email',$username)->first();
        // $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
    
        //   echo view('layout/header2',$data);
  

          return view('presentation_other_window');
    }



}

// view scenario dashboard
public function reveal_option($spid=null)
{	

$session = session();
if(!$session->has('us')){
         return redirect()->to('login');	
  }

else{ 
    
  helper(['form', 'url']);

  $data['spid']=$spid;
  $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){
        //   echo view('layout/header2',$data);
          return view('presentation_option_window',$data);
        }
        else{
            // echo view('layout/header1');
            return view('presentation_option_window'); 
        }
    


}
}
public function respon_option($spid=null)
{	

$session = session();
if(0){
         return redirect()->to('login');	
  }

else{ 
    
  helper(['form', 'url']);

  $data['spid']=$spid;
  $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=1 or role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult();
        if ($getrole){
        //   echo view('layout/header2',$data);
          return view('presentation_respon_window',$data);
        }
        else{
            // echo view('layout/header1');
            return view('presentation_respon_window'); 
        }
    


}
}


public function question_fecth()
{ 

$injectDataDb = new injectDataDb();

$OtherAnswerDb = new OtherAnswerDb();
$OtherAnswer_data=$OtherAnswerDb->where('user_id',1)->first();
 $qid=$OtherAnswer_data['question_id'];
//$qid=196;
$question=$injectDataDb->where('id',$qid)->first();
$db = \Config\Database::connect();
 $imr_inject_data=$db->preFixtable("inject_option");
 //print_r();
$imr_inject_data_sql="select * from $imr_inject_data where inject_id=$qid";
 $option_data=$db->query($imr_inject_data_sql)->getResultArray();
$option_div="<form id='myForm'>";
foreach ($option_data as $key => $value) {

   $option_div.='<div class="optionvals">
        <p class="quition"><i class="fa fa-check"></i> Choose Your Response</p>
        <div class="opt_v">

          <div class="d-flex gap-3 customLorem">
            <input type="radio" class="optinput" name="optinput" value="'.$value['option_title'].'"> 
            <div>
              <p class="title">'.$value['option_title'].'</p>
              <p class="dec">'.$value['option_description'].'</p>
            </div>
          </div>
          </div>

                 ';



}
$url=base_url();
$option_div.='
</form>
         <button type="button" id="save_answer">sumite</button>
         </form>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script type="text/javascript">


  $( document ).ready(function() {
      $("#save_answer").click(function() {
 var answer = $("input[name=optinput]:checked", "#myForm").val();
 if(typeof answer == "undefined"){
  return alert("please select option")
};
$.ajax({
               method:"POST",
               async:false,
               dataType:"json",
               url:"'.$url.'/Play_presentation_other/question_other_answer",
               data:{answer:answer},
               success:function(json){
            
$("#save_answer").hide();
$("#question").hide();   
$("#qdiv").hide();
$(".server").css("display","block");
               }
            });

});
});';

$questin_div='<div class="opt_v">
              <!-- <p>option1</p><p> -->
                <div class="d-flex gap-3 customLorem">
                 Question :
                  <div>
                    <p class="dec" id="question">'.$question['description'].'</p>
                  </div>
                 
              </div>
              </div>
';


    $json = array();
    $json['success'] = true;
    $json['option']=$option_div;
    $json['question']=$questin_div;
  echo json_encode($json);

}


public function question_other_answer()
{ 

$OtherAnswerDb = new OtherAnswerDb();
$OtherAnswer_data=$OtherAnswerDb->where('user_id',1)->first();

$OtherAnswer_data['answer'];

 $answer = $this->request->getVar('answer');
 
$answer1='"'.$answer.',"';

$db = \Config\Database::connect();
 $other_answer_table=$db->preFixtable("other_answer");
 //print_r();

 $sql="update  $other_answer_table SET answer = CONCAT(answer,$answer1) WHERE id=1";
 $option_data=$db->query($sql);

if($option_data){
    $json = array();
    $json['success'] = true;
  echo json_encode($json);
  }
}





}

