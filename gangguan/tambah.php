<h2>Tambah Gangguan Peralatan</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" class="form-control" name="tanggal" value="<?=date('Y-m-d')?>">
	</div>
	<div class="form-group">
		<label>Nama Alat</label>
		<select name="nama_alat" id="nama_alat" class="form-control" onchange="changeValue(this.value)" >
          <option value="">-Pilih-</option>
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
		<textarea name="ciri" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Dampak</label>
		<textarea name="dampak" class="form-control"></textarea>
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
	$koneksi->query("INSERT INTO gangguan values ('','$_POST[tanggal]','$_POST[id_nama]','$_POST[nama_alat]','$_POST[ciri]','$_POST[dampak]')");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gangguan'>";
}
?>
