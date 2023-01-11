<?php namespace App\Models;

use CodeIgniter\Model;

class  UsersDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='user';

	protected $allowedFields=['id','created','modified','created_by','firstname','modofied_by','email','system_role_id','username','password','lastname','dept_id','status','deleted','deleted_by','admin_permission'];
}

?>