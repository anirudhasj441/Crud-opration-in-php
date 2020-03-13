<?php
include "connection.php";
$name = $_POST["name"];
$qua = $_POST["qua"];
$contact = $_POST["cont"];
$email = $_POST["email"];
$stmt = "insert into employees(name,qualification,contact,email) values('$name','$qua','$contact','$email')";
$querry = mysqli_query($conn,$stmt);
if ($querry){
    ?>
    <script>
        alert("data added succesfully");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("data not added");
    </script>
    <?php
    die("".mysqli_error($conn));
}
header('location:index.php');

?>