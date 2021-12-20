<h2>Data Jenis</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Jenis</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM jenis_peralatan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){?>
		<tr>
			<td width="5%" class="text-center"><?php echo $nomor."."; ?></td>
			<td><?php echo $pecah['nama_jenis']; ?></td>
			<td>
				<a href="index.php?halaman=editjenis&id=<?php echo $pecah['id_jenis']; ?>" class="btn-warning btn"><i class="fa fa-pencil"></i> Edit</a>
				<a href="index.php?halaman=hapusjenis&id=<?php echo $pecah['id_jenis']; ?>" class="btn-danger btn"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
			</td> 
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahjenis" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>