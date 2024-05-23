<?php
class Userlogin extends CI_Controller
{
    public function index()
    {
        $this->load->view('Homepage/login');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('datauser', 'model');
        $this->table = 'user';
    }

    public function process()
    {
        if (isset($_POST['login'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($username and $password) {
                $data = [
                    'username' => $username,
                    'password' => $password
                ];
                $user_account = $this->model->get_data($this->table, $data)->row();

                if ($user_account) {
                    $session_data = [
                        'username' => $user_account->username,
                        'password' => $user_account->password
                    ];
                    $this->session->set_userdata($session_data);
                    redirect('main');
                } else {
                    $this->session->set_flashdata('error', 'username atau password tidak sesuai');
                    redirect('Homepage/login');
                }
            } else {
                $this->session->set_flashdata('error', 'semua data harus diisi');
                redirect('Homepage/login');
            }
        }
    }
}
