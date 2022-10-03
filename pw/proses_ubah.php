<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE novel SET id=:id, judul=:judul, penerbit=:penerbit, harga=:harga, gambar=:gambar WHERE id=:id");
$sql->bindParam(':id', $id);
$sql->bindParam(':judul', $judul);
$sql->bindParam(':penerbit', $penerbit);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':gambar', $gambar);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>