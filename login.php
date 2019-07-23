<?php  
  if(isset($_POST['f']))
  {
  	// echo "<span style=' color:red; '>".$_POST['d']."  ".$_POST['e']."</span>";
    session_start();
    $uname = $_POST['d'];
    $pass = $_POST['e'];
    $conn = mysqli_connect("localhost","root","","users");
    $query = "SELECT * FROM reg WHERE username='$uname' && password='$pass'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0)
    {
    	echo "<p style='position:absolute; top:580px; left:50%;  color:red '>No Matching Result Found</p>";
    } 
    else
    {
    	$data = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $data['username'];
        header('Location:welcome.php');
    }

  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SPHINX-ULTIMATE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	<style type="text/css">
		.lead{
			 position: absolute;   
            left: 50%;
    transform: translateX(-50%);
    color: #fff;
    font-family: Algerian;
    font-size: 60px;
		}
	</style>
</head>
<body>
<div class="info" id="infot">
	<p>Username is your Registeration Number</p>
</div>
<h1 class="lead">SPHINX-ULTIMATE</h1>
<div class="container">
	<h1>LOGIN</h1>
	<form method="POST" action="login.php">
		<div class="tbox">
			<input type="text" placeholder="@username" value="" onmouseover="fun2()" onmouseout="fun()" name="d" required>
		</div>
	    <div class="tbox">
		    <input type="password" placeholder="password" value="" name="e" required>
	    </div>
	    <input class="btn" type="submit" value="SUBMIT" name="f">
	</form>
	<style type="text/css">
		.b3{
	position: relative;
	top: 20px;
	padding-bottom: 30px;
	text-decoration: none;
	color: #fff;
	padding-top: 20px;
	text-decoration: none;
	padding-bottom: 30px;
	text-decoration: none;
}
	</style>
	<a class="b1" href="#">FORGOT PASSWORD</a>
	<a class="b3" href="index.html">HOME</a>
	<a class="b2" href="signup2.php">CREATE AN ACCOUNT</a>
</div>
</body>
</html> 