<?php 
include('koneksi.php');

$id_menu = $_POST['id_menu'];
$nama_menu = $_POST['nama_menu'];
$tempat = $_POST['tempat'];
$tanggal_booking = $_POST['tanggal_booking'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE katalog SET nama_menu='$nama_menu', tempat='$tempat', tanggal_booking='$tanggal_booking', harga='$harga', gambar='$gambar' WHERE id_menu='$id_menu' ");

if($edit)
	header('location: daftar_menu.php');
else
	echo "Edit Menu Gagal";


 ?>