<h2>Edit Nama Peralatan</h2>

<?php
	$id_nama = $_GET['id'];
	$sql = mysqli_query($koneksi, "SELECT * from nama_peralatan where id_nama='$id_nama' ");
	$data = mysqli_fetch_array($sql);
?>
<form method="post" enctype="multipart/form-data" class="nama_alat">
	<div class="form-group">
		<label>Nama Jenis</label>
		<select name="nama_jenis" id="nama_jenis" onchange="changeValue(this.value)" >
          <option value="<?php echo $data['nama_jenis']; ?>"><?php echo $data['nama_jenis']; ?></option>
          <?php
            include "koneksi.php";
            $result = mysqli_query($koneksi,"select * from jenis_peralatan order by nama_jenis asc");   
            $jsArray = "var dtbrg = new Array();\n";       
            while ($row = mysqli_fetch_array($result)) {   
            echo '<option value="' . $row['nama_jenis'] . '">' . $row['nama_jenis'] . '</option>';   
            $jsArray .= "dtbrg['" . $row['nama_jenis'] . "'] = {id_jenis:'" . addslashes($row['id_jenis']) . "'};\n";   
            }     
          ?> 
        </select>
        </select>
        <input type="hidden" class="form-control" name="id_jenis" id="id_jenis" value="<?php echo $data['id_jenis']; ?>">
	</div>

	<div class="form-group">
		<label>Nama Alat</label>
		<input type="text" class="form-control" name="nama_alat" value="<?php echo $data['nama_alat']; ?>">
	</div>
	<div class="form-group">
		<label>Jumlah Port</label>
		<input type="text" class="form-control" name="port" value="<?php echo $data['jumlah_port']; ?>">
	</div>
	<div class="form-group">
		<label>Alamat IP</label>
		<input type="text" class="form-control" name="ip" value="<?php echo $data['alamat_ip']; ?>">
	</div>
	<div class="form-group">
		<label>Nama Wifi</label>
		<input type="text" class="form-control" name="wifi" value="<?php echo $data['nama_wifi']; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="pass" value="<?php echo $data['pass_wifi']; ?>">
	</div>
	<div class="form-group">
		<label>Frekuensi</label>
		<input type="text" class="form-control" name="frekuensi" value="<?php echo $data['frekuensi']; ?>">
	</div>
	<div class="form-group">
		<label>Lebar Frekuensi</label>
		<input type="text" class="form-control" name="lebar" value="<?php echo $data['lebar_frekuensi']; ?>">
	</div>
	<div class="form-group">
		<label>RAM</label>
		<input type="text" class="form-control" name="ram" value="<?php echo $data['ram']; ?>">
	</div>
	<div class="form-group">
		<label>Storage</label>
		<input type="text" class="form-control" name="storage" value="<?php echo $data['storage']; ?>">
	</div>
	<div class="form-group">
		<label>Prosesor</label>
		<input type="text" class="form-control" name="prosesor" value="<?php echo $data['prosesor']; ?>">
	</div>
	<div class="form-group">
		<label>Lokasi Awal</label>
		<input type="text" class="form-control" name="lokasi_awal" value="<?php echo $data['lokasi_awal']; ?>">
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
	$id_jenis = @$_POST['id_jenis'];
	$nama_jenis = @$_POST['nama_jenis'];
	$nama_alat = @$_POST['nama_alat'];
	$port = @$_POST['port'];
	$ip = @$_POST['ip'];
	$wifi = @$_POST['wifi'];
	$pass = @$_POST['pass'];
	$frekuensi = @$_POST['frekuensi'];
	$lebar = @$_POST['lebar'];
	$ram = @$_POST['ram'];
	$storage = @$_POST['storage'];
	$prosesor = @$_POST['prosesor'];
	$lokasi_awal = @$_POST['lokasi_awal'];
	$sql= mysqli_query($koneksi,"UPDATE nama_peralatan set id_jenis = '$id_jenis', nama_jenis = '$nama_jenis', nama_alat = '$nama_alat', jumlah_port = '$port', alamat_ip = '$ip', nama_wifi = '$wifi', pass_wifi = '$pass', frekuensi = '$frekuensi', lebar_frekuensi = '$lebar', ram = '$ram', storage = '$storage', prosesor = '$prosesor', lokasi_awal = '$lokasi_awal'  ") or die (mysqli_error($koneksi));
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=nama'>";
}
?>
