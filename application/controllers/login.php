<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->library("session");
    $this->load->model('mdl_login');
    $this->load->model('mdl_register');
  }

  public function index()
  {
    if($this->chk_login()==false){
      redirect(base_url('home/login_fail'));
    }else{
      redirect(base_url('homepage'));
    }
  }

  public function chk_login()
  {
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');
    if ($this->form_validation->run()==FALSE) {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}else{
      $email=$this->input->post('email');
      $password=$this->input->post('password');
      //echo $email,$password,$checkbox; die();
      $result=$this->mdl_login->get_data($email);
      if($result){
        foreach ($result as $row) {
          $salt=$row->salt;
          $encrypted_password=$row->encrypted_password;
          $session_arr = array(
            'uid'=>$row->user_id,
            'name'=>$row->first_name,
            'lname'=>$row->last_name,
            'img'=>$row->userimage,
            'tel'=>$row->tel,
            'permission'=>$row->permission,
            'is_login'=> true
          );
        }
            if($this->mdl_login->verifyHash($password.$salt,$encrypted_password)){
              $this->session->set_userdata($session_arr);
              $info['success']=true;
              $info['message']="เข้าสู่ระะบบสำเร็จ, ยินดีต้อนรับคุณ".$session_arr['name'];
            }else{
              //redirect(base_url('front/home/login_fail'));
              $info['errors']="อีเมล หรือ พาสเวิร์ดของคุณไม่ถูกต้อง";
              $info['success']=false;
            }
      }else{
        //redirect(base_url('front/home/login_fail'));
        $info['errors']="อีเมล หรือ พาสเวิร์ดของคุณไม่ถูกต้อง";
        $info['success']=false;
      }
    }
    $this->output->set_content_type('application/json')->set_output(json_encode($info));
    //echo $email,$password; die();

  }

  public function chk_forgot(){
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('answer','Answer','required');
      $email=$this->input->post('email');
      $question=$this->input->post('question');
      $answer=$this->input->post('answer');
      // echo $email,$question,$answer; die();
      $result=$this->mdl_login->get_data($email);
      if($result){
        foreach ($result as $row) {
          $quest=$row->question;
          $ans=$row->ans;
          $id=$row->user_id;
        }
            if($question==$quest&&$answer==$ans){
              $data['title']="หน้าหลัก";
              $data['uid']=$id;
              $data['status']=0;
              // echo "<pre>";print_r($data);exit();
              $this->load->view('header',$data);
              $this->load->view('search');
              $this->load->view('forgot_pass',$data);
              $this->load->view('footer');
            }else{
              redirect(base_url('homepage'));
            }
      }else{
        redirect(base_url('homepage'));
      }
    }

    public function change_forgot($id){
      $pass=$this->input->post('regis_password');
      $npass=$this->input->post('password_confirm');
      if($pass==$npass){
            $hash = $this->mdl_register->getHash($pass);
            $encrypted_password = $hash["encrypted"];
            $salt = $hash["salt"];
            $sql="UPDATE user SET salt= '$salt',encrypted_password= '$encrypted_password' where user_id='$id'";
            $rs=$this->db->query($sql);
        if($rs==false){
          $data['title']="หน้าหลัก";
          $data['uid']=$id;
          $data['status']=2;
          // echo "<pre>";print_r($data);exit();
          $this->load->view('header',$data);
          $this->load->view('search');
          $this->load->view('forgot_pass',$data);
          $this->load->view('footer');
        }else{
          $data['title']="หน้าหลัก";
          $data['uid']=$id;
          $data['status']=1;
          // echo "<pre>";print_r($data);exit();
          $this->load->view('header',$data);
          $this->load->view('search');
          $this->load->view('forgot_pass',$data);
          $this->load->view('footer');
        }
      }else{
        $data['title']="หน้าหลัก";
        $data['uid']=$id;
        $data['status']=2;
        // echo "<pre>";print_r($data);exit();
        $this->load->view('header',$data);
        $this->load->view('search');
        $this->load->view('forgot_pass',$data);
        $this->load->view('footer');
      }


    }


  public function logout(){
    $this->session->unset_userdata($session_arr);
    $this->session->sess_destroy();
    redirect(base_url('homepage'));

  }

}
