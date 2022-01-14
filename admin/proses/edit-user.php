<?php
include("../../config.php");

$id = $_POST['txtId'];
$nama = $_POST['txtNama'];
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
mysqli_query($conn, "update user set nama='$nama', email='$email', password='$password' where id='$id'");

if ($query->connect_errno) {
    echo "Koneksi database gagal karena" . $query->connect_error;
    exit;
} else {
    header("Location: ../admin-user.php?n=1");
}
