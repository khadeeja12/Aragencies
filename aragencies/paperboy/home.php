<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='PAPERBOY')
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
    echo "You are not a paperboy";
}
}
else
{
    echo "LOGIN FIRST!!!!";

}
?>