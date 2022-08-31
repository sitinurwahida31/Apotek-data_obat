<?php 
require 'function.php';

// ambil data dari tabel mahasiswa/ query data
$data_obat = query ("SELECT * FROM data_obat"); 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
</head>
<body>

	<h1>DATA OBAT</h1>
	<a href="tambah.php">Tambah Data Obat</a>
	<br><br>

	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Nama Obat</th>
			<th>Jenis Obat</th>
			<th>Stok Obat</th>
            <th>Harga</th>
            <th>Update</th>
		</tr>

		<?php $i = 1; ?>
		<!-- menggunakan perulangan looping foreach-->
		<?php foreach($data_obat as $row ) : ?>
		<tr>
			<td><?= $i; ?></td> 
			<td><?= $row ["nama_obat"]; ?></td>
			<td><?= $row ["jenis_obat"]; ?></td>
			<td><?= $row ["stok_obat"]; ?></td>
			<td><?= $row ["harga_obat"]; ?></td>
            <td>
				<a href="edit.php?id=<?= $row ["id"]; ?>">Edit</a> |
				<a href="delete.php?id=<?= $row ["id"]; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data tersebut?');" >Delete</a>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

		
	</table>

</body>
</html>