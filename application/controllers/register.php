<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class register extends CI_Controller{

    public function index(){

        if($this->input->post('register') === 'register'){
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $uname = $this->input->post('uname');
            $email= $this->input->post('email');
            $pwd = $this->input->post('pwd');
            $role = $this->input->post('role');
            if(($fname && $lname && $uname && $email && $pwd && $role) != NULL){
                $insert = [
                    'fname' => $fname,
                    'lname' => $lname,
                    'uname' => $uname,
                    'email' => $email,
                    'pwd' => $pwd,
                    'role' => $role,
                ];
                $this->load->model('users');
                $this->users->insert_user($insert);
                $courses = $this->users->get_course();
                $data = ['session' => $this->session->all_userdata(),'courses' => $courses];
                $this->session->set_flashdata('msg', '<div>Successfully Registered Please Login.</div>');
                $this->load->view('include/header', $data);
                $this->load->view('index');

                $this->load->view('include/footer');

            }else{
                $msg = '<div class="alert alert-danger">All fields are required !</div>';
                $this->session->set_flashdata('msg', $msg);
                redirect("register");
            }
        }
    }
}
?>