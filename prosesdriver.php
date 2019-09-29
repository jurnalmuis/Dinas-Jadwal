<?php
if(isset($_POST['Submit'])) {
    $iddriver = $_POST['iddriver'];
    $nama = $_POST['nama'];
    $bidang = $_POST['bidang'];
    $nohp = $_POST['nohp'];

    // include database connection file
    include_once("koneksi.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO driver(iddriver,nama,bidang,nohp) VALUES('$iddriver','$nama','$bidang','$nohp')");

    header("location:driver.php");
    // Show message when user added
}
//header("location:driver.php");
?>
