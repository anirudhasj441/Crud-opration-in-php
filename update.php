<?php
include "connection.php";
$id = $_GET['id'];
$stm = "select * from employees where id=$id";
$querry = mysqli_query($conn, $stm);
// while ($res = mysqli_fetch_array($querry)) {
//     echo $res['name'];
// }
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
        <?php
        while ($res = mysqli_fetch_array($querry)) {
        ?>
            <form action="updatedata.php?id=<?php echo $res["id"]; ?>" class="mt-5" method="post">
                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $res["name"]; ?>">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" name="qua" placeholder="Qualification" value="<?php echo $res["qualification"]; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" name="cont" placeholder="Mobile Number" value="<?php echo $res["contact"]; ?>">
                    </div>
                    <div class="col-6">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $res["email"]; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <center>
                            <input type="submit" value="Update" class="btn btn-info">
                        </center>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>