<?php namespace App\Controllers;
use App\Models\SessionModel;
use App\Models\RoleDb;
use App\Models\PermissionDb;
use App\Models\RolePermissionDB;

use App\Models\User_RoleDb;

class Role extends BaseController
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
    $db = \Config\Database::connect();	
  $session = session();
    if(!$session->has('us')){
        	 return redirect()->to('login');	
      }

	else{ 
        
        helper(['form', 'url']);
        $role = new RoleDb();
        $data['Roles'] = $role->where('status = 0')->findAll();


        // abhishek
        $session = session();
        $username =$session->get('username');
        $SessionModel = new SessionModel();
        $userData = $SessionModel->where('email',$username)->first();
        $usernameID = $userData['id'];

        // var_dump( $usernameID);die;
        
        if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1 AND user_id='. $usernameID)->getResult()){
          $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
            $fstl=$tempvv->firstname;
            $lstl=$tempvv->lastname;
            $data["firstletter"]=$fstl[0];
            $data["lastletter"]=$lstl[0];

          echo view('layout/header0',$data);
          return view('role', $data);
        }
        else{
          $tempvv = $db->query('SELECT * FROM yatharth_immersive.imr_user WHERE id='. $usernameID)->getFirstRow();
          $fstl=$tempvv->firstname;
          $lstl=$tempvv->lastname;
          $data["firstletter"]=$fstl[0];
          $data["lastletter"]=$lstl[0];
          
            echo view('layout/header1',$data);
            return redirect()->to('new_index'); 
        }

        // echo view('layout/header1',$data);
        // return view('role', $data);


    }//abhishek

     
	
	  
	}  


	public function addRole()
	{    

		

		$role =	$this->request->getVar('role');

		$id=0;
		 $validation_rule=['role'=>'required|is_unique[role.rolename,id,'.$id.']'];


      $validation_msg=['role'=>['required' => 'Please provide the role Name ']];

             if (!$this->validate($validation_rule,$validation_msg))
                             {
                                    
                                    $json=array();
                                    $validation =  \Config\Services::validation();
                                    $json['msg'] = $validation->listErrors();
                                    $json['success']=false;
                                    echo json_encode($json);
                                    return;
                                }




		$database=new RoleDb();
		$roleDB = $database->where('rolename',$role)->first();
  			$data = ['rolename'=>$role];
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



    public function deleteRole($id)
       	{  
			$roleDB=new RoleDb();  
			$roleCol= $roleDB->where('id',$id)->first();
			$roleDB->where('id',$id)->delete();


			$json=array();
			$json['success']=true;
		 	echo json_encode($json);

		}
		
	
	 public function editRole($id)
	 {

        $role =	$this->request->getVar('edit_rolename');


        helper(['form', 'url']);
        $validation_rule=['edit_rolename'=>'required|is_unique[role.rolename,id,'.$id.']']; 
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
       $builder = $db->table('role');
       
       $data=['rolename'=>$role];
       $builder->update($data, ['id' => $id]);
       
       
       
       $json=array();
        $json['success']=3;
       return json_encode($json);
       

 }







} //class end
