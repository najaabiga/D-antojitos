<?php
$mysqli = new mysqli("localhost", "root", "042031", "adwilsa", 3306);
if ($mysqli->connect_errno){
    echo "Fallo al conectar a mysql: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>