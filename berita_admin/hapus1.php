<?php

include 'koneksi2.php';

$id_siswa1=$_POST['id_siswa1'];

$query=mysqli_query($koneksi2, "
    DELETE FROM db_siswa1 WHERE id_siswa1 = '$id_siswa1'");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Hapus Data Berhasil.");
        window.location='admin1.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Ada Kesalahan Saat Hapus Ke Database.");
        window.location='admin1.php';
    </script>
    <?php
}

?>