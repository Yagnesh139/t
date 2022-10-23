
<br>
<a href="logout.php" traget="_blank" >logout.php</a><br>
<br>
<a href="img.php" traget="_blank" >image</a><br>

<?php
require_once("co.php");

session_start();
if(isset($_SESSION["uid"])){
    $sq="SELECT * FROM idtt WHERE dname='$_SESSION[uid]'";
$dq=mysqli_query($con,$sq);
$total=mysqli_num_rows($dq);
echo $total;
}else{
    header("location:login.php");
}
//  echo $_SESSION["uid"];

?>
<style>
    td{
        padding: 10px;
    }
</style>
   <table border="1">
    <th>id</th>
    <th>name</th>
    <th>gender</th>
    <th>address</th>
    <th>iamge</th>
    <th colspan="2">actions</th>
    
  <?php  
while ($dqr=mysqli_fetch_assoc($dq)) {
/*
strtoupper() - converts a string to uppercase
lcfirst() - converts the first character of a string to lowercase
ucfirst() - converts the first character of a string to uppercase
ucwords() - converts the first character of each word in a string to uppercase
 */
echo"<tr><td>".$dqr['id']."</td>
    <td>".$dqr['dname']."</td>
    <td>".$dqr['dgen']."</td>
    <td>".$dqr['dad']."</td>
    <td><a href='$dqr[dp]'><img src='".$dqr['dp']."'  height='100' alt='pfolder iamge'><a></td>
    
    
    <td ><a href='u2.php?cid=$dqr[id]&n=$dqr[dname]&g=$dqr[dgen]&a=$dqr[dad]'>update</td><td><a href='d.php?cid=$dqr[id]'>delete</td></tr>";
}
?>
</table>