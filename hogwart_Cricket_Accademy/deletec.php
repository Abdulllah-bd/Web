<?php
require_once './class/connection.php';
$id=$_POST['cid'];

$sql = "DELETE FROM coach WHERE cid='$id'";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>

