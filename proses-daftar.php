<?php
include("config.php");


$sql = "INSERT INTO user(nama,email,password,level)";
$sql .= "VALUES ('" . $_POST['txtNama'] . "','" . $_POST['txtEmail'] . "','" . $_POST['txtPassword'] . "','user')";
$query = mysqli_query($conn, $sql) or exit("Error query : <b>" . $sql . "</b>.");

if ($query->connect_errno) {
    echo "Koneksi database gagal karena" . $query->connect_error;
    exit;
} else {
    echo '<script type="text/javascript"> ';
    echo 'alert("Berhasil Daftar"); ';
    echo 'window.location.href = "login.php";</script>;';
}
