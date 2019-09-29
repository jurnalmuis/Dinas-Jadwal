<?php include 'mainberanda.php'; ?>
<!-- Begin Page Content -->
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
//echo $cek;
?>
<!-- Cek Koneisi database -->
<div align="center"><a href="inputpemesanan.php" class="btn btn-primary">Tambah Data</a></div><Br>

 <table align="center" border="0" class="table table-striped table-sm">
   <thead class="thead-dark">
    <tr>
 			<td width=""><b>Waktu</td>
 			<td width=""><b>Tanggal Peminjaman</td>
 			<td width=""><b>Tanggal Pengembalian</td>
       <td width=""><b>Nama Penanggung</td>
       <td width=""><b>No.hp</td>
       <td width=""><b>Plat Mobil</td>
       <td width=""><b>Tujuan</td>
       <td width=""><b>Bidang</td>
       <td width=""><b>Proses</td>
 			<td colspan="2" align=center><b>AKSI</b></td>
 		</tr>
  </thead>
         <tr>
 		<?php
 			include 'koneksi.php';
 			$query = mysqli_query($koneksi,"SELECT * FROM pemesanan ORDER BY Proses");
 while($pemesanan = mysqli_fetch_array($query)){
 	?>
 	<tr>
 		<td><?php echo $pemesanan['waktu']?></td>
 		<td><?php echo $pemesanan['tanggalpeminjaman']?></td>
     <td><?php echo $pemesanan['tanggalpengembali']?></td>
     <td><?php echo $pemesanan['namapenanggung']?></td>
     <td><?php echo $pemesanan['nohp']?></td>
     <td><?php echo $pemesanan['platmobil']?></td>
    <td><?php echo $pemesanan['tujuan']?></td>
 		<td><?php echo $pemesanan['bidang']?></td>
    <td><?php echo $pemesanan['proses']?></td>
    <td><a href="editpemesanan.php?idpemesanan=<?php echo $pemesanan['idpemesanan'];?>" class="btn btn-sm btn-primary">EDIT</a></td>
         <td><a href="hapuspemesanan.php?idpemesanan=<?php echo $pemesanan['idpemesanan']; ?>&platmobil=<?php echo $pemesanan['platmobil'] ;?>" class="btn btn-sm btn-danger"  onclick="return confirm('Yakin Hapus?')">HAPUS</a></td>
 		</tr>
 		<?php
 	}
 	?>
 	</table>


<!-- End of Content Wrapper -->
 <?php include 'footerberanda.php';?>
