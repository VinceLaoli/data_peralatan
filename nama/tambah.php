<h2>Tambah Nama Peralatan</h2>

<form method="post" enctype="multipart/form-data" class="nama_alat">
	<div class="form-group">
		<label>Nama Jenis</label>
		<select name="nama_jenis" id="nama_jenis" class="form-control" onchange="changeValue(this.value)" >
          <option value="">-Pilih-</option>
          <?php
            $result = mysqli_query($koneksi,"select * from jenis_peralatan order by nama_jenis asc");   
            $jsArray = "var dtbrg = new Array();\n";       
            while ($row = mysqli_fetch_array($result)) {   
            echo '<option value="' . $row['nama_jenis'] . '">' . $row['nama_jenis'] . '</option>';   
            $jsArray .= "dtbrg['" . $row['nama_jenis'] . "'] = {id_jenis:'" . addslashes($row['id_jenis'])."'};\n";   
            }     
          ?> 
        </select>
        <input type="hidden" class="form-control" name="id_jenis" id="id_jenis">
	</div>

	<div class="form-group">
		<label>Nama Alat</label>
		<input type="text" class="form-control" name="nama_alat">
	</div>
	<div class="form-group">
		<label>Jumlah Port</label>
		<input type="text" class="form-control" name="port">
	</div>
	<div class="form-group">
		<label>Alamat IP</label>
		<input type="text" class="form-control" name="ip">
	</div>
	<div class="form-group">
		<label>Nama Wifi</label>
		<input type="text" class="form-control" name="wifi">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="pass">
	</div>
	<div class="form-group">
		<label>Frekuensi</label>
		<input type="text" class="form-control" name="frekuensi">
	</div>
	<div class="form-group">
		<label>Lebar Frekuensi</label>
		<input type="text" class="form-control" name="lebar">
	</div>
	<div class="form-group">
		<label>RAM</label>
		<input type="text" class="form-control" name="ram">
	</div>
	<div class="form-group">
		<label>Storage</label>
		<input type="text" class="form-control" name="storage">
	</div>
	<div class="form-group">
		<label>Prosesor</label>
		<input type="text" class="form-control" name="prosesor">
	</div>
	<div class="form-group">
		<label>Lokasi Awal</label>
		<input type="text" class="form-control" name="lokasi_awal">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
          <?php echo $jsArray; ?> 
          function changeValue(nama_jenis){ 
          document.getElementById('id_jenis').value = dtbrg[nama_jenis].id_jenis;
          };
        </script>
</form>
<?php
if(isset($_POST['save']))
{
	$sql= mysqli_query($koneksi,"INSERT INTO nama_peralatan (id_nama, id_jenis, nama_jenis, nama_alat, jumlah_port, alamat_ip, nama_wifi, pass_wifi, frekuensi, lebar_frekuensi, ram, storage, prosesor, lokasi_awal) values ('','$_POST[id_jenis]','$_POST[nama_jenis]','$_POST[nama_alat]','$_POST[port]','$_POST[ip]','$_POST[wifi]','$_POST[pass]','$_POST[frekuensi]','$_POST[lebar]','$_POST[ram]','$_POST[storage]','$_POST[prosesor]','$_POST[lokasi_awal]')") or die (mysqli_error($koneksi));
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=nama'>";
}
?>
