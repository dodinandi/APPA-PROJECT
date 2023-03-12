<?php 

include('koneksi.php');

$id = $_GET['id'];

$hapus= mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan='$id'");

if($hapus)
	header('location: pesanan.php');
else
	echo "Hapus data gagal";

 ?>