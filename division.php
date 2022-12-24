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
      <th scope="col">EmployeeID</th>
      <th scope="col">ContactNumber</th>
      <th scope="col">Email</th>
      <th scope="col">DriverLicense</th>
      <th scope="col">FName</th>
      <th scope="col">LName</th>
      <th scope="col">DateOfBirth</th>
      <th scope="col">ServiceID</th>
    </tr>
  </thead>
  <tbody>

<br>
<br>

<?php

$sql= "SELECT * FROM CabDriver_Offer";
$result= mysqli_query($con,$sql);
if($result){
    while($row= mysqli_fetch_assoc($result)){
        $EmployeeID=$row['EmployeeID'];
        $ContactNumber=$row['ContactNumber'];
        $Email=$row['Email'];
        $DriverLicense=$row['DriverLicense'];
        $FName=$row['FName'];
        $LName=$row['LName'];
        $DateOfBirth=$row['DateOfBirth'];
        $ServiceID=$row['ServiceID'];
        echo '<tr>
        <td>'.$EmployeeID.'</td>
        <td>'.$ContactNumber.'</td>
        <td>'.$Email.'</td>
        <td>'.$DriverLicense.'</td>
        <td>'.$FName.'</td>
        <td>'.$LName.'</td>
        <td>'.$DateOfBirth.'</td>
        <th>'.$ServiceID.'</th>
      </tr>';
 }
}
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ServiceID</th>
      <th scope="col">ServiceLevel</th>
      <th scope="col">ServiceType</th>
    </tr>
  </thead>
  <tbody>

<br>
<br>

<?php

$sql= "SELECT * FROM Driving";
$result= mysqli_query($con,$sql);
if($result){
    while($row= mysqli_fetch_assoc($result)){
        $ServiceID=$row['ServiceID'];
        $ServiceLevel=$row['ServiceLevel'];
        $ServiceType=$row['ServiceType'];
        echo '<tr>
        <td>'.$ServiceID.'</td>
        <td>'.$ServiceLevel.'</td>
        <td>'.$ServiceType.'</td>
      </tr>';
 }
}
?>

  </tbody>
</table>

<form action="division_display.php" method="post"> <b>Here to get the first & last name, EmployeeID and ServiceId of all the drivers who has the following ServiceLevel</b>
<br>
<br>
<div class="form-group">
                <label><b>ServiceLevel</b></label>
                <input type="text" class="form-control" 
                placeholder="Enter service level of the driver" 
                name="id" autocomplete="off">
            </div>

           
 <br>           

<input class= "btn btn-primary" type="submit" value="Run Division">
</form>


</div>
</body>
</html>