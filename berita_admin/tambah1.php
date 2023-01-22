<?php

include 'koneksi2.php';

$tanggal=$_POST['tanggal'];
$judul_berita=$_POST['judul_berita'];
$masjid=$_POST['masjid'];
$penulis=$_POST['penulis'];
$status=$_POST['status'];

$query=mysqli_query($koneksi2, "
    INSERT INTO db_siswa1 VALUES('', '$tanggal', '$judul_berita', '$masjid', '$penulis', '$status')
    ");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Tambah Data Berhasil.");
        window.location='admin1.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Ada Kesalahan Saat Input Ke Database.");
        window.location='admin1.php';
    </script>
    <?php
}