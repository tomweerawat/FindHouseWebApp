<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class register extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_register');
    $this->load->library('upload');

  }

  public function get_data()
  {
    $this->form_validation->set_rules('fname','Fristname','required');
    $this->form_validation->set_rules('lname','Lastname','required');
    $this->form_validation->set_rules('email','Email','required|is_unique[user.email]');
    $this->form_validation->set_rules('telephone','Telephone','required|is_natural');
    $this->form_validation->set_rules('password','Password','required|min_length[8]');
    $this->form_validation->set_rules('repassword','Repassword','required|min_length[8]|matches[password]');
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    $this->form_validation->set_rules('answer','Answer','required');
    if ($this->form_validation->run()==FALSE) {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}else{
			$info['success']=TRUE;
			$dataregis=array(
				'first_name'=>$this->input->post('fname'),
				'last_name'=>$this->input->post('lname'),
				'email'=>$this->input->post('email'),
				'tel'=>$this->input->post('telephone'),
        'question'=>$this->input->post('question'),
        'ans'=>$this->input->post('answer')
			);
      // echo "<pre>"; print_r($dataregis); die();
      $password=$this->input->post('password');
      $uniqid= uniqid(' ',true);
      //echo $uniqid;
      $hash = $this->mdl_register->getHash($password);
      $encrypted_password = $hash["encrypted"];
      $salt = $hash["salt"];
      $dataregis['encrypted_password']=$encrypted_password;
      $dataregis['salt']=$salt;
      $dataregis['unique_id']=$uniqid;
      $rsm=$this->test_upload();
      if($rsm==false){
        $info['success']=FALSE;
  			$info['errors']="Picture is incorrect";
      }else{
        $img=$rsm['file_name'];
        $dataregis['userimage']="/uploads/userimg/".$img;
        //echo "<pre>"; print_r($dataregis); die();
        $this->mdl_register->insert($dataregis);
  			$info['message']="Success";
      }

		}
    $this->output->set_content_type('application/json')->set_output(json_encode($info));
  }

public function test_upload(){
  $config=array(
    'upload_path'=>"./uploads/userimg",
    'allowed_types'=>"gif|jpg|png",
    'max_size'=>"0",
    'overwrite'=>FALSE
  );
  $this->upload->initialize($config);
  if(!$this->upload->do_upload("userfile")){
    return FALSE;
  }else{
    $data=$this->upload->data();
    return $data;
    }
  }

  public function save()
  {
    $data = array('success' => false, 'messages' => array());

    $this->load->library('form_validation');
    $this->form_validation->set_rules("fname","Fristname","trim|required");
    $this->form_validation->set_rules("lname","Lastname","trim|required");
    $this->form_validation->set_rules("telephone","Telephone","trim|required|is_natural");
    $this->form_validation->set_rules("regis_email", "Email", "trim|required|valid_email|is_unique[user.email]'");
    $this->form_validation->set_rules("regis_password", "Password", "trim|required");
    $this->form_validation->set_rules("password_confirm", "Password Confirm", "trim|required|matches[regis_password]");
    $this->form_validation->set_rules("answer","Answer","trim|required");
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    if ($this->form_validation->run()) {
      $data=array(
				'first_name'=>$this->input->post('fname'),
        'last_name'=>$this->input->post('lname'),
				'tel'=>$this->input->post('telephone'),
				'email'=>$this->input->post('regis_email'),
        'question'=>$this->input->post('question'),
        'ans'=>$this->input->post('answer')
			);
      $password=$this->input->post('regis_password');
      $uniqid= uniqid(' ',true);
      //echo $uniqid;
      $hash = $this->mdl_register->getHash($password);
      $encrypted_password = $hash["encrypted"];
      $salt = $hash["salt"];
      $data['encrypted_password']=$encrypted_password;
      $data['salt']=$salt;
      $data['unique_id']=$uniqid;
      $this->mdl_register->insert($data);
      $data['success'] = true;
    }
    else {
      foreach ($_POST as $key => $value) {
        $data['messages'][$key] = form_error($key);
      }
    }

    echo json_encode($data);
  }
}
