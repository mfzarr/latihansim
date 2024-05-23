<?php
class Pegawai extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        // memanggil model datapegawai
        $this->load->model('datapegawai', 'model');
        // menentukan nama tabel
        $this->table = 'pegawai';
        // memanggil library session
        $this->load->library('session');
        // mengecek session username
        if(!$this->session->userdata('username'))
        {
            redirect('Homepage/login');
        }
    }

    // function menambah data
    public function add()
    {
        $data['judul'] = "Tambah Pegawai";
        $this->load->view('header', $data);
        $this->load->view('pegawai/pegawai_add');
        $this->load->view('footer', $data);
    }

    // function menampilkan data
    public function show()
    {
        $data['pegawais'] = $this->model->get_all_data($this->table);
        $data['judul'] = "Data Pegawai";
        $this->load->view('header', $data);
        $this->load->view('pegawai/pegawai_show', $data);
        $this->load->view('footer', $data);
    }

    // function edit data
    public function edit($nip)
    {
        $data['pegawai'] = $this->model->get_data($this->table, ['nip' => $nip])->row();
        $data['judul'] = "Edit Pegawai";
        $this->load->view('header', $data);
        $this->load->view('pegawai/pegawai_edit', $data);
        $this->load->view('footer', $data);
    }

    // function delete data
    public function delete($nip)
    {
        $delete = $this->model->delete_data($this->table, ['nip' => $nip]);
        if ($delete)
            redirect('pegawai/show');
    }

    // function save data
    public function save()
    {
        if (isset($_POST['kirim'])) {
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jabatan = $this->input->post('jabatan');
            $pendidikan = $this->input->post('pendidikan');
            $alamat = $this->input->post('alamat');
            $jk = $this->input->post('jk');
            $email = $this->input->post('email');
            $no_telp = $this->input->post('no_telp');

            // mengecek nip, nama, tempat_lahir, tgl_lahir, jabatan, pendidikan, alamat, jk, email, dan no_telp apakah sudah terisi
            if ($nip and $nama and $tempat_lahir and $tgl_lahir and $jabatan and $pendidikan and $alamat and $jk and $email and $no_telp) {
                $data = [
                    'nip' => $nip,
                    'nama' => $nama,
                    'tempat_lahir' => $tempat_lahir,
                    'tgl_lahir' => $tgl_lahir,
                    'jabatan' => $jabatan,
                    'pendidikan' => $pendidikan,
                    'alamat' => $alamat,
                    'jk' => $jk,
                    'email' => $email,
                    'no_telp' => $no_telp
                ];
                $this->model->insert_data($this->table, $data);
            }
            redirect('pegawai/show');
        }
    }

    // function update data
    public function update()
    {
        if (isset($_POST['ubah'])) {
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jabatan = $this->input->post('jabatan');
            $pendidikan = $this->input->post('pendidikan');
            $alamat = $this->input->post('alamat');
            $jk = $this->input->post('jk');
            $email = $this->input->post('email');
            $no_telp = $this->input->post('no_telp');

            // mengecek nip, nama, tempat_lahir, tgl_lahir, jabatan, pendidikan, alamat, jk, email, dan no_telp apakah sudah terisi
            if ($nip and $nama and $tempat_lahir and $tgl_lahir and $jabatan and $pendidikan and $alamat and $jk and $email and $no_telp) {
                $data = [
                    'nip' => $nip,
                    'nama' => $nama,
                    'tempat_lahir' => $tempat_lahir,
                    'tgl_lahir' => $tgl_lahir,
                    'jabatan' => $jabatan,
                    'pendidikan' => $pendidikan,
                    'alamat' => $alamat,
                    'jk' => $jk,
                    'email' => $email,
                    'no_telp' => $no_telp
                ];
                $this->model->update_data($this->table, $data, ['nip' => $nip]);
            }
            redirect('pegawai/show');
        }
    }
}