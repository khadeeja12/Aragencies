<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?>
<div>
<?php
            include("dbcon.php");
            $orderid=$_REQUEST['id'];
            $del="DELETE FROM orders WHERE id=$orderid";
            echo $del;
            $res=mysqli_query($con,$del);
            if(isset($res))
            {
            header("location:viewusers.php");
            }
        ?>
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
