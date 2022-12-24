<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>After Aggregation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container my-5">
       <table class="table">

  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Num_Of_Rentals</th>
    </tr>
  </thead>

  <tbody>

  <?php

include'connect_project.php';
$sql= "SELECT  Month(PaymentDate) AS Month, COUNT(PaymentID) AS Num_Of_Rentals
FROM Payment
WHERE Amount>ALL
(SELECT AVG(Amount)
FROM Payment
GROUP BY Month(PaymentDate))
and PaymentID IN
(SELECT PaymentID
FROM Payment
WHERE YEAR(PaymentDate)=2022 )
GROUP BY MONTH(PaymentDate)";

$result= mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $Month=$row['Month'];
    $Num_Of_Rentals=$row['Num_Of_Rentals'];
    echo '<tr>
    <td>'.$Month.'</td>
    <td>'.$Num_Of_Rentals.'</td>
  </tr>';
 }
}
?>


  </tbody>
</table>

</div>
</body>

</html>
