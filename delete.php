<?php 
require 'function.php';

$id = $_GET['id'];

if (hapus ($id)> 0) {
	echo "
			<script>
				alert('data berhasil di tambahkan!');
				document.location.href = 'index.php';
			</script>
		";
		echo "
			<script>
				alert('data gagal di tambahkan!');
				document.location.href = 'index.php';
			</script>
		";
}
 ?>