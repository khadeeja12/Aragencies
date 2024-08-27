<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='USER')
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
<h2 class="text-center mt-5">Paper Boy Details</h2>
<p></p>
<div class="p-5 ">
<table class="table" border="2">
<?php
include("dbcon.php");
$sel="SELECT * FROM paperboy";
$data=mysqli_query($con,$sel);
$n=mysqli_num_rows($data);
if($n>0)
{
    echo "
    <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>E-mail</th>
    </tr>";
    while($row=mysqli_fetch_array($data))
    {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "</tr>";
    }
    echo "</table>";
}
?>
</div>
<?php
}
else
{
    echo "You are not an user";
}
}
else
{
    echo "LOGIN FIRST!!!!";

}
?>
</body>
</html>