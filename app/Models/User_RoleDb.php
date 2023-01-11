<?php namespace App\Models;

use CodeIgniter\Model;

class  User_RoleDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='user_role';

	protected $allowedFields=['id','user_id','role_id'];
}

?>