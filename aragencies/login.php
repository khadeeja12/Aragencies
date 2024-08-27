<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

<div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
    <form action="" method="post">
        usertype <br>
         <select class="form-select" name="usertype">
            <option value="admin">Admin</option>
            <option value="paperboy">Paperboy</option>
            <option value="user">User</option>
        </select><br><br>
        <input class="form-control" type="email" name="userid" placeholder="userid" required><br><br>
        <input class="form-control" type="password" name="password" placeholder="password" required> <br><br>
        <input class="btn btn-secondary" type="submit" value="LOGIN" name="login"><br>
    </form>
    <?php
    include("dbcon.php");

    
    if(isset($_POST['login']))
    {
        $userid=$_POST['userid'];
        $password=$_POST['password'];
        $usertype=$_POST['usertype'];
        // admin login
        
        if($usertype=='admin')
        {
            $sel="SELECT * FROM admin WHERE userid='$userid' AND password='$password'";
            $data=mysqli_query($con,$sel);
           while($row=mysqli_fetch_array($data))
           {
            $uid=$row['userid'];
            $_SESSION["username"]=$uid;
            $_SESSION["role"]="ADMIN";
            header("location:admin/adminhome.php");
        }
        }
        // paperboy login
        if($usertype=='paperboy')
        {
            $sel="SELECT * FROM paperboy   WHERE userid='$userid' AND password='$password'";
            $data=mysqli_query($con,$sel);
            while($row=mysqli_fetch_array($data))
           {
            $uid=$row['userid'];
            $_SESSION["username"]=$uid;
            $_SESSION["role"]="PAPERBOY";
            header("location:paperboy/home.php");
        }
        }
        // user login
        if($usertype=='user')
        {
            $sel="SELECT * FROM user WHERE userid='$userid' AND password='$password'";
            $data=mysqli_query($con,$sel);
            while($row=mysqli_fetch_array($data))
           {
            $uid=$row['userid'];
            $_SESSION["username"]=$uid;
            $_SESSION["role"]="USER";
            header("location:user/home.php");
           }
        }
    }
    ?>
</div>
</div>

   
</body>
</html>
