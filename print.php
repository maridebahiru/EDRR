
        <img src="https://reportertenders.com/try-storages/classified-listing/2021/07/ethio-djibouti-railway-logo.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Ethio-Djibouti Standard Gauge Railway Share Company EDR/MC would like to  invite interested and qualified bidders for procurement of Construction  Materials - Reporter Tender | Ethiopian Reporter Tenders | Tenders in  Ethiopia | 2merkato" data-noaft="1" style="width: 30%; height: 30%; margin: 0px;">   <h1 align="left">EDR Ticket Details</h1>
           <br>
			<style >
$black: #343434;

.ticket {

    font-family: Montserrat, sans-serif;
}

.ticketdesign {
  background: linear-gradient(to bottom, #2C3E50 0%, #2C3E50 19%, #2C3E50 19%, #2C3E50 100%);
  height: 29em;
  float: left;
  object-position: center;
  padding: 1em;
  margin-top: 100px;

}


.ticketstructure {
  align-content: center;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
   border-top-right-radius: 8px;
   border-bottom-right-radius: 8px;



  width: 44em;
}

h1 {
  font-size: 40px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;


}
h2 h3 {
  font-size: 20px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;
      color:black;
}
span {
  color: black;
}
#options {
	align-content:center;
	align-items:center;
    text-align: center;
}
.printable {
   padding-left:
   10px;text-align:left;
}
</style>

           <?php
          include 'connect.php';
		  $pid=$_GET['pid'];

			$sel="SELECT * FROM `transactions` WHERE `T_No` =$pid";
			$rs=$connect->query($sel);
			while($row=$rs->fetch_assoc())
			{

				?>


				<div class="ticket " id="printable">

  <div class="ticketdesign ticketstructure" >
    <h1 align="left"><b>EDR-TICKET</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Booking ID: <?php echo $row['T_No'] ?> </h1></span>
    <div class="title"><br>
     <h1 align="center"><span><?php echo $row['source'] ?> &nbsp&nbsp To &nbsp&nbsp <?php echo $row['dest'] ?>  </span></h1>
    <h2 align="left"><span>DATE & TIME : &nbsp <?php echo $row['Date'] ?></span></h2>
   <h2 align="left"><span>CLASS : &nbsp <?php echo $row['Class'] ?></span></h2>
   <h2 align="left"><span>TYPE : &nbsp <?php echo $row['Type'] ?></span></h2>
   <h2 align="left"><span>NO. OF PASSENGERS :&nbsp <?php echo $row['NoOfpass'] ?> </span></h2>
   <h2 align="left"><span>AMOUNT : &nbsp Birr<?php echo $row['Amt'] ?> </span></h2>
   <h2 align="left"><span>ROUTE : &nbsp <?php echo $row['Route'] ?> </span></h2>
   <h2 align="center"><span>መልካም ጉዞ እንመኛለን።</span> </h2>
</div>

    </div>
</div>


			<?php
		}
		?>

</div>
