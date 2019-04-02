<?php
require_once './class/connection.php';
$mid=$_POST['mid'];

$sql = "DELETE FROM management WHERE mid='$mid'";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>

