<?php
$koneksi = mysqli_connect("localhost","root","","ryan_311810417");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database tidak berhasil : " . mysqli_connect_error();
}
?>