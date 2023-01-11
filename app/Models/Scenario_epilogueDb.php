<?php namespace App\Models;

use CodeIgniter\Model;

class  Scenario_epilogueDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='scenario_epilogue';

	protected $allowedFields=['id','created','modified','created_by','modified_by','epilogue_value','crisis_scenario_id','brief_status'];
}

?>