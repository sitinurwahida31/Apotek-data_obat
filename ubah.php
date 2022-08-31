<?php 
require 'function.php';

// mengambil data berupa id pada url 
$id = $_GET["id"];


// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM data_obat WHERE id = $id")[0];



// cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"])) {


	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil di update!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal di update!');
				document.location.href = 'index.php';
			</script>
		";
	}
	
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Update Data Mahasiswa
	</title>
</head>
<body>
	<h1>Update Data Mahasiswa</h1>

	<form action="" method="post">

		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<ul>
			<li>
				<label for="nama_obat">nama_obat : </label>
				<input type="text" name="nama_obat" id="nama_obat" required value="<?= $mhs["nama_obat"]; ?>">
			</li>
			<br>
			<li>
				<label for="jenis_obat">jenis_obat : </label>
				<input type="text" name="jenis_obat" id="jenis_obat" required value="<?= $mhs["jenis_obat"]; ?>">
			</li>
			<br>
			<li>
				<label for="stok_obat">stok obat : </label>
				<input type="text" name="stok_obat" id="stok_obat" required value="<?= $mhs["stok_obat"]; ?>">
			</li>
			<br>
			<li>
				<label for="harga_obat">harga_obat</label>
				<input type="text" name="harga_obat" id="harga_obat" required value="<?= $mhs["harga_obat"]; ?>">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Update Data!</button>
			</li>

		</ul>
		
	</form>
</body>
</html>