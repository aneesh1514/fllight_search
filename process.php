<?php
$connect=mysqli_connect("localhost","root","","flight");//connecting to datbase.
$a=$_POST['s1'];
$b=$_POST['s2'];
$c=$_POST['s3'];
$d=$_POST['s4'];
$but=$_POST['b1'];
if(isset($_POST['b1'])){
$query=mysqli_query($connect,"insert into search(departure,arrival,nop,doj)values('$a','$b','$c','$d')");//inserting the data to table from home page.
$result=mysqli_query($connect," select * from flightbase where arrival='$b' and departure='$a' ");//fetching the data from database to display in this page html form.
	if($result){
	while($rowvalue=mysqli_fetch_array($result))
	{
		$fname=($rowvalue['name']);
		$dept=($rowvalue['timedept']);
		$arr=($rowvalue['timearr']);
		$price=($rowvalue['price']);
		$total=($rowvalue['totaltime']);
		$totalprice=$price*$c;
	}
	
$totalprice=$price*$c;
}
	
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>BooK your Flight</title>
<link rel="stylesheet" type="text/css" href="style22.css" />
</head>
<body>
	<section id="search_page">
	
	<header>
	<h1>BOOK YOUR FLIGHT</h1>
	
	</header>

	<article>
	
	<div class="line"></div>
	<article id="art">
	<h2>Details</h2>
	<div class="line"></div>
	<div class="Article body">
	<h3> Flight Picture</h3>
	<img src="<?php echo $fname;?>.jpg" width="500px" height="300px" >
	<form action="insert.php" method="POST">
	<div class="container">
	<label>Flight Name</label>
	<input  name="s1" type="text" value='<?php echo $fname; ?>'/><br> <!--displaying the fetched data from table to form-->
	<label>Departure Time</label>
	<input  name="s2" type="text" value='<?php echo $dept; ?>'/><br>
	<label>Destination Arrival Time</label>
	<input  name="s3" type="text" value='<?php echo $arr; ?>'/><br>
	<label>Price     </label>
	<input  name="s4" type="text" value='<?php echo $totalprice; ?>'/><br>
	<label>Total Time Duration</label>
	<input  name="s5" type="text" value='<?php echo $total; ?>'/><br>
	
	<input type="submit" name="b1" value="BOOK">
	</div>
	</form>

	</article>
	
	</div>
	</section>
</body>
</html>
