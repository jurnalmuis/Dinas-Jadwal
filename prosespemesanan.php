<?php

// Check If form submitted, insert form data into users table.

if(isset($_POST['Submit'])) {
    $idpemesanan = $_POST['idpemesanan'];
    $waktu = $_POST['waktu'];
    $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
    $namapenanggung = $_POST['namapenanggung'];
    $nohp = $_POST['nohp'];
    $platmobil = $_POST['platmobil'];
    $bidang = $_POST['bidang'];
    $tujuan = $_POST['tujuan'];


    // include database connection file
    include_once("koneksi.php");

    $updatemobil = mysqli_query($koneksi, "UPDATE mobil SET status='Di Pinjam' where platnomor='$platmobil'");
    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO pemesanan(idpemesanan,waktu,tanggalpeminjaman,namapenanggung,nohp,platmobil,bidang,tujuan) VALUES('$idpemesanan','$waktu','$tanggalpeminjaman','$namapenanggung','$nohp','$platmobil','$bidang','$tujuan')");

    // Show message when user added
    header("location:pesanmobil.php");
}
?>
