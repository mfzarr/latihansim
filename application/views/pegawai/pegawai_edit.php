<!DOCTYPE html>
<html>

<head>
    <title>Form Edit Data Pegawai</title>
</head>

<body>
    <section>
        <div id="content">
            <center>
                <h2>Form Edit Data Pegawai</h2>
                <form action="<?php echo base_url('pegawai/update') ?>" method="post">
                    <table border="1">
                        <tr>
                            <td>NIP</td>
                            
                            <td><input type="number" name="nip" value="<?php echo $pegawai->nip ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            
                            <td><input type="text" name="nama" value="<?php echo $pegawai->nama ?>" required></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            
                            <td><input type="text" name="tempat_lahir" value="<?php echo $pegawai->tempat_lahir ?>" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            
                            <td><input type="date" name="tgl_lahir" value="<?php echo $pegawai->tgl_lahir ?>" required></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            
                            <td><input type="text" name="jabatan" value="<?php echo $pegawai->jabatan ?>" required></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            
                            <td>
                                <select name="pendidikan" required>
                                    <option value="SD" <?php if ($pegawai->pendidikan == 'SD') echo 'selected' ?>>SD</option>
                                    <option value="SMP" <?php if ($pegawai->pendidikan == 'SMP') echo 'selected' ?>>SMP</option>
                                    <option value="SMA/SMK" <?php if ($pegawai->pendidikan == 'SMA/SMK') echo 'selected' ?>>SMA/SMK</option>
                                    <option value="D3" <?php if ($pegawai->pendidikan == 'D3') echo 'selected' ?>>D3</option>
                                    <option value="D4" <?php if ($pegawai->pendidikan == 'D4') echo 'selected' ?>>D4</option>
                                    <option value="S1" <?php if ($pegawai->pendidikan == 'S1') echo 'selected' ?>>S1</option>
                                    <option value="S2" <?php if ($pegawai->pendidikan == 'S2') echo 'selected' ?>>S2</option>
                                    <option value="S3" <?php if ($pegawai->pendidikan == 'S3') echo 'selected' ?>>S3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            
                            <td><textarea name="alamat" required><?php echo $pegawai->alamat ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            
                            <td>
                                <input type="radio" name="jk" value="L" <?php if ($pegawai->jk == 'L') echo 'checked' ?> required>Laki-laki
                                <input type="radio" name="jk" value="P" <?php if ($pegawai->jk == 'P') echo 'checked' ?> required>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            
                            <td><input type="email" name="email" value="<?php echo $pegawai->email ?>" required></td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            
                            <td><input type="number" name="no_telp" value="<?php echo $pegawai->no_telp ?>" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="ubah" value="Ubah Data">
                                <input type="button" value="Batal" onclick="window.location.href='<?= base_url('pegawai/show'); ?>'">
                            </td>

                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </section>
</body>

</html>