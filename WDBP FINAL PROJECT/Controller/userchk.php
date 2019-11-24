<?php
include("config.php");
session_start();
if(isset($_POST['submit'])){
$user=$_POST['uname'];
$pass=$_POST['pass'];
$sql="SELECT * FROM signupi WHERE uname='$user' AND pass='$pass' ";
$result=mysqli_query($myconn,$sql);
$count=mysqli_num_rows(mysqli_query($myconn,$sql));
if($count===1)
{
	$_SESSION['uname']=$user;
	header("location:index.php?uname='.$user.'");
}
else
	{
		echo'wrong password & username <a href="../view/logini.php"> Please try again</a>';
	}
}
?>