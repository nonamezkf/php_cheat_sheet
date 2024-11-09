<?php

	session_start();
	
	$_SESSION['negara'] = "Indonesia";
	$_SESSION['ibu_kota'] = "Jakarta";
	
	echo $_SESSION['negara'];
	
	echo "<br/>";
	
	echo $_SESSION['ibu_kota'];
	
?>