<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Paperboy</title>
</head>
<body>
<div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
    <form action="" method="post">
        Name <br>
        <input class="form-control" type="text" name="name" required><br><br>
        Address <br>
        <input class="form-control" type="text" name="address" required><br><br>
        Phone <br>
        <input class="form-control" type="number" name="phone" required><br><br>
        E-mail <br>
        <input class="form-control" type="email" name="email" required><br><br>
        Number of Papers <br>
        <input class="form-control" type="number" name="papers" required><br><br>
        Salary(per paper) <br>
        <input class="form-control" type="number" name="salary" required><br><br>
        Userid <br>
        <input class="form-control" type="text" name="uid" required><br><br>
        Password <br>
        <input type="password" name="pwd" required><br><br>
        <input class="btn btn-secondary"  type="submit" name="add" value="ADD">
    </form>
    <?php
    include("dbcon.php");
    if(isset($_POST['add']))
    {
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $uid=$_POST['uid'];
        $pwd=$_POST['pwd'];
        $papers=$_POST['papers'];
        $salaryperpaper=$_POST['salary'];
        $totalsalary=$papers*$salaryperpaper;
        $ins="INSERT INTO paperboy(name,address,phone,email,papers,salaryperpaper,totalsalary,userid,password) VALUES('$name','$address','$phone','$email','$papers','$salaryperpaper','$totalsalary','$uid','$pwd')";
        $data=mysqli_query($con,$ins);
        if(isset($data))
        {
            echo "Added succesfully";
        }
        else
        {
            echo "Try again";
        }
    }
    ?>
    </div>
</div>
    <?php
}
else
{
    echo "You are not an admin";
}
}
else
{
    echo "LOGIN FIRST!!!!";

}
?>
</body>
</html>