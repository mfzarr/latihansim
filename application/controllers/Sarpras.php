<?php
class Sarpras extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // memanggil model datasarpras
        $this->load->model('datasarpras', 'model');
        // menentukan nama tabel
        $this->table = 'sarpras';
        // memanggil library session
        $this->load->library('session');
        // mengecek session username
        if (!$this->session->userdata('username')) {
            redirect('Homepage/login');
        }
    }
    // function menambah data
    public function add()
    {
        $data['judul'] = "Tambah sarpras";
        $this->load->view('header', $data);
        $this->load->view('sarpras/sarpras_add');
        $this->load->view('footer', $data);
    }

    // function menampilkan data
    public function show()
    {
        $data['sarprass'] = $this->model->get_all_data($this->table);
        $data['judul'] = "Data sarpras";
        $this->load->view('header', $data);
        $this->load->view('sarpras/sarpras_show', $data);
        $this->load->view('footer', $data);
    }

    // function edit data
    public function edit($kode_barang)
    {
        $data['sarpras'] = $this->model->get_data($this->table, ['kode_barang' => $kode_barang])->row();
        $data['judul'] = "Edit sarpras";
        $this->load->view('header', $data);
        $this->load->view('sarpras/sarpras_edit', $data);
        $this->load->view('footer', $data);
    }

    // function delete data
    public function delete($kode_barang)
    {
        $delete = $this->model->delete_data($this->table, ['kode_barang' => $kode_barang]);
        if ($delete)
            redirect('sarpras/show');
    }

    // function save data
    public function save()
    {
        if (isset($_POST['kirim'])) {
            $kode_barang = $this->input->post('kode_barang');
            $nama_barang = $this->input->post('nama_barang');
            $tahun_pembelian = $this->input->post('tahun_pembelian');
            $asal_usul = $this->input->post('asal_usul');
            $merk = $this->input->post('merk');
            $spesifikasi = $this->input->post('spesifikasi');
            $harga = $this->input->post('harga');
            $kategori = $this->input->post('kategori');

            if($kode_barang and $nama_barang and $tahun_pembelian and $asal_usul and $merk and $spesifikasi and $harga and $kategori){
                // membuat array untuk disimpan pada database
                $data = [
                    'kode_barang' => $kode_barang,
                    'nama_barang' => $nama_barang,
                    'tahun_pembelian' => $tahun_pembelian,
                    'asal_usul' => $asal_usul,
                    'merk' => $merk,
                    'spesifikasi' => $spesifikasi,
                    'harga' => $harga,
                    'kategori' => $kategori
                ];
                // simpan data ke database
                $this->model->insert_data($this->table, $data);
            }
            redirect('sarpras/show');
        }
    }


    // function update data
    public function update()
    {
        if (isset($_POST['ubah'])) {
            $kode_barang = $this->input->post('kode_barang');
            $nama_barang = $this->input->post('nama_barang');
            $tahun_pembelian = $this->input->post('tahun_pembelian');
            $asal_usul = $this->input->post('asal_usul');
            $merk = $this->input->post('merk');
            $spesifikasi = $this->input->post('spesifikasi');
            $harga = $this->input->post('harga');
            $kategori = $this->input->post('kategori');

            if($kode_barang and $nama_barang and $tahun_pembelian and $asal_usul and $merk and $spesifikasi and $harga and $kategori){
                // membuat array untuk disimpan pada database
                $data = [
                    'kode_barang' => $kode_barang,
                    'nama_barang' => $nama_barang,
                    'tahun_pembelian' => $tahun_pembelian,
                    'asal_usul' => $asal_usul,
                    'merk' => $merk,
                    'spesifikasi' => $spesifikasi,
                    'harga' => $harga,
                    'kategori' => $kategori
                ];
                // simpan data ke database
                $this->model->update_data($this->table, $data, ['kode_barang' => $kode_barang]);
            }
            redirect('sarpras/show');
        }
    }
}
