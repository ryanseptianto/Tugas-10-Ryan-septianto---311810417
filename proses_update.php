<?php
 if (isset($_POST['submit'])) {
  //Include file koneksi, untuk koneksikan ke database
  include 'koneksi.php';
  $no_transaksi=$_POST['no_transaksi'];
  $tanggal_transaksi=$_POST['tanggal_transaksi'];
  $jenis_transaksi=$_POST['jenis_transaksi'];
  $nama_member=$_POST['nama_member'];
  $no_room=$_POST['no_room'];
  $total = $_POST['total'];
 
  $sql="UPDATE transaksi SET no_transaksi = '$no_transaksi', tanggal_transaksi ='$tanggal_transaksi', jenis_transaksi ='$jenis_transaksi', nama_member ='$nama_member', no_room ='$no_room' WHERE no_transaksi = '$no_transaksi'";
  $query = mysqli_query($koneksi, $sql);	

  if ($sql) {
    // pesan jika data berubah
    echo "<script>alert('Data transaksi berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data transaksi gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}