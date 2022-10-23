<?php
error_reporting(0);
$uid=$_GET['cid'];
// echo " $uid<br>";

require_once("co.php");
$sq="SELECT * FROM r where id=$uid";
$dq=mysqli_query($con,$sq);
$total=mysqli_num_rows($dq);
// echo "$total<br>";
while ($dqr=mysqli_fetch_assoc($dq)) {
    $n=$dqr['nname'];
    $c=$dqr['city'];
    $m=$dqr['mobile'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        Update data
    </h3>
    <form action="" method="get">
        <div>
            <label for="databaseid"></label>
            <input type="hidden" name="uid" id="uid" value="<?php echo $cid;?>">
            
            <label for="name">name</label>
            <input type="text" name="fname" id="name" class="name" placeholder="enter your name" value="<?php echo $n; ?>" required /><br>

            

            <label for="name">city</label>
            <input type="text" name="city" id="city" class="city" placeholder="city"  value="<?php echo $c; ?>" required /><br>

            <label for="name">mobile</label>
            <input type="text" name="mobile" id="mobile" class="mobile" minlength="10"
            maxlength="10" placeholder="moblie"  value="<?php echo $m; ?>"required /><br>


            
           
            <button type="submit" name="update" id="submit" style="width: 100px;height: 50px;">update</button>
            <?php echo $cid;?>
        </div>
    </form>
</body>

</html>

<?php
if(isset($_GET["submit"])){
    $fname=$_GET['fname'];
    $fcity=$_GET['city'];
    $fmoblie=$_GET['moblie'];
    echo $fname;
$iq="UPDATE r SET nname='$fname',city='$fgen',mobile='$fad'WHERE id='$uid'";
$riq=mysqli_query($con,$iq);
echo $riq;
mysqli_close($con);
if($riq){
    echo"s";
    header("Location:s.php");
}
}
?>