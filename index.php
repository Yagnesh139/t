<?php
error_reporting(0);
require_once("co.php");
?>
<form action="" method="post">
    <label for="name">name</label>
    <input type="text" name="fname" id="name" class="name" placeholder="enter your name" required /><br>
    <label for="address">mobile</label>
    <input type="text" name="mo" id="name" class="name" minlength="10"
            maxlength="10" placeholder="moblie" required /><br>
   

    <button type="submit" name="submit" id="submit" style="width: 100px;height: 50px;">login</button>
    <a href="regis.php" target="_blank">Registration</a>

</form>
<?php


// session_start();
if (isset($_POST['submit'])) {
    // $i=($_POST);
    // $n=strtoupper($i['fname']);
    // $a=($i['fa']);

    $n=strtoupper($_POST['fname']);
    $m=$_POST['mo'];

//check data
$usercheck="SELECT `mobile`,`nname` FROM r WHERE nname='$n'";
$result=mysqli_query($con,$usercheck);
$row=mysqli_fetch_assoc($result);
echo "".$row['mobile']."".$row['nname']."";
    
    // print_r($row);
    
    
    
        // $row=mysqli_fetch_assoc($result);
        // $no=mysqli_num_rows($result);
    //     // $d=mysqli_fetch_row($result);
    //     echo $row;
    //     echo $no;
    //     // echo $d;
        if($row['mobile']===$m){
            echo "you are user";
            
            // echo"<script>alert('login');location.href='l.php'</script>";
            // // echo'<script>alert("inset sucessfully");location.href="s2.php";</script>';
            // //  header("Location:l.php");
            // //  session_start();
            //  $_SESSION["uid"]=$row['nname'];
            // //  echo $_SESSION["uid"];
            
            }
            elseif($row['mobile']!==$m && $row['nname']==$n){
                echo" your password is wrong";
            }
            else{
                echo"not user!!!!";
            }
    
        

}
?>