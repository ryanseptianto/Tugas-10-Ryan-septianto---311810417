<?php
 if (isset($_POST['submit'])) {
  //Include file koneksi, untuk koneksikan ke database
  include 'koneksi.php';
  $no_transaksi=$_POST['no_transaksi'];
  $tanggal_transaksi=$_POST['tanggal_transaksi'];
  $jenis_transaksi=$_POST['jenis_transaksi'];
  $nama_member=$_POST['nama_member'];
  $no_room=$_POST['no_room'];
  

  // no_transaksi bernilai '' karena kita set auto increment
 
  $sql="insert INTO transaksi (no_transaksi,tanggal_transaksi,jenis_transaksi,nama_member,no_room) VALUES
  ('$no_transaksi', '$tanggal_transaksi', '$jenis_transaksi', '$nama_member', '$no_room')";
  $query = mysqli_query($koneksi, $sql);	
  
  if ($sql) {
    // pesan jika data tersimpan
    echo "<script>alert('Data transaksi berhasil ditambahkan'); 
	window.location.href='index.php'</script>"; 
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data transaksi gagal ditambahkan');
	window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}