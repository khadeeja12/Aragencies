<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?>
<div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
    <form action="" method="post">
        Name of Newspaper <br>
        <input class="form-control" type="text" name="name" required><br><br>
        Price Per Month <br>
        <input class="form-control" type="text" name="price" required><br><br>
        <input class="btn btn-secondary"  type="submit" name="add" value="ADD">
    </form>
    <?php
    include("dbcon.php");
    if(isset($_POST['add']))
    {
        $name=$_POST['name'];
        $price=$_POST['price'];
        $data=$con->query("INSERT INTO newspapers(name,price) VALUES('$name','$price')");
        if(isset($data))
        {
            echo "Added Succesfully";
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
