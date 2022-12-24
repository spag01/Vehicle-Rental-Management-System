<?php

include 'connect_project.php';
if(isset($_GET['deleteID'])){
    $id= $_GET['deleteID'];
    $sql= "DELETE FROM OfficeStaff WHERE EmployeeID='$id'";
    $result= mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>