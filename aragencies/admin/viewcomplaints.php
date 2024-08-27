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
<h2 class="text-center mt-5">View Complaint Details</h2>
<p></p>
<div class="p-5 ">
<table class="table" border="2"> 
    <tr>
       <th>ID</th> 
       <th>UserID</th>
       <th>Complaint</th>
       <th>REPLY</th>
       <th>STATUS</th>
    </tr>
  <?php
   include("dbcon.php");
   $sel="SELECT * FROM complaints";
   $res=mysqli_query($con,$sel);
   $n=mysqli_num_rows($res);
   if($n>0)
   {
   while($row=mysqli_fetch_array($res))
   {
  ?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['userid'];?></td>
    <td><?php echo $row['complaint'];?></td>
    <?php
    if($row['status']=="pending")
    {
    ?>
    <td><a href="updatereply.php?id=<?php echo $row['id'];?>" >REPLY</a></td>
    <?php
    }
    else
    {
    ?>
    <td><?php echo $row['reply'];?></td>
    <?php
    }
    ?>
    <td><?php echo $row['status'];?></td></tr>
   <?php
   }
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