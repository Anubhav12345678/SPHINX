<?php
if(isset($_POST['submit']))
{
	session_start();
	$CON = mysqli_connect("localhost","root","","users");
    $admin_name = $_POST['m'];
    $admin_pss = $_POST['n'];
	$q5 = "select * from adminlogin where username=$admin_name && password = $admin_pss";
    $query = mysqli_query($CON,$q5);
    if(mysqli_num_rows($query))
    {
    	echo "<span style='color : red; position:absolute; top:50%; '>username or password incorrect</span>";
    }
    else
    {
    	$data = mysqli_fetch_array($query);
    	$_SESSION['adminname'] = $data['username'];
    	header('Location: adminpanel.php');
    }
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN_PANEL</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- 	<link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">-->
<!-- 	<link rel="stylesheet" type="text/css" href="magnific-popup.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
    <style type="text/css">
    	/*center
    	{
    		position: absolute;
    		top: 50%
    		left: 50%;
    		transform: translateX(-50%) translateY(-50%);
    	}*/
    	.input
    	{
    		border: none;
    		border-bottom: 1px solid black;
            outline: 0;
            text-align: center;
    	}
    </style>
</head>
<body>
     <center><div class="container-fluid m-auto d-block">
     	<div class="row">
     		<form method="POST" action="administerater.php">
     			<div class="card">
     			<h1 class="card-header"> ADMIN_LOGIN </h1>
     			<div class="card-body">
     				<h4> USERNAME </h4>
     				<input type="text" name="m" placeholder="@username" class="input" required><br><br>
     				<h4> PASSWORD </h4>
     				<input type="password" name="n" placeholder="@password" class="input" required><br><br><br>
                    <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
     			</div>
     		    </div>
     		</form>
     	</div>
     </div></center>
         <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>