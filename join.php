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
    <title>Operation</title>
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
      <th scope="col">FName</th>
      <th scope="col">LName</th>
      <th scope="col">DateOfBirth</th>
      <th scope="col">Position</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>

<br>
<br>

<?php

$sql= "SELECT * FROM OfficeStaff";
$result= mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $EmployeeID=$row['EmployeeID'];
    $ContactNumber=$row['ContactNumber'];
    $Email=$row['Email'];
    $FName=$row['FName'];
    $LName=$row['LName'];
    $DateOfBirth=$row['DateOfBirth'];
    $Position=$row['Position'];
    $Department=$row['Department'];
    echo '<tr>
    <th scope="row">'.$EmployeeID.'</th>
    <td>'.$ContactNumber.'</td>
    <td>'.$Email.'</td>
    <td>'.$FName.'</td>
    <td>'.$LName.'</td>
    <td>'.$DateOfBirth.'</td>
    <td>'.$Position.'</td>
    <td>'.$Department.'</td>
  </tr>';
 }
}
?>
  </tbody>
</table>

<table class="table">
  <thead>
    <tr>
      <th scope="col">CustomerID</th>
      <th scope="col">Age</th>
      <th scope="col">FName</th>
      <th scope="col">LName</th>
      <th scope="col">EmployeeID</th>
    </tr>
  </thead>
  <tbody>


<br>
<br>
<?php

$sql= "SELECT * FROM Help_Customer";
$result= mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $CustomerID=$row['CustomerID'];
    $Age=$row['Age'];
    $FName=$row['FName'];
    $LName=$row['LName'];
    $EmployeeID=$row['EmployeeID'];
    echo '<tr>
    <td scope="row">'.$CustomerID.'</td>
    <td>'.$Age.'</td>
    <td>'.$FName.'</td>
    <td>'.$LName.'</td>
    <th>'.$EmployeeID.'</th>

  </tr>';
 }
}

?>


  </tbody>
</table>

<form action="join_display.php" method="post"> <b>Join the above tables with:-</b>
<br>

<!-- <label>Enter EmployeeID1</label>
<input name="id1" type="text" placeholder="Type id1"> -->
<div class="form-group">
                <label>EmployeeID1</label>
                <input type="text" class="form-control" 
                placeholder="Enter employeeID1" 
                name="id1" autocomplete="off">
            </div>
<!-- <label>Enter EmployeeID2</label>
<input name="id2" type="text" placeholder="Type id2"> -->
<div class="form-group">
                <label>EmployeeID2</label>
                <input type="text" class="form-control" 
                placeholder="Enter employeeID2" 
                name="id2" autocomplete="off">
            </div>
<br>
<input class= "btn btn-primary" type="submit" value="Join">
</form>


</div>
</body>


</html>