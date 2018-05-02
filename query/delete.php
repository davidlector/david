<?php

include "config/koneksi.php";
$NIK = "";
$str = "DELETE FROM mahasiswa_tb WHERE NIM = '$NIM' ";
$q = mysqli_query($connect,$str);

echo "Data telah dihapus";