<?php
	if (!isset($_SESSION)) {session_start();}
	
	//var_dump ($_POST);
	if (isset($_SESSION['nrCPF']) && isset($_SESSION['txSENHA']) && !empty($_SESSION['nrCPF']) && !empty($_SESSION['txSENHA'])){
		$status='logado';
		//header("Location: /wordpress/");
		//echo $_SESSION['nrCPF'];
		//echo $_SESSION['txSENHA'];
	}else{
		header("Location: /wordpress/login/");
		//var_dump($_SESSION);
	}
?>