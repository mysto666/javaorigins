<?php
//Untuk cek apakah user dengan level admin yang mengakses page admin
session_start();
if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
    header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/admin.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase "><i class=""></i>Admin Panel</div>
            <div class="list-group list-group-flush my-3">
                <a href="admin-user.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-user-circle me-2"></i>Users</a>
                <a href="admin-katalog.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-shopping-cart me-2"></i>Katalog</a>
                <a href="admin-team.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-chalkboard-teacher me-2"></i>Teams</a>
                <a href="../logout.php" class="list-group-item list-group-item-action three-text bg-transparent fw-bold "><i class="fas fas fa-power-off me-2"></i>Logout</a>

            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4 main">
                <div class="d-flex align-items-center">

                    <h2 class="fs-2 m-0">Admin Dashboard</h2>

                </div>
            </nav>