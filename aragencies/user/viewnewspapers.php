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

<h2 class="text-center mt-5">News Paper Details</h2>
<p></p>
<div class="p-5 ">
<table class="table" border="2"> 
<?php
include("dbcon.php");
$sel="SELECT * FROM newspapers";
$data=mysqli_query($con,$sel);
$n=mysqli_num_rows($data);
if($n>0)
{
    echo "
    <tr>
    <th>Name</th>
    <th>Price Per Month</th>
    </tr>";
    while($row=mysqli_fetch_array($data))
    {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "</tr>";
    }
    echo "</table>";
}
?>
</div>

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