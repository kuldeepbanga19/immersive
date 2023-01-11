<?php namespace App\Models;

use CodeIgniter\Model;

class  otpDb extends Model
{
	protected $DBGroup = 'default';

	protected $table ='otp';

	protected $allowedFields=['id','userid','OTP','timecreated'];
}

?>