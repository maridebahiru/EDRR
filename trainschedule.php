<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

  <div>

  </div>
<style>
body{
  background-color: #3c6382;
}
table#database_table {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
}

#database_table td, #database_table th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#database_table tr:nth-child(even){background-color: #f2f2f2}

#database_table th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
}


</style>


<head>
           <title>EDR-TICKET DATABASE</title>
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
      </head>
      <body >
                     <h2><center><b>Dire Dawa TO Djibouti TRAIN SCHEDULE</center></b></h2>

           <div class="container">
                <br />
                     <table id="database_table" class="table table-striped table-bordered">
                          <thead>
                            <tr>
  <th>Dire Dawa </th>
  <th>Lebu</th>
  <th>Adama</th>
  <th>Meso </th>
  <th>Debre Zeyit</th>
  <th>Dukem</th>


  </tr>
                          </thead>
                          <tbody>



<?php


$sql_transactions="SELECT * FROM `traintt`   " ;
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){

echo'<tr class="class="table table-striped table-bordered"">
        <td>'.$row["Dire Dawa"].'</td>
        <td>'.$row["Lebu"].'</td>
        <td>'.$row["Adama"].'</td>
        <td>'.$row["Meso"].'</td>
        <td>'.$row["Debre Zeyit"].'</td>
        <td>'.$row["Dukem"].'</td>
';
}
?>
</tbody>
</table>
</div>
 <script>
 $(document).ready(function() {
    $('#database_table').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} );
 </script>
<?php include 'footer.php';
?>
