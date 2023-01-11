<? namespace App\Models;
use CodeIgniter\Model;

class injectDb extends Model{

	protected $DBGroup = 'default';

	protected $table ='injects';

	protected $allowedFields=['id','scenario_id','created_by','status','timecreated','order_id'];
	protected  $dbobject;
	public function __construct(){
		$this->dbobject=\Config\Database::connect();
        
	}
    
    public function createinject($userid,$scenarioid){
    	  $tablenm=$this->dbobject->prefixTable("injects");
        if($userid){
          $maxval=$this->dbobject->query("SELECT max(order_id) as mid FROM $tablenm WHERE created_by=$userid AND scenario_id=$scenarioid")->getFirstRow();

        }
        else{
           $maxval=$this->dbobject->query("SELECT max(order_id) as mid FROM $tablenm WHERE scenario_id=$scenarioid")->getFirstRow();
        }
        
       
        $order=1;
        if($maxval){
          $order=$order+($maxval->mid);
        }
        $data=[
        	'scenario_id'=>$scenarioid,
        	'created_by'=>$userid,
        	'status'=>1,
        	'timecreated'=>strtotime("now"),
          'order_id'=>$order
        ];
        $this->dbobject->table("injects")
        ->insert($data);
        $injjid=$this->dbobject->insertID();
        $title="inject ".$order;
        $data2=[
          "title"=>$title,
          "inject_id"=>$injjid
        ];
        $this->dbobject->table("inject_data")
        ->insert($data2);
        return $injjid;

    }
    public function getAllinjects($scenarid,$userid){
        $table_name=$this->dbobject->prefixTable("injects");
        $table2_name=$this->dbobject->prefixTable("inject_data");
        $injectsdata=$this->dbobject->query("SELECT t1.*,t2.title FROM $table_name t1 LEFT JOIN $table2_name t2 on t1.id=t2.inject_id WHERE scenario_id=$scenarid AND $userid=$userid ORDER BY t1.order_id")->getResult();
        
        return $injectsdata;
    }
    public function getinjectData($injid){


    }
    public function addoption($injid,$order_no=NULL){
       $tablenm1=$this->dbobject->prefixTable("inject_option");
       $returnarray=array();

        $maxval=$this->dbobject->query("SELECT max(order_no) as mid FROM $tablenm1 WHERE  inject_id=$injid")->getFirstRow();

        if($maxval){
         $order_no=1+($maxval->mid); 
        }
       $data=[
        "inject_id"=>$injid,
        "value"=>0,
        "order_no"=>$order_no
       ];
       
       $this->dbobject->table("inject_option")
       ->insert($data);
       $returnarray["orderno"]=$order_no;
       $returnarray["optionid"]=$this->dbobject->insertID();
       return $returnarray;
       

    }
     public function getinjectoptions($injectid){
          $injectoptiontb=$this->dbobject->prefixTable("inject_option");
           $injectoptions= $this->dbobject->query("SELECT * FROM $injectoptiontb WHERE inject_id=$injectid")->getResult();
          return $injectoptions;
    }
    public function getAllroles($injectid,$userid){
       $rolestb=$this->dbobject->prefixTable("scenario_role_cate");
       $roles=$this->dbobject->query("SELECT * FROM $rolestb WHERE crisis_scenario_id=$injectid AND created_by=$userid")->getResult();
       return $roles;
    }
    public function deleteinject($sid){
      $inject=$this->dbobject->prefixTable("injects");
      $this->dbobject->query("DELETE FROM $inject WHERE scenario_id=$sid");

    }
}