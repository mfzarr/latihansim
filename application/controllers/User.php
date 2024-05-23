<?php
class User extends CI_Controller
{
    // function tambah data
    public function add()
    {
        $data['judul'] = "Tambah User";
        $this->load->view('header', $data);
        $this->load->view('user/user_add');
        $this->load->view('footer', $data);
    }

    // function menampilkan data
    public function show()
    {
        $data['users'] = $this->model->get_all_data($this->table);
        $data['judul'] = "Data User";
        $this->load->view('header', $data);
        $this->load->view('user/user_show', $data);
        $this->load->view('footer', $data);
    }

    // function edit data
    public function edit($id)
    {
        $data['user'] = $this->model->get_data($this->table, ['id' => $id])->row();
        $data['judul'] = "Edit User";
        $this->load->view('header', $data);
        $this->load->view('user/user_edit', $data);
        $this->load->view('footer', $data);
    }
    public function delete($id)
    {
        $delete = $this->model->delete_data($this->table, ['id' => $id]);
        if ($delete)
            redirect('user/show');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('datauser', 'model');
        $this->table = 'user';
        $this->load->library('session');
        if(!$this->session->userdata('username'))
        {
            redirect('Homepage/login');
        }
    }
    public function save()
    {
        if (isset($_POST['kirim'])) {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            //mengecek nama, username, dan password apakah sudah terisi

            if ($nama and $username and $password) {
                //mengecek password apakah sudah lebih dari 6 karakter
                if (strlen($password) > 6) {
                    $data = [
                        'nama' => $nama,
                        'username' => $username,
                        'password' => $password
                    ];
                    $this->model->insert_data($this->table, $data);
                }
            }
            redirect('user/show');
        }
    }

    public function update()
    {
        if (isset($_POST['ubah'])) {
            //ambil data
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $id = $this->input->post('id');
            //cek keterisian nama, username, dan password
            if ($username and $password and $nama) {
                //cek apakah password sudah lebih dari 6 karakter
                if (strlen($password) > 6) {
                    $data = [
                        'nama' => $nama,
                        'username' => $username,
                        'password' => $password
                    ];
                    //panggil function update_data pada model
                    $this->model->update_data($this->table, $data, ['id' => $id]);
                }
                redirect('user/show');
            }
        }
    }
}
