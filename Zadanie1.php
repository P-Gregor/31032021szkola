<?php



//pozdrawiam
// niestety jak sie wpisze zamiast localhosta moje ip to wyskakuje blad ale baza i tak jest pusta wiec wystarczy ze pan zrobi baze o tej samej nazwie
 $mysqli = new mysqli("localhost","root","","31032021");


if ($mysqli -> connect_errno) {
  echo "Nie udalo sie polaczyc z baza danych" . $mysqli -> connect_error;
  exit();
}
else{
  echo("polaczono");
}
?>