<?php




$server = "localhost";
$username = "root";
$password = "";
$database = "kampus_db";


$connect = mysqli_connect($server, $username, $password) or die ("Gagal terhubung dengan database");
$database = mysqli_select_db($connect, $database);