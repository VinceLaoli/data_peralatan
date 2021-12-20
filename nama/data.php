<h2>Data Nama Peralatan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Jenis</th>
			<th>Nama</th>
			<th>Port </th>
			<th>IP</th>
			<th>Wifi</th>
			<th>Password</th>
			<th>Frekuensi</th>
			<th>Lebar Frekuensi</th>
			<th>RAM</th>
			<th>Storage</th>
			<th>Processor</th>
			<th>Lokasi Awal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT *, jenis_peralatan.id_jenis, jenis_peralatan.nama_jenis as nama_jenis FROM nama_peralatan left join jenis_peralatan on nama_peralatan.id_jenis = jenis_peralatan.id_jenis"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){?>
		<tr>
			<td width="5%" class="text-center"><?php echo $nomor."."; ?></td>
			<td><?php echo $pecah['nama_jenis']; ?></td>
			<td><?php echo $pecah['nama_alat']; ?></td>
			<td><?php echo $pecah['jumlah_port']; ?></td>
			<td><?php echo $pecah['alamat_ip']; ?></td>
			<td><?php echo $pecah['nama_wifi']; ?></td>
			<td><?php echo $pecah['pass_wifi']; ?></td>
			<td><?php echo $pecah['frekuensi']; ?></td>
			<td><?php echo $pecah['lebar_frekuensi']; ?></td>
			<td><?php echo $pecah['ram']; ?></td>
			<td><?php echo $pecah['storage']; ?></td>
			<td><?php echo $pecah['prosesor']; ?></td>
			<td><?php echo $pecah['lokasi_awal']; ?></td>
			<td>
				<a href="index.php?halaman=editnama&id=<?php echo $pecah['id_nama']; ?>" class="btn-warning btn"><i class="fa fa-pencil"></i></a>
				<a href="index.php?halaman=hapusnama&id=<?php echo $pecah['id_nama']; ?>" class="btn-danger btn"><i class="glyphicon glyphicon-trash"></i></a>
			</td> 
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahnama" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>