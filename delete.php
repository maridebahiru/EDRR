<! Script to add newly registered people in to the Database -->

<style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">


<?php
include 'connect.php';
include 'head2.php';


$T_No = $_GET['T_No'];


$sql_userdatabase="DELETE FROM transactions WHERE T_No ='$T_No' ";

if(mysqli_query($connect, $sql_userdatabase) == true)
{
	echo "<center><h1><b>You have been sucessfully deleted<b> </h1></center><br><br>";
	echo '<center><table><tr><td><A href="admintraindb.php"><button style="background-color:black; border-color:black"><span style="color:white">back home </span></button></a></td></tr></table></center>';
}
else
{
	echo "<center><h1><b>deletion Unsucessful , try again!!! <b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="admintraindb.php"><button style="background-color:black; border-color:black"><span style="color:white">Try&nbsp&nbspAgain</span></button></a></td></tr></table></center>';}

?>
