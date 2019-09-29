<?php include 'mainberanda.php'; ?>
<!-- Begin Page Content -->
<?php
	include 'koneksi.php';
	$id = $_GET['iddriver'];
	$data = mysqli_query($koneksi,"select * from driver where iddriver='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<div align=center>
  <h3>Tambah Driver</h3>
    <form action="prosesupdatedriver.php" method="post" name="update_driver">
        <table width="25%" border="0">
            <tr>
                <td>ID Driver</td>
                <td><input class="form-control form-control-sm" type="text" name="iddriver" value="<?php echo $d['iddriver'];?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input class="form-control form-control-sm" type="text" name="nama" value="<?php echo $d['nama']; ?>" ></td>
            </tr>
            <tr>
                <td>Bidang</td>
                <td><input class="form-control form-control-sm" type="text" name="bidang" value="<?php echo $d['bidang']; ?>"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input class="form-control form-control-sm" type="text" name="nohp" value="<?php echo $d['nohp']; ?>"></td>
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
