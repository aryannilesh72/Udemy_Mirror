<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class View_users extends CI_Controller{

    public function index(){

        ### Checking Required privellege ###
        if($this->session->userdata('username') !== NULL){
            if($this->session->userdata('role') !== 'ADMIN'){
                header("Location: welcome");
                exit();
            }
        }else{
            header('Location: login');
            exit();
        }
        ### End Checking Required privellege ###

        $this->load->model('users');
        $users = $this->users->get_user();
        $data = ['title' => 'View Instuctors | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'users' => $users];
        $this->load->view('template/inc/header', $data);
        $this->load->view('template/view_users');
        $this->load->view('template/inc/footer');
    }

    public function e_id($id = NULL){
        $this->load->model('users');
        $users = $this->users->get_usersById($id);
        $data = ['title' => 'View Instructors | ADMIN PANEL :: UDEMY', 'session' => $this->session->all_userdata(), 'users' => $users];
        $this->load->view('template/inc/header', $data);
        $this->load->view('template/add_user');
        $this->load->view('template/inc/footer');
    }

    public function edit($id = NULL){
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
            redirect("add_course");
        }
    }

}
?>?>