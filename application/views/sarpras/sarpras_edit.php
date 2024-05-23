<!DOCTYPE html>
<html>

<head>
    <title>Form Edit Data sarpras</title>
</head>

<body>
    <section>
        <div id="content">
            <center>
                <h2>Form Edit Data Sarpras</h2>
                <form action="<?php echo base_url('sarpras/update') ?>" method="post">
                    <table border="1">
                        <tr>
                            <td>Kode Barang</td>
                            <td><input type="text" name="kode_barang" value="<?php echo $sarpras->kode_barang; ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td><input type="text" name="nama_barang" value="<?php echo $sarpras->nama_barang; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Tahun Pembelian</td>
                            <td>
                                <select name="tahun_pembelian" required>
                                    <?php
                                        $currentYear = date("Y");
                                        for ($year = 1945; $year <= 2024; $year++) {
                                            echo "<option value='$year'" . ($year == $sarpras->tahun_pembelian ? " selected" : "") . ">$year</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Asal Usul</td>
                            <td>
                                <input type="radio" name="asal_usul" value="APBD" required <?php if ($sarpras->asal_usul == 'APBD') echo 'checked' ?>> APBD
                                <input type="radio" name="asal_usul" value="Hibah" required <?php if ($sarpras->asal_usul == 'Hibah') echo 'checked' ?>> Hibah
                            </td>
                        </tr>
                        <tr>
                            <td>Merk</td>
                            <td><input type="text" name="merk" value="<?php echo $sarpras->merk; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Spesifikasi</td>
                            <td><textarea name="spesifikasi" required><?php echo $sarpras->spesifikasi; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="number" name="harga" value="<?php echo $sarpras->harga; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>
                                <input type="radio" name="kategori" value="Habis pakai" required <?php if ($sarpras->kategori == 'Habis pakai') echo 'checked' ?>> Habis Pakai
                                <input type="radio" name="kategori" value="Tidak" required <?php if ($sarpras->kategori == 'Tidak') echo 'checked' ?>> Tidak
                            </td>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="ubah" value="Ubah data">
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