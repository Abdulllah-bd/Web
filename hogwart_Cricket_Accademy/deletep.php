<?php
require_once './class/connection.php';
$id=$_POST['id'];

$sql = "DELETE FROM player WHERE id='$id'";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>

