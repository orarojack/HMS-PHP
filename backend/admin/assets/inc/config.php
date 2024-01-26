<?php
$dbuser="root";
$dbpass="";
$host="localhost";
// $host="localhost:3306";
$db="theopenhubco_hmisphp";
$mysqli=new mysqli($host,$dbuser, $dbpass, $db)or die("Could not connect to the database");
?>
