<?php
require_once './class/connection.php';
$mid=$_POST['mid'];
$mtype=$_POST['mtype'];
$salary=$_POST['salary'];
$jdate=$_POST['jdate'];
$employee_niid=$_POST['employee_niid'];

$sql="UPDATE `management` SET  `mtype` = '$mtype',`salary` = '$salary', "
        . "`jdate` = '$jdate' WHERE `management`.`mid` = '$mid'";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>