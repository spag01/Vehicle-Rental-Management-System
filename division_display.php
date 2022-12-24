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
      <th scope="col">EmployeeID</th>
      <th scope="col">FName</th>
      <th scope="col">LName</th>
      <th scope="col">ServiceID</th>
    </tr>
  </thead>

  <tbody>



<?php

include'connect_project.php';
$id=$_POST['id'];
$sql= "SELECT DISTINCT Cab.FName, Cab.LName, Cab.EmployeeID, Cab.ServiceID FROM CabDriver_Offer AS Cab
WHERE NOT EXISTS
(SELECT ServiceLevel FROM Driving 
 WHERE ServiceLevel = '$id'
 EXCEPT
 SELECT ServiceLevel FROM Driving AS Drv
 WHERE Drv.ServiceID = Cab.ServiceID )
";

$result= mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $EmployeeID=$row['EmployeeID'];
    $FName=$row['FName'];
    $LName=$row['LName'];
    $ServiceID=$row['ServiceID'];
    echo '<tr>
    <td scope="row">'.$EmployeeID.'</td>
    <td>'.$FName.'</td>
    <td>'.$LName.'</td>
    <td>'.$ServiceID.'</td>
  </tr>';
 }
}
?>


  </tbody>
</table>

</div>
</body>

</html>
