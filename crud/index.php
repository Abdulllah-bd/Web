<?php
require_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>
        <meta charset="UTF-8"/>
        <title>Simple Crude function</title>
        <style>
            table{ width:60%; border:1px solid blueviolet;}
            th,td{border-collapse: collapse; border:1px solid blueviolet; }
        </style>
    </head>

    <body>

        <form action="#" method="post">
            <input type="text" name="f_name" value=""  placeholder="First Name"  />
            <input type="text" name="id" value=""  placeholder="Enter your ID"  />
            <input type="submit" value="Add">
        </form>

        <table id="display_table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($all_persons as $single):
                ?>
                <tr>
                    <td><?php echo $single[0]; ?></td>
                    <td><?php echo $single[1]; ?></td>

                    <td>Edit, Delete</td>

                </tr>
                <?php
            endforeach;
            ?>


        </table>

    </body>
</html>
