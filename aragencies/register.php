<?php include 'header.php' ?>
<div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
    <form action="" method="post" ">
        Name <br>
        <input class="form-control" type="text" name="name" required><br><br>
        Address <br>
        <input class="form-control" type="text" name="address" required><br><br>
        Phone Number <br>
        <input class="form-control" type="number" name="phone" required><br><br>
        E-mail <br>
        <input class="form-control" type="email" name="email" required><br><br>
        Userid <br>
        <input class="form-control" type="text" name="uid" required><br><br>
        Password <br>
        <input class="form-control" type="password" name="pwd" required><br><br>
        <input class="btn btn-secondary" type="submit" value="REGISTER" name="register"><br><br>
    </form>
    <?php
    include("dbcon.php");
    if(isset($_POST['register']))
    {
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $uid=$_POST['uid'];
        $pwd=$_POST['pwd'];
        $sel=$con->query("SELECT * FROM user WHERE userid='$uid'");
        $r=mysqli_num_rows($sel);
        if($r>0)
        {
            echo "<script>alert('User ID already exists')</script>";
        }
        else
        {
            $ins="INSERT INTO user(name,address,phone,email,userid,password) VALUES('$name','$address','$phone','$email','$uid','$pwd')";
            $data=mysqli_query($con,$ins);
            header("location:login.php");
        }
        
    }
    ?>
    </div>
</div>
