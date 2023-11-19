<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:adminindex.php");
}
include 'adminheader.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin panel</title>
</head>
<body>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="styil.css">    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-ED-plus-plus'></i>
      <span class="logo_name">EDR</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Admin panel</span>
          </a>
        </li>


        <li>
          <a href="admintraindb.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Train Bookings</span>
          </a>
        </li>

        <li class="log_out">
        <a href="adminlogout.php"><span class="glyphicon glyphicon-log-out  ">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"><img src="https://www.kindpng.com/picc/m/247-2472283_transparent-admin-png-marketing-girl-cartoon-png-png.png" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Transparent Admin Png - Marketing Girl Cartoon Png, Png Download - kindpng" data-noaft="1" style="width: 10%; height: 10%; margin: 0px;">Admin Panel</span>
      </div>


    </nav>


    <body style="background-color: F5F1F0;">
    	 <h2 align="center"><b><img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png"/> Admin PanelS</b></h2>
               <br>


        		<table class="table table-striped" id="font">



    				<tr>
    					<th>Name</th>
    					<td><?php echo $_SESSION['name'] ?></td>
    				</tr>

    				<tr>
    					<th>Email</th>
    					<td><?php echo $_SESSION['email'] ?></td>
    				</tr>





    			</table>


    </div>

            </div>
          </div>
          <i class='akar-icons:people-group' ></i>
        </div>


      </div>


  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>





</body>
</html>
<?php include 'footer.php';
?>
</html>
