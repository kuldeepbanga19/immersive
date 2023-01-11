<?php namespace App\Models;

use CodeIgniter\Model;
class injectDataDb extends Model{
	protected $DBGroup = 'default';

	protected $table ='inject_data';

	protected $allowedFields=['id','title','date','time','timetext','description','file','role','inject_id','status'];

	public function getlastoption($injectid){
		$db=\Config\Database::connect();
		$tbname=$db->prefixTable("inject_option");
		$maxind=$db->query("SELECT max(order_no) as maxv FROM $tbname WHERE inject_id=$injectid")->getFirstRow();
		return $maxind->maxv;

	}
	public function updateoption($optiondata,$injid){
		$db=\Config\Database::connect();
		$wh=[
			"inject_id"=>$injid,
			"order_no"=>$optiondata["order_no"]
		];
		
		 $db->table('inject_option')->where($wh)->update($optiondata);

	}
	public function updatedatainject($injectdata,$injectid){
		$db=\Config\Database::connect();
		$tablenm=$db->prefixTable("inject_data");
		$injdata=$db->query("SELECT * FROM $tablenm WHERE inject_id=$injectid")->getResult();
		if($injdata){
			$db->table("inject_data")->where("inject_id",$injectid)->update($injectdata);
		}
		else{
			$db->table("inject_data")->insert($injectdata);
		}

	}
	public function getinjectdata($injectid){
       $db=\Config\Database::connect();
       $tablenm=$db->prefixTable("inject_data");
      $injdata=$db->query("SELECT * FROM $tablenm WHERE inject_id=$injectid")->getFirstRow();

      return $injdata;


	}
	public function getoptioninfo($injectid,$orderno){
		$db=\Config\Database::connect();
		 $tablenm=$db->prefixTable("inject_option");
		return $db->query("SELECT * FROM $tablenm WHERE inject_id=$injectid AND order_no=$orderno")->getFirstRow();

	}
	public function updateindicatoroption($val,$prindicator,$optionid){
		$db=\Config\Database::connect();
		$tablenm=$db->prefixTable("indicator_option");
		$optiondata=$db->query("SELECT * FROM $tablenm WHERE option_id=$optionid AND pindicatorid=$prindicator")->getFirstRow();
		if($optiondata){
			 $wh=[
			 	"option_id"=>$optionid,
			 	"pindicatorid"=>$prindicator
			 ];
			 $dt=[
			 	"pvalue"=>$val
			 ];
			 $db->table('indicator_option')->where($wh)->update($dt); 


		}
		else{
			$dt2=[
				"option_id"=>$optionid,
			 	"pindicatorid"=>$prindicator,
			 	"status"=>1,
			 	"pvalue"=>$val
			];
            $db->table('indicator_option')->insert($dt2);

		}

	}
}



?>