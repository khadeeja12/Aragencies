<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='USER')
    {    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
</head>
<body>
<?php
include("dbcon.php");
$uid=$_SESSION['username'];
$sel="SELECT * FROM accounts WHERE userid='$uid'";
$data=mysqli_query($con,$sel);
$n=mysqli_num_rows($data);
if($n>0)
{
    
    echo "<table border='2'>
    <tr>
    <th>Month</th>
    <th>Year</th>
    <th>Amount</th>
    <th>Done On</th>
    </tr>";
    while($row=mysqli_fetch_array($data))
    {
    echo "<tr>";
    echo "<td>".$row['month']."</td>";
    echo "<td>".$row['year']."</td>";
    echo "<td>".$row['amount']."</td>";
    echo "<td>".$row['doneon']."</td>";
    echo "</tr>";
    }
    echo "</table>";
}
?>
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