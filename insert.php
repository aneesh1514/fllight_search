<?php
$connect=mysqli_connect("localhost","root","","flight");//connecting to database
$a=$_POST['s1'];
$b=$_POST['s2'];
$c=$_POST['s3'];
$d=$_POST['s4'];
$e=$_POST['s5'];
$but=$_POST['b1'];

if(isset($_POST['b1'])){

$result=mysqli_query($connect," select * from flightbase where name='$a'");//fetching data from table using input values.
while($rowvalue=mysqli_fetch_array($result))
	{
		$dept=($rowvalue['departure']);
		$arr=($rowvalue['arrival']);

}
$result=mysqli_query($connect," select doj,nop from search where id=(select max(id) as i from search) ");//fetching data from another table using the previous fetched table information.
while($rowvalue=mysqli_fetch_array($result))
	{
		$dat=($rowvalue['doj']);
		$nop=($rowvalue['nop']);

}
$query=mysqli_query($connect,"insert into confirmation(flightname,depttime,arr_time,price,date,nop)values('$a','$b','$c','$d','$dat','$nop')");//inserting the input values to table.
}
	

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>BooK your Flight</title>
<link rel="stylesheet" type="text/css" href="style11.css" />
</head>
<body>
	<section id="search_page">
	
	<header>
	<h1>BOOK YOUR FLIGHT</h1>
	
	</header>

	<article>
	
	<div class="line"></div>
	<article id="art">
	<h2>Booking Sucessful</h2>
	<h3>Happy Journey</h3>
	
	<a href="searching.html"><input type="button" name="Home"  value="Home"></a>
	</article>
	
	</div>
	</section>
</body>
</html>
