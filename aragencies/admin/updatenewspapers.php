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
                $price=$_POST['price'];
                $upd="UPDATE newspapers SET name='$name',price='$price' WHERE id='$_REQUEST[id]'";
                $data=mysqli_query($con,$upd);
                if(isset($data))
                {
                header("location:viewnewspapers.php");
                }
            }
            $sel="SELECT * FROM newspapers WHERE id='$_REQUEST[id]'";
            $res=mysqli_query($con,$sel);
            $row=mysqli_fetch_array($res);
        ?>
        <h2 class="text-center mt-5">Modify News Paper Details</h2>
<div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
        <form action=""method="POST">
            Name <br>
            <input class="form-control"  type="text" name="name" value="<?php echo $row['name'];?>" required><br><br>
            Price <br>
            <input class="form-control"  type="text" name="price" value="<?php echo $row['price'];?>" required><br><br>
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
