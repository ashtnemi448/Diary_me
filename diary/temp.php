<?
$text=$_POST['editor1'];
$date=$_POST['date'];
$title=$_POST['title'];

$con=mysqli_connect("localhost","root","password","diary");
$query="INSERT INTO content VALUES('$date','$text','$title')";
$result=mysqli_query($con,$query)

if($result)
{
	echo "added";
	header(0.2,index.html);
}
else
{
	echo "error";
}
?>