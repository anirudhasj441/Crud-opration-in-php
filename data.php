<?php
include "connection.php";
$select_querry = "select * from  employees";
$querry = mysqli_query($conn, $select_querry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "link.php" ?>
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="container">

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Qualification</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th colspan="2">Oprations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($res = mysqli_fetch_array($querry)) {
                    ?>
                        <tr>
                            <td><?php echo $res["name"]; ?></td>
                            <td><?php echo $res["qualification"]; ?></td>
                            <td><?php echo $res["contact"]; ?></td>
                            <td><?php echo $res["email"]; ?></td>
                            <td><a href="delete.php?id=<?php echo $res['id']; ?>"><i class="fa fa-trash text-danger"></i></a></td>
                            <td><a href="update.php?id=<?php echo $res["id"]; ?>"><i class="fa fa-pencil-square-o text-info"></i></a></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>