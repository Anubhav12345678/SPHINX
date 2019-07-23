<?php
session_start();
if(!isset($_SESSION['name']))
{
  header('Location: signup2.php');
}
 mysql_connect("localhost","root","");
mysql_select_db("users");


?>

<!DOCTYPE html>
<html>
<head>
	<title>SPHINX_ULTIMATE</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- 	<link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">-->
<!-- 	<link rel="stylesheet" type="text/css" href="magnific-popup.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
</head>
<body>
    <div class="container-fluid mx-auto d-block">
    	<h1>SPHINX MARCH CHALLANGE</h1>
        <div class="row">
           
         <table class="text-centered text-hover table table-bordered">
              <tr>
              	<td colspan="2"> RESULTS </td>
              </tr>
              <?php
                $right = 0;
                $wrong=0;
                $score=0;
                $sel = $_POST['quizcheck'];
                $i = 1;
                $q2 = "select * from questions";
                $res = mysql_query($q2);

                while($rows = mysql_fetch_array($res))
                {
                	$flag = $rows['ans_id']==$sel[$i];
                	if($flag)
                	{
                		$right++;
                		$score+=3;
                	}
                	else
                	{
                		$wrong++;
                	}
                   
                }

                $uid = $_SESSION['name'];
                $q4 = "INSERT INTO report(username,totalques,answercorrect) VALUES('$uid','5','$right')";
                $result2 = mysql_query($q4);
              ?>
               <tr>
               	 <td>ATTEMPTED: </td><td> <?php echo $right+$wrong; ?> </td>
               </tr>
               <tr>
               	<td>RIGHT: </td><td> <?php echo $right; ?> </td>
               </tr>
               <tr>
               	<td>WRONG: </td><td> <?php echo $wrong; ?> </td>
               </tr>
               <tr>
               	<td>SCORE: </td><td> <?php echo $score; ?> </td>
               </tr>

         	
         </table>
        </div>
         <h4 class="mx-auto d-block">LEADERBOARD</h4>
        <div class="row">
        	<table class="table table-bordered text-hover text-centered">
        		<td> S.No. </td><td> UserName </td><td> Score</td> 
        		<?php
                 $q3 = "SELECT * FROM `report` ORDER by answercorrect DESC";
                 $res = mysql_query($q3);
                 $x=1;
                 while($rows = mysql_fetch_array($res))
                 {  
                 	echo "<tr>";
                 	echo "<td>".$x."</td>"."<td>".$rows['username']."</td>"."<td>".$rows['answercorrect']."</td>";
                 	echo "</tr>";
                 	$x++;
                 }




        		?>


        	</table>


        </div>
    </div>

     <div class="mx-auto d-block">
    <a href="logout.php" class="btn btn-primary"> LOGOUT </a>
    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>