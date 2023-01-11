<?php namespace App\Models;

use CodeIgniter\Model;

class  Scenario_roleDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='scenario_role';

	protected $allowedFields=['id','created','modified','created_by','modified_by','scenario_role_name','status','role_briefing'];
}

?>