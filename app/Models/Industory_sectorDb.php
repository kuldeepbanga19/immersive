<?php namespace App\Models;

use CodeIgniter\Model;

class  Industory_sectorDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='industry_sector';

	protected $allowedFields=['id','created','modified','created_by','modofied_by','industory_name','status'];
}

?>