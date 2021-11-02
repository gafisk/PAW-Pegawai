<?php	
	if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Pegawai</h2>
<a href="?hal=pegawai_tambah" class="tombol">Tambah</a>
<link rel="stylesheet" href="asset/css/tabel.css">
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
			$pegawai = mysqli_query($con, "SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan");
			$i = 1;
			foreach ($pegawai as $data):
		?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="asset/img/<?= $data['foto'] ?>" width="100"></td>
            <td><?= $data['nama_pegawai']; ?></td>
            <td><?= $data['jenis_kelamin']; ?></td>
            <td><?= $data['tgl_lahir']; ?></td>
            <td><?= $data['nama_jabatan']; ?></td>
            <td><?= $data['keterangan']; ?></td>
            <td>
                <a href="?hal=pegawai_edit&id=<?=$data['id_pegawai'];?>" class="tombol edit"> Edit </a>
                <a href="?hal=pegawai_hapus&id=<?=$data['id_pegawai'];?>" class="tombol hapus"> Hapus </a>
            </td>
        </tr>
        <?php
			$i++;
		endforeach;
		?>
    </tbody>
</table>