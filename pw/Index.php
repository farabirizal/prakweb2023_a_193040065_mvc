<?php 
require 'functions.php';
$novel = query("SELECT * FROM novel");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Buku</h1>

<a href="tambah.php">Tambah data Novel</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Judul</th>
		<th>Penerbit</th>
		<th>Harga</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $novel as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><img src="Assets/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["judul"]; ?></td>
		<td><?= $row["penerbit"]; ?></td>
		<td><?= $row["harga"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>