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
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add OfficeStaff</a>
     </button>
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
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>



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
    <td scope="row">'.$EmployeeID.'</td>
    <td>'.$ContactNumber.'</td>
    <td>'.$Email.'</td>
    <td>'.$FName.'</td>
    <td>'.$LName.'</td>
    <td>'.$DateOfBirth.'</td>
    <td>'.$Position.'</td>
    <td>'.$Department.'</td>

    <td>
    <button class="btn btn-primary"><a href="update.php?updateID='.$EmployeeID.'" class=" text-light">Update</a></button> 
    <button class="btn btn-danger"><a href="delete.php?deleteID='.$EmployeeID.'"  class=" text-light">Delete</a></button>
</td>
  </tr>';
 }
}
?>


  </tbody>
</table>

    </div>

</body>

</html>