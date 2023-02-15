<html lang="id">
<head>
    <title>Workshop 1 - authentication user</title>
</head>
<body>
<h2>Form Regsiter User</h2>

<form action="do_register.php" method="post">
    <table>
        <tr>
            <td>ID User</td>
            <td>
                <label>
                    <input type="text" name="id" maxlength="14" size="15">
                </label>
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>
                <label>
                    <input type="text" name="nama" maxlength="24" size="25">
                </label>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <label>
                    <input type="password" name="pwd" maxlength="14" size="25">
                </label>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="daftar" value="Daftar"></td>
        </tr>
    </table>
</form>
</body>
</html>