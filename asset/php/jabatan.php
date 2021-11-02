<?php
    if(!defined('INDEX')) die("");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Pegawai</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/tabel.css">
</head>

<h2 class="judul"> Data Jabatan </h2>
<a class="tombol" href="?hal=jabatan_tambah">Tambah </a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC ");
        $no = 0;
        while($data = mysqli_fetch_array($query)){
            $no++;
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data['nama_jabatan'] ?> </td>
            <td>
                <a class="tombol edit" href="?hal=jabatan_edit&id=<?=$data['id_jabatan']?>"> Edit </a>
                <a class="tombol hapus" href="?hal=jabatan_hapus&id=<?=$data['id_jabatan']?>"> Hapus </a>
            </td>
        </tr>
        <?php
        }
    ?>
    </tbody>
</table>

</html>