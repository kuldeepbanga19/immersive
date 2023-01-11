<?php namespace App\Controllers;

use CodeIgniter\Controllers;

use Config\Services;

use CodeIgniter\Files\File;

class register extends BaseController
{
    public function link()
    {
        return view('registration');
    }
    public function _construct()
    {
        helper("form");
    }
    public function adduser()
    {
       
      $email = \config\services::email();
      $db      = \Config\Database::connect();
      $builder = $db->table('imr_user');
      $data=[];  
      $rules=[
        'username' => [
            'rules' => 'required|is_unique[imr_user.username]',
            'errors' => [
                'required' => 'Username Required', 
                'is_unique' => 'Username Already exist! Please choose another Username', 
            ],
        ],
        'password' => [
            'rules' => 'required|min_length[8]|regex_match[^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$]',
            'errors' => [
                'required' => 'Password Required', 
                'min_length' => 'Password must have at least {param} characters',
                'regex_match' => 'Password must have at least one upper character,one lower character,one digit and one space character',
            ],
        ],
        'passcomf' => [
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => 'Password (Again) Required', 
                'matches' => 'Password must matches the Above field',
            ],
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[imr_user.email]',
            'errors' => [
                'required' => 'Email Required', 
                'valid_email' => 'Please enter valid Email Address',
                'is_unique' => 'Email Already exist!', 
            ],
        ],
        'firstname' => [
            'rules' => 'required|min_length[2]',
            'errors' => [
                'required' => 'Firstname Required', 
                'min_length' => 'Too short for Name',
            ],
        ],
        'surname' => [
            'rules' => 'required|min_length[2]',
            'errors' => [
                'required' => 'Surname Required', 
                'min_length' => 'Too short for Name',
            ],
        ],
        // 'city' => [
        //     'rules' => 'required',
        //     'errors' => [
        //         'required' => 'City/Town Required', 
        //     ],
        // ],
      ];
      if ($this->request->getMethod()  == 'post'){
          if ($this->validate($rules)){
            //   echo 'Ready to save ';

            $data1 = [
                'username'=>$this->request->getVar('username') ,
                'password'=>md5($this->request->getVar('passcomf')),
                'email'=>$this->request->getVar('email') ,
                'firstname'=>$this->request->getVar('firstname') ,
                'lastname'=>$this->request->getVar('surname') ,
                // 'city'=>$this->request->getVar('city') ,
                'created'=>time() ,
                'created_by'=> 0 ,
                'status'=> 1 ,
                'admin_permission'=> '0' ,
                'deleted'=> 0 ,

            ];
            // print_r($data1);die;
            $anchor='<a href="'. base_url("/User/user").'"><p>CLICK HERE TO GIVE ACCESS TO LOGIN </p></a>';
            $usernam=$this->request->getVar('username');
            $email->setFrom('Admin@gmail.com','New Registration');
    //      var_dump($this->request->getFile('File'));die;
            $email->setTo('abhisheksingh.yatharthriti@gmail.com');
            $email->setSubject('Registration');
            $email->setMessage('<h2>A NEW USER  '.$usernam.'  HAS REGISTER ON </h2><h1>IMMERSIVE</h1>'.$anchor);
            
            // if (! $email->send()){
            //     return redirect()->to(base_url('regis'))->with('status','Please Enter Legit Email Address');
            //    }
            if ($email->send()){
            $builder->insert($data1);
            return view('login');
            } 
          }

          else{
              $data['validation'] = $this->validator;
          }
   
      }

      return view('registration',$data);
    }
}