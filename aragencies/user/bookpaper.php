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
    <title>Booking</title>
</head>
<body>
<div style="padding:100px;">
<h2 class="text-center mt-5">Book New  Paper</h2>
<div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
    <form action="" method="post">
        Starting Month <br>
        <select class="form-select"  name="startmonth">
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
        Starting Year <br>
        <input class="form-control"  type="text" value="<?php echo date("Y"); ?>" name="year"><br><br>     
        Newspaper <br>
        <?php
    include("dbcon.php");
    $sel="SELECT name FROM newspapers";
    $data=mysqli_query($con,$sel);
    echo "<select class=form-select name='paper'>";
    while($row=mysqli_fetch_array($data))
    {
        echo "<option>$row[name]</option>";
    }
    echo "</select>";
    ?>
    <br>
    <p></P>
        <input class="btn btn-secondary" type="submit" name="book" value="BOOK">
    </form>
    <?php
    include("dbcon.php");
    if(isset($_POST['book']))
    {
        $uid=$_SESSION['username'];
        $startmonth=$_POST['startmonth'];
        $paper=$_POST['paper'];
        $placedon=date("Y/m/d");
        $startyear=$_POST['year'];
        $ins="INSERT INTO orders(userid,papername,placedon,startmonth,startyear) VALUES('$uid','$paper','$placedon','$startmonth','$startyear')";
        $data=mysqli_query($con,$ins);
        if(isset($data))
        {
            echo "Booked succesfully";
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
</div>
</div>
</body>
</html>