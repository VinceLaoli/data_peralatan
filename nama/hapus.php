<?php
$ambil = $koneksi->query("SELECT * FROM nama_peralatan WHERE id_nama='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM nama_peralatan WHERE id_nama='$_GET[id]'");
echo "<script>alert('Nama Alat Terhapus');</script>";
echo "<script>location='index.php?halaman=nama';</script>";
?>