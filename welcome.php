



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

   <style type="text/css">
    body
    {
    	margin-left: 10px;
    }
   	.logout
   	{
   		height: 40px;
   		width: 80px;
   	}
    
    .use
    {
    	text-decoration: none;
    	color: brown;
    	text-decoration-style: none;
    	padding-right: 44px;
    }
    
    .psubmenu
    {
    	position: absolute;
    	top: 155px;
    	left: 70%;
    	font-size: 15px;
    	background: white;
    	color: white;
    }

    .psubmenu ul li a
    {
    	text-decoration: none;
    	color: white;
    	z-index: 9999;
    }

    .use:hover
    {
    	background: brown;
    	border-radius: 5px;
    	color: white;
    }

     .primary-color
     {
    	color: #d3325f;
    }

     .header-link 
    {
    	position: absolute;
    	display: inline-block;
    	bottom: 5%;
    	left: 50%;
    	background:#1F79E5;
    	border-radius: 10px;
    	transition: all 2s ease;
    	animation: fromBottom;
    	animation-duration: 4s;
    	animation-iteration-count: infinite;
    }
    .header-link:hover
    {
    	color: #242424;
    }

     @keyframes fromBottom 
    {
    	0%{
    		transform: translateY(-10px);
    	}
    	50%{
    		transform: translateY(10px);
    	}
    	100%{
    		transform: translateY(-10px);
    	}
    }

   </style>

   <script type="text/javascript">
   	
     function fun()
     {
     	document.getElementById("u").style.display = "block";
     	document.getElementById("u").style.background = "brown";
     	document.getElementById("u").style.color = "white";
     	// document.getElementById("u").style.z-index = "9999"; 
     }
     function fun2()
     {
     	document.getElementById("u").style.display = "none";

     	// document.getElementById("u").style.background = "white";
     }

   </script>
</head>
<body>
     <!-- <section id="header">
     	<div class="container">
     		<div class="row">
     			<div class="col">
     			</div>
     		</div>
     	</div>
     </section> -->
     <!--Genius is nothing but a greater aptitude for patience-->
     <style type="text/css">
       .mybutton
       {
        height: 50px;
       }
     </style>
     <div class="container-fluid info p-3" id="top-icons">
        <div class="row" style="box-shadow: 4px 0px;">
        	<div class="col">
        		<div class="info-icons p-2">
        		  <a href="#" class="mr-2 primary-color"><i class="fa fa-facebook" style="font-size: 25px;"></i></a>
        		  <a href="#" class="mr-2 primary-color"><i class="fa fa-instagram" style="font-size: 25px;"></i></a>
        		  <a href="#" class="mr-2 primary-color"><i class="fa fa-twitter" style="font-size: 25px;"></i></a>
        		  <a href="#" class="mr-2 primary-color"><i class="fa fa-yelp" style="font-size: 25px;"></i></a>
        		</div>
        		<h2 class="primary-color p-2 text-capitalize">Genius is nothing but a greater aptitude for patience</h2>
        	</div>
        	<h4 class="user"><?php session_start(); echo "Hello, ".$_SESSION['name'];  ?></h4>&nbsp;&nbsp;&nbsp;&nbsp;
        	<a href="logout.php" class="btn btn-lg btn-outline-secondary mybutton">LOGOUT</a><br>
        	<!-- <a href="#"><i class="fa fa-arrow"></i>Practise</a> -->
        	<!-- <a href="#"><i class="fa fa-arrow"></i>Practise</a> -->
        </div>
             <!-- <a href="#" class="use" style="position: absolute; left: 70%; font-size: 25px;" onmouseover="fun()" onmouseout="fun2()"><i class="fa fa-right"></i>Practice</a><a href="#" style="position: absolute; left: 80%; font-size: 25px;" class="use"><i class="fa fa-right"></i>Compete</a><a href="#" style="position: absolute; left: 90%; font-size: 25px;" class="use"><i class="fa fa-right"></i>Discuss</a>
             <div class="psubmenu" >
                 <ul>
                 	<li>Code</li>
                 	<li>Beginner</li>
                 	<li>Easy</li>
                 	<li>Medium</li>
                 	<li>Hard</li>
                 </ul>
             </div> -->
             <style type="text/css">
              #compete
              {
                position: absolute;
                top: 22%;
                left: 80%;
               display: none;
               text-decoration: none;

              }
              #compete a
              {
                text-decoration: none;
                color: brown;
              }
             </style>
             <script type="text/javascript">
              function fun3()
              {
               document.getElementById("compete").style.display = "block";
              }
              function fun4()
              {
                document.getElementById("compete").style.display = "none";
              }
             </script>
             <img src="images/sphinx.jpg" style="position: absolute; left: 5%;">
             <a href="#" class="use" style="position: absolute; left: 70%; font-size: 25px;" onmouseover="fun()" onmouseout="fun2()"><i class="fa fa-right"></i>Practice</a>
             <a href="paper.php" style="position: absolute; left: 80%; font-size: 25px;" class="use" id="usercompete" onmouseover="fun3()" onmouseout="fun4()"><i class="fa fa-right"></i>Compete
             </a>
             <div id="compete">
            <ul onmouseover="fun3()" onmouseout="fun4()">
               <li><a href="paper.php">March Challange</a></li>
               <li><a href="paper2.html">April Challange</a></li>
             </ul>
           </div>
             <a href="#" style="position: absolute; left: 90%; font-size: 25px;" class="use"><i class="fa fa-right"></i>Discuss</a>
             <div class="psubmenu" id="u" >
                 <ul>
                 	<li><a href="#" onmouseover="fun()" onmouseout="fun2()">Tech</a></li>
                 	<li><a href="#" onmouseover="fun()" onmouseout="fun2()">Verbal</a></li>
                 	<li><a href="#" onmouseover="fun()" onmouseout="fun2()">Logical</a></li>
                 	<li><a href="#" onmouseover="fun()" onmouseout="fun2()">Mathematical</a></li>
                 	<li><a href="#" onmouseover="fun()" onmouseout="fun2()">Mixed</a></li>
                 </ul>
             </div>
        <hr>

     </div>
     <br><br><br>
     <a href="#exam" class="btn header-link primary-color"><button>Scroll Down</button></i></p></a
     <div class="container-fluid">
       <div class="row">
       	<div class="col">
       		<p style="background: #C8DAE2; color: black; padding-left: 15px; padding-top: 10px; padding-bottom: 15px;">ANNOUNCEMENTS</p>
       		<p><b>As <em>SPHINX</em> is celebrating 10 years of guiding great minds, organizers have some extra special prizes for the participants:    </b></p>
       		<br><br>
       		<b>For Indian participants: </b><br>
       		<p>Top 20 from Ranklist will recieve 300 laddus</p><br>
       		<b>For Global participants: </b><br>
       		<p>Top 20 from Ranklist will recieve 300 laddus</p><br>
       		<b>SPHINX Certification Exam</b><br>
       		<p>-Randomly selected 10 participants worldwide will get the opportunity to avail the <em>SPHINX</em> Certification Exam free of charge. Additionally each participant gets the privilage to nominate 10 other users who too will get the opportunity to give the <em>SPHINX</em> Certification Exam free of charge.</p>
       		<p>-This is applicable for <em>SPHINX</em> Certification Exam which will be conducted after 31st march 2019.</p>
       		<p>-Participants interested in availing the certification discount must fill the form <a href="https://goo.gl/wrvdEi">https://goo.gl/wrvdEi</a> by midnight of 24th March, 2019</p>
       	</div>
       </div>

       <div class="row">
       	  <div class="col">
       	  	<p style="background: #C8DAE2; color: black; padding-left: 15px; padding-top: 10px; padding-bottom: 15px;">CONTEST DETAILS</p>
       	  </div>
       </div>
       <div class="row"> 
       	  <b style="padding-left: 15px;">Sponsored by Facebook</b>
          <img src="images/fb.jpg">
       </div>
       <br><br>
       <div class="row">
         <div class="col">
         	<p style="font-size: 20px"><b>Internships at Facebook</b></p>
         	<p style="font-size: 18px">Facebook is looking for Backend , Android , Machine Learning and Web Developer Interns. This is an exclusive internship opportunity open for all fnal year students (who are not placed ) who want to get exposure of an accelerated technocrat environment before joining the big officials. </p>
         	<Button style="background: #1F79E5; color: white;">Apply For Internships</Button>
         </div>
         <div class="col">
         	<p style="font-size: 20px"><b>Full time Roles at Facebook</b></p>
         	<p style="font-size: 18px">Facebook is looking for full time Backend , Android , Machine Learning Engineers and Web Developers to be a part of their team . These positions are open for all professionals accross the globe.</p>
         	<Button style="background: #1F79E5; color: white;">Apply For Full time Roles</Button>
         </div>

       </div>
       <br><br>
       <p style="font-size: 20px;"><b>About Facebook</b></p>
       <p><em>Facebook, Inc.</em> is an American online Social Media and Social Networking Service Company. It is Based in Menlo Park, California. It was founded by Mark Zuckerberg along with a fellow Harvard college students and roommates. It is considered as one of the  four tech giants along with <em>Amazon</em>, <em>Apple</em> and <em>Google</em> . The founders initially limited the websites membership to Harvard Students and subsequently to Columbia, Stanford and Yale students. Facebook held its <em>initial public offering</em> in February 2012, valuing the company at $104 billion, the largest valuation for a to date for a newly listed company. It makes most of its revenuefrom advertisements that appear onscreen. </p>
       <hr>
       <p>New users are requested to go through the below information to know more about the contest</p>
       <hr>
       <br>
       <div class="row">
       	<div class="col">
       		<p style="font-size: 20px;"><b><em>SPHINX:</em> a platform for enhancing aptitude skills</b></p>
       		<p style="font-size: 18px;"><em>SPHINX</em> was created as a platform to help individuals make it big in logics, reasoning, verbal and other skills required for crackind the hardest of interviews. At sphinx we work hard to revive the geek in you by hosting a MAE(mini aptitude exam) at the start of the month and another smaller one's in the middle.  </p>
       	</div>
       </div>
       <hr><br>
       <div class="row">
       	<div class="col">
       		<p style="font-size: 20px;"><b>About Sphinx March Challange</b></p>
       		<p style="font-size: 18px;">Sphinx March Challange is a two and a half hour aptitude exam where you can show off your logical, verbal, and mathematical skills.</p>
       	</div>
       </div>
       <hr><br>
       <div class="row">
       	<div class="col">
       		<p style="font-size: 20px;"><b>Contest Details</b></p>
       		<ul>
       			<li><b style="font-size: 20px">Duration: </b>2.5 Hours</li>
       			<br>
       			<li><b style="font-size: 20px">Start Date: </b>Sunday 24th March, 2019 at 21:30 HRS (IST)</li>
       			<br>
       			<li><b style="font-size: 20px">End Date: </b>Monday 25th March, 2019 at 00:00 HRS (IST)</li>
       			<br>
       			<li><b style="font-size: 20px;">Marking Scheme: </b>Total questions will be 30. +3 marks will be rewarded for each correct answer -1 mark will be rewarded for each wrong answer. No marks will be awarded for unattempted question.</li><br>
       			<li>Check your timezone <a href="#">here</a></li>
       		</ul>
       	</div>
       </div>
       <hr>
       <div class="row">
       	<div class="col">
       		<p style="font-size: 20px;"><b>Eligibility Criteria: Anyone with a knack of learning :P</b></p>
       		<p style="font-size: 18px">Our contests are open to all individuals across the globe</p>
       	</div>
       </div>
       <hr><br>
       <div class="row">
       	<div class="col">
       		<p style="font-size: 20px"><b>What's in it for you</b></p>
       		<p style="font-size: 18px">The idea behind these exams is we want you to learn while competing . Also we believe that it is all right to refer to tutorials books and other materials learn a concept and apply the same to solve a question during the contest. The dividing line between leaned and begginers may seem to be thin but may be captured by the spirit of learning.If whatever you are doing is making you learn while you do so,we tend to belive that it is alright. However all the participants are expected to abide to </p>
       		<button style="background: #1F79E5; color: white;">SPHINX Code of Conduct</button>
       		<br>
       		<p>Not just that as a token of motivation we also give away goodies to winners of the contest.</p><br>
       		<h4>For Indians</h4>
       		<ul><li>Top 5 from the Indian ranklist will win Sphinx Laddus.</li></ul>
       		<h4>For Global</h4>
       		<ul><li>Top 5 from the ranklist will win Sphinx Laddus.</li></ul><br>
       		<p>With Sphinx laddus winners can claim cool SPHINX goodies. Know more <a href="#">here.</a> However our sole intension lies in making our users learn new concepts while competing.</p>
       	</div>
       </div>
       
       









     </div>


      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>