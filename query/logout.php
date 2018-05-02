<?php

include "../config/config.php";

session_start();
unset($_SESSION['username']);
session_destroy();
header("location:".$base_url."view/login.php");
?>
