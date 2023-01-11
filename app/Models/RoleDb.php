<?php namespace App\Models;

use CodeIgniter\Model;

class  RoleDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='role';

	protected $allowedFields=['id','rolename','status','assigned_to'];
}

?>