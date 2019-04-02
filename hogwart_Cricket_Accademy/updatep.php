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

$sql="UPDATE `player` SET `match` = '$match', `avg` = '$avg', `run` = '$run', `s/r` = '$sr',"
        . " `ptype` = '$ptype', `catch` = '$catch', `wicket` = '$wicket', `bbowl` = '$bbowl', `brun` = '$brun',"
        . " `overs` = '$overs', `batting` = '$batting' WHERE `player`.`id` = '$id'";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>