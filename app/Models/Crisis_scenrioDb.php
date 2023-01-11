<?php namespace App\Models;

use CodeIgniter\Model;

class  Crisis_scenrioDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='crisis_scenrio';

	protected $allowedFields=['id','status','scenrio_title','created','modified','created_by','modified_by','status','deleted','deleted_by','briefing','publish_status'];
}

?>