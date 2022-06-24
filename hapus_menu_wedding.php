<?php 

include('koneksi.php');

$id_menu = $_GET['id_menu'];

$hapus= mysqli_query($koneksi, "DELETE FROM wedding WHERE id_menu='$id_menu'");

if($hapus)
	header('location: daftar_menu_wedding.php');
else
	echo "Hapus data gagal";

 ?>