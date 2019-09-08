<?php
if(isset($_POST['Submit'])) {
    $iddriver = $_POST['iddriver'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $noktp = $_POST['noktp'];

    // include database connection file
    include_once("koneksi.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO driver(iddriver,nama,alamat,nohp,noktp) VALUES('$iddriver','$nama','$alamat','$nohp','$noktp')");

    header("location:driver.php");
    // Show message when user added
}
//header("location:driver.php");
?>
