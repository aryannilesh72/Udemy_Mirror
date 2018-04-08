<?php
/**
 * Created by PhpStorm.
 * User: aryan
 * Date: 07-04-2018
 * Time: 20:52
 */

class Admin extends CI_Controller
{
public function index(){
    $this->load->view('admin/header/header');

    $this->load->view('admin/header/dashboard');
    $this->load->view('admin/header/sidebar');

    $this->load->view('admin/header/footer');
}
}