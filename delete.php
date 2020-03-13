<?php
include "connection.php";
$id = $_GET['id'];
$stmt = "delete from employees where id = $id";
mysqli_query($conn,$stmt);
header('location:data.php');
?>