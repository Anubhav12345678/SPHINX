<?php
//if(!isset($_SESSION['name']))
//{
//header('Location: login.php');
//}
?>




<!DOCTYPE html>
<html>
<head>
	<title>SPHINX-ULTIMATE</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- 	<link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">-->
<!-- 	<link rel="stylesheet" type="text/css" href="magnific-popup.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
</head>
<body>
   <?php
    session_start();
    $con = mysqli_connect("localhost","root","","users");

   ?>
   <div class="container">
      
      <br><h1 class="text-center text-primary">SPHINX MARCH CHALLANGE </h1><br>


      <h2 class="text-center text-success"> Welcome <?php  echo $_SESSION['name']; ?></h2> <br>
<div class="col-xl-8 col-md-8 col-sm-8 col-lg-8 m-auto d-block">
      <div class="card">

       <h3 class="text-center card-header"> Welcome <?php echo $_SESSION['name']; ?>, you have to select only one out of four . Best of Luck :) </h3>
     
      </div><br>

   <form method="POST" action="check2.php">
      
      <?php
      for($i =1; $i<6;$i++)
      {
      $q = "SELECT * FROM questions WHERE qid=$i";
      $res = mysqli_query($con,$q);

      while ($rows = mysqli_fetch_array($res)) 
                      {
      	?>
       
                         <div class="card">
       	                   <h4 class="card-header"><?php echo "Q".$i." ".$rows['qtext']; ?>  </h4>
         

                         <?php
                          
                          $q = "SELECT * FROM answers WHERE ans_id=$i";
                          $res = mysqli_query($con,$q);

                          while ($rows = mysqli_fetch_array($res)) 
                          {

                         ?>
                         
                         <div class="card-body">   <!-- card body having all the options type="radio" input tags-->
                         	
                         	<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
                         	<?php echo $rows['answer'];  ?>


                         </div>

       
                         


                              
      	                   <?php
                          }
                       }
       }




          ?>

          <input type="submit" name="submit" value="SUBMIT" class="btn btn-success m-auto">
  </form>
                         </div>
</div>
<br><br>




    <div class="m-auto d-block">
    <a href="logout.php" class="btn btn-primary"> LOGOUT </a>
    </div><br>

    <div>
    	<h5 class="text-center">©SPHINX-ULTIMATE</h5>
    </div><br><br>



   </div>


       <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>