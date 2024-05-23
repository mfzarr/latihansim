<!DOCTYPE html>
<html>

<head>
    <title>Data Pengecekan Sarpras</title>
</head>

<body>
    <section>
        <div id="content">
            <h2>Data Pengecekan Sarpras</h2>
            <a href="<?php echo base_url('pengecekan_sarpras/add') ?>">Tambah Data</a><br>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Tanggal Pengecekan</th>
                    <th>Hasil Pengecekan</th>
                    <th>Aksi</th>
                </tr>
                <?php
                foreach ($pengecekan_sarprass->result() as $p => $pengecekan_sarpras) {
                ?>
                    <tr>
                        <td><?= ++$p ?></td>
                        <td><?= $pengecekan_sarpras->id ?></td>
                        <td><?= $pengecekan_sarpras->nama_barang ?></td>
                        <td><?= $pengecekan_sarpras->kode_barang ?></td>
                        <td><?= date('F Y', strtotime($pengecekan_sarpras->tgl_pengecekan)) ?></td>
                        <td><?= $pengecekan_sarpras->hasil_pengecekan ?></td>
                        <td>
                            <a href="<?= base_url('pengecekan_sarpras/edit/' . $pengecekan_sarpras->id) ?>">Edit</a>
                            <a href="<?= base_url('pengecekan_sarpras/delete/' . $pengecekan_sarpras->id) ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <a href="<?php echo base_url('main') ?>">Kembali Ke Halaman Utama</a><br>
        </div>
    </section>
</body>

</html>