<?php
$serverName="localhost";
$dUserName="root";
$dPassword="";
$dBaseName="pStudents";

$con= mysqli_connect($serverName,$dUserName,$dPassword,$dBaseName)or die("Error: ".mysqli_connect_error());
?>