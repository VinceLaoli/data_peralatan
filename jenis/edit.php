<h2>Edit Jenis Peralatan</h2>
<?php
	$id_jenis = $_GET['id'];
	$sql = mysqli_query($koneksi, "SELECT * from jenis_peralatan where id_jenis='$id_jenis' ");
	$data = mysqli_fetch_array($sql);
?>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Jenis</label>
		<input type="hidden" name="id_jenis"  value="<?php echo $data['id_jenis']; ?>">
		<input type="text" class="form-control" name="nama" value="<?php echo $data['nama_jenis']; ?>">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if(isset($_POST['save']))
{
	$nama = @$_POST['nama'];
	$id_jenis = @$_POST['id_jenis'];
	$koneksi->query("UPDATE jenis_peralatan SET nama_jenis = '$nama' where id_jenis = '$id_jenis' ");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=jenis'>";
}
?>
