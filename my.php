<html>

<?php



 $phn = $_POST['phn'];
  $password = $_POST['password'];

$con = mysqli_connect("localhost","root","root","grocery");


     $sql = "select * from user where phn = '$phn' AND password = '$password';" ;
     $result = mysqli_query($con,$sql);
    
     
     if (mysqli_num_rows($result) == 1) 
   {while($row = mysqli_fetch_assoc($result))
    {
      echo "welcome ".$row["fname"];
      } }
       else 
      {
        echo "Invalid credentials";
      }

?>


</html>
