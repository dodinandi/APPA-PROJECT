<?php 
include 'koneksi.php';
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>BUKTI BAYAR</title>
  </head>
  <body>
 
 <!-- Form Registrasi -->
  <div class="container">
    <h3 class="text-center mt-3 mb-5">BUKTI BAYAR</h3>
    <div class="card p-5 mb-5">
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama">Nama Customer</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label for="gambar">Bukti Bayar</label>
          <input type="file" class="form-control-file border" id="gambar" name="gambar">
        </div><br>
        <button type="submit" class="btn btn-success" name="bayar">Bayar</button>
      </form>
      <p></p>

      <?php 
     if(isset($_POST['bayar'])) {
          $tanggal_pesanan=date("Y-m-d");
          $id_menu =  $_SESSION['id_menu_ktg'];
          $nama = $_POST['nama'];
          $total_belanja_prod = $_SESSION['total_belanja_prod'];

          $bukti_bayar = $_FILES['gambar']['name'];
          $source = $_FILES['gambar']['tmp_name'];
          $folder = './upload/';
          echo $id_menu;
          echo $total_belanja_prod;

          // Menyimpan data ke tabel pemesanan
          $insert = mysqli_query($koneksi, "INSERT INTO pesanan (id_menu, nama, tanggal_pesanan, bukti_bayar, total_belanja) VALUES ('$id_menu', '$nama', '$tanggal_pesanan', '$bukti_bayar', '$total_belanja_prod')");

          // Mendapatkan ID barusan
          $id_terbaru = $koneksi->insert_id;

          // Menyimpan data ke tabel pemesanan produk
          // foreach ($_SESSION["pemesanan"] as $id_menu => $jumlah)
          // {
          // $insert = mysqli_query($koneksi, "INSERT INTO pesanan (id_pesanan) 
          // VALUES ('$id_terbaru') ");
          // }          

          // Mengosongkan pesanan
          unset($_SESSION["pemesanan"]);

          // Dialihkan ke halaman nota
          echo "<script>alert('Pesanan Sukses!');</script>";
          echo "<script>location= 'user.php'</script>";
      }
      ?>
    </div>
  </div>
  <!-- Akhir Form Registrasi -->


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>