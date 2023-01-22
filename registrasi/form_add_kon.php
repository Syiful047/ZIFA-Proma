<?php

include 'konek_reg.php';

if (isset($_POST['kirim'])) {
    $nama_masjid    = $_POST['nama_masjid'];   
    $kecamatan      = $_POST['kecamatan'];
    $kelurahan      = $_POST['kelurahan'];
    $deskripsi      = $_POST['deskripsi'];
    $nama_dkm       = $_POST['nama_dkm'];
    $no_hp          = $_POST['no_hp'];
    $status         = $_POST['status'];

    $simpan = "INSERT INTO db_regis2(nama_masjid,kecamatan,kelurahan,
        deskripsi,nama_dkm,no_hp,status)
        VALUES('$nama_masjid','$kecamatan','$kelurahan','$deskripsi',
        '$nama_dkm','$no_hp','$status')";

    $result = mysqli_query($conn,$simpan);

    if ($result) {
        echo "<script>
        alert('Data Telah Berhasil Di Simpan');
        window.localhost='register2.php'</script>";
    }
}

?>