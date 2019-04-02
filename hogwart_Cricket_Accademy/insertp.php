<?php
require_once './class/connection.php';
$id=$_POST['id'];
$match=$_POST['match'];
$avg=$_POST['avg'];
$run=$_POST['run'];
$sr=$_POST['s/r'];
$ptype=$_POST['ptype'];
$catch=$_POST['catch'];
$wicket=$_POST['wicket'];
$bbowl=$_POST['bbowl'];
$brun=$_POST['brun'];
$overs=$_POST['overs'];
$batting=$_POST['batting'];
$employee_niid=$_POST['employee_niid'];


$sql = "INSERT INTO `player` (`id`, `match`, `avg`, `run`, `s/r`, `ptype`, `catch`, `wicket`, `bbowl`, `brun`, `overs`, `batting`, `employee_niid`) "
        . "VALUES ('$id', '$match', '$avg', '$run', '$sr', '$ptype', '$catch', '$wicket', '$bbowl', '$brun', '$overs', '$batting', '$employee_niid')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>