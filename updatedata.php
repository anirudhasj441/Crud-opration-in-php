<?php
include "connection.php";
$id = $_GET['id'];
$name = $_POST["name"];
$qua = $_POST["qua"];
$contact = $_POST["cont"];
$email = $_POST["email"];
$stm = "update employees set name = '$name' , qualification = '$qua', contact = '$contact',email='$email' where id = $id";
$querry = mysqli_query($conn, $stm);
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
header('location:data.php');
// while ($res = mysqli_fetch_array($querry)) {
//     echo $res['name'];
// }
?>