<?php namespace App\Models;

use CodeIgniter\Model;

class  Feedback_performanceDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='feedback_performance';

	protected $allowedFields=['id','created','modified','created_by','modified_by','crisis_scenario_id','feedback_type','rank_option','confidence_response','justification_response','performance_indicator'];
}

?>