<?php
require_once './class/connection.php';
$niid=$_POST['niid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$sex=$_POST['sex'];
$etype=$_POST['etype'];

$sql = "INSERT INTO `employee` (`niid`, `fname`, `lname`, `address`, `sex`, `etype`)"
        . " VALUES ($niid, '$fname', '$lname', '$address', '$sex', '$etype')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>