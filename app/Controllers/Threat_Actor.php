<?php namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\SessionModel;
use App\Models\RoleDb;
use App\Models\Industory_sectorDb;
use App\Models\Attack_vectorDb;
use App\Models\Threat_actorDb;


use App\Models\User_RoleDb;

class Threat_Actor extends BaseController
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
        $role = new Threat_actorDb();
        $data['Threat'] = $role->findAll();
        echo view('layout/header',$data);
        return view('threat_actor', $data);


    }

     
	
	  
	}  


	public function addThreat()
	{    

		

		$role =	$this->request->getVar('role');
    $time = new Time('now');
    $session = session();
    $username =$session->get('username');

   
    $SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    $usernameID = $userData['id'];
   
		$id=0;
		 $validation_rule=['role'=>'required|is_unique[threat_actor.threat_name,id,'.$id.']'];


      $validation_msg=['role'=>['required' => 'Please provide the threat actor name ']];

             if (!$this->validate($validation_rule,$validation_msg))
                             {
                                    
                                    $json=array();
                                    $validation =  \Config\Services::validation();
                                    $json['msg'] = $validation->listErrors();
                                    $json['success']=false;
                                    echo json_encode($json);
                                    return;
                                }




		$database=new Threat_actorDb();
		$roleDB = $database->where('threat_name',$role)->first();
  			$data = ['threat_name'=>$role,'status'=>1,'created' =>strtotime($time),'created_by'=>$usernameID];
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
			$roleDB=new Threat_actorDb();  
			$roleCol= $roleDB->where('id',$id)->first();
			$roleDB->where('id',$id)->delete();


			$json=array();
			$json['success']=true;
		 	echo json_encode($json);

		}
		
	
	 public function editThreat($id)
	 {

        $role =	$this->request->getVar('edit_rolename');
        $updated_time=new Time('now');
        $session = session();
    $username =$session->get('username');
    $SessionModel = new SessionModel();
    $userData = $SessionModel->where('email',$username)->first();
    $usernameID = $userData['id'];

        helper(['form', 'url']);
        $validation_rule=['edit_rolename'=>'required|is_unique[threat_actor.threat_name,id,'.$id.']']; 
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
       $builder = $db->table('threat_actor');
       
       $data=['threat_name'=>$role,'modified'=>strtotime($updated_time),'modified_by'=>$usernameID];
       $builder->update($data, ['id' => $id]);
       
       
       
       $json=array();
        $json['success']=3;
       return json_encode($json);
       

 }


 public function showHideThreat($id,$status){

  $db = \Config\Database::connect();
  $builder = $db->table('threat_actor');
  $builder->update(['status' => $status] , ['id' => $id]);
  $json=array();
  $json['success']=true;
  echo json_encode($json);


  }




} //class end
