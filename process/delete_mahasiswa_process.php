<?php

include "../config/koneksi.php";


$NIM = $_POST["NIM"];


$str = "DELETE FROM mahasiswa_tb WHERE NIM='$NIM'";
$q = mysqli_query($connect,$str);


echo "Berhasil di delete";