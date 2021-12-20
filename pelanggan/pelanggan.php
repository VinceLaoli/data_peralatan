<h2>Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Pelanggan </th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['kode_pelanggan']; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['alamat']; ?></td>
			<td><?php echo $pecah['kota']; ?></td>
			<td>
				<a href="index.php?halaman=hapusplg&id=<?php echo $pecah['id_pelanggan']; ?>" class="btn-danger btn"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
			</td> 
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahplg" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>