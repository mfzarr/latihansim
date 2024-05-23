<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah User</title>
</head>

<body>
    <section>
        <div id="content">
            <center>
                <h2>Form Tambah User</h2>
                <form method="post" action="<?= base_url('user/save'); ?>">
                    <table border="1">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="kirim" value="Save">
                                <input type="button" value="Batal" onclick="window.location.href='<?= base_url('user/show'); ?>'">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </section>
</body>

</html>