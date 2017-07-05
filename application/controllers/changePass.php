<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class changePass extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_login');
    $this->load->model('mdl_register');

  }

  public function get_newPass($id){
    $this->form_validation->set_rules('old_pass','OLD_Password','required|min_length[8]');
    $this->form_validation->set_rules('new_pass','NEW_password','required|min_length[8]');
    $this->form_validation->set_rules('re_new_pass','Re-new_password','required|min_length[8]|matches[new_pass]');
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    $old_pass=$this->input->post('old_pass');
    $new_pass=$this->input->post('new_pass');
    $re_new_pass=$this->input->post('re_new_pass');
    if ($this->form_validation->run()==FALSE) {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}else{
			$info['success']=TRUE;
      $old_pass=$this->input->post('old_pass');
      $new_pass=$this->input->post('new_pass');
      $re_new_pass=$this->input->post('re_new_pass');
      $result=$this->mdl_login->get_data_id($id);
      if($result){
        foreach ($result as $row) {
          $salt=$row->salt;
          $encrypted_password=$row->encrypted_password;
          if($this->mdl_login->verifyHash($old_pass.$salt,$encrypted_password)){
              $hash = $this->mdl_register->getHash($new_pass);
              $encrypted_password = $hash["encrypted"];
              $salt = $hash["salt"];
              $data['uid']=$id;
              $data['encrypted_password']=$encrypted_password;
              $data['salt']=$salt;
              $update=$this->update_pass($data);
              if($update==false){
                $info['success']=FALSE;
                $info['errors']="error";
              }else{
                $info['message']="Success";
              }
          }else{
            $info['success']=FALSE;
      			$info['errors']="รหัสผ่านเดิมไม่ถูกต้อง";
          }
        }
      }
    }
    $this->output->set_content_type('application/json')->set_output(json_encode($info));
  }

  public function update_pass($data){
    $id=$data['uid'];
    $encrypted_password = $data['encrypted_password'];
    $salt = $data['salt'];

    //echo $encrypted_password." ".$salt; exit();
    $sql="UPDATE user SET salt= '$salt',encrypted_password= '$encrypted_password' where user_id='$id'";
    $rs=$this->db->query($sql);
    if($rs==false){
      return FALSE;
    }else{
      return TRUE;
    }
  }
}
