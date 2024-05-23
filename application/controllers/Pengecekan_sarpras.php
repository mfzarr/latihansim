<?php
class Pengecekan_sarpras extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // memanggil model datapengecekan_sarpras
        $this->load->model('datapengecekan_sarpras', 'model');
        // menentukan nama tabel
        $this->table = 'pengecekan_sarpras';
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
        $data['judul'] = "Tambah Pengecekan Sarpras";
        $this->load->view('header', $data);
        $this->load->view('pengecekan_sarpras/pengecekan_sarpras_add');
        $this->load->view('footer', $data);
    }

    // function menampilkan data
    public function show()
    {
        $data['pengecekan_sarprass'] = $this->model->get_all_data($this->table);
        $data['judul'] = "Data Pengecekan Sarpras";
        $this->load->view('header', $data);
        $this->load->view('pengecekan_sarpras/pengecekan_sarpras_show', $data);
        $this->load->view('footer', $data);
    }

    // function edit data
    public function edit($id)
    {
        $data['pengecekan_sarpras'] = $this->model->get_data($this->table, ['id' => $id])->row();
        $data['judul'] = "Edit pengecekan_sarpras";
        $this->load->view('header', $data);
        $this->load->view('pengecekan_sarpras/pengecekan_sarpras_edit', $data);
        $this->load->view('footer', $data);
    }

    // function delete data
    public function delete($id)
    {
        $delete = $this->model->delete_data($this->table, ['id' => $id]);
        if ($delete)
            redirect('pengecekan_sarpras/show');
    }

    // function save data
    public function save()
    {
        if (isset($_POST['kirim'])) {
            $id = $this->input->post('id');
            $nama_barang = $this->input->post('nama_barang');
            $kode_barang = $this->input->post('kode_barang');
            $tgl_pengecekan = $this->input->post('tgl_pengecekan');
            $hasil_pengecekan = $this->input->post('hasil_pengecekan');

            // mengecek id, nama barang, kode barang, tanggal pengecekan, hasil pengecekan apakah sudah terisi
            if ($id and $nama_barang and $kode_barang and $tgl_pengecekan and $hasil_pengecekan) {
                $data = [
                    'id' => $id,
                    'nama_barang' => $nama_barang,
                    'kode_barang' => $kode_barang,
                    'tgl_pengecekan' => $tgl_pengecekan,
                    'hasil_pengecekan' => $hasil_pengecekan,
                ];
                $this->model->insert_data($this->table, $data);
            }
            redirect('pengecekan_sarpras/show');
        }
    }

    // function update data
    public function update()
    {
        if (isset($_POST['ubah'])) {
            $id = $this->input->post('id');
            $nama_barang = $this->input->post('nama_barang');
            $kode_barang = $this->input->post('kode_barang');
            $tgl_pengecekan = $this->input->post('tgl_pengecekan');
            $hasil_pengecekan = $this->input->post('hasil_pengecekan');

            // mengecek id, nama barang, kode barang, tanggal pengecekan, hasil pengecekan apakah sudah terisi
            if ($id and $nama_barang and $kode_barang and $tgl_pengecekan and $hasil_pengecekan) {
                $data = [
                    'id' => $id,
                    'nama_barang' => $nama_barang,
                    'kode_barang' => $kode_barang,
                    'tgl_pengecekan' => $tgl_pengecekan,
                    'hasil_pengecekan' => $hasil_pengecekan,
                ];
                $this->model->update_data($this->table, $data, ['id' => $id]);
            }
            redirect('pengecekan_sarpras/show');
        }
    }
}