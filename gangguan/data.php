<h2>Data Gangguan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Nama Peralatan</th>
			<th>Ciri-ciri Gangguan</th>
			<th>Dampak Gangguan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM gangguan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){?>
		<tr>
			<td width="5%" class="text-center"><?php echo $nomor."."; ?></td>
			<td><?php echo $pecah['tanggal']; ?></td>
			<td><?php echo $pecah['nama_alat']; ?></td>
			<td><?php echo $pecah['ciri']; ?></td>
			<td><?php echo $pecah['dampak']; ?></td>
			<td>
				<a href="index.php?halaman=editgangguan&id=<?php echo $pecah['id_gangguan']; ?>" class="btn-warning btn"><i class="fa fa-pencil"></i> Edit</a>
				<a href="index.php?halaman=hapusgangguan&id=<?php echo $pecah['id_gangguan']; ?>" class="btn-danger btn"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
			</td> 
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahgangguan" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>