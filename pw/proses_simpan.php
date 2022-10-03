<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['nomor'];
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO novel (id, judul, penerbit, harga, gambar) VALUES(:id, :judul,:penerbit,:harga,:gambar)");
$sql->bindParam(':id', $id);
$sql->bindParam(':judul', $judul);
$sql->bindParam(':penerbit', $penerbit);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':gambar', $gambar);

$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>