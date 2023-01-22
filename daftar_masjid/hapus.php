<?php

include 'koneksi1.php';

$id_siswa=$_POST['id_siswa'];

$query=mysqli_query($koneksi1, "
    DELETE FROM db_siswa WHERE id_siswa = '$id_siswa'");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Hapus Data Berhasil.");
        window.location='admin.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Ada Kesalahan Saat Hapus Ke Database.");
        window.location='admin.php';
    </script>
    <?php
}

?>