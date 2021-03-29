<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- form di table utk submmit nama email untuk login  -->
    <form action="tugas3_biodataact.php" method="post">
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="130">Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td width="130">Alamat</td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td width="130">Kelamin</td>
          <td><input type="text" name="kelamin"></td>
        </tr>
        <tr>
          <td width="130">Kewarganegaraan</td>
          <td><input type="text" name="negara"></td>
        </tr>
        <tr>
          <td width="130">Pendidikan</td>
          <td><input type="text" name="pendidikan"></td>
        </tr>
          <td>
            <input type="submit" name="btnLogin" value="Login"> <!-- button submit -->
            <input type="reset" name="reset" value="Reset"> <!-- button reset  -->
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
