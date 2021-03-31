<?php





 $mysqli = new mysqli("localhost","root","","31032021");


if ($mysqli -> connect_errno) {
  echo "Nie udalo sie polaczyc z baza danych" . $mysqli -> connect_error;
  exit();
}
else{
  echo("polaczono");
}
?>