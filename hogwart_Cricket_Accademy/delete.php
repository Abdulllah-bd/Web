<?php
require_once './class/connection.php';
$niid=$_POST['niid'];

$sql = "DELETE FROM employee WHERE niid='$niid'";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>

