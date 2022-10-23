<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$databasename ="test";

$con=mysqli_connect($servername,$username,$password,$databasename);
if(!$con)
{
    die("database not connected".mysqli_connet_error());
}
?>