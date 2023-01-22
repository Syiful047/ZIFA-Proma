<?php

include 'koneksi1.php';

$nama_masjid=$_POST['nama_masjid'];
$nama_kecamatan=$_POST['nama_kecamatan'];
$kelurahan=$_POST['kelurahan'];
$ketua_dkm=$_POST['ketua_dkm'];
$telpon=$_POST['telpon'];

$query=mysqli_query($koneksi1, "
    INSERT INTO db_siswa VALUES('', '$nama_masjid', '$nama_kecamatan', '$kelurahan', '$ketua_dkm', '$telpon')
    ");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Tambah Data Berhasil.");
        window.location='admin.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Ada Kesalahan Saat Input Ke Database.");
        window.location='admin.php';
    </script>
    <?php
}