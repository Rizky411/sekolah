<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Penerimaan Siswa Baru</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>Selamat Datang !</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">List Siswa</a></li>
        </ul>
    </nav>
    <?php
        if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo 'Pendaftaran siswa baru berhasil';
                }else{
                    echo 'Pendaftaran Gagal';
                }
            ?>
        </p>
        <?php endif; ?>
</body>
</html>