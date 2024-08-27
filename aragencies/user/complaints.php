<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='USER')
    {    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <style>
        #a{
            height: 100px;
        }
    </style>
</head>
<body>
<h2 class="text-center mt-5">Complaint Registration Form</h2>
<div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
    <form action="" method="post">
        Complaint  <br>
        <input class="form-control"  type="text" name="complaint" id="a"><br><br>
        <input class="btn btn-secondary" type="submit" name="send" value="SEND">
    </form>
    <?php
    include("dbcon.php");
    if(isset($_POST['send']))
    {
        $uid=$_SESSION['username'];
        $complaint=$_POST['complaint'];
        $ins="INSERT INTO complaints(userid,complaint,reply) VALUES('$uid','$complaint','NA')";
        $data=mysqli_query($con,$ins);
        if(isset($data))
        {
            echo "Sent succesfully";
        }
        else
        {
            echo "Try again";
        }
    }
    ?>
    <?php
}
else
{
    echo "You are not an user";
}
}
else
{
    echo "LOGIN FIRST!!!!";

}
?>
</div>
</div>
</body>
</html>