<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- form di table utk submit nama  -->
    <form action="praktikum2_hasilkirim.php" method="post">
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="130">Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="btnLogin" value="Kirim"> <!-- button submit kirim -->
            <input type="reset" name="Reset" value="Reset"> <!-- button reset -->
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
