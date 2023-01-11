<?php namespace App\Models;

use CodeIgniter\Model;

class  Attack_vectorDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='attack_vector';

	protected $allowedFields=['id','created','modified','created_by','modified_by','attack_name','status'];
}

?>