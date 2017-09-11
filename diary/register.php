<?php
	$email=$_POST["email"];
	$password=$_POST["password"];
	$con=mysqli_connect("localhost","root","password","diary");
	$query="INSERT into users(username,password) values ('$email','$password')";
	if(mysqli_query($con,$query))
	{
		echo "Data Inserted";
		header("refresh:0,url=index.html");
	}
	else
		echo "wrong";
?>