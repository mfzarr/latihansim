<!DOCTYPE html>
<html>

<head>
    <title>Data Pegawai</title>
</head>

<body>
    <section>
        <div id="content">
            <h2>Data Pegawai</h2>
            <a href="<?php echo base_url('pegawai/add') ?>">Tambah Data</a><br>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jabatan</th>
                    <th>Pendidikan</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>email</th>
                    <th>no_telp</th>
                    <th>Aksi</th>
                </tr>
                <?php
                foreach ($pegawais->result() as $p => $pegawai) {
                ?>
                    <tr>
                        <td><?= ++$p ?></td>
                        <td><?= $pegawai->nip; ?></td>
                        <td><?= $pegawai->nama; ?></td>
                        <td><?= $pegawai->tempat_lahir; ?></td>
                        <td><?= $pegawai->tgl_lahir; ?></td>
                        <td><?= $pegawai->jabatan; ?></td>
                        <td><?= $pegawai->pendidikan; ?></td>
                        <td><?= $pegawai->alamat; ?></td>
                        <td><?= $pegawai->jk; ?></td>
                        <td><?= $pegawai->email; ?></td>
                        <td><?= $pegawai->no_telp; ?></td>
                        <td>
                            <a href="<?= base_url('pegawai/edit/' . $pegawai->nip) ?>">Edit</a>
                            <a href="<?= base_url('pegawai/delete/' . $pegawai->nip) ?>">Delete</a>
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