<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "VehicleRentals";
$con = new mysqli($dbhost, $dbuser, $dbpass,$db);
if(!$con){
    die(mysqli_error($con));
}

return $con;

?>
