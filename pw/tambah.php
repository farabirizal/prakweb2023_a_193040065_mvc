<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Novel</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
      </tr>
      <tr>
        <td>judul</td>
        <td><input type="text" name="Judul"></td>
      </tr>
      <tr>
        <td>penerbit</td>
        <td> <input type="text" name="Penerbit"> </td>
      </tr>
      <tr>
        <td>harga</td>
        <td> <input type="text" name="Gambar"> </td>
      </tr>
      
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>