<?php
if(isset($_POST['l']))
{
$con = mysqli_connect("localhost","root","","users");
$qt = $_POST['g'];
$oa = $_POST['h'];
$ob = $_POST['j'];
$oc = $_POST['i'];
$od = $_POST['k'];
$ca = $_POST['m'];
// echo $qt."  ".$oa."  ".$ob."  ".$oc."  ".$od;
$query = "SELECT * FROM questions WHERE qtext='$qt'";
$resukt = mysqli_query($con,$query);
if(mysqli_num_rows($resukt)>0)
{
   echo "Sorry , Question alredy present!<br><a href='adminpanel.php'>Click here to go back</a>";
}
else
{
	$query2 = "INSERT INTO questions(qtext,option_a,option_b,option_c,option_d,ca) VALUES('$qt','$oa','$ob','$oc','$od','$ca')";
	mysqli_query($con,$query2);
	?>
	<script type="text/javascript">
		alert('Went to database!');
	</script>
	<?php
	header('Location:adminpanel.php');
}



}


?>