<?php

include 'koneksi1.php';

$id_siswa=$_POST['id_siswa'];
$nama_masjid=$_POST['nama_masjid'];
$nama_kecamatan=$_POST['nama_kecamatan'];
$kelurahan=$_POST['kelurahan'];
$ketua_dkm=$_POST['ketua_dkm'];
$telpon=$_POST['telpon'];

$query=mysqli_query($koneksi1, "
    UPDATE db_siswa SET nama_masjid='$nama_masjid', nama_kecamatan='$nama_kecamatan', kelurahan='$kelurahan', ketua_dkm='$ketua_dkm', telpon='$telpon'
    WHERE id_siswa = '$id_siswa'");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Update Data Berhasil.");
        window.location='admin.php';
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