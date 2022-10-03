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
        <td>Nomor</td>
        <td><input type="text" name="nomor"></td>
      </tr> 
    <tr>
      </tr>
      <tr>
        <td>Judul</td>
        <td><input type="text" name="judul"></td>
      </tr>
      <tr>
        <td>Penerbit</td>
        <td> <input type="text" name="penerbit"> </td>
      </tr>
      <tr>
        <td>Harga</td>
        <td> <input type="text" name="harga"> </td>
      </tr>
      <tr>
      </tr>
      <tr>
        <td>Gambar</td>
        <td><input type="text" name="gambar"></td>
      </tr>
      
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>