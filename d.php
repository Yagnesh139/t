<?php
$did=$_GET['cid'];
echo $did;
require_once("co.php");
$sq="DELETE FROM idtt where id=$did";
$dq=mysqli_query($con,$sq);
mysqli_close($con);
if($dq){
    echo"s";
    header("Location:s2.php");
}
?>