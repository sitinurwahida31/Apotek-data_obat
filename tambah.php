<?php 
require 'function.php';


// cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"])) {


	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil di tambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal di tambahkan!');
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
		Tambah Data Obat
	</title>
</head>
<body>
	<h1>Tambah Data Obat</h1>

	<form action="" method="post">
		<ul>
        <li>
				<label for="nama_obat">Nama Obat : </label>
				<input type="text" name="nama_obat" id="nama_obat" required>
			</li>
			<br>
			<li>
				<label for="jenis_obat">Jenis Obat : </label>
				<input type="text" name="jenis_obat" id="jenis_obat" required >
			</li>
			<br>
			<li>
				<label for="stok_obat">Stok_Obat : </label>
				<input type="text" name="stok_obat" id="stok_obat" required >
			</li>
			<br>
			<li>
				<label for="harga_obat">Harga Obat : </label>
				<input type="text" name="harga_obat" id="harga_obat" required >
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>

		</ul>
		
	</form>
</body>
</html>