<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\SessionModel;
use App\Models\UsersDb;
use App\Models\User_RoleDb;
use App\Models\RoleDb;
use App\Models\otpDb;


class otp extends BaseController
{


    public function linkforget()
	{
        return view('forget_password');
    }

    public function linkotp()
	{
        return view('otp_form');
    }

    // public function linknewpasword()
	// {
    //     return view('new_password');
    // }

    public function sendotp()
	{
        $email = \config\services::email();//abhishek
        $user_table=new UsersDb();
        $user_otp=new otpDb();

        $emailuser=$this->request->getVar('email');

        if ($user_table->where('email', $emailuser)->first()){

            $data['user_info']=$user_table->where('email', $emailuser)->first();
            $user_otp->where('userid',$data['user_info']['id'])->delete();
            $six_digit_random_number = random_int(100000, 999999);
            $data1 =[
            
                'userid'=>$data['user_info']['id'] ,
                'OTP'=> $six_digit_random_number,
                'timecreated'=> time()
            ];
            if($user_otp->insert($data1)){
                $anchor='<a href="'. base_url("/login").'"><p>CLICK HERE TO ENTER OTP</p></a>';
                $email->setFrom('Admin@gmail.com','OTP');
                //   print_r($useremail);die;
                //   }
                  $email->setTo($data['user_info']['email']);
                  $email->setSubject('OTP');
                  $email->setMessage('<h2>Your OTP To Login Is </h2><h1>'.$six_digit_random_number.'</h1>'.$anchor);
                  if ($email->send()){
                    return view('otp_form',$data);
                  }
                 else{
                    echo "<script>alert('Something is wrong! Please Enter Your Email Again!');</script>";
                    return view('forget_password');  
                 }

            }
            else{
                return view('forget_password');
            }

        // var_dump($six_digit_random_number);die;
        // var_dump($data['user_info']['email']);die;
        }
        else{
            echo "<script>alert('Your Email is not found! please Re-enter your email correctly');</script>";
            return view('forget_password');
        }

    }
    

    public function otpcheck($id)
    {
        $user_table=new UsersDb();
        $user_otp=new otpDb();
        
        $otp=$this->request->getVar('code1').$this->request->getVar('code2').$this->request->getVar('code3').$this->request->getVar('code4').$this->request->getVar('code5').$this->request->getVar('code6');

        $time=time();
        // var_dump($time);die;
        $otp_ch['user_otp']=$user_otp->where('userid', $id)->orderby('id','desc')->first();
        // var_dump($otp);die;
        $timecreate=(int)$otp_ch['user_otp']['timecreated']+600;
        if ($otp_ch['user_otp']['OTP']==$otp){
            if($time<=$timecreate){
                $user_otp->delete($otp_ch['user_otp']['id']);
                $data['user_info']=$user_table->where('id', $id)->first();
                return view('new_password',$data);
            }
            else{
                echo "<script>alert('Your time is up! Please click to Resend your otp!');</script>";
            }
        }
        else{
            echo "<script>alert('Your otp is incorrect! Please check your email for new otp!');</script>";
            $data['user_info']=$user_table->where('id', $id)->first();
            return view('otp_form',$data);
        }
    }


    public function _construct()
    {
        helper("form1");
    }
    public function newpassword()
    {
       
        $user_table=new UsersDb();
        $db      = \Config\Database::connect();
        $builder = $db->table('imr_user');
        $data=[]; 
       
        $rules=[
          
          'pass' => [
              'rules' => 'required|min_length[8]|regex_match[^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$]',
              'errors' => [
                  'required' => 'Password Required', 
                  'min_length' => 'Password must have at least {param} characters',
                  'regex_match' => 'Password must have at least one upper character,one lower character,one digit and one space character',
              ],
          ],
          'cpass' => [
              'rules' => 'required|matches[pass]',
              'errors' => [
                  'required' => 'Password (Again) Required', 
                  'matches' => 'Password must matches the Above field',
              ],
          ],
         
          // 'city' => [
          //     'rules' => 'required',
          //     'errors' => [
          //         'required' => 'City/Town Required', 
          //     ],
          // ],
        ];
        $id=$this->request->getVar('id');
        $data['user_info']=$user_table->where('id', $id)->first();
        if ($this->request->getMethod()  == 'post'){
            if ($this->validate($rules)){
              //   echo 'Ready to save ';
  
              $data1 = [
                  'password'=>md5($this->request->getVar('cpass'))
                  
              ];
              // print_r($data1);die;
              
              // if (! $email->send()){
              //     return redirect()->to(base_url('regis'))->with('status','Please Enter Legit Email Address');
              //    }
              if ($db->table('imr_user')->where('id', $id)->update($data1)){
            //   $builder->insert($data1);
              
              return view('login');
              } 
            }
  
            else{
                $data['validation'] = $this->validator;
            }
     
        }
  
        return view('new_password',$data);
      }


      public function resendotp($id)
      {
        $email = \config\services::email();//abhishek
        $user_table=new UsersDb();
        $user_otp=new otpDb();

        $six_digit_random_number = random_int(100000, 999999);
        $data['user_info']=$user_table->where('id', $id)->first();

        $otp_ch['user_otp']=$user_otp->where('userid', $id)->orderby('id','desc')->first();

        if ($user_otp->where('userid',$data['user_info']['id'])->delete()){

        $anchor='<a href="'. base_url("/login").'"><p>CLICK HERE TO ENTER OTP</p></a>';
        $email->setFrom('Admin@gmail.com','New Registration');
                //   print_r($useremail);die;
                //   }
        $email->setTo($data['user_info']['email']);
        $email->setSubject('OTP');
        $email->setMessage('<h2>Your OPT To Login Is </h2><h1>'.$six_digit_random_number.'</h1>'.$anchor);
        $email->send();
        $data1 =[
            
            'userid'=>$data['user_info']['id'] ,
            'OTP'=> $six_digit_random_number,
            'timecreated'=> time()
        ];
        $user_otp->insert($data1);
        echo "<script>alert('Your Otp has been Resended!');</script>";
        return view('otp_form',$data);

        }
        else{
            echo "<script>alert('Please Enter Your Email First');</script>";
            return view('forget_password');  
        }

      }
}