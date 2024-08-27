<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?>
    <?php
            include("dbcon.php");
            if(isset($_POST['update']))
            {
                $name=$_POST['name'];
                $address=$_POST['address'];
                $phone=$_POST['phone'];
                $email=$_POST['email'];
                $papers=$_POST['papers'];
                $salaryperpaper=$_POST['salary'];
                $totalsalary=$papers*$salaryperpaper;
                $uid=$_POST['uid'];
                $pwd=$_POST['pwd'];
                $upd="UPDATE paperboy SET name='$name',address='$address',phone='$phone',email='$email',papers='$papers',salaryperpaper='$salaryperpaper',totalsalary='$totalsalary',userid='$uid',password='$pwd' WHERE id='$_REQUEST[id]'";
                $data=mysqli_query($con,$upd);
                if(isset($data))
                {
                header("location:viewpaperboy.php");
                }
            }
            $sel="SELECT * FROM paperboy WHERE id='$_REQUEST[id]'";
            $res=mysqli_query($con,$sel);
            $row=mysqli_fetch_array($res);
        ?>
        <h2 class="text-center mt-5">Modify Paper Boy Details</h2>
        <div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
        <form action="" method="post">
        Name <br>
        <input class="form-control" type="text" name="name" value="<?php echo $row['name'];?>"><br><br>
        Address <br>
        <input class="form-control" type="text" name="address" value="<?php echo $row['address'];?>"><br><br>
        Phone <br>
        <input class="form-control" type="number" name="phone" value="<?php echo $row['phone'];?>"><br><br>
        E-mail <br>
        <input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>"><br><br>
        Number of Papers <br>
        <input class="form-control" type="number" name="papers" value="<?php echo $row['papers'];?>"><br><br>
        Salary(per paper) <br>
        <input class="form-control" type="number" name="salary" value="<?php echo $row['salaryperpaper'];?>"><br><br>
        Userid <br>
        <input class="form-control" type="text" name="uid" value="<?php echo $row['userid'];?>"><br><br>
        Password <br>
        <input class="form-control" type="password" name="pwd" value="<?php echo $row['password'];?>"><br><br>
        <input class="btn btn-secondary"  type="submit" name="update" value="UPDATE">
    </form>
        </div>
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
