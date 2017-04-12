<?php
	//var_dump ($_POST);
	if (isset($_POST['nrCPF']) && isset($_POST['txSENHA']) && !empty($_POST['nrCPF']) && !empty($_POST['txSENHA'])){
		if (!isset($_SESSION)) session_start();
		$_SESSION['nrCPF']    = $_POST['nrCPF'];
		$_SESSION['txSENHA']  = $_POST['txSENHA'];
		echo true;
	}else{
		echo false;
	}
	//echo "</br>".$_POST['txSENHA'];
?>