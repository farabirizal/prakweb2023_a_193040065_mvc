<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Ubah Data Siswa</h1>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  // Query untuk menampilkan data novel berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM novel WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
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
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>