<?php namespace App\Models;

use CodeIgniter\Model;

class  Threat_actorDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='threat_actor';

	protected $allowedFields=['id','created','modified','created_by','modified_by','threat_name','status'];
}

?>