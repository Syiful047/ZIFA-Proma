<?php

include 'koneksi2.php';

$id_siswa1=$_POST['id_siswa1'];
$tanggal=$_POST['tanggal'];
$judul_berita=$_POST['judul_berita'];
$masjid=$_POST['masjid'];
$penulis=$_POST['penulis'];
$status=$_POST['status'];

$query=mysqli_query($koneksi2, "
    UPDATE db_siswa1 SET tanggal='$tanggal', judul_berita='$judul_berita', masjid='$masjid', penulis='$penulis', status='$status'
    WHERE id_siswa1 = '$id_siswa1'");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Update Data Berhasil.");
        window.location='admin1.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Ada Kesalahan Saat Update Ke Database.");
        window.location='admin.php';
    </script>
    <?php
}

?>