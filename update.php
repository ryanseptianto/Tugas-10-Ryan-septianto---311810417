<?php

// cek no_transaksi
if (isset($_GET['no_transaksi'])) {
  include 'koneksi.php';
  $no_transaksi = $_GET['no_transaksi'];
 
  // ambil data berdasarkan no_transaksi
  $sql="SELECT * FROM transaksi WHERE no_transaksi ='$no_transaksi'";
  //$no=1;
  $query = mysqli_query($koneksi, $sql);		
  while ($row = mysqli_fetch_array($query))
  {
  ?>

  <h2>Halaman Update Data</h2>

  <form method="post" action="proses_update.php">
    <input type="varchar" name="no_transaksi" value="<?php echo $row['no_transaksi']?>">
    <input type="varchar" name="tanggal_transaksi" value="<?php echo $row['tanggal_transaksi'] ?>">
    <input type="varchar" name="jenis_transaksi" value="<?php echo $row['jenis_transaksi'] ?>">
    <input type="varchar" name="nama_member" value="<?php echo $row['nama_member'] ?>">
    <input type="varchar" name="no_room" value="<?php echo $row['no_room'] ?>">
    <input type="submit" name="submit" value="Update Data">
  </form>

  <?php
 
}}
