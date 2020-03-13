<?php
include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "link.php" ?>
    <title>Crud Operation</title>
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <form action="add.php" class="mt-5" method="post">
            <div class="row">
                <div class="col-6">
                    <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="qua" placeholder="Qualification">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="cont" placeholder="Mobile Number">
                </div>
                <div class="col-6">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <center>
                        <input type="submit" class="btn btn-info">
                    </center>
                </div>
            </div>
        </form>
    </div>
</body>
</html>