<?php
require_once './class/connection.php';
$name = $_POST['search'];


$sql = "select * FROM employee RIGHT JOIN player
    ON employee.niid = player.employee_niid where fname='$name' OR lname='$name';";



$result = mysqli_query($con, $sql);
//if (mysqli_query($con, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($con);
//}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AB's Cricket Academy </title>
        <link href="styles/bootstrap.min.css" rel="stylesheet" />
       
    </head>

    <body>
        <div class="container jumbotron">
            <h1 align="center">AB's Cricket Academy</h1>
        </div>




        <div class="container"
             <table class="table ">
                <tr>
                    <th>NIID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Sex</th>
                    <th>Employee Type</th>
                    <th>ID</th>
                    <th>Match</th>
                    <th>Avarage</th>
                    <th>Run</th>
                    <th>S/R</th>
                    <th>Player Type</th>
                    <th>Catch</th>
                    <th>Wicket</th>
                    <th>Best Bowl</th>
                    <th>Best Run</th>
                    <th>Overs</th>
                    <th>Batting</th>
                </tr>

                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><th>" . $row["niid"] . "</th><th>" . $row["fname"] . "</th><th>" . $row["lname"] . "</th><th>" . $row["address"] . "</th>
<th>" . $row["sex"] . "</th>
<th>" . $row["etype"] . "</th>
<th>" . $row["id"] . "</th>
<th>" . $row["match"] . "</th>
<th>" . $row["avg"] . "</th>
<th>" . $row["run"] . "</th>
<th>" . $row["s/r"] . "</th>
<th>" . $row["ptype"] . "</th>
<th>" . $row["catch"] . "</th>
<th>" . $row["wicket"] . "</th>
<th>" . $row["bbowl"] . "</th>
<th>" . $row["brun"] . "</th>
<th>" . $row["overs"] . "</th>
<th>" . $row["batting"] . "</th></tr>";
                    }
                }
                ?>
            </table>
        </div>
        <style>
            body {
                color: white;
            }

            h1 {
                color: white;
            }
            body  {
                background-image: url("backgroung.jpg");
                background-color: #cccccc;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
                background-color: #4CAF50;
                color: white;
            }
