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
<h2 class="text-center mt-5">User Details</h2>
<p></p>
<div class="p-5 ">
<table class="table" border="2"> 
<tr>
    <th>Name</th>
    <th>User ID</th>
    <th>Address</th>
    <th>Phone</th>
    <th>E-Mail</th>
    <th>Newspaper</th>
    <th>DELETE</th>
</tr>
  <?php
   include("dbcon.php");
   $sel="select orders.id as orderid,user.name,orders.userid,user.address,user.phone,user.email,orders.papername from orders inner join user on orders.userid=user.userid";
   $res=mysqli_query($con,$sel);
   $n=mysqli_num_rows($res);
   if($n>0)
   {
   while($row=mysqli_fetch_array($res))
   {
  ?>
  <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['userid'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['papername'];?></td>
    <td><a href="deleteuser.php?id=<?php echo $row['orderid'];?>">DELETE</a></td>
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

</body>
</html>