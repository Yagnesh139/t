<?php
require_once("co.php");
session_start();
unset($_SESSION["uid"]);
if(isset($_SESSION["uid"])){
    
}else{
    header("location:ipd2.php");
}
// session_unset();
// session_destroy();
// if (!isset($_SESSION[ 
?>