<?php 
include 'koneksi.php';
?>

<h3>Form Pencarian DATA KHS Dengan PHP </h3>
<form action="" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Kode MK</th>
		<th>Nama MK</th>
		<th>Nilai</th>
	</tr>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$sql="select mahasiswa.nim, mahasiswa.nama, matakuliah.kode_matkul, matakuliah.nama_matkul, nilai from khs JOIN mahasiswa ON khs.nim = mahasiswa.nim JOIN matakuliah ON khs.kode_matkul = matakuliah.kode_matkul where khs.nim LIKE '%".$cari."%'";
	$tampil = mysqli_query($con,$sql);
}else{
	$sql="select mahasiswa.nim, mahasiswa.nama, matakuliah.kode_matkul, matakuliah.nama_matkul, nilai from khs JOIN mahasiswa ON khs.nim = mahasiswa.nim JOIN matakuliah ON khs.kode_matkul = matakuliah.kode_matkul";
	$tampil = mysqli_query($con,$sql);
}

$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>

<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $r['nim']; ?></td>
	<td><?php echo $r['nama']; ?></td>
	<td><?php echo $r['kode_matkul']; ?></td>
	<td><?php echo $r['nama_matkul']; ?></td>
	<td><?php echo $r['nilai']; ?></td>
</tr>

<?php } ?>
</table>