<?php namespace App\Models;

use CodeIgniter\Model;

class  Scenario_role_cateDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='scenario_role_cate';

	protected $allowedFields=['id','created','modified','created_by','modified_by','status','deleted_by','crisis_scenario_id','scenario_role_id','avatar_id','job_title','responsiblity'];
}

?>