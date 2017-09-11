

<?php session_start();?>

<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Transitive by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
			<script type="text/javascript" src="ckeditor.js"></script></script>
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="index.css">
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</head>
	<body>

	
		

		<!-- Four -->
			<section id="four" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2>Lets Go!!!</h2><br>
						<p>
														<div >
							
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">
							<div class="ui input focus">
							  <input type="text" name="date" placeholder="Like 21 july 2k17">
							</div>
							<div class="ui input focus">
							  <input type="text" name="title" placeholder="Title">
							</div><br>
							</div>


							 <textarea class="ckeditor" cols="110" id="editor1" name="editor1" rows="5"></textarea><br>
							 <input type="submit" name="submit" class="btn btn-primary" style="margin-left: 50%;margin-right: 50%" value="submit">
							</form>




							<script>
							  CKEDITOR.replace( 'editor1' );
							</script>
								
							</form>

													</p>
					</header>

				</div>
			</section>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>











<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  		$date=$_POST['date'];
		$title=$_POST['title'];
		$text=$_POST['editor1'];
		$id = $_SESSION['id'];
		$con=mysqli_connect("localhost","root","password","diary");
		$query="INSERT into content(id,date,text,title) values ('$id','$date','$text','$title')";
		if(mysqli_query($con,$query))
		{
			echo "Data Inserted";
		}
		else
			echo "wrong";
		header("refresh:0,url=homepage.html");
}
	
?>