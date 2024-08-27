<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?>
<!-- home open -->
<div style="background-image: url('../images/coffeepaper.jpg');background-size:cover;color:white">
<div style="background-color: rgb(0,0,0,0.465);padding:400px;">
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