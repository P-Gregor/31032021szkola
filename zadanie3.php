<?php


	$serwer = "localhost";
	$bazadanych = "31032021";
	$port = 3306;
	$username = "root";
	$passwd = "";
	
    

	try
	{
		$polaczenie = new PDO('mysql:host'.$serwer.';dbname='.$bazadanych.';port='.$port.';charset=utf8',$username,$passwd);
		echo("<h1>Połączono z bazą danych - biblioteka PDO</h1>");
	}
	catch(PDOException $e)
	{
		echo("<h1>Error połączenia z bazą danych</h1>".$e);
		die();//jak nie mam połączenia z baza danych to rozlaczam sie
	}



?>