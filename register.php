<!--Registration Page-->


<?php
include 'connect.php';
include 'head2.php'
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<section class="h-50 gradient-form" style="background-image: url(https://pbs.twimg.com/media/DqxAiCkWsAIJvcN?format=jpg&name=large);background-size: cover;background-position: center;">
  <div class="container py-3 h-60">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
<img src="https://reportertenders.com/try-storages/classified-listing/2021/01/ethio-djibouti-railway-logo.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb" alt="Ethio-Djibouti standard gauge railway share company EDR/MC Extension of Bid  Opening Date for CARGO HANDLING EQUIPMENT. - Reporter Tender | Ethiopian  Reporter Tenders | Tenders in Ethiopia | 2merkato" data-noaft="1" style="width: 400px; height: 280px; margin: 0px;">

                  <h4 class="mt-1 mb-5 pb-1">User Register</h4>
                </div>
                <form method='post' action ='register_insert.php'  >
                <div>
                <table align="center" class="table">
                  <tr><td><h3>Name : </h3></td> <td colspan='2'><input type="Text" name="name" maxlength='50' required></td></tr>
                  <tr><td><h3>Email Id : </h3></td> <td colspan='2'><input type="email" name="email" maxlength='50' required></td></tr>
                  <tr><td><h3>Gender :</h3></td><td><br><input type="Radio" name="Gender" value="M">Male</td><td><br><input type="Radio" name="Gender" value="F" required>Female</td></tr>
                  <tr><td><h3>Date of Birth :</h3></td><td colspan='2'><input type="Text" name="dob" maxlength='50' placeholder='yyyy-mm-dd' required></td></tr>
                  <tr><td><h3>Password : </h3></td> <td  colspan='2'><input type="password" name="password" maxlength='50' required></td></td></tr>
                  <tr><td><h3>Contact No.</h3></td> <td  colspan='2'><input type="tel"  name="phone"  maxlength='10' required></td></td></tr>
                  <tr><td colspan='3'><center><button type='Submit'  style="background-color:#40739e ; border-color:#40739e" name='register_submit' required >Submit</Button></center></td></tr>
                  </div>
                  </table>
                  </form>
                  <div align="center" >
                  <h3><a href='sindex.php' style="color: black">Registered?  Sign In !</a></h3>
                  </div>

              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>




<?php include 'footer.php';
?>

</html>
