<?php namespace App\Models;

use CodeIgniter\Model;

class  Scenario_performanceDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='performance_indicator';

	protected $allowedFields=['id','created','modified','created_by','modified_by','crisis_scenario_id','performance_title','unit','custom_unit','starting_value'];
}

?>