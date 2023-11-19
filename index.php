<?php

include 'homehead.php';
?>


<!DOCTYPE html>
<html lang="en"><head>
<title>Ethio-Djibouti Railway ticket reservation Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="index.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#MENRY" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MENRY</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Travel</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>

    <div class="w3-dropdown-hover w3-hide-small">

    </div>

    <a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Register</a>
      <a href="adminindex.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Admin Sign In</a>

   </div>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#MENRY" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MENRY</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Travel</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact</a>

</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->

    <div class="mySlides w3-display-container w3-center" style="display: none;">
 <img src="https://static01.nyt.com/images/2019/04/14/travel/08ethiopia-train1/08ethiopia-train1-articleLarge-v2.jpg?quality=75&amp;auto=webp&amp;disable=upscale" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="A Remarkable Rail Journey Into the Horn of Africa's Past, and Future - The  New York Times" data-noaft="1" style="width: 100%; margin: 0px;">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Welcome to EDR ticket reservation system</h3>

    </div>
  </div>
  <div class="mySlides w3-display-container w3-center" style="display: none;">
    <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/697B/production/_91530072_hi035707715afp.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Ethiopia-Djibouti electric railway line opens - BBC News" data-noaft="1" style="width: 100%; margin: 0px;">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Welcome to EDR ticket reservation system</h3>
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center" style="display: none;">
<img src="https://pbs.twimg.com/media/DsySJaVU0AEHXaL.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Positively Ethiopian on Twitter: &quot;Nazret (Adama) Train Station #Ethiopia  https://t.co/T4iklc5csc&quot; / Twitter" data-noaft="1" style="width: 100%; height: 100%; margin: 0px;">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Welcome to EDR ticket reservation system</h3>
    </div>
  </div>
  <!-- The MENRY Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">THE MENRY</h2>
    <p class="w3-opacity"><i>We love Travel</i></p>
    <p class="w3-justify">Think about the days that you can't get online ticket reservation system .
                    WE ARE MENRY'S TEAM. እኛ MENRY ይህንን ችግር
                       ለመቅረፍ ይህን
                       ዌብ ሳይት አዘጋጅተናል።
                        ይህን በመጠቀም ጊዜዎን እና ጉልበትዎን ይቆጥቡ።

                 <h2 style="text-align:right;color: darkblue;">ምርጫዎ ስላደረጉን እናመሰግናለን!!!</h2>
    </p>
      </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Travel With Us</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>


      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
      <img src="https://pbs.twimg.com/media/DsySJaVU0AEHXaL.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Positively Ethiopian on Twitter: &quot;Nazret (Adama) Train Station #Ethiopia  https://t.co/T4iklc5csc&quot; / Twitter" data-noaft="1" style="width: 100%;  margin: 0px;"alt="EDR" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>EDR</b></p>
            <p class="w3-opacity"></p>

          <a href="sindex.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">  <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Book now</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
        <img src="https://www.railway-technology.com/wp-content/uploads/sites/13/2016/10/Image-2-Ethiopia-Djibouti-Railway-Line-Modernisation.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Ethiopia-Djibouti Railway Line Modernisation - Railway Technology" data-noaft="1" style="width: 100%; margin: 0px;" alt="EDR" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>EDR</b></p>
            <p class="w3-opacity"> </p>

        <a href="sindex.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">    <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Book now</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
         <img src="https://d7nm3c5ruslmy.cloudfront.net/africanexponent-com-client/images/general/hjj1475987423476_aspR_1.662_w640_h385_e.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Ethio-Djibouti Railway Project: Africa's First Modern Electric Railway |  The African Exponent." data-noaft="1" style="width: 100%;  margin: 0px;"alt="Station"  class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>EDR</b></p>
            <p class="w3-opacity"></p>

        <a href="sindex.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">    <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Book now</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- The Contact Section -->

  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Passenger? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">

      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Dire dawa,Ethiopia<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +251939186449<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: maramawitdereje93@gmail.com<br>
             <i class="fa fa-envelope" style="width:30px"> </i> Email: metiabayneh@gmail.com<br>
      </div>

    </div>
  </div>


<!-- End Page Content -->
</div>


<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>

<?php include 'footer.php';
?>

</html>
