<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- form di table utk submmit nama email untuk login  -->
    <form action="praktikum2_getAct.php" method="get">
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="130">Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td width="130">Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="btnLogin" value="Login"> <!-- button submit -->
            <input type="reset" name="reset" value="Reset"> <!-- button reset  -->
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
