<?php 
// koneksi ke database

			// nama localhost, root=masuk sebagai admin, password = kosong, nama database
$conn = mysqli_connect("localhost", "root", "", "apotek");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;

}



function tambah($data){
	global $conn;

	// ambil data dar tiap elemn dalam form
	$nama_obat = htmlspecialchars($data["nama_obat"]);
	$jenis_obat = htmlspecialchars($data["jenis_obat"]);
	$stok_obat = htmlspecialchars($data["stok_obat"]);
	$harga_obat = htmlspecialchars($data["harga_obat"]);

	// query insert data
	$query = "INSERT INTO data_obat
				VALUES
				('', '$nama_obat', '$jenis_obat', '$stok_obat', '$harga_obat')
			";
	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);
}



function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM data_obat WHERE id = $id");

	return mysqli_affected_rows($conn);
}



function ubah($data){
	global $conn;

	// ambil data dar tiap elemn dalam form
	$id = $data["id"];
	$nama_obat = htmlspecialchars($data["nama_obat"]);
	$jenis_obat = htmlspecialchars($data["jenis_obat"]);
	$stok_obat = htmlspecialchars($data["stok_obat"]);
	$harga_obat = htmlspecialchars($data["harga_obat"]);


	// query insert data
	$query = "UPDATE data_obat SET 
				nama_obat = '$nama_obat',
				jenis_obat = '$jenis_obat',
				stok_obat = '$stok_obat',
				harga_obat = '$harga_obat'
			 WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>
