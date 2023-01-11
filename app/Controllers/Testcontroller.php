<?php 
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\RoleDb;
use App\Models\injectDb;
class Testcontroller extends BaseController{
	 use ResponseTrait;
	protected $sessionVar;
     protected $injectMd;
	public function __construct(){
		   $this->sessionVar=session();
           $this->injectMd=new injectDb();
     
	}
	public function index(){
      $roleDb = new RoleDb();
	   $data= $roleDb->orderBy('rolename')->findAll();
	   $db=\Config\Database::connect();
	   $data2=$db->query("SELECT * FROM imr_scenario_role")->getResultArray();
      // print_r($data);die;
	   // $userid=$this->sessionVar->get("userid");
	   
	   
	    return $this->respond($data2, 200);
	}
	public function show($id = null)
    {
    	$injects=$this->injectMd->getAllinjects($id,3);
	    return $this->respond($injects);

    } 
    public function create(){
    
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
         
        return $this->respondCreated($data, 201);
    }	
}


?>