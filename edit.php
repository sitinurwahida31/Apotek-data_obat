<?php 
require 'function.php';

// mengambil data berupa id pada url 
$id = $_GET["id"];


// query data mahasiswa berdasarkan id
$apt = query("SELECT * FROM data_obat WHERE id = $id")[0];


// cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"])) {


	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil di edit!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal di edit!');
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
		Edit Data Obat
	</title>
</head>
<body>
	<h1>Edit Data Obat</h1>

	<form action="" method="post">

		<input type="hidden" name="id" value="<?= $apt["id"]; ?>">

		<ul>
			<li>
				<label for="nama_obat">Nama Obat : </label>
				<input type="text" name="nama_obat" id="nama_obat" required value="<?= $apt["nama_obat"]; ?>">
			</li>
			<br>
			<li>
				<label for="jenis_obat">Jenis Obat : </label>
				<input type="text" name="jenis_obat" id="jenis_obat" required value="<?= $apt["jenis_obat"]; ?>">
			</li>
			<br>
			<li>
				<label for="stok_obat">Stok_Obat : </label>
				<input type="text" name="stok_obat" id="stok_obat" required value="<?= $apt["stok_obat"]; ?>">
			</li>
			<br>
			<li>
				<label for="harga_obat">Harga Obat : </label>
				<input type="text" name="harga_obat" id="harga_obat" required value="<?= $apt["harga_obat"]; ?>">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Edit Data!</button>
			</li>

		</ul>
		
	</form>
</body>
</html>