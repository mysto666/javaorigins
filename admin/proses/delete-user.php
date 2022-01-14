<?php
include("../../config.php");

$query = "delete from user where id ='" . $_GET["id"] . "' ";
mysqli_query($conn, $query);
mysqli_close($conn);

session_start();
header("Location: ../admin-user.php");
