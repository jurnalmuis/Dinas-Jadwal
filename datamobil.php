<?php include 'mainberanda.php'; ?>
<!-- Begin Page Content -->
<div align="center"><h3>Data Mobil</h3></div><Br>
 <table align="center" border="0" class="table table-striped table-sm">
   <thead class="thead-dark">
    <tr>
 			<td width=""><b>Plat Mobil</td>
 			<td width=""><b>Status Mobil</td>
 		</tr>
  </thead>
         <tr>
 		<?php
 			include 'koneksi.php';
 			$query = mysqli_query($koneksi,"SELECT * FROM mobil ORDER BY idmobil ");
 while($pemesanan = mysqli_fetch_array($query)){
 	?>
 	<tr>
 		<td><?php echo $pemesanan['platnomor']?></td>
 		<td><?php echo $pemesanan['status']?></td>
 		</tr>
 		<?php
 	}
 	?>
 	</table>


<!-- End of Content Wrapper -->
 <?php include 'footerberanda.php';?>
