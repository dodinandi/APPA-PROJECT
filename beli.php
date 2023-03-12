<?php 
session_start();

$id_menu = $_GET['id_menu'];

if (isset($_SESSION['pemesanan'][$id_menu]))
{
	$_SESSION['pemesanan'][$id_menu]+=1;
}

else 
{
	$_SESSION['pemesanan'][$id_menu]=1;
}

echo "<script>alert('Produk telah masuk ke pesanan anda');</script>";
echo "<script>location= 'pesanan_pembeli.php'</script>";

 ?>