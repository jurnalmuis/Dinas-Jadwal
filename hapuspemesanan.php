<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['idpemesanan'];

// menghapus data dari database
mysqli_query($koneksi,"delete from pemesanan where idpemesanan='$id'");

// mengalihkan halaman kembali ke index.php
header("location:pesanmobil.php");

?>
