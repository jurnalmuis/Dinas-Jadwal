<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['iddriver'];

// menghapus data dari database
mysqli_query($koneksi,"delete from driver where iddriver='$id'");

// mengalihkan halaman kembali ke index.php
header("location:driver.php");

?>
