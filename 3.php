
<html>
<?php
echo "welcome";

$fname=$_POST['fname'];
       
$dbusername="root";

$dbpassword="root";


$fname=$_POST['fname'];


$lname=$_POST['lname'];
$address=$_POST['addr'];

$email=$_POST['email'];
$phn=$_POST['phn'];
$password=$_POST['password'];

$con = mysqli_connect("localhost","root","root","grocery");
echo "connecting";
if($con->connect_error)
{ 
echo "welcome";
die("connection failed :".$con->connect_error);
}
else
{echo "connected successfully";
}

$sql="insert into user values('$fname','$lname','$email','$phn','$address','$password')";
if($con->query($sql)===true)
{
echo "new record created";
}
else
{
echo "error: ".$sql."<br>".$conn->error;
}
$con->close();
?>

</html>
           
 
