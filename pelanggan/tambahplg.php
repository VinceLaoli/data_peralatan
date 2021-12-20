<h2>Tambah Pelanggan</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kode Pelanggan</label>
		<input type="text" class="form-control" name="kode">
	</div>
	<div class="form-group"> 
		<label>Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group"> 
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group"> 
		<label>Kota</label>
		<input type="text" class="form-control" name="kota">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if(isset($_POST['save']))
{
	$koneksi->query("INSERT INTO pelanggan
		(kode_pelanggan, nama_pelanggan,alamat,kota) VALUES ('$_POST[kode]','$_POST[nama]','$_POST[alamat]','$_POST[kota]')");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
}
?>
