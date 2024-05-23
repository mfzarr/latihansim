<!DOCTYPE html>
<html>

<head>
    <title>Data sarpras</title>
</head>

<body>
    <section>
        <div id="content">
            <h2>Data Sarpras</h2>
            <a href="<?php echo base_url('sarpras/add') ?>">Tambah Data</a><br>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Tahun Pembelian</th>
                    <th>Asal Usul</th>
                    <th>Merk</th>
                    <th>Spesifikasi</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
                <?php
                foreach ($sarprass->result() as $s => $sarpras) {
                ?>
                    <tr>
                        <td><?= ++$s ?></td>
                        <td><?= $sarpras->kode_barang; ?></td>
                        <td><?= $sarpras->nama_barang; ?></td>
                        <td><?= $sarpras->tahun_pembelian; ?></td>
                        <td><?= $sarpras->asal_usul; ?></td>
                        <td><?= $sarpras->merk; ?></td>
                        <td><?= $sarpras->spesifikasi; ?></td>
                        <td>Rp.<?= format_number($sarpras->harga); ?></td> <!-- Menggunakan fungsi format_number untuk format harga -->
                        <td><?= $sarpras->kategori; ?></td>
                        <td>
                            <a href="<?= base_url('sarpras/edit/' . $sarpras->kode_barang) ?>">Edit</a>
                            <a href="<?= base_url('sarpras/delete/' . $sarpras->kode_barang) ?>">Delete</a>
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
