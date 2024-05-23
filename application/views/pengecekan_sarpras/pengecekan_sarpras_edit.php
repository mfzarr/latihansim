<!DOCTYPE html>
<html>

<head>
    <title>Form Edit Data Pengecekan Sarpras</title>
</head>

<body>
    <section>
        <div id="content">
            <center>
                <h2>Form Edit Data Pengecekan Sarpras</h2>
                <form action="<?php echo base_url('pengecekan_sarpras/update') ?>" method="post">
                    <table border="1">
                        <tr>
                            <td>ID</td>
                            
                            <td><input type="number" name="id" value="<?php echo $pengecekan_sarpras->id ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            
                            <td><input type="text" name="nama_barang" value="<?php echo $pengecekan_sarpras->nama_barang ?>"required></td>
                        </tr>
                        <tr>
                            <td>Kode Barang</td>
                            
                            <td><input type="text" name="kode_barang" value="<?php echo $pengecekan_sarpras->kode_barang ?>"required></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengecekan</td>
                            
                            <td><input type="month" name="tgl_pengecekan" value="<?php echo $pengecekan_sarpras->tgl_pengecekan ?>"required></td>
                        </tr>
                        <tr>
                            <td>Hasil Pengecekan</td>
                            
                            <td><textarea name="hasil_pengecekan"required><?php echo $pengecekan_sarpras->hasil_pengecekan ?></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="ubah" value="Ubah Data">
                                <input type="button" value="Batal" onclick="window.location.href='<?= base_url('pengecekan_sarpras/show'); ?>'">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </section>
</body>

</html>