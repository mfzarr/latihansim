<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah sarpras</title>
</head>

<body>
    <section>
        <div id="content">
            <center>
                <h2>Form Tambah Sarpras</h2>
                <form action="<?= base_url('sarpras/save') ?>" method="post">
                    <table border="1">
                        <tr>
                            <td>Kode Barang</td>
                            <td><input type="text" name="kode_barang" required></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>

                            <td><input type="text" name="nama_barang" required></td>
                        </tr>
                        <tr>
                            <td>Tahun Pembelian</td>

                            <td>
                                <select name="tahun_pembelian" required>
                                    <?php
                                    $currentYear = date("Y");
                                    for ($year = 1945; $year <= $currentYear; $year++) {
                                        echo "<option value='$year'>$year</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Asal Usul</td>

                            <td>
                                <input type="radio" name="asal_usul" value="APBD" required>APBD
                                <input type="radio" name="asal_usul" value="Hibah" required>Hibah
                            </td>
                        </tr>
                        <tr>
                            <td>Merk</td>

                            <td><input type="text" name="merk" required></td>
                        </tr>
                        <tr>
                            <td>Spesifikasi</td>

                            <td><textarea name="spesifikasi" required></textarea></td>
                        </tr>
                        <tr>
                            <td>Harga</td>

                            <td><input type="number" name="harga" required></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>

                            <td>
                                <input type="radio" name="kategori" value="Habis pakai" required> Habis Pakai
                                <input type="radio" name="kategori" value="Tidak" required> Tidak
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="kirim" value="save">
                                <input type="button" value="Batal" onclick="window.location.href='<?= base_url('sarpras/show'); ?>'">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </section>
</body>

</html>