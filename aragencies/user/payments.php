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
    <title>Payment</title>
</head>
<body>
    <form action="" method="post">
        Month <br>
        <select name="month">
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
        </select><br><br>
        Year <br>
        <input type="text" value="<?php echo date("Y"); ?>" name="year"><br><br>
        Amount <br>
        <input type="text" name="amount"><br><br>
        <input type="submit" name="pay" value="PAY NOW">
    </form>
    <?php
    include("dbcon.php");
    if(isset($_POST['pay']))
    {
        $uid=$_SESSION['username'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        $amount=$_POST['amount'];
        $doneon=date("Y/m/d");
        $ins="INSERT INTO accounts(userid,month,year,amount,doneon) VALUES('$uid','$month','$year','$amount','$doneon')";
        $data=mysqli_query($con,$ins);
        if(isset($data))
        {
            echo "Payment succesfull";
        }
        else
        {
            echo "Try again";
        }
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