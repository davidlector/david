<?php

session_start();

include "../config/config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$connect = mysqli_connect("localhost", "root", "");

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, $_POST['password']);


mysqli_select_db($connect, "kampus_db");
$str = "SELECT * FROM login_tb WHERE username_login='$username' AND password_login='$password'";
$result = mysqli_query($connect, $str) or die ("Gagal terhubung dengan database");

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if($row['username_login'] == $username && $row['password_login'] == $password)
{
	$_SESSION["username"] = $row["username"];
	$_SESSION["password"] = $password;
	header("location:"."$base_url"."index.php");
}
else
{
	echo "Failed to login";
}