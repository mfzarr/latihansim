<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah pengecekan_sarpras</title>
</head>

<body>
    <section>
        <div id="content">
            <center>
                <h2>Form Tambah Pengecekan Sarpras</h2>
                <form action="<?php echo base_url('pengecekan_sarpras/save') ?>" method="post">
                    <table border="1">
                        <tr>
                            <td>Id</td>

                            <td><input type="number" name="id"required></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>

                            <td><input type="text" name="nama_barang"required></td>
                        </tr>
                        <tr>
                            <td>Kode Barang</td>

                            <td><input type="text" name="kode_barang"required></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengecekan</td>

                            <td><input type="month" name="tgl_pengecekan"required></td>
                        </tr>
                        <tr>
                            <td>Hasil Pengecekan</td>

                            <td><textarea name="hasil_pengecekan"required></textarea></td>
                        </tr>
                        <td colspan="2">
                            <input type="submit" name="kirim" value="save">
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