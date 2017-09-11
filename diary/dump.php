<?php
$con=mysqli_connect("localhost","root","password","diary");
$query="SELECT date,title FROM content";
$result=mysqli_query($con,$query);
?>
 <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="all.css">
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

<?php
 while($row=mysqli_fetch_assoc($result)){
       print "<tr> <td>";
        echo $row['date']; 
        print "</td> <td>";
        echo $row['title']; 
       
    }
 ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>