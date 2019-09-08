<?php include 'mainberanda.php'; ?>


<!-- Cek Koneisi database -->
<div align="center"><a href="inputdriver.php" class="btn btn-primary">Tambah Data</a></div><Br>

 <table align="center" border="0" class="table table-striped table-sm">
   <thead class="thead-dark">
    <tr>
 			<td><b>Nama Driver</td>
 			<td><b>Alamat</td>
 			<td><b>No HP</td>
       <td><b>No KTP</td>
 			<td colspan=2 align=center><b>AKSI</b></td>
 		</tr>
  </thead>
         <tr>
 		<?php
 			include 'koneksi.php';
 			$query = mysqli_query($koneksi,"SELECT * FROM driver ORDER BY iddriver ");
 while($pemesanan = mysqli_fetch_array($query)){
 	?>
 	<tr>
 		<td><?php echo $pemesanan['nama']?></td>
 		<td><?php echo $pemesanan['alamat']?></td>
     <td><?php echo $pemesanan['nohp']?></td>
     <td><?php echo $pemesanan['noktp']?></td>
     <td><a href="editdriver.php?iddriver=<?php echo $pemesanan['iddriver']; ?>" class="btn btn-sm btn-primary">EDIT</a></td>
          <td><a href="hapusdriver.php?iddriver=<?php echo $pemesanan['iddriver']; ?>" class="btn btn-sm btn-danger"  onclick="return confirm('Yakin Hapus?')">HAPUS</a></td>

 		</tr>
 		<?php
 	}
 	?>
 	</table>
<!-- End of Content Wrapper -->
 <?php include 'footerberanda.php';?>
