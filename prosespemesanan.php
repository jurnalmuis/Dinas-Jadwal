<?php

// Check If form submitted, insert form data into users table.

if(isset($_POST['Submit'])) {
    $idpemesanan = $_POST['idpemesanan'];
    $waktu = $_POST['waktu'];
    $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
    $tanggalpengembali = $_POST['tanggalpengembali'];
    $namapenanggung = $_POST['namapenanggung'];
    $nohp = $_POST['nohp'];
    $platmobil = $_POST['platmobil'];
    $bidang = $_POST['bidang'];
    $tujuan = $_POST['tujuan'];


    // include database connection file
    include_once("koneksi.php");

    $updatemobil = mysqli_query($koneksi, "UPDATE datamobil SET keterangan='dipakai' where platmobil='$platmobil'");
    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO pemesanan(idpemesanan,waktu,tanggalpeminjaman,tanggalpengembali,namapenanggung,nohp,platmobil,bidang,tujuan,proses) VALUES('$idpemesanan','$waktu','$tanggalpeminjaman','$tanggalpengembali','$namapenanggung','$nohp','$platmobil','$bidang','$tujuan','Belum Selesai')");

    // Show message when user added
    header("location:pesanmobil.php");
}
?>
