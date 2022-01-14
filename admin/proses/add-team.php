<?php
include("../../config.php");

if (isset($_POST["submit"])) {

    $tmp_name   = $_FILES["file"]["tmp_name"];
    //Merename file berdasarkan waktu
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    if (empty($tmp_name)) {
        echo "<script>alert('Kosong');history.go(-1)</script>";
    } else {
        //Memindahkan file yang ada ditemporary ke folder assets
        move_uploaded_file($tmp_name, "../../assets/team/" . $newfilename);
        $sql = "INSERT INTO team (`gambar`, `nama`, `tugas`)";
        $sql .= " VALUES ('" . $newfilename . "','" . $_POST["txtNama"] . "','" . $_POST["txtTugas"] . "')";
        $query = mysqli_query($conn, $sql) or exit("Error query : <b>" . $sql . " </b>.");
    }
    if ($query->connect_errno) {
        echo "Koneksi database gagal karena" . $query->connect_error;
        exit;
    } else {

        header("Location: ../admin-team.php?n=1");
    }
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>