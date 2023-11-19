<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<style>
body{
  background-color: #3c6382;

}
    .container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
       padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
h8{
  font-family: Montserrat, sans-serif;
}
select option{
  font-family: Montserrat, sans-serif;

}

    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
background-color:black;
    }
#number {
  overflow: hidden;
  width: 600px;
}
input[type=number]{
    width: 250px;
}
  </style>


  </script>
</head>
<body>
  <h1><center><b>Train Ticket Booking</center></b></h1>
 <form method='post' action ='book_action.php' align='center'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>



       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">SOURCE STATION :</label>
       <select id="inputState" class="form-control" name="source">
   <option>Dire Dawa</option>
   <option>Adama</option>
   <option>Lebu</option>
   <option>Meso</option>
   <option>	Debre Zeyit</option>
   <option>Dukem</option>

   </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>






          <div class="form-group col-md-5" name="dest">
      <label for="inputPassword4">
FINAL DESTINATION :</label>
      <select id="inputState" class="form-control" name="dest">

        <option>Dire Dawa</option>
        <option>Adama</option>
        <option>Lebu</option>
        <option>Meso</option>
        <option>	Debre Zeyit</option>
        <option>Dukem</option>
   </select>

      <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
  </div>

 <center>
          <div class="form-group col-md-5" name="class">
      <label for="inputPassword4">
Train Class :</label>
      <select id="inputState" class="form-control" name="class">

  <option>seat</option>
  <option>bed</option>

   </select>

  </div>

 <center><div class="form-group col-md-5" name="type">
    <label for="inputState">JOURNEY TYPE :</label>
    <select id="inputState" class="form-control" name="type">
    <option >Single</option>
    
    </select>
    </div>


      <br>
    <div class="form-row row justify-content-aroundd">
       <div class="form-group col-md-16" >
       <center><label for="inputState"  ><h8>NO OF PASSENGERS :</h8></label></center>
      <center> <input type="number" name="number" required  min="1" max="5"  ></center>
       </div>



    <div>
     <button type="submit"    class="button" name="login_submit" >Proceed</button>

 </div>
</form>
</div>

</section>
</div>



<?php include 'footer.php';
?>

</body>
</html>
