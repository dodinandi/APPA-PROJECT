<?php 
include('koneksi.php');

$id_menu = $_POST['id_menu'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE graduation SET nama='$nama', tempat='$tempat', harga='$harga', gambar='$nama_file' WHERE id_menu='$id_menu' ");

if($edit)
	header('location: daftar_menu_graduation.php');
else
	echo "Edit Menu Gagal";


 ?>