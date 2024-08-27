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
        <a href="adminhome.php" class="navbar-brand">AR AGENCIES | Admin Panel</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="adminhome.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Newspapers</a>
                    <div class="dropdown-menu">
                        <a href="addnewspapers.php" class="dropdown-item">Add News Paper</a>
                        <a href="viewnewspapers.php" class="dropdown-item">View News Papers</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paperboys</a>
                    <div class="dropdown-menu">
                        <a href="addpaperboy.php" class="dropdown-item">Add Paper Boy</a>
                        <a href="viewpaperboy.php" class="dropdown-item">View Paper Boys</a>
                    </div>
                </div>
                <a href="viewusers.php" class="nav-item nav-link">Users</a>
                <a href="viewcomplaints.php" class="nav-item nav-link">Complaints</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Orders</a>
                    <div class="dropdown-menu">
                        <a href="pendingorders.php" class="dropdown-item">Pending Orders</a>
                        <a href="approvedorders.php" class="dropdown-item">Approved Orders</a>
                    </div>
                </div>
            </div>
            <div class="navbar-nav ms-auto">              	
                <?php
            if(isset($_SESSION['role'])=="ADMIN")
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

