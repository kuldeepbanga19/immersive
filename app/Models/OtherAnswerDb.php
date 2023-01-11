<?php namespace App\Models;

use CodeIgniter\Model;

class  OtherAnswerDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='other_answer';

	protected $allowedFields=['id','user_id','question_id','answer'];
}

?>