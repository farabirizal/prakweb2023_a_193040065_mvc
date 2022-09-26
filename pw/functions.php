<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "" , "prakweb_a_193040065_pw");


function query($query) {
	global $conn;
	// var_dump($query);die;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO mahasiswa
				VALUES
			  ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$gambar = htmlspecialchars($data["gambar"]);
	$judul = htmlspecialchars($data["judul"]);
	$penerbit = htmlspecialchars($data["penerbit"]);
	$harga = htmlspecialchars($data["harga"]);
	

	$query = "UPDATE novel SET
				gambar = '$gambar',
				judul = '$judul',
				penerbit = '$penerbit',
				harga = '$harga',
			  WHERE id = $id
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}















?>