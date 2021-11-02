<?php
    session_start();
    ob_start();
    include "asset/php/config.php";

    if(empty($_SESSION['username']) or empty($_SESSION['password'])){
        echo "<p align='center'> Anda harus login terlebih dahulu! </p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }else{
        define('INDEX', true)
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dasboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/dashboard.css">
</head>

<body>
    <header>
        Aplikasi Manajemen Pegawai
    </header>
    <div class="container">
        <aside>
            <ul class="menu">
                <li> <a href="?hal=dashboard" class="aktif"> Dasboard </a></li>
                <li> <a href="?hal=pegawai"> Data Pegawai </a></li>
                <li> <a href="?hal=jabatan"> Data Jabatan </a></li>
                <li> <a href="asset/php/logout.php"> Keluar </a></li>
            </ul>
        </aside>
        <section class="main">
            <?php include "asset/php/konten.php" ?>
        </section>
    </div>
    <footer>
        Copyright &copy; Rohi Abdullah
    </footer>
</body>

</html>
<?php
    }
?>