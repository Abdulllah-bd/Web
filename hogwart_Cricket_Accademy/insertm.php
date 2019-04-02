<?php
require_once './class/connection.php';
$mid=$_POST['mid'];
$mtype=$_POST['mtype'];
$salary=$_POST['salary'];
$jdate=$_POST['jdate'];
$employee_niid=$_POST['employee_niid'];


$sql = "INSERT INTO `management` (`mid`, `mtype`, `salary`, `jdate`, `employee_niid`)"
        . " VALUES ($mid, '$mtype', '$salary', '$jdate', '$employee_niid')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>