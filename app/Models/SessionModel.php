<?php namespace App\Models;

use CodeIgniter\Model;

class SessionModel extends Model
{
	protected $table = 'user';
	protected $allowedFields = ['firstname','username','password','lastname','email'];


	public function isloggedin()
	{
		// echo '121';
		// die;

		// $this->load->library('session');
		$session = session();
		if(!$session->us)
		{    
			$url = base_url('login');
			redirect($url);
		}
	}

}