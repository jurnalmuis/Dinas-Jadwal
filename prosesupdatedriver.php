<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$iddriver = $_POST['iddriver'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$noktp = $_POST['noktp'];

// update data ke database
mysqli_query($koneksi,"update driver set nama='$nama', alamat='$alamat', nohp='$nohp', noktp='$noktp' where iddriver='$iddriver'");

// mengalihkan halaman kembali ke index.php
header("location:driver.php");

?>
