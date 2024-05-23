<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
</head>

<body>
    <section>
        <div id="content">
            <h2>Data User</h2>
            <a href="<?php echo base_url('user/add') ?>">Tambah Data</a><br><br>
            <table border="1">
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Username</td>
                    <td colspan="2">
                        <center>Opsi</center>
                    </td>
                </tr>
                <?php
                foreach ($users->result() as $i => $user) {
                ?>
                    <tr>
                        <td><?= ++$i; ?></td>
                        <td><?= $user->nama; ?></td>
                        <td><?= $user->username; ?></td>
                        <td><a href="<?= base_url('user/edit/' . $user->id); ?>">Ubah</a></td>
                        <td><a href="<?= base_url('user/delete/' . $user->id); ?>">Hapus</a></td>
                    </tr>
                <?php
                } ?>
            </table><br>
            <a href="<?php echo base_url('main') ?>">Kembali Ke Halaman Utama</a><br>
        </div>
    </section>
</body>

</html>