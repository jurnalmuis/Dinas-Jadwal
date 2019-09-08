<?php include 'mainberanda.php'; ?>
<!-- Auto Generate -->
<?php

include "koneksi.php";
// mencari kode barang dengan nilai paling besar
$query = "SELECT max(idpemesanan) as maxKode FROM pemesanan";
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
$char = "PMS";
$kodedr = $char . sprintf("%03s", $noUrut);

?>
<!-- Begin Page Content -->
<div align=center>
  <h3>Tambah Driver</h3>
    <form action="prosespemesanan.php" method="post" name="form1">
        <table width="30%" border="0">
            <tr>
                <td>ID Pemesanan</td>
                <td><input class="form-control form-control-sm" type="text" name="idpemesanan" value="<?php echo $kodedr;?>" readonly></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td><input class="form-control form-control-sm" type="time" name="waktu"></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input class="form-control form-control-sm" type="date" name="tanggalpeminjaman"></td>
            </tr>
            <tr>
                <td>Tanggal Pengembali</td>
                <td><input class="form-control form-control-sm" type="date" name="tanggalpengembali"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input class="form-control form-control-sm" type="text" name="namapenanggung"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input class="form-control form-control-sm" type="text" name="nohp"></td>
            </tr>
            <tr>
                <td>Plat Mobil</td>
                <td><input class="form-control form-control-sm" type="text" name="platmobil"></td>
            </tr>
            <tr>
                <td>Bidang</td>
                <td><input class="form-control form-control-sm" type="text" name="bidang"></td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td><input class="form-control form-control-sm" type="text" name="tujuan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add" class="btn btn-primary btn-user btn-block"></td>
            </tr>
        </table>
    </form>
</div>



<?php include 'footerberanda.php'; ?>
