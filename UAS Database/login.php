<html lang="id">
<head>
  <title>Login user</title>
</head>
<body>
<h2>Form Login</h2>

Jika Anda Warga dan belum mendaftar klik
<a href="registerW.html">Daftar sekarang</a>
<br>

Jika Anda Pengurus RT dan belum mendaftar klik
<a href="registerP.html">Daftar sekarang</a>
<br><br>

<form action="do_login.php" method="post">
  <table>
    <tr>
      <td>NIK</td>
      <td>
        <label>
            <input type="text" name="nik" maxlength="15" size="25">
        </label>
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td>
        <label>
            <input type="password" name="pwd" maxlength="15" size="25">
        </label>
      </td>
    </tr>
    <tr>
      <td></td>
      <td align="right"><input type="submit" name="login" value="Login"></td>
    </tr>
  </table>
</form>
</body>
</html>