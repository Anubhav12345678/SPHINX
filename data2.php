<?php
$link = new mysqli("localhost","root","","bloggers");
if(!$link)
die ("connection_aborted");
if($_SERVER['REQUEST_METHOD']=="POST")
{
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
if(preg_match("/^[a-zA-Z]*$/", $name)&&filter_var($email, FILTER_VALIDATE_EMAIL){
  $a = "INSERT INTO userdata(name,userid,password,gender) VALUES ('$name','$password','$email','$gender')";
}
?>
