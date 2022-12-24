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
    <title>Before Aggregation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container my-5">
     <table class="table">
  <thead>
    <tr>
      <th scope="col">CategoryName</th>
      <th scope="col">CostPerDay</th>
      <th scope="col">PassengerCount</th>
      <th scope="col">UsabilityType</th>
    </tr>
  </thead>
  <tbody>

<br>
<br>

<?php

$sql= "SELECT * FROM Category";
$result= mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $CategoryName=$row['CategoryName'];
    $CostPerDay=$row['CostPerDay'];
    $PassengerCount=$row['PassengerCount'];
    $UsabilityType=$row['UsabilityType'];
    echo '<tr>
    <th scope="row">'.$CategoryName.'</th>
    <td>'.$CostPerDay.'</td>
    <td>'.$PassengerCount.'</td>
    <td>'.$UsabilityType.'</td>
  </tr>';
 }
}
?>
  </tbody>
</table>

<form action="aggregation_display.php" method="post"> <b>Aggregate category Table to get the average and maximum cost of each car category</b>
<br>
<br>

<input class= "btn btn-primary" type="submit" value="Run Aggregation">
</form>


</div>
</body>
</html>

