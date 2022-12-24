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
      <th scope="col">CategoryName</th>
      <th scope="col">Average_Cost</th>
      <th scope="col">Max_Cost</th>
    </tr>
  </thead>

  <tbody>



<?php

include'connect_project.php';
$sql= "SELECT AVG(CostPerDay) AS Average_Cost, MAX(CostPerDay) AS Max_Cost, CategoryName FROM Category
GROUP BY CategoryName";

$result= mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $CategoryName=$row['CategoryName'];
    $Average_Cost=$row['Average_Cost'];
    $Max_Cost=$row['Max_Cost'];
    echo '<tr>
    <th scope="row">'.$CategoryName.'</th>
    <td>'.$Average_Cost.'</td>
    <td>'.$Max_Cost.'</td>
  </tr>';
 }
}
?>


  </tbody>
</table>

</div>
</body>

</html>
