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
         <style>

            body  {
                background-image: url("backgroung.jpg");
                background-color: #cccccc;
            }
        </style>F
    </head>
   
    <body>
        <div class="container jumbotron">
        <h1 align="center">AB's Cricket Academy</h1>
        </div>
        <div class="container" id="frm" style="background: #4CAF50;">
            <form action="login.php" method="post" align="center">
                <p>
                    <label>Username:</label>
                    <input type="text" id="user" name="user"/>
                    <br>
                    <label>Password :</label>
                    <input type="password" id="pass" name="pass"/>
                </p>
                <p>
                    <input class="btn btn-success" type="submit" id="btn" value="login">
                </p>
            </form>
            <FORM align="center">
                <INPUT class="btn btn-success" Type="BUTTON" Value="See Player DataBase" Onclick="window.location.href = 'guest.php'"> 
            </FORM>
        </div>

        <?php
        ?>






        <script src="scripts/jquery-3.1.1.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
    </body>
</html>
