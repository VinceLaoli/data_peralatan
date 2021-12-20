<h2>Edit Gangguan Peralatan</h2>

<?php
	$id_gangguan = $_GET['id'];
	$sql = mysqli_query($koneksi, "SELECT * from gangguan where id_gangguan='$id_gangguan' ");
	$data = mysqli_fetch_array($sql);
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" class="form-control" name="tanggal" value="<?php echo $data['tanggal']; ?>">
	</div>
	<div class="form-group">
		<label>Nama Alat</label>
		<select name="nama_alat" id="nama_alat" class="form-control" onchange="changeValue(this.value)" >
          <option value="<?php echo $data['nama_alat']; ?>"><?php echo $data['nama_alat']; ?></option>
          <?php
            $result = mysqli_query($koneksi,"select * from nama_peralatan order by nama_alat asc");   
            $jsArray = "var dtbrg = new Array();\n";       
            while ($row = mysqli_fetch_array($result)) {   
            echo '<option value="' . $row['nama_alat'] . '">' . $row['nama_alat'] . '</option>';   
            $jsArray .= "dtbrg['" . $row['nama_alat'] . "'] = {id_nama:'" . addslashes($row['id_nama'])."'};\n";   
            }     
          ?> 
        </select>
        <input type="hidden" class="form-control" name="id_nama" id="id_nama">
	</div>
	<div class="form-group">
		<label>Ciri Gangguan</label>
		<textarea name="ciri" class="form-control" ><?php echo $data['ciri']; ?></textarea>
	</div>
	<div class="form-group">
		<label>Dampak</label>
		<textarea name="dampak" class="form-control"><?php echo $data['dampak']; ?></textarea>
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      <?php echo $jsArray; ?> 
      function changeValue(nama_alat){ 
      document.getElementById('id_nama').value = dtbrg[nama_alat].id_nama;
      };
    </script>
</form>
<?php
if(isset($_POST['save']))
{	
	$tanggal = @$_POST['tanggal'];
	$nama_alat = @$_POST['nama_alat'];
	$id_nama = @$_POST['id_nama'];
	$ciri = @$_POST['ciri'];
	$dampak = @$_POST['dampak'];
	$koneksi->query("UPDATE gangguan SET tanggal = '$tanggal', id_nama = '$id_nama', nama_alat = '$nama_alat', ciri = '$ciri', dampak = '$dampak' where id_gangguan = '$id_gangguan'")or die (mysqli_error($koneksi));
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gangguan'>";
}
?>
