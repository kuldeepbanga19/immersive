<?php namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\SessionModel;
use App\Models\RoleDb;
use App\Models\Industory_sectorDb;
use App\Models\Attack_vectorDb;
use App\Models\Threat_actorDb;

use App\Models\Scenario_roleDb;
use App\Models\User_RoleDb;

class Scenario_role extends BaseController
{
 
 public function __construct()
  {
   $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }
 }


public function index()
	{	

  $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }

	else{ 
        
        helper(['form', 'url']);
        $role = new Scenario_roleDb();
        $data['Scenario_role'] = $role->findAll();
        echo view('layout/header',$data);
        return view('scenario_role', $data);


    }

     
	
	  
	}  


	public function addThreat()
	{    

		

		$role =	$this->request->getVar('role');
        $role_brief = $this->request->getVar('role_brief');
    $time = new Time('now');
    $session = session();
    $username =$session->get('username');

   
    $SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    $usernameID = $userData['id'];
   
		$id=0;
		 $validation_rule=['role'=>'required|is_unique[scenario_role.scenario_role_name,id,'.$id.']'];


      $validation_msg=['role'=>['required' => 'Please provide the Scenario Role Name ']];

             if (!$this->validate($validation_rule,$validation_msg))
                             {
                                    
                                    $json=array();
                                    $validation =  \Config\Services::validation();
                                    $json['msg'] = $validation->listErrors();
                                    $json['success']=false;
                                    echo json_encode($json);
                                    return;
                                }




		$database=new Scenario_roleDb();
		$roleDB = $database->where('scenario_role_name',$role)->first();
  			$data = ['scenario_role_name'=>$role,'status'=>1,'created' =>strtotime($time),'created_by'=>$usernameID,'role_briefing'=>$role_brief];
	 			$database->insert($data);
	 	    $json=array();
   			$json['success']=true;
				echo json_encode($json);
		

	}




	

	public function listingRole()
		{
			$roleDatabase=new RoleDb();
			if($this->request->getVar('filter_val')!=null){ 
	 $filter_val = $this->request->getVar('filter_val');
	
	$data['roleValue']=$roleDatabase->like('role',$filter_val)->orderBy('id')->paginate(10);
	 }else{
	 	$data['roleValue']=$roleDatabase->orderBy('id')->paginate(10);
	 }
			
			$data['p']=$roleDatabase->pager;	
			echo view('listing/header');
			echo view('listingRoleForm',$data);
			echo view('listing/footer');
		}



    public function deleteThreat($id)
       	{  
			$roleDB=new Scenario_roleDb();  
			$roleCol= $roleDB->where('id',$id)->first();
			$roleDB->where('id',$id)->delete();


			$json=array();
			$json['success']=true;
		 	echo json_encode($json);

		}
		
	
	 public function editThreat($id)
	 {

        $role =	$this->request->getVar('edit_rolename');
        $role_brief = $this->request->getVar('edit_role_briefing');
        $updated_time=new Time('now');
        $session = session();
    $username =$session->get('username');
    $SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    $usernameID = $userData['id'];

        helper(['form', 'url']);
        $validation_rule=['edit_rolename'=>'required|is_unique[scenario_role.scenario_role_name,id,'.$id.']']; 
       // array_push( $validation_rule,$validate_password);
        $validation_msg=['edit_rolename'=>['required' => 'Role name is required','is_unique'=>'All accounts must have unique rolename'],
       
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
       $builder = $db->table('scenario_role');
       
       $data=['scenario_role_name'=>$role,'modified'=>strtotime($updated_time),'modified_by'=>$usernameID,'role_briefing'=>$role_brief];
       $builder->update($data, ['id' => $id]);
       
       
       
       $json=array();
        $json['success']=3;
       return json_encode($json);
       

 }


 public function showHideThreat($id,$status){

  $db = \Config\Database::connect();
  $builder = $db->table('scenario_role');
  $builder->update(['status' => $status] , ['id' => $id]);
  $json=array();
  $json['success']=true;
  echo json_encode($json);


  }




} //class end
