<?php
 if(isset($_POST['d']))
 {
    if($_POST['b']!=$_POST['c'])
    {
    	echo "<p style='position:absolute; top:580px; left:45%; color:red;'>Passwords Do Not Match!</p>";
    }
    else
    {
    	 $name = $_POST['a'];
         $pss = $_POST['b'];
         // $cnfpss = $_POST['c'];
        // echo $name."  ".$pss."  ".$cnfpss;
          // include 'connection.php';
        // $con=  mysql_connect("localhost","root","");
        //  mysql_select_db("users");
         $con = mysqli_connect("localhost","root","","users");
    	 $query = "SELECT * FROM reg WHERE username='$name'";
         $res = mysqli_query($con,$query);
         if(mysqli_num_rows($res))
         {
 	       echo "Sorry, The Username's Already Taken<br><a href='signup2.php'>Click here to go Back!</a>";
         }
         else
        {
 
         session_start();
          $query2 = "INSERT INTO reg(username,password) VALUES('$name','$pss')";
          mysqli_query($con,$query2);
         header('Location:login.php');
 
        }
    }
 }  
?>



<!DOCTYPE html>
<html>
<head>
	<title>Sphinx Registeration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script type="text/javascript">
		function fun()
		{
			document.getElementById("infot").style.display = "none";
		}
		function fun2()
		{
			document.getElementById("infot").style.display = "block";
		}
	</script>
</head>
<body>
<div class="info" id="infot">
	<p>Username is your Registeration Number</p>
</div>
   <div class="signupbox">
   	<img src="images/avatar1.png" class="avatar">
     <h1>Sign Up Here</h1>
     <form method="POST" action="signup2.php">
     	<p>Username</p>
     	<input type="text" name="a" placeholder="@username" size="30dp" required onmouseover="fun2()" onmouseout="fun()">
     	<p>Password</p>
     	<input type="password" name="b" placeholder="@password" size="30dp" required>
     	<p>Confirm Password</p>
     	<input type="password" name="c" required><br><br>
     	<input type="submit" name="d" value="SUBMIT"><br>
     	<a href="login.php">HAVE AN ACCOUNT?</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index.html">HOME</a>&nbsp;&nbsp;&nbsp;
        <a href="administerater.php">ADMIN</a>
     </form>
   </div>
</body>
</html>