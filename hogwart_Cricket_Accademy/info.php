<?php
session_start();
if ($_SESSION["id"] == null && $_SESSION["pass"] == NULL) {
    echo 'Hacking attempt!!!';
    echo "<script type=\"text/javascript\">
            location.href = 'index.php';
            </script>";
    session_abort();
}
require_once './class/connection.php';
$result = $con->query("SELECT *
  FROM employee RIGHT JOIN player
    ON employee.niid = player.employee_niid;");

session_abort();
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



        <div class="container">

            <h3>Players</h3>
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

            <h3>Coaches</h3>
            <table class="table ">
                <tr>
                    <th>NIID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Sex</th>
                    <th>Employee Type</th>
                    <th>Coach ID</th>
                    <th>Salary($)</th>
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
<th>" . $row["salary"] . "</th>
<th>" . $row["ctype"] . "</th></tr>";
                    }
                }
                ?>
            </table>
            <h3>Management</h3>
            <table class="table ">
                <tr>
                    <th>NIID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Sex</th>
                    <th>Employee Type</th>
                    <th>Management Type</th>
                    <th>Management ID</th>
                    <th>Salary</th>
                    <th>Joining Date</th>
                </tr>
                <?php
                $result = $con->query("SELECT *
  FROM employee RIGHT JOIN management
    ON employee.niid = management.employee_niid;");
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><th>" . $row["niid"] . "</th><th>" . $row["fname"] . "</th><th>" . $row["lname"] . "</th><th>" . $row["address"] . "</th>
<th>" . $row["sex"] . "</th>
<th>" . $row["etype"] . "</th>
<th>" . $row["mtype"] . "</th>
<th>" . $row["mid"] . "</th>
<th>" . $row["salary"] . "</th>
<th>" . $row["jdate"] . "</th></tr>";
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











            <h2>DATA Edit/Delete/Add</h2>
            <br>
            <h2>Insert</h2>
            <h3>Employee</h3>
            <form action="insert.php" method="post">
                <p>
                    <label>niid:</label>
                    <input type="number" id="niid" name="niid"/>
                    <label>fname:</label>
                    <input type="text" id="fname" name="fname"/>
                    <label>lname:</label>
                    <input type="text" id="lname" name="lname"/>
                    <label>address:</label>
                    <input type="text" id="address" name="address"/>
                    <label>sex:</label>
                    <input type="text" id="sex" name="sex"/>
                    <label>etype:</label>
                    <input type="text" id="etype" name="etype"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Insert"
                </p>
            </form>
            <h3>Player</h3>
            <form action="insertp.php" method="post">
                <p>
                    <label>id:</label>
                    <input type="number" id="id" name="id"/>
                    <label>match:</label>
                    <input type="number" id="match" name="match"/>
                    <label>avg:</label>
                    <input type="number" id="avg" name="avg"/>
                    <label>run:</label>
                    <input type="number" id="run" name="run"/>
                    <label>s/r:</label>
                    <input type="number" id="s/r" name="s/r"/>
                    <label>ptype:</label>
                    <input type="text" id="ptype" name="ptype"/>
                    <label>catch:</label>
                    <input type="number" id="catch" name="catch"/>
                    <label>wicket:</label>
                    <input type="number" id="wicket" name="wicket"/>
                    <label>bbowl:</label>
                    <input type="number" id="bbowl" name="bbowl"/>
                    <label>brun:</label>
                    <input type="number" id="brun" name="brun"/>
                    <label>overs:</label>
                    <input type="number" id="overs" name="overs"/>
                    <label>batting:</label>
                    <input type="number" id="batting" name="batting"/>
                    <label>employee_niid:</label>
                    <input type="number" id="employee_niid" name="employee_niid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Insert"
                </p>
                <a>Note:Your inserted niid must match an employee niid!!!</a>
            </form>
            <h3>Management</h3>
            <form action="insertm.php" method="post">
                <p>
                    <label>mid:</label>
                    <input type="number" id="mid" name="mid"/>
                    <label>mtype:</label>
                    <input type="text" id="mtype" name="mtype"/>
                    <label>salary:</label>
                    <input type="number" id="salary" name="salary"/>
                    <label>jdate:</label>
                    <input type="text" id="jdate" name="jdate"/>
                    <label>employee_niid:</label>
                    <input type="number" id="employee_niid" name="employee_niid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Insert"
                </p>
                <a>Note:Your inserted niid must match an employee niid!!!</a>
            </form>
            <h3>Coach</h3>
            <form action="insertc.php" method="post">
                <p>
                    <label>cid:</label>
                    <input type="number" id="cid" name="cid"/>
                    <label>ctype:</label>
                    <input type="text" id="ctype" name="ctype"/>
                    <label>salary:</label>
                    <input type="number" id="salary" name="salary"/>
                    <label>employee_niid:</label>
                    <input type="number" id="employee_niid" name="employee_niid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Insert"
                </p>
                <a>Note:Your inserted niid must match an employee niid!!!</a>
            </form>









            <h2>Update</h2>
            <h3>Player</h3>
            <form action="updatep.php" method="post">
                <p>
                    <label>id:</label>
                    <input type="number" id="id" name="id"/>
                    <label>match:</label>
                    <input type="number" id="match" name="match"/>
                    <label>avg:</label>
                    <input type="number" id="avg" name="avg"/>
                    <label>run:</label>
                    <input type="number" id="run" name="run"/>
                    <label>s/r:</label>
                    <input type="number" id="s/r" name="s/r"/>
                    <label>ptype:</label>
                    <input type="text" id="ptype" name="ptype"/>
                    <label>catch:</label>
                    <input type="number" id="catch" name="catch"/>
                    <label>wicket:</label>
                    <input type="number" id="wicket" name="wicket"/>
                    <label>bbowl:</label>
                    <input type="number" id="bbowl" name="bbowl"/>
                    <label>brun:</label>
                    <input type="number" id="brun" name="brun"/>
                    <label>overs:</label>
                    <input type="number" id="overs" name="overs"/>
                    <label>batting:</label>
                    <input type="number" id="batting" name="batting"/>
                    <label>employee_niid:</label>
                    <input type="number" id="employee_niid" name="employee_niid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Update"
                </p>
                <a>Note:Your employee_niid and id must be valid!</a>
            </form>
            <h3>Management</h3>
            <form action="updatem.php" method="post">
                <p>
                    <label>mid:</label>
                    <input type="number" id="mid" name="mid"/>
                    <label>mtype:</label>
                    <input type="text" id="mtype" name="mtype"/>
                    <label>salary:</label>
                    <input type="number" id="salary" name="salary"/>
                    <label>jdate:</label>
                    <input type="text" id="jdate" name="jdate"/>
                    <label>employee_niid:</label>
                    <input type="number" id="employee_niid" name="employee_niid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Update"
                </p>
                <a>Note:Your employee_niid and mid must be valid!</a>
            </form>
            <h3>Coach</h3>
            <form action="updatec.php" method="post">
                <p>
                    <label>cid:</label>
                    <input type="number" id="cid" name="cid"/>
                    <label>ctype:</label>
                    <input type="text" id="ctype" name="ctype"/>
                    <label>salary:</label>
                    <input type="number" id="salary" name="salary"/>
                    <label>employee_niid:</label>
                    <input type="number" id="employee_niid" name="employee_niid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Update"
                </p>
                <a>Note:Your employee_niid and cid must be valid!</a>
            </form>
            <h1>DELETE</h1>
            <h3>Player</h3>
            <form action="deletep.php" method="post">
                <p>
                    <label>id:</label>
                    <input type="number" id="id" name="id"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Delete"
                </p>
            </form>
            <h3>Coach</h3>
            <form action="deletec.php" method="post">
                <p>
                    <label>cid:</label>
                    <input type="number" id="cid" name="cid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Delete"
                </p>
            </form>
            <h3>Management</h3>
            <form action="deletem.php" method="post">
                <p>
                    <label>mid:</label>
                    <input type="number" id="mid" name="mid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Delete"
                </p>
            </form>
            <h3>Employee</h3>
            <form action="delete.php" method="post">
                <p>
                    <label>niid:</label>
                    <input type="number" id="niid" name="niid"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="Delete"
                </p>
                <a>Note:You can't delete an employee if he does exist in coach/management/player!!</a>
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
                color: white;
            }
        </style>

        <script src="scripts/jquery-3.1.1.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
    </body>
</html>