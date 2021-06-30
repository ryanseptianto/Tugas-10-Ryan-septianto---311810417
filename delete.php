<?php

// cek no_transaksi
if (isset($_GET['no_transaksi'])) {
  include 'koneksi.php';
  $no_transaksi = $_GET['no_transaksi'];
 

  // perintah hapus data transaksi berdasarkan no_transaksi yang dikirimkan
  $sql="DELETE FROM transaksi WHERE no_transaksi ='$no_transaksi'";
  $query = mysqli_query($koneksi,$sql);	
  
  // cek perintah
  if ($sql) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data transaksi berhasil dihapus'); window.location.href='index.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data transaksi gagal dihapus'); window.location.href='index.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:index.php');
}