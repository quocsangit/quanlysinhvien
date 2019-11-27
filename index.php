<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

</body>
</html>
<?php
	include "Model/DBConfig.php";
	$db = new Database();
	$db->connect();

	if(isset($_GET['controler'])){
		$controler = $_GET['controler'];
	}
	else
	{
		$controler = '';
	}


	switch ($controler) {
		case 'thanh-vien':{
			require_once("Controler/thanhvien/index.php");
			}
		}
?>