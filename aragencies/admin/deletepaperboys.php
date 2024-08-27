<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?>
<div>
<?php
            include("dbcon.php");
            $del="DELETE FROM paperboy WHERE id='$_REQUEST[id]'";
            $res=mysqli_query($con,$del);
            if(isset($res))
            {
            header("location:viewpaperboy.php");
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
