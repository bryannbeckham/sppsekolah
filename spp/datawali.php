<?php
include 'koneksi.php';

include 'header.php';
?>

<style >
	.btn{
		margin-bottom: 10px;
	}

</style>
<div class="container">
	<div class="page-header">
<h2> DATA WALIKELAS</h2>
	</div>
<a class="btn btn-primary " href="tambahWL.php">TAMBAH DATA</a>
<table class="table table-bordered table-striped" >
<tr>
	<th>NO</th>
	<th>KELAS</th>
	<th>jurusan</th>
	<th>AKSI</th>
</tr>
<?php
	$data = $konek -> query("SELECT * FROM walikelas ORDER BY walikelas.kelas ASC");

	$i = 1;
	while($dta = mysqli_fetch_assoc($data)) :
	?>
	<tr>
		<td width="40" align="center"><?=$i;?></td>
		<td align="center"><?= $dta['kelas'] ?></td>
		<td><?= $dta['jurusan'] ?></td>
		<td width="160px">
			<a class="btn btn-warning btn-sm" href="ubahWL.php?kls=<?= $dta['kelas'] ?>">EDIT</a> 
			<a class="btn btn-danger btn-sm" href="hapusWL.php?kls=<?= $dta['kelas'] ?>"onclick="return confirm('apakah anda yakin menghapus data?')">HAPUS</a>
		</td>
	</tr>
	<?php $i++ ; ?>
<?php endwhile; ?>
</table>
</div>
<?php include 'footer.php';  ?>