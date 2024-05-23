<?php
class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // memanggil library session
        $this->load->library('session');
        // mengecek session username
        if (!$this->session->userdata('username')) {
            redirect('Homepage/login');
        }
    }

    public function index()
    {
        $data['judul'] = "Main View";
        $this->load->view('header', $data);
        $this->load->view('main_view', $data);
        $this->load->view('footer', $data);
    }
}
