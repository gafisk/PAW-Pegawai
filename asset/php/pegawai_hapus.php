<?php
    if(!defined('INDEX')) die("");

    if(file_exists("asset/img/$_GET[foto]")) unlink("asset/img/$_GET[foto]");
    $query = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai ='$_GET[id]' ");

    if($query){
        echo "Data pegawai berhasil di hapus!";
        echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
    }else{
        echo "Tidak dapat mentimpan data!<br>";
        echo mysqli_error();
    }
?>