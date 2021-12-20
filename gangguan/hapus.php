<?php
$ambil = $koneksi->query("SELECT * FROM gangguan WHERE id_gangguan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM gangguan WHERE id_gangguan='$_GET[id]'");
echo "<script>alert('Gangguan Peralatan Terhapus');</script>";
echo "<script>location='index.php?halaman=gangguan';</script>";
?>