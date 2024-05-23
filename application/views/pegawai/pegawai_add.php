<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Pegawai</title>
</head>

<body>
    <section>
        <div id="content">
            <center>
                <h2>Form Tambah Pegawai</h2>
                <form action="<?php echo base_url('pegawai/save') ?>" method="post">
                    <table border="1">
                        <tr>
                            <td>NIP</td>
                            
                            <td><input type="number" name="nip" required></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            
                            <td><input type="text" name="nama" required></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            
                            <td><input type="text" name="tempat_lahir" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            
                            <td><input type="date" name="tgl_lahir" required></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            
                            <td><input type="text" name="jabatan" required></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            
                            <td>
                                <select name="pendidikan" required>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            
                            <td><textarea name="alamat" required></textarea></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            
                            <td>
                                <input type="radio" name="jk" value="L" required>Laki-laki
                                <input type="radio" name="jk" value="P" required>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            
                            <td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            
                            <td><input type="number" name="no_telp" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="kirim" value="save">
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