<?php
include("../../config.php");
if ($_POST['txtPassword'] == $_POST['txtRetypepass']) {

    $sql = "INSERT INTO user(nama,email,password,level)";
    $sql .= "VALUES ('" . $_POST['txtNama'] . "','" . $_POST['txtEmail'] . "','" . $_POST['txtPassword'] . "','admin')";
    $query = mysqli_query($conn, $sql) or exit("Error query : <b>" . $sql . "</b>.");

    if ($query->connect_errno) {
        echo "Koneksi database gagal karena" . $query->connect_error;
        exit;
    } else {

        header("Location: ../admin-user.php?n=1");
    }
} else {
    echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
}
