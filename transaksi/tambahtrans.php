<h2>Tambah Transaksi</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>No Faktur</label>
		<input type="text" class="form-control" name="nof">
	</div>
	<div class="form-group">
		<label>Tanggal Faktur</label>
		<input type="date" class="form-control" name="tglf">
	</div>
	<div class="form-group">
		<label>Kode Pelanggan</label>
		<input type="text" class="form-control" name="kodep">
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
	<div class="form-group"> 
		<label>Kode Kendaraan</label>
		<input type="text" class="form-control" name="kodek">
	</div>
	<div class="form-group"> 
		<label>Merk/Type</label>
		<input type="text" class="form-control" name="merk">
	</div>
	<div class="form-group"> 
		<label>Harga OTR</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group"> 
		<label>Stok</label>
		<input type="number" class="form-control" name="stok">
	</div>
	<div class="form-group"> 
		<label>Jumlah Transaksi</label>
		<input type="number" class="form-control" name="jmltrans">
	</div>
	<div class="form-group"> 
		<label>Jumlah Bayar</label>
		<input type="number" class="form-control" name="jmlbayar">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if(isset($_POST['save']))
{
	$koneksi->query("INSERT INTO transaksi
		(no_faktur, tgl_faktur, kode_pelanggan, nama_pelanggan, alamat, kota, kode_kendaraan,merk,harga,stok,jml_transaksi,jml_bayar) VALUES ('$_POST[nof]','$_POST[tglf]','$_POST[kodep]','$_POST[nama]','$_POST[alamat]','$_POST[kota]','$_POST[kodep]','$_POST[merk]','$_POST[harga]','$_POST[stok]','$_POST[jmltrans]','$_POST[jmlbayar]')");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=transaksi'>";
}
?>
