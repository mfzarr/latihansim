<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <section>
        <div id="content">
            <?php
            if ($this->session->flashdata('error')) {
                echo $this->session->flashdata('error');
            } ?>
            <form method="post" action="<?= base_url('userlogin/process'); ?>">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>

</html>