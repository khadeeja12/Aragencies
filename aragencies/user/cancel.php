<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='USER')
    {    
?>
<div>
<?php
            include("dbcon.php");
            $del="DELETE FROM orders WHERE id='$_REQUEST[id]'";
            $res=mysqli_query($con,$del);
            if(isset($res))
            {
            header("location:viewpapers.php");
            }
        ?>
</div>
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
