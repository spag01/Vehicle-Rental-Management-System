<?php
include 'connect_project.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Before Nested-Aggregation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container my-5">
     <table class="table">
  <thead>
    <tr>
      <th scope="col">PaymentID</th>
      <th scope="col">Amount</th>
      <th scope="col">CardType</th>
      <th scope="col">PaymentStatus</th>
      <th scope="col">PaymentDate</th>
    </tr>
  </thead>
  <tbody>

<br>
<br>

<?php

$sql= "SELECT * FROM Payment";
$result= mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $PaymentID=$row['PaymentID'];
    $Amount=$row['Amount'];
    $CardType=$row['CardType'];
    $PaymentStatus=$row['PaymentStatus'];
    $PaymentDate=$row['PaymentDate'];
    echo '<tr>
    <td scope="row">'.$PaymentID.'</td>
    <td>'.$Amount.'</td>
    <td>'.$CardType.'</td>
    <td>'.$PaymentStatus.'</td>
    <td>'.$PaymentDate.'</td>
  </tr>';
 }
}
?>
  </tbody>
</table>
<br>
<br>
<form action="nested-aggregation_display.php" method="post"> <b>Here is to get the number of payments greater than the average earning in a particular month</b>
<br>
<br>

<input class= "btn btn-primary" type="submit" value="Run Nested-Aggregation">
</form>


</div>
</body>
</html>

