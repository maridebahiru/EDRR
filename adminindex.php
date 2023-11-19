<?php
include 'connect.php';
include 'head2.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>admin Login</title>
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

                  <h4 class="mt-1 mb-5 pb-1">Admin Login</h4>
                </div>
                <form method='post' action ='adminauthenticate.php'  >
                <div>
                <table align="center" class="table">
                <tr><td><h3><b>Email id : </b></h3></td> <td><input type="email" name="email" maxlength='50'></td></tr>
                <tr><td><h3><b> Password : </b></h3></td> <td><input type="password" name="password" maxlength='50'></td></td></tr>
                <tr><td colspan='2'><center><button type='Submit' style="background:#3498db; border:#3498db" name='login_submit' ><b>Sign in </b> </button></center></td></tr></table>


                </table>
                </form>

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
</html>
