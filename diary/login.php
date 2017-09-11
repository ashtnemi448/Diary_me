<?php
	session_start();
?>
<?php
	if(!isset($_POST['email']) || !isset($_POST['password']))
		header("refresh:0,url=index.html");
	else
	{
		$email=$_POST["email"];
		$password=$_POST["password"];
		$con=mysqli_connect("localhost","root","password","diary");
		$query="SELECT id from users where username='$email' and password='$password'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)==1)
		{
			while($row = $result->fetch_assoc())
			{
				$id = $row['id'];
			}
			$_SESSION['id'] = $id;
			header("refresh:0,url=homepage.html");
		}
		else
			header("refresh:0,url=index.html");
	}
?>



