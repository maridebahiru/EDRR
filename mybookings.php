<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>
<style >
body{
  background-color: #3c6382;
}
	.container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 50px;
        margin-bottom: 200px;
       padding-top: 50px;
      padding-right: 70px;
      padding-bottom: 50px;
      padding-left: 100px;
      align-content: center;
    }
</style>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<br><br>
  <h1><center><b><img src="http://cdn.onlinewebfonts.com/svg/img_571944.png" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Train Ticket Svg Png Icon Free Download (#571944) - OnlineWebFonts.COM" data-noaft="1" style="width: 10%; height: 10%; margin: 0px;"> User Bookings  <img src="http://cdn.onlinewebfonts.com/svg/img_571944.png" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Train Ticket Svg Png Icon Free Download (#571944) - OnlineWebFonts.COM" data-noaft="1" style="width: 10%; height: 10%; margin: 0px;"></center></b></h1>

<div class="container">

  <img src="http://cdn.onlinewebfonts.com/svg/img_571944.png" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Train Ticket Svg Png Icon Free Download (#571944) - OnlineWebFonts.COM" data-noaft="1" style="width: 10%; height: 10%; margin: 0px;"><td><a href='trainbookings.php'><button style="background-color: black ; border-color:black " > View Train Bookings </button></a></td>
 </tr>
<br> <br>


</table>
</tr>
</div>
<?php include 'footer.php';
?>

</html>
