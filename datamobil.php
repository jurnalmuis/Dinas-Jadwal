<?php include 'mainberanda.php'; ?>
<!-- Begin Page Content -->
<div align="center"><h3>Data Mobil</h3></div><Br>
  <?php
  include_once("koneksi.php");
  $tgl_today = date("Y-m-d");
  $tgl_now = strtotime($tgl_today);
  $query = mysqli_query($koneksi,"SELECT * FROM pemesanan where proses='Belum Selesai' AND tanggalpengembali<'$tgl_today'");
  $pms = mysqli_fetch_array($query);
  $tgl = strtotime($pms['tanggalpengembali']);
  $cek = mysqli_num_rows($query);
  if($cek>0){
    $updateSQL = mysqli_query($koneksi, "UPDATE pemesanan,datamobil SET pemesanan.proses ='Selesai', datamobil.keterangan='Tidak Dipakai' WHERE datamobil.keterangan='dipakai' AND datamobil.platmobil=pemesanan.platmobil AND pemesanan.proses='Belum Selesai' AND pemesanan.tanggalpengembali<'$tgl_today' ORDER BY pemesanan.tanggalpengembali LIMIT $cek");
  }
  ?>
 <table align="center" border="0" class="table table-striped table-sm">
   <thead class="thead-dark">
    <tr>
 			<td width=""><b>Plat Mobil</td>
 			<td width=""><b>Keterangan Mobil</td>
 		</tr>
  </thead>
         <tr>
 		<?php
 			include 'koneksi.php';
 			$query = mysqli_query($koneksi,"SELECT * FROM datamobil ORDER BY idno ");
 while($pemesanan = mysqli_fetch_array($query)){
 	?>
 	<tr>
 		<td><?php echo $pemesanan['platmobil']?></td>
 		<td><?php echo $pemesanan['keterangan']?></td>
 		</tr>
 		<?php
 	}
 	?>
 	</table>


<!-- End of Content Wrapper -->
 <?php include 'footerberanda.php';?>
