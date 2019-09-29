<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$iddriver = $_POST['iddriver'];
$nama = $_POST['nama'];
$bidang = $_POST['bidang'];
$nohp = $_POST['nohp'];

// update data ke database
mysqli_query($koneksi,"update driver set nama='$nama', bidang='$bidang', nohp='$nohp' where iddriver='$iddriver'");

// mengalihkan halaman kembali ke index.php
header("location:driver.php");

?>
