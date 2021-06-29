<?php

	//Defining Constants
	define('HOST','localhost');
	define('USER','root');
	define('PASS','root123456789');
	define('DB','crudveiculos');
	
	//Connecting to Database
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Problemas ao conectar com o banco de dados.');
	
?>