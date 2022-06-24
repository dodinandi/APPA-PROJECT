<?php 

include('koneksi.php');

$id_menu = $_GET['id_menu'];

$hapus= mysqli_query($koneksi, "DELETE FROM graduation WHERE id_menu='$id_menu'");

if($hapus)
	header('location: daftar_menu_graduation.php');
else
	echo "Hapus data gagal";

 ?>