<?php
require_once("co.php");
if(isset($_POST["submit"])){

    $fname=strtoupper($_POST['name']);
    $c=strtoupper($_POST['city']);
    $m=($_POST['mobile']);
    // echo $fname;
    // echo $fgen; 
    // echo $m;

// //check data
$usercheck="SELECT `mobile`,`nname` FROM r WHERE mobile='$m'";
$result=mysqli_query($con,$usercheck);
$row=mysqli_fetch_assoc($result);
echo "".$row['mobile']."".$row['nname']."";
if($row['mobile']!==$m){
                


//insert data
    $iq="INSERT INTO r (nname,city,mobile) VALUES('$fname','$c','$m')";


$riq=mysqli_query($con,$iq);
// echo $riq;
mysqli_close($con);
if($riq){
    echo"s";
    header("Location:s.php");
}
} else{
    echo "user exist";
}
}
// ?>