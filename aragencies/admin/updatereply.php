<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='ADMIN')
    {    
?>
    <?php
            include("dbcon.php");
            if(isset($_POST['send']))
            {
                $reply=$_POST['reply'];
                $res="RESOLVED";
                $upd="UPDATE complaints SET reply='$reply',status='$res' WHERE id='$_REQUEST[id]'";
                $data=mysqli_query($con,$upd);
                if(isset($data))
                {
                header("location:viewcomplaints.php");
                }
            }
            $sel="SELECT * FROM complaints WHERE id='$_REQUEST[id]'";
            $res=mysqli_query($con,$sel);
            $row=mysqli_fetch_array($res);
        ?>
                <h2 class="text-center mt-5">Add Complaint Reply</h2>
<div class="d-flex justify-content-center align-items-center;">
    <div class="border border-secondary border-2 p-5 mt-5">
        <form action="" method="post">
        Complaint <br>
        <input class="form-control" type="text" name="complaint" style="height:100px" value="<?php echo $row['complaint'];?>"><br><br>
        Reply <br>
        <input class="form-control" type="text" name="reply" style="height:100px"><br><br>
        <input class="btn btn-secondary" type="submit" name="send" value="SEND">
    </form>
        </div>
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
