<?php
$ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_transaksi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM transaksi WHERE id_transaksi='$_GET[id]'");
echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=transaksi';</script>";
?>