<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_user extends CI_Controller{

    public function index(){


        if($this->input->post('add_user') === NULL){
            $this->load->model('users');
            $data = ['title' => 'Add User | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata()];
            $this->load->view('template/inc/header', $data);
            $this->load->view('template/add_user');
            $this->load->view('template/inc/footer');
        }

        if($this->input->post('add_user') === 'add_user'){
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
                        $data = ['title' => 'Add User | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata()];
                        $this->session->set_flashdata('msg', '<div class="alert alert-info">User added successfully.</div>');
                        $this->load->view('template/inc/header', $data);
                        $this->load->view('template/add_user');
                        $this->load->view('template/inc/footer');

            }else{
                $msg = '<div class="alert alert-danger">All fields are required !</div>';
                $this->session->set_flashdata('msg', $msg);
                redirect("add_user");
            }
        }
    }
}
?>