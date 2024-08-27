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
<h2 class="text-center mt-5">News Paper Boy Deails</h2>
<p></p>
<div class="p-5 ">
<table class="table" border="2"> 
    <tr>
       <th>ID</th> 
       <th>Name</th>
       <th>Address</th>
       <th>Phone</th>
       <th>E-Mail</th>
       <th>Total Papers</th>
       <th>Salary Per Paper</th>
       <th>Total Salary</th>
       <th>UserID</th>
       <th>Password</th>
       <th>UPDATE</th>
       <th>DELETE</th>
    </tr>
  <?php
   include("dbcon.php");
   $sel="SELECT * FROM paperboy";
   $res=mysqli_query($con,$sel);
   $n=mysqli_num_rows($res);
   if($n>0)
   {
   while($row=mysqli_fetch_array($res))
   {
  ?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['papers'];?></td>
    <td><?php echo $row['salaryperpaper'];?></td>
    <td><?php echo $row['totalsalary'];?></td>
    <td><?php echo $row['userid'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><a href="updatepaperboys.php?id=<?php echo $row['id'];?>" >UPDATE</a></td>
    <td><a href="deletepaperboys.php?id=<?php echo $row['id'];?>" >DELETE</a></td>
   </tr>
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
