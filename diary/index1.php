<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>abc</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</head>
	<body>
<?php
$con=mysqli_connect("localhost","root","password","diary");
$query="SELECT date,title FROM content";
$result=mysqli_query($con,$query);
?>
		

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="images/banner">
				<div class="inner">
					
					<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>

<table style="width: 100%" class="table">
   <tr>
      <th>date</th>
      <th>title</th>
    </tr>

<div style="color: white;">
<?php

 while($row=mysqli_fetch_assoc($result)){
       print "<tr> <td>";
        echo $row['date']; 
        print "</td> <td>";
        echo $row['title']; 
       
    }
 ?>
 </div>
</table>
<br>
<br>

<div style="margin-right: 40%;margin-left:50%; ">
 <form action="shwcntnt.php" method="post">


      <div class="form-group">
	  <label for="usr">Date:</label>
	  <input type="text" class="form-control"  name="t1">
	</div>


      <input type="submit" value="submit" class="btn btn-primary">
    </div>


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