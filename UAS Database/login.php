<html lang="id">
<head>
  <title>Workshop 1 - authentication user</title>
</head>
<body>
<h2>Form Login</h2>

Jika Anda belum mendaftar dalam server kami.
[<a href="registerW.php">Daftar sekarang</a>]
<br><br>

<form action="do_login.php" method="post">
  <table>
    <tr>
      <td>ID User</td>
      <td>
        <label>
            <input type="text" name="id" maxlength="15" size="25">
        </label>
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td>
        <label>
            <input type="text" name="pwd" maxlength="15" size="25">
        </label>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="login" value="Login"></td>
    </tr>
  </table>
</form>
</body>
</html>