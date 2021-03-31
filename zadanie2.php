<?php
	$host = "localhost";
	$user = "root";
	$passwd = "";
	$dbname = "31032021";
	$port = 3306;

	$polaczenie = @new Mysqli($host,$user,$passwd,$dbname,$port); 

	if (mysqli_connect_errno()!=0) {
		echo "<p>Wystąpił błąd połączenia: ". mysqli_connect_error()."</p>";
	}else{
		echo "Połączenie z bazą danych<br>";
	}

?>