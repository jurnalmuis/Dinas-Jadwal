<?php include 'mainberanda.php'; ?>
<!-- Begin Page Content -->
<?php
	include 'koneksi.php';
	$id = $_GET['idpemesanan'];
	$data = mysqli_query($koneksi,"select * from pemesanan where idpemesanan='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<div align=center>
  <h3>Tambah Driver</h3>
    <form action="prosesupdatepemesanan.php" method="post" name="update_driver">
        <table width="25%" border="0">
            <tr>
                <td>ID Pemesanan</td>
                <td><input class="form-control form-control-sm" type="text" name="idpemesanan" value="<?php echo $d['idpemesanan'];?>" readonly></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td><input class="form-control form-control-sm" type="time" name="waktu" value="<?php echo $d['waktu']; ?>" ></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input class="form-control form-control-sm" type="date" name="tanggalpeminjaman" value="<?php echo $d['tanggalpeminjaman']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Pengembali</td>
                <td><input class="form-control form-control-sm" type="date" name="tanggalpengembali" value="<?php echo $d['tanggalpengembali']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input class="form-control form-control-sm" type="text" name="namapenanggung" value="<?php echo $d['namapenanggung']; ?>"></td>
            </tr>
						<tr>
                <td>No HP</td>
                <td><input class="form-control form-control-sm" type="text" name="nohp" value="<?php echo $d['nohp']; ?>"></td>
            </tr>
						<tr>
                <td>Plat Mobil</td>
                <td><input class="form-control form-control-sm" type="text" name="platmobil" value="<?php echo $d['platmobil']; ?>"></td>
            </tr>
						<tr>
                <td>Bidang</td>
                <td><input class="form-control form-control-sm" type="text" name="bidang" value="<?php echo $d['bidang']; ?>"></td>
            </tr>

						<tr>
                <td>Tujuan</td>
                <td><input class="form-control form-control-sm" type="text" name="tujuan" value="<?php echo $d['tujuan']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan" value="Update" class="btn btn-primary btn-user btn-block"></td>
            </tr>
        </table>
    </form>
</div>
  <?php
  }
?>
  <!--php

    // Check If form submitted, insert form data into users table.
>
-->
<?php include 'footerberanda.php'; ?>
