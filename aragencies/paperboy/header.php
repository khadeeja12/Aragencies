<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AR AGENCIES</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="home.php" class="navbar-brand">AR AGENCIES | Paper Boy Panel</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link active">Home</a>
                <a href="viewnewspapers.php" class="nav-item nav-link">Newspapers</a>
                <a href="viewusers.php" class="nav-item nav-link">Users</a>
                <a href="viewcomplaints.php" class="nav-item nav-link">Complaints</a>
                <a href="vieworders.php" class="nav-item nav-link">Orders</a>
            </div>
            <div class="navbar-nav ms-auto">              	
                <?php
            if(isset($_SESSION['role'])=="PAPERBOY")
            {
            ?>
            <li type="none"><form action="" method="post"><input type="submit" name="logout" value="LOGOUT"></form></li>
            <?php
            }
            ?>
            <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header("location:../home.php");
            }
            ?>
            </div>
        </div>
    </div>
</nav>
</body>
</html>

