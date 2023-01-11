<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\SessionModel;
use App\Models\UsersDb;
use App\Models\User_RoleDb;
use App\Models\RoleDb;
use App\Models\Industory_sectorDb;
use App\Models\Attack_vectorDb;
use App\Models\Threat_actorDb;

class User extends BaseController
{
 

 


    public function __construct(){

        $session = session();
        if(!$session->has('us')){
            return redirect()->to('login');
        }
    
    }
    
	public function index()
	{
		// echo  $base_path;
		// die("here testesd");
    helper(['form', 'url']);
        $session = session();
        if($session->has('us')){
        	 return redirect()->to('new_index');	
        }
        else{
       		$data = [];
			$data['head'] = 'Login';

			echo view('login');
			
        }
	}

    public function signin()
	{
    helper(['form', 'url']);
		$uname = $this->request->getVar('email');
		$pwd = $this->request->getVar('password');
		$password = md5($pwd);
		// $RoleListDb = new RoleListDb();
		// $RoleDb = new RoleDb();
       
		$new = new SessionModel();
		$data = ['email' => $uname, 'password' => $password,'admin_permission'=>1];
		$values = $new->where($data)->first();
		
		$session = session();
        // var_dump($data);die;
		if($values){
			$session->setFlashdata('login','Login Success');
			$session->set('us',$values['email']);
			$session->set('username', $uname);
			$session->set('fullname',$values['firstname']." ".$values['lastname']);
				
			$session->set('userid', $values['id']);
			// $RoleList_data = $RoleListDb->where("user_id",$values['id'])->first();
			// $Role_data = $RoleDb->where("id",$RoleList_data["role_id"])->first();
			// if(!$Role_data){
			// 		$session->setFlashdata('login','role not assign please contact admin');
			// 		$data = [];
			// 		$data['head'] = 'Login';
			// 		echo view('layout/loginheader',$data);
			// 		echo view('login');
			// 		echo view('layout/loginfooter');
			// 		return;
			// 	}
			// $session->set('role',$Role_data['role']);

			// if($Role_data['role'] == 'sale user'){ return redirect()->to(base_url('Promotion')); }

			 return redirect()->to('new_index');	
		}
		else{
			$session->setFlashdata('login','Login Fail');
			$data = [];
			$data['head'] = 'Login';
			
			echo view('login');
			
		}
		
	}
        public function new_index() {
          $session = session();
          if(!$session->has('us')){
              return redirect()->to('login');
          }
    else{  
        $db = \Config\Database::connect();
        $session = session();//abhishek
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
        
        if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1  AND user_id='. $usernameID)->getResult()){
            $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
            $fstl=$tempvv->firstname;
            $lstl=$tempvv->lastname;
            $data["firstletter"]=$fstl[0];
            $data["lastletter"]=$lstl[0];


// code By Piyusha
$usertb2=$db->prefixTable("player_assignment");
$usertb=$db->prefixTable("single_player_setup");         
      
$userPresent2= $db->query("SELECT userid FROM $usertb2 WHERE userid=$usernameID")->getResultArray();
// print_r($userPresent2);die;
 $assigneddata_data=$db->query("SELECT us.*,usag.status,usag.end_date1 FROM $usertb2 usag LEFT JOIN $usertb us ON usag.singlep_id=us.id WHERE us.published_status=1 AND (us.set_up_type=1 or us.set_up_type=2 or us.set_up_type=3)  AND usag.singlep_id=us.id AND usag.userid=$usernameID ORDER BY us.id DESC ")->getResultArray();
// print_r($assigneddata_data);die;
  $tempdata=$db->query("SELECT * FROM $usertb WHERE published_status=1 AND set_up_type=3 ORDER BY id DESC ")->getResultArray();
  foreach ($tempdata as $tkey => $tvalue) {
   $assigneddata_data[]= $tvalue;
    # code...
  }
            
           
    
       $userPresent= $db->query("SELECT created_by FROM $usertb WHERE created_by=$usernameID")->getResultArray();
       $Manage_by_me= $db->query("SELECT count(id) as max_no FROM $usertb WHERE created_by=$usernameID")->getRow();
       $data['manage_by_me']= $Manage_by_me->max_no; 
    //    print_r($data['published']);die;
      if($userPresent!=''){
        $data2=array();
        $presentation_data=$db->query("SELECT * FROM $usertb WHERE published_status=1 AND created_by=$usernameID ORDER BY id DESC LIMIT 4 ")->getResultArray();
        // print_r($presentation_data);die;
        $data2["presentation_data"]= $presentation_data;
        $data2['assigned_to_me']= count($assigneddata_data);

        
	$companyDb = new Industory_sectorDb();
	$data2['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();

    $attack_vectorDb = new Attack_vectorDb();
	$data2['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
  $threat_actorDb = new Threat_actorDb();
	$data2['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();


   $data2["assigneddata"]=$assigneddata_data;
//    print_r($data2["assigneddata"]);die;
        echo view('layout/header0',$data);
        echo view('new_index',$data2);
        echo view('layout/footer',$data);
      }
         else{

           $data2["assigneddata"]=$assigneddata_data;
            echo view('layout/header0',$data);
        echo view('new_index'); 
        echo view('layout/footer',$data);
         }  



            // end
        }
        elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE (role_id=2 or role_id=3) AND user_id='. $usernameID)->getResult()){
            $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
            $fstl=$tempvv->firstname;
            $lstl=$tempvv->lastname;
            $data["firstletter"]=$fstl[0];
            $data["lastletter"]=$lstl[0];


// code By Piyusha
$usertb2=$db->prefixTable("player_assignment");
$usertb=$db->prefixTable("single_player_setup");         
      
$userPresent2= $db->query("SELECT userid FROM $usertb2 WHERE userid=$usernameID")->getResultArray();
// print_r($userPresent2);die;
 $assigneddata_data=$db->query("SELECT us.* FROM $usertb2 usag LEFT JOIN $usertb us ON usag.singlep_id=us.id WHERE us.published_status=1 AND (us.set_up_type=1 or us.set_up_type=2 or us.set_up_type=3)  AND usag.singlep_id=us.id AND usag.userid=$usernameID ORDER BY us.id DESC")->getResultArray();

  $tempdata=$db->query("SELECT * FROM $usertb WHERE published_status=1 AND set_up_type=3 ORDER BY id DESC ")->getResultArray();
  foreach ($tempdata as $tkey => $tvalue) {
   $assigneddata_data[]= $tvalue;
    # code...
  }
            
           
    
       $userPresent= $db->query("SELECT created_by FROM $usertb WHERE created_by=$usernameID")->getResultArray();
       $Manage_by_me= $db->query("SELECT count(id) as max_no FROM $usertb WHERE created_by=$usernameID")->getRow();
       $data['manage_by_me']= $Manage_by_me->max_no; 
    //    print_r($data['published']);die;



    if($userPresent!=''){
        $data2=array();
        $presentation_data=$db->query("SELECT * FROM $usertb WHERE published_status=1 AND created_by=$usernameID ORDER BY id DESC LIMIT 4")->getResultArray();
        // print_r($usernameID);die;
        $data2["presentation_data"]= $presentation_data;
        
        $data2['assigned_to_me']= count($assigneddata_data);

        
	$companyDb = new Industory_sectorDb();
	$data2['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();

    $attack_vectorDb = new Attack_vectorDb();
	$data2['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
  $threat_actorDb = new Threat_actorDb();
	$data2['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();


   $data2["assigneddata"]=$assigneddata_data;

//    print_r($data["firstletter"]);die;
   
        echo view('layout/header1',$data);
        echo view('new_index',$data2);
        echo view('layout/footer',$data);
      }
         else{
            $data2["assigneddata"]=$assigneddata_data;
            echo view('layout/student_header',$data);
        echo view('new_index2'); 
        echo view('layout/footer',$data);
         }  



            // end
        }
        else{

            // code By Piyusha
$usertb2=$db->prefixTable("player_assignment");
$usertb=$db->prefixTable("single_player_setup");         
      
$userPresent2= $db->query("SELECT userid FROM $usertb2 WHERE userid=$usernameID")->getResultArray();
// print_r($userPresent2);die;

// commented by piyusha to hide set up type 3
//  $assigneddata_data=$db->query("SELECT us.* FROM $usertb2 usag LEFT JOIN $usertb us ON usag.singlep_id=us.id WHERE us.published_status=1 AND (us.set_up_type=1 or us.set_up_type=2 or us.set_up_type=3)  AND usag.singlep_id=us.id AND usag.userid=$usernameID ORDER BY us.id DESC")->getResultArray();

// end

 $assigneddata_data=$db->query("SELECT us.* FROM $usertb2 usag LEFT JOIN $usertb us ON usag.singlep_id=us.id WHERE us.published_status=1 AND (us.set_up_type=1 or us.set_up_type=2)  AND usag.singlep_id=us.id AND usag.userid=$usernameID ORDER BY us.id DESC")->getResultArray();
// print_r($assigneddata_data);die;



// commented by piyusha to hide set up type 3
  // $tempdata=$db->query("SELECT * FROM $usertb WHERE published_status=1 AND set_up_type=3 ORDER BY id DESC ")->getResultArray();
  // foreach ($tempdata as $tkey => $tvalue) {
  //  $assigneddata_data[]= $tvalue;
  //   # code...
  // }

  // end
  $data2['assigned_to_me']= count($assigneddata_data);    
       
            $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
            $fstl=$tempvv->firstname;
            $lstl=$tempvv->lastname;
            $data["firstletter"]=$fstl[0];
            $data["lastletter"]=$lstl[0];
            


        
            $companyDb = new Industory_sectorDb();
            $data2['IndustoryData'] = $companyDb->orderBy('LTRIM(industory_name)')->findAll();
        
            $attack_vectorDb = new Attack_vectorDb();
            $data2['AttackData'] = $attack_vectorDb->orderBy('LTRIM(attack_name)')->findAll();
          $threat_actorDb = new Threat_actorDb();
            $data2['ThreatData'] = $threat_actorDb->orderBy('LTRIM(threat_name)')->findAll();
        
        
           $data2["assigneddata"]=$assigneddata_data;

            echo view('layout/student_header',$data);
            echo view('new_index2',$data2); 
            echo view('layout/footer',$data);
        }
            
        }

      }




        public function user() {
            $db = \Config\Database::connect();	
            helper(['form', 'url']);
            $Book_model = new UsersDb();
            $data['users'] = $Book_model->where('deleted = 0')->findAll();

            $rolelist = $db->prefixTable('user_role');
	$role = $db->prefixTable('role');
	$roleListAry = array();
	foreach ($data as $key => $value) {
		foreach ($value as $key => $valu) {
			 $id=$valu['id'];
			 $query = $db->query('SELECT GROUP_CONCAT(tc.rolename,"#",tc.id) FROM '.$rolelist.' LEFT JOIN '.$role.' tc  ON role_id = tc.id WHERE user_id='. $id.'')->getRow();

			foreach ($query as $key => $queryVal) {
				$roleListAry[$id] = $queryVal; 
			}
		}
	}

	$roleDb = new RoleDb();
	$data['roleValue'] = $roleDb->orderBy('rolename')->findAll();

	    $data['roleListAry'] = $roleListAry;

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

        // var_dump( $usernameID);die;
        $getrole = $db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1 AND user_id='. $usernameID)->getResult();
        if ($getrole){
            $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
            $fstl=$tempvv->firstname;
            $lstl=$tempvv->lastname;
            $data["firstletter"]=$fstl[0];
            $data["lastletter"]=$lstl[0];

            echo view('layout/header0',$data);
            echo view('user_view', $data); 
            echo view('layout/footer',$data);
        }
        else{
            $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
            $fstl=$tempvv->firstname;
            $lstl=$tempvv->lastname;
            $data["firstletter"]=$fstl[0];
            $data["lastletter"]=$lstl[0];
            
            echo view('layout/header1',$data);
            echo redirect()->to('new_index');
            echo view('layout/footer',$data); 
        }
        }
            // echo view('layout/header1',$data);
            // return view('user_view', $data);
        }//abhishek
        public function user_add() {
          $session = session();
          if(!$session->has('us')){
              return redirect()->to('login');
          }
          else{
            $uname = $this->request->getVar("uname");
 		$fname = $this->request->getVar("fname");
 		$lname = $this->request->getVar("lname");
 		$passwordVal = $this->request->getVar("password");
 		$password = md5($passwordVal);
 		$email = $this->request->getVar("email");
         $time = new Time('now');
         
         helper(['form', 'url']);

        if (! $this->validate(['uname'=>'required|is_unique[user.username]','fname'=>'required','lname'=>'required','password'=>'required|min_length[7]','email'=>'required|valid_email|is_unique[user.email]'],
        	['uname'=>['required' => 'All accounts must have username provided','is_unique'=>'All accounts must have unique username'],
        	'fname'=>['required' => 'All accounts must have First Name provided'	],
        	'lname'=>['required' => 'All accounts must have Last Name provided'	],
        	'password'=>['required' => 'All accounts must have password provided','min_length'=>'Your {field} is too short.This account may be get hacked?'	],
        	'email'=>['required' => 'All accounts must have  valid email provided And space not allow','valid_email' =>'All accounts must have  valid email provided And space not allow','is_unique'=>'All accounts must have unique email' 	],
        	]))
        {
            
            $json=array();
            $validation =  \Config\Services::validation();
   			$json['msg'] = $validation->listErrors();
			$json['success']=false;
			echo json_encode($json);
			return;
        }
		$userDb=new UsersDb();
		$ary=array('username'=>$uname ,'email'=> $email);
		$userVal = $userDb->where($ary)->first();

		
		if(!is_null($userVal)){
		 	$json=array();
   			$json['msg'] ="This user has already created";
			$json['success']=false;
			echo json_encode($json);
		}

  		else{


  			$data = ['username'=>$uname,'firstname'=>$fname, 'lastname' => $lname ,'email'=>$email,
  			'password' => $password ,  'status' => '1', 'deleted'=>'0','created' =>strtotime($time)];
	 		$userDb->insert($data);

	 	    $json=array();
   			$json['success']=true;
			echo json_encode($json);
		}
        }
    
        }
        
        public function deleteUser($id)
        {  
          $session = session();
          if(!$session->has('us')){
              return redirect()->to('login');
          }
          else{
            $userDb=new UsersDb();  
            //  $userDb->where('id',$id)->delete();
            
             $data = ['deleted' => '1'];
             $userDb->update($id, $data);
             $json=array();
               $json["msg"]="User Successfully Delete !";
             $json['success']=true;
             echo json_encode($json);
          }
        
        
        
        }

        public function editUser($id)
        {  
          $session = session();
          if(!$session->has('us')){
              return redirect()->to('login');
          }else{
            $editUser = $this->request->getVar("edit_User");
            $edit_firstname=$this->request->getVar("edit_firstname");
            $edit_lastname=$this->request->getVar("edit_lastname");
            $edit_password=$this->request->getVar("edit_password");
            $password_new = md5($edit_password);
            $edit_email=$this->request->getVar("edit_email");
          
            $updated_time=time();
           
          helper(['form', 'url']);
          $validation_rule=['edit_User'=>'required|is_unique[user.username,id,'.$id.']','edit_firstname'=>'required','edit_lastname'=>'required','edit_password'=>'required|min_length[7]','edit_email'=>'required|valid_email']; 
         // array_push( $validation_rule,$validate_password);
          $validation_msg=['edit_User'=>['required' => 'User name is required','is_unique'=>'All accounts must have unique username'],
          'edit_firstname'=>['required' => 'First name is required'],
          'edit_lastname'=>['required' => 'Last name is required'],
          'edit_password'=>['required' => 'All accounts must have password provided','min_length'=>'Your {field} is too short.This account may be get hacked?'],
          'edit_email'=>['required'=>'email is required','valid_email' =>'All accounts must have  valid email provided And space not allow' ]
          
         ];
         if (!$this->validate($validation_rule,$validation_msg))
         {
             
             $json=array();
             $validation =  \Config\Services::validation();
                $json['msg'] = $validation->listErrors();
             $json['success']=false;
             echo json_encode($json);
             return;
         }
           
         // print_r($supplierVal);
         // die;
            
         $db  = \Config\Database::connect();
         $builder = $db->table('user');
        //  var_dump($builder);die;
         $data=['username'=>$editUser,'lastname'=>$edit_lastname,'firstname'=>$edit_firstname,'password'=>$password_new,'email'=>$edit_email,'modified'=>$updated_time];
         $builder->update($data, ['id' => $id]);
         
         
         
         $json=array();
          $json['success']=3;
         return json_encode($json);
         
         
         }
        }
         public function logout(){
            $session = session();
            $session->destroy('us');
            $data = [];
            $data['head'] = 'Login';
            helper(['form', 'url']);
            echo view('login');
          	
        }
        
public function showHideUser($id,$status){

    $db = \Config\Database::connect();
    $builder = $db->table('user');
    $builder->update(['status' => $status] , ['id' => $id]);
    $json=array();
    $json['success']=true;
    echo json_encode($json);


    }
    
	 public function assignRole($id)
     {  

        $email = \config\services::email();//abhishek

        $db      = \Config\Database::connect();
        $builder = $db->table('yatharth_immersive.imr_user');

         $roleListDb = new User_RoleDb();

         $usersDb=new UsersDb();

        $session = session();
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        //  $roleListDb->where('user_id', $id)->delete();

         $data1 = [
            'modified' => time(),
            'modofied_by' => $usernameID,
            'admin_permission'    => '1',
        ];
        
        
        //  $usersDb->update($id, $data1);
        $db->table('imr_user')->where('id', $id)->update($data1); 
        //   $roleList =$this->request->getVar('roleList');

        //   $anchor='<a href="'. base_url("/login").'"><p>CLICK HERE TO LOGIN </p></a>';
          $data_email=$db->query("SELECT * FROM yatharth_immersive.imr_user WHERE id=".$id)->getResult();
          foreach($data_email as $key){
          $usernam=$key->username;
          $useremail=$key->email;
          $anchor='<a href="'. base_url("/login").'"><p>CLICK HERE TO LOGIN </p></a>';
          $email->setFrom('Admin@gmail.com','New Registration');
        //   print_r($useremail);die;
        //   }
          $email->setTo($useremail);
          $email->setSubject('LOGIN');
          $email->setMessage('<h2>A NEW USER  '.$usernam.'  HAS REGISTER ON </h2><h1>IMMERSIVE</h1>'.$anchor);
          $email->send();
          }//abhishek

          $roleListDb->where('user_id', $id)->delete();
          $roleList =$this->request->getVar('roleList');
          if(empty($roleList))
          {
              $json=array();
              $json['success']=false;
              $json['msg']="please select role";
               return json_encode($json);
                  }
      
      

      if($roleList){
          
          foreach ($roleList as $key => $roleListVal) {
       $data=['user_id'=>$id ,'role_id'=>$roleListVal];
       $roleListDb->insert($data);
      }

      }

      

      $json=array();
      $json['success']=true;
       echo json_encode($json);

  }


}
?>