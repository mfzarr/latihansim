<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <section>
        <div id="content">
                <h2>Selamat datang di halaman utama</h2>
                <ul>
                    <li><a href="<?= base_url('user/show') ?>">User</a></li>
                    <li><a href="<?= base_url('pegawai/show') ?>">Pegawai</a></li>
                    <li><a href="<?= base_url('sarpras/show') ?>">Sarpras</a></li>
                    <li><a href="<?= base_url('pengecekan_sarpras/show') ?>">Pengecekan Sarpras</a></li>
                </ul>
                <button class="btn" onclick="location.href='<?= base_url('userlogout'); ?>'">Logout</button><br><br>
        </div>
    </section>
</body>
</html>
