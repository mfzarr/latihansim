<?php
class Userlogout extends CI_Controller
{
    public function index()
    {
        $this->session->sess_destroy();
        redirect('Homepage/login');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
}