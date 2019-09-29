<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idpemesanan = $_POST['idpemesanan'];
$waktu = $_POST['waktu'];
$tanggalpeminjaman = $_POST['tanggalpeminjaman'];
$tanggalpengembali = $_POST['tanggalpengembali'];
$namapenanggung = $_POST['namapenanggung'];
$nohp = $_POST['nohp'];
$platmobil = $_POST['platmobil'];
$bidang = $_POST['bidang'];
$tujuan = $_POST['tujuan'];

// update data ke database
mysqli_query($koneksi,"update pemesanan set waktu='$waktu', tanggalpeminjaman='$tanggalpeminjaman', tanggalpengembali='$tanggalpengembali', namapenanggung='$namapenanggung', nohp='$nohp', platmobil='$platmobil', bidang='$bidang', tujuan='$tujuan'  where idpemesanan='$idpemesanan'");
// mengalihkan halaman kembali ke index.php
header("location:pesanmobil.php");
?>
