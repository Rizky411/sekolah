<?php

include("config.php");


if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sa = $_POST['sekolah_asal'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
    VALUES ('$nama', '$alamat', '$jk', '$agama', '$sa')";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: index.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
    
} else{
    die('Akses Dilarang!');
}