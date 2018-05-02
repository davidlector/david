<?php

include "../config/config.php";

$keyword = $_POST['keyword'];

if(!empty($keyword))
{
	$keyword = str_replace("", "-", $keyword);
	header("location:".$base_url."index.php/?p=mahasiswa&s=$keyword");
}
	else
	{

	}
