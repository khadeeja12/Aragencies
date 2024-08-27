<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?> 

<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<div style="margin-left: 100px;  margin-top: 100px;" >
<?php 
include("dbcon.php");
$sel="SELECT * FROM orders WHERE status='APPROVED'";
$res=mysqli_query($con,$sel);
$n=mysqli_num_rows($res);

 if($n>0)
    {?><h2 class="text-center mt-5">Approved Order Details</h2>
    <?php }?>
<p></p>
<div class="p-5 ">
<table class="table" border="2"> 
    <?php
    if($n>0)
    {
    ?>
    <tr>
       <th>ID</th> 
       <th>UserID</th>
       <th>Newspaper</th>
       <th>Placed On</th>
       <th>Starting Month</th>
       <th>Starting Year</th>
       <th>STATUS</th>
    </tr>
  <?php
   if($n>0)
   {
   while($row=mysqli_fetch_array($res))
   {
  ?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['userid'];?></td>
    <td><?php echo $row['papername'];?></td>
    <td><?php echo $row['placedon'];?></td>
    <td><?php echo $row['startmonth'];?></td>
    <td><?php echo $row['startyear'];?></td>
    <td><?php echo $row['status'];?></td></tr>
   <?php
   }
   }
   }
   else
   {
    echo "<h2>NO APPROVED ORDERS</h2>";
   }
   ?>
   </table>
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
