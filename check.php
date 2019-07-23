<!--<?php
/*
session_start();
$con = mysqli_connect("localhost","root","","users");
if(!isset($_SESSION['name']))
header('Location: paper.php');


  if (isset($_POST['submit'])) {
  	if(!empty($_POST['quizcheck']))
  	{
  		$cnt = count($_POST['quizcheck']);
  		echo "Out of 9 questions you have attempted ".$cnt;

  		$sel = $_POST['quizcheck'];
        print_r($sel);
         $result = 0;
         $i=1;
  		$q = "select * from questions";
  		$res = mysqli_query($con,$q);

  		while($rows = mysqli_fetch_array($res))
  		{
  			print_r($rows['ans_id']);
  			$checked = $rows['ans_id']==$sel[$i];
          if($checked)
          {
          	$result+=3;
          }
          else
          {
          	$result-=1;
          }
          $i++;
  		}*/

  	//	echo "Your total score is ".$result;
  	//}
  //}
     
     //$name = $_SESSION['name'];
     //$final = "INSERT INTO report (username,totalques,answerscorrect) VALUES ('$name','9','$result')";
   //  $res  = mysqli_query($con,$final);
//?>

-->

<?php

session_start();
$con = mysqli_connect("localhost","root","","users");

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.js"></script>
	<title></title>
    
    <style type="text/css">
    	.animateuse{
    		animation: leelaanimate 2s infinite;
    	}

    	@keyframes leelaanimate
    	{
    		0% {color: red},
    		10% {color: yellow},
    		20% {color: blue},
    		40% {color: green},
    		50% {color: pink},
    		60% {color: orange},
    		80% {color: black},
    		100% {color: brown}
    	}
    </style>



</head>
<body>
   
   <div class="container text-center">
   	<br><br>
   	<h1 class="text-center text-success animateuse text-uppercase"> SPHINX MARCH CHALLANGE </h1>
   	<br><br><br><br>
   	<table class="table text-center table-bordered table-hover">
   		
   		<tr>
   			
   			<th colspan="2" class="bg-dark"><h1 class="text-white">Results</h1></th>

   		</tr>

   		<tr>
   			
   			<td>Questions Attempted</td>

   			<?php
             
             $resultans = 0;
             $wrong=0;
             $right=0;
             if(isset($_POST['submit'])){
             	if(!empty($_POST['quizcheck']))
             	{
             		$checked_count = count($_POST['quizcheck']);


   			?>

            <td>
            	<?php echo "Out of 9 you have attempted ".$checked_count." options "; ?>

            </td>

            <?php
            $selected = $_POST['quizcheck'];
            $q1 = "select * from questions";
            $run = mysqli_query($con,$q1);

            $i=1;
            while($rows = mysqli_fetch_array($run))
            {
                $flag = $rows['ans_id']==$selected[$i];
                if($flag)
                {
                	$resultans+=3;
                	$right++;
                }
                else
                {
                	$wrong++;
                }
                $i++;
            }


            ?>
   		</tr>

   		<tr>
   			<td>Your Total Score </td>
   			<td colspan="2">
   				<?php
                echo "Your score is ".$resultans.".  ";
                echo "No of wrong Questions : ".$wrong."  ";
                echo "No of unattempted questions : ".(9-($right+$wrong));
            }
            else
            {
            	echo "<b>Please Select atleast one option</b>";
            }
        }





   				?>












   			</td>


   		</tr>
            
          <?php

          $name = $_SESSION['name'];
     $final = "INSERT INTO report (username,totalques,answerscorrect) VALUES ('$name','9','$resultans')";
     $res  = mysqli_query($con,$final);

          ?>
   	</table>

   	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
     </div>
</body>
</html>


































