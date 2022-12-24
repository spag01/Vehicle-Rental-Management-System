<?php
 include 'connect_project.php';
 if(isset($_POST['submit'])){
     $EmployeeID=$_POST['EmployeeID'];
     $ContactNumber=$_POST['ContactNumber'];
     $Email=$_POST['Email'];
     $FName=$_POST['FName'];
     $LName=$_POST['LName'];
     $DateOfBirth=$_POST['DateOfBirth'];
     $Position=$_POST['Position'];
     $Department=$_POST['Department'];

     $sql=" INSERT INTO OfficeStaff (EmployeeID, ContactNumber, Email, FName, LName, DateOfBirth, Position, Department)
     values ('$EmployeeID', '$ContactNumber', '$Email', '$FName', '$LName', '$DateOfBirth', '$Position', '$Department')";
     $result=mysqli_query($con,$sql);
     if($result){
        //  echo "Data inserted successfully";
        header('location:display.php');
        } else{
            die(mysqli_error($con));
        }
 }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Operation</title>
</head>

<body>

    <div class="container my-5">
        <form method="post">

            <div class="form-group">
                <label>EmployeeID</label>
                <input type="text" class="form-control" 
                placeholder="Enter employeeID" 
                name="EmployeeID" autocomplete="off">
            </div>

            <div class="form-group">
                <label>ContactNumber</label>
                <input type="text" class="form-control" 
                placeholder="Enter mobile" 
                name="ContactNumber" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" 
                placeholder="Enter email address" 
                name="Email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>FName</label>
                <input type="text" class="form-control" 
                placeholder="Enter employee first name" 
                name="FName" autocomplete="off">
            </div>

            <div class="form-group">
                <label>LName</label>
                <input type="text" class="form-control" 
                placeholder="Enter employee last name" 
                name="LName" autocomplete="off">
            </div>

            <div class="form-group">
                <label>DateOfBirth</label>
                <input type="text" class="form-control" 
                placeholder="Enter DOB" 
                name="DateOfBirth" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Position</label>
                <input type="text" class="form-control" 
                placeholder="Enter employee position" 
                name="Position" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Department</label>
                <input type="text" class="form-control" 
                placeholder="Enter employee department" 
                name="Department" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary"
            name = "submit"> Submit</button>
        </form>

    </div>


</body>

</html>