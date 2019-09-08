<?php include 'mainberanda.php'; ?>
<!-- Auto Generate -->
<?php

include "koneksi.php";
// mencari kode barang dengan nilai paling besar
$query = "SELECT max(iddriver) as maxKode FROM driver";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodedr = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kodedr, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "IDR";
$kodedr = $char . sprintf("%03s", $noUrut);

?>
<!-- Begin Page Content -->
<div align=center>
  <h3>Tambah Driver</h3>
    <form action="prosesdriver.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>ID Driver</td>
                <td><input class="form-control form-control-sm" type="text" name="iddriver" value="<?php echo $kodedr;?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input class="form-control form-control-sm" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input class="form-control form-control-sm" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input class="form-control form-control-sm" type="text" name="nohp"></td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td><input class="form-control form-control-sm" type="text" name="noktp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add" class="btn btn-primary btn-user btn-block"></td>
            </tr>
        </table>
    </form>
</div>
  <!--php

    // Check If form submitted, insert form data into users table.
>
-->
<?php include 'footerberanda.php'; ?>
