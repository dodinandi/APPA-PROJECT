<?php 
    include('koneksi.php');
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
				a{
					text-decoration: none;
					color: black;
				}

	</style>

</head>


<body>
		<hr>
		<center><p style="font-weight: bold; font-size: 20px;">LAPORAN PEMESANAN</p></center>
    <center><p style="font-weight: bold; font-size: 20px;">APPA PROJECT FOTOGRAFI</p></center>
		<hr>
		<br>
		<table border="1" width="100%" >
					
					<tr align="center" style="background-color: white; color: black;">
          <th scope="col">No.</th>
            <th scope="col">ID Pemotretan</th>
            <th scope="col">ID Katalog</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Pemesanan</th>
            <!-- <th scope="col">Tempat</th> -->
            <!-- <th scope="col">Tanggal Booking</th> -->
            <!-- <th scope="col">Bukti Pembayaran</th> -->
            <th scope="col">Harga</th>
            <th scope="col">Tanggal Selesai</th>


            <?php $nomor=1; ?>
            <?php 
              $ambil = $koneksi->query("SELECT * FROM pesanan JOIN selesai on pesanan.id_menu=selesai.id_menu  WHERE pesanan.id_menu=selesai.id_menu");
           ?>
            <?php while ($pecah=$ambil->fetch_assoc()) { ?>
                

					<tr align="center" >
          <th scope="row"><?php echo $nomor; ?></th>
            <td><?php echo $pecah['id_pemotretan']; ?></td>
            <td><?php echo $pecah['id_menu']; ?></td>
            <td><?php echo $pecah['tanggal_pesanan']; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td>Rp. <?php echo number_format($pecah["total_belanja"]); ?></td>
            <td><?php echo $pecah['tanggal_selesai']; ?></td>
						
					</tr>

						<?php 
					}
					?>

</table>

<script>
		window.print();
	</script>
</div>


</body>
</html>
<?php } ?>