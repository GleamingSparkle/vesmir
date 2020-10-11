<?php
	$link=mysqli_connect("localhost","root","","universe");
	
	if(!$link){
		echo "Nemohu se připojit k databázi.";
		exit;
	}
	
	mysqli_query($link,"SET NAMES 'utf8'");	
?>
