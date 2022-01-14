<?php
include "../../config.php";
$gambar = $_GET["gambar"];
$i = mysqli_query($conn, "SELECT * FROM katalog WHERE gambar ='$gambar' ");
$u = mysqli_fetch_array($i);
//Menghapus file yang ada pada folder team
if (is_file("../../assets/katalog/" . $u['gambar'])) unlink("../../assets/katalog/" . $u['gambar']);
$sql = "DELETE FROM  katalog WHERE gambar='$gambar' ";
$query = mysqli_query($conn, $sql);
mysqli_close($conn);

if ($query->connect_errno) {
    echo "Koneksi database gagal karena" . $query->connect_error;
    exit;
} else {

    header("Location: ../admin-katalog.php?n=1");
}

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>