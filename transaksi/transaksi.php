<h2>Data Transaksi</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>No.Faktur
			<th>Tanggal Faktur</th>
			<th>Kode Pelanggan</th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>Kode Kendaraan</th>
			<th>Merk/Type</th>
			<th>Harga OTR</th>
			<th>Stok</th>
			<th>Jumlah Transaksi</th>
			<th>Jumlah Bayar</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM transaksi");?>
		<?php while($pecah = $ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['no_faktur']; ?></td>
			<td><?php echo $pecah['tgl_faktur']; ?></td>
			<td><?php echo $pecah['kode_pelanggan']; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['alamat']; ?></td>
			<td><?php echo $pecah['kota']; ?></td>
			<td><?php echo $pecah['kode_kendaraan']; ?></td>
			<td><?php echo $pecah['merk']; ?></td>
			<td><?php echo $pecah['harga']; ?></td>
			<td><?php echo $pecah['stok']; ?></td>
			<td><?php echo $pecah['jml_transaksi']; ?></td>
			<td><?php echo $pecah['jml_bayar']; ?></td>
			<td>
				<a href="index.php?halaman=hapustrans&id=<?php echo $pecah['id_transaksi']; ?>" class="btn-danger btn"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
			</td> 
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahtrans" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>