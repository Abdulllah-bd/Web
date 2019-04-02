<?php
require_once './class/connection.php';
$id=$_POST['cid'];
$ctype=$_POST['ctype'];
$salary=$_POST['salary'];
$employee_niid=$_POST['employee_niid'];


$sql = "INSERT INTO `coach` (`cid`, `ctype`, `salary`, `employee_niid`)"
        . " VALUES ('$id', '$ctype', '$salary', '$employee_niid')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>



	
cid
ctype
salary
employee_niid


