<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- 	<link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">-->
<!-- 	<link rel="stylesheet" type="text/css" href="magnific-popup.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style type="text/css">

    body
    {
    	background: #13B2F3;
    }

	*{
		margin: 0px;
		padding: 0px;
	}

	#sidebar {
      position: fixed;
      width: 200px;
      height: 100%;
      background: #151719;
      left: -200px;
      transition: all 500ms linear;
      z-index: 9999;
	}

   /* #sidebar.active {
    	left: 0px;
    }*/
    
	#sidebar ul li {
		color: rgba(230,230,230,0.9);
		list-style: none;
		padding: 15px 10px;
		border-bottom: 1px solid rgba(100,100,100,0.3);
	}

	#sidebar .toggle-btn {
		position: absolute;
		top: 20px;
		left: 230px;
	}

	#sidebar .toggle-btn span {
       display: block;
       width: 30px;
       height: 5px;
       background: #151719;
       margin: 5px 0px;
	}

	#ta
	{
		box-shadow: 2px 2px;
		height: 140px;
		width: 1400px;
	}
  
    .option
    {
    	border: 0;
    	border-bottom: 1px solid black;
    	background: transparent;
    	padding: 15px 10px;
    }

    .done
    {
    	position: absolute;
    	top: 90%;
    	left: 90%;
    	border: 2px solid black;
    	transition: all 2s ease;
    	padding: 5px 15px;
    }

    .done:hover
    {
    	transform: rotate(20deg);
    }

    .position
    {
    	position: absolute;
    	right: 0%;
    }
</style>

<script type="text/javascript">
	
    function togglesidebar()
    {
    	var x = document.getElementById('sidebar');
    	if(x.style.left==="-200px")
    	{
    		x.style.left = "0px";
    	}
    	else
    	{
    		x.style.left = "-200px";
    	}
    	console.log("kuch nahi hua");
    }

</script>

</head>
<body>
	<center style="font-family: 'Pacifico',cursive; font-size: 40px;">ADMIN PANEL</center> <a href="logout.php" class="btn btn-primary position"> LOGOUT </a>   <br>
	<div id="sidebar">
		<div class="toggle-btn" onclick="togglesidebar()">
			<span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
        	<li>Add A Question</li>
        	<li>Remove a Question</li>
        	<li>Remove a User</li>
        	<li>View Feedback</li>
        </ul>


	</div>
    
    <section id="questinadd">
    	<div class="container">
    		<form method="POST" action="inner.php">
    		<div class="row">
    			<textarea id="ta" name="g"></textarea>
    		</div><br><br><br>
    		<div class="row">
                <div class="col">
                	 <input type="text" name="h" class="option" placeholder="Option(A)"><br><br>
                	 <input type="text" name="i" class="option" placeholder="Option(C)"><br><br>
                </div>
                <div class="col">
                	 <input type="text" name="j" class="option" placeholder="Option(B)"><br><br>
                	 <input type="text" name="k" class="option" placeholder="Option(D)"><br><br>
                </div>
    	    </div>
    	    <div class="row">
    	    	<input type="text" name="m" placeholder="Correct option">
    	    </div>
    	    <input type="submit" name="l" value="SUBMIT" class="done">
    	    </form>
    	</div>




    </section>


      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>