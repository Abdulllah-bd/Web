<?php
require_once './class/connection.php';
$id=$_POST['cid'];
$ctype=$_POST['ctype'];
$salary=$_POST['salary'];
$employee_niid=$_POST['employee_niid'];

$sql="UPDATE `coach` SET `ctype` = '$ctype', `salary` = '$salary' WHERE `coach`.`cid` = '$id'";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>

