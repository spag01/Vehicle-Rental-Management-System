

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
<body class="container my-5">


<?php

function myTable($con,$sql)
{
$rsResult = mysqli_query($con, $sql) or die(mysqli_error($con));
if(mysqli_num_rows($rsResult)>0)
{
//We start with header. >>>Here we retrieve the field names<<< 
echo "<table class=\"table\"><thead><tr>";
$i = 0;
while ($i < mysqli_num_fields($rsResult)){
$field = mysqli_fetch_field_direct($rsResult, $i);
$fieldName=$field->name;
echo "<th scope=\"col\"><strong>$fieldName</strong></th>";
$i = $i + 1;
}
echo "</tr>";
//>>>Field names retrieved<<<
//We dump info
$bolWhite=true;
while ($row = mysqli_fetch_assoc($rsResult)) {
echo $bolWhite ? "<tr>" : "<tr>";
$count=false;
$bolWhite=!$bolWhite; foreach($row as $data) {
echo $count==false?"<td>$data</td>":"<td>$data</td>";
$count=true;}
echo "</tr></thead>";
}
echo "</table>";
}
}
include 'connect_project.php';
$selcolm = $_POST['selcolm'];
$sql = "SELECT $selcolm FROM OfficeStaff";
myTable($con,$sql);
?>
</body>
