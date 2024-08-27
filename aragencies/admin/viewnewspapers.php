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
<h2 class="text-center mt-5">News Paper Details</h2>
<p></p>
<div class="p-5 ">
<table class="table" border="2"> 
    <tr>
       <th>Name</th>
       <th>Price</th>
       <th>UPDATE</th>
       <th>DELETE</th>
    </tr>
  <?php
   include("dbcon.php");
   $sel="SELECT * FROM newspapers";
   $res=mysqli_query($con,$sel);
   $n=mysqli_num_rows($res);
   if($n>0)
   {
   while($row=mysqli_fetch_array($res))
   {
  ?>
  <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><a href="updatenewspapers.php?id=<?php echo $row['id'];?>" >UPDATE</a></td>
    <td><a href="deletenewspapers.php?id=<?php echo $row['id'];?>" >DELETE</a></td>
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
