<style>
    td{
        padding: 10px;
    }
</style>
<?php
require_once("co.php");
$sq="SELECT * FROM r";
$dq=mysqli_query($con,$sq);

?>

    <table border="1">
    <th>id</th>
    <th>name</th>
    <th>gender</th>
    <th>address</th>
    <th colspan="2">actions</th>
    
  <?php  
while ($dqr=mysqli_fetch_assoc($dq)) {

echo"<tr><td>".$dqr['id']."</td>
    <td>".$dqr['nname']."</td>
    <td>".$dqr['city']."</td>
    <td>".$dqr['mobile']."</td>
    <td ><a href='u.php?cid=$dqr[id]'>update</td><td><a href='del.php?cid=$dqr[id]'>delete</td></tr>";
}
?>
</table>