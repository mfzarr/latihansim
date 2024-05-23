<?php
class HomePage extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('header',$data);
        $this->load->view('home',$data);
        $this->load->view('footer',$data);
    }

    public function login()
    {
        $data['judul'] = "Halaman Login";
        $this->load->view('header',$data);
        $this->load->view('login',$data);
        $this->load->view('footer',$data);
    }
}
?>