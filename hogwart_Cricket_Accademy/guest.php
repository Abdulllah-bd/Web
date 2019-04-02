<?php
require_once './class/connection.php';
$result = $con->query("SELECT *
  FROM employee RIGHT JOIN player
    ON employee.niid = player.employee_niid;");
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




        <!--
                <style>
                    table{ width:100%; border:1px solid blueviolet;}
                    th,td{border-collapse: collapse; border:1px solid blueviolet; }
                </style>-->
        <div class="container">
            <h3>Players</h3>
            <table>
                <tr>
                    <th>NIID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Sex</th>
                    <th>Employee Type</th>
                    <th>ID</th>
                    <th>Match</th>
                    <th>Average</th>
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
            <h3>Coaches</h3>
            <table>
                <tr>
                    <th>NIID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Sex</th>
                    <th>Employee Type</th>
                    <th>Coach ID</th>
                    <th>Coach Type</th>
                </tr>
                <?php
                $result = $con->query("SELECT *
  FROM employee RIGHT JOIN coach
    ON employee.niid = coach.employee_niid;");
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><th>" . $row["niid"] . "</th><th>" . $row["fname"] . "</th><th>" . $row["lname"] . "</th><th>" . $row["address"] . "</th>
<th>" . $row["sex"] . "</th>
<th>" . $row["etype"] . "</th>
<th>" . $row["cid"] . "</th>
<th>" . $row["ctype"] . "</th></tr>";
                    }
                }
                ?>





            </table>
            <h3>Search players</h3>

            <form action="search.php" method="post">
                <p>
                    <label>Name:</label>
                    <input type="text" id="search" name="search"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="search"
                </p>
            </form>

        </div>


        <style>
            body {
                color: black;
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
               
            }
