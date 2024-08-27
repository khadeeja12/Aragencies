<?php include 'header.php' ?>
<?php
if (isset($_SESSION["role"])) {  
    if($_SESSION["role"]=='USER')
    {    
?>
<div>
<h2 class="text-center mt-5">My News Paper Details</h2>
<div class="p-5 ">
<table class="table" border="2"> 
    <tr> 
       <th>Newspaper</th>
       <th></th>
    </tr>
  <?php
   include("dbcon.php");
   $uid=$_SESSION['username'];
   $sel="SELECT id,papername FROM orders WHERE userid='$uid'";
   $res=mysqli_query($con,$sel);
   $n=mysqli_num_rows($res);
   if($n>0)
   {
   while($row=mysqli_fetch_array($res))
   {
  ?>
  <tr>
    <td><?php echo $row['papername'];?></td>
    <td><a href="cancel.php?id=<?php echo $row['id'];?>" >CANCEL</a></td>
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
    echo "You are not an user";
}
}
else
{
    echo "LOGIN FIRST!!!!";

}
?>