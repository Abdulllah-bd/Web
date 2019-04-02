<?php

$host = 'localhost';
$user = 'id1086219_ab';
$password = '123456';
$database = 'id1086219_ab';
$id = $_POST['user'];
$pass = $_POST['pass'];
echo "$id";
if ($id != NULL) {
    $con = mysqli_connect($host, $user, $password);
    mysqli_select_db($con, "u443636314_ab");
    $result = mysqli_query($con , "select id, password from user where id='ab'");
    
    $row = mysqli_fetch_array($result);
    echo "$row";
    if ('12'==$pass) {
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["pass"] = $pass;
        echo "<script type=\"text/javascript\">
            location.href = 'info.php';
            </script>";
    } else {
        echo 'Incorrect ID or Password!';
        echo "$pass+$id";
    }
} else {
    echo 'Input user ID & Password!';   
}
$_SESSION["con"] = $con;
?>
<style>
body  {
    background-image: url("paper.gif");
    background-color: #cccccc;
}
</style>