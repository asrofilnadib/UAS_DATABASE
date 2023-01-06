<html lang="id">
<head>
    <title>Workshop 1 - authentication user</title>
</head>
<body>
<h2>Form Regsiter Warga</h2>

<form action="do_registerW.php" method="post">
    <table>
        <tr>
            <td>NIK</td>
            <td>
                <label>
                    <input type="text" name="nik" maxlength="18" size="20">
                </label>
            </td>
        </tr>
        <tr>
            <td>NKK</td>
            <td>
                <label>
                    <input type="text" name="nkk" maxlength="18" size="20">
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
            <td>Tanggal Lahir</td>
            <td>
                <label>
                    <input type="date" name="tgl_lahir" size="8">
                </label>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <label for="gender"></label>
                <select name="jk" id="gender" required>
                    <option value="p">Pria</option>
                    <option value="w">Wanita</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>
                <label>
                    <input type="text" name="pekerjaan" maxlength="35" size="25">
                </label>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>
                <label>
                    <input type="text" name="agama" maxlength="10" size="8">
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