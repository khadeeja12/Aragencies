<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?>
    <?php
            include("dbcon.php");
            $res="APPROVED";
            $upd="UPDATE orders SET status='$res' WHERE id='$_REQUEST[id]'"; 
            $data=mysqli_query($con,$upd); //ordertable updation
            if(isset($data))
            {
            header("location:pendingorders.php");
            }
        ?>
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
