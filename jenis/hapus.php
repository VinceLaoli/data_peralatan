<?php
$ambil = $koneksi->query("SELECT * FROM jenis_peralatan WHERE id_jenis='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM jenis_peralatan WHERE id_jenis='$_GET[id]'");
echo "<script>alert('Jenis Peralatan Terhapus');</script>";
echo "<script>location='index.php?halaman=jenis';</script>";
?>