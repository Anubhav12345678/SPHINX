<?php 
$link = new mysqli("localhost","root","","bloggers");
if(!$link)
die ("connection_aborted");
else if($_SERVER['REQUEST_METHOD']=="POST")
{
	session_start();
$name = $_POST['name'];
$_SESSION['name'] = $name;
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$a = "INSERT INTO userdata (name,userid,password,gender) VALUES ('$name','$email','$password','$gender'); ";
$link->query($a);
$mssg = "Hello..."."Greetings from team Zarviss"."We are happy to inform you that you have succesfully created an account on AGT.xyz."."Feel free to explore the website for further information.."."Start blogging and beautify your writing skills."."In case if you have any queries,feel free to contact us,we will be glad to help you!"."Best wishes,"."Team Zarviss";
mail($email, "Greetings, ".$name, $mssg, 'From: Zarviss@AGT.xyz');
header('Location:agt.php');
}
?>
