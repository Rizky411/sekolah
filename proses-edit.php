<?php

include('config.php');

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sa = $_POST['sekolah_asal'];

    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sa' WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: list-siswa.php');
    }else{
        die ('gagal menyimpan perubahan!');
    }
}

?>