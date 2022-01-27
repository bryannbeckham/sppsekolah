<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM walikelas WHERE kelas = '$_GET[kls]'");
$dtA = mysqli_fetch_assoc($data);
include 'header.php';
?>
<div class="container">
	<div class="page-header">
<h2 >EDIT DATA WALI KELAS</h2>
</div>
	<form action="" method="post" >
		<table class="table" >
			<!-- <tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input class="form-control"  type="text" name="kelas" placeholder="Masukan Kelas" size="30" value="<?= $dtA['kelas'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<input class="form-control"  type="text" name="jurusan" placeholder="Masukan Kelas" size="30" value="<?= $dtA['jurusan'] ?>" readonly>
				</td>
			</tr> -->
			<div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="<?=$dtA['kelas']?>" placeholder="Masukkan Nama Kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelompok" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="<?=$dtA['jurusan']?>" placeholder="Masukkan jurusan" required>
                    </div>
			<tr>
				<br>
					<button class="btn btn-success"type="submit" name="ubah" style="width: 100%;">UPDATE</button>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
 if ( isset($_POST['ubah']) ) {
 	$kelas  = $_POST['kelas'];
 	$jurusan   = $_POST['jurusan'];

 	$simpan = $konek -> query("UPDATE walikelas SET kelas = '$kelas', jurusan = '$jurusan' WHERE kelas =".$kelas."");
 	//    echo mysqli_error($koneks);
	 if( $simpan ){
 		echo "
 		<script>
 		alert('data wali berhasil diedit');
 		document.location.href = 'datawali.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data wali gagal diedit');
 		document.location.href = 'datawali.php';
 		</script>
 		";
 	}
 }


?>
<?php include 'footer.php';  ?>