<!DOCTYPE html>
<html>
<head>
	<title>BMI</title>
</head>
<body bgcolor="gray" style="background-image: url(bmic.jpg);background-repeat: no-repeat;background-size: 100%">
<form method="GET">
	Weight:<input type="number" name="weight">
	Height:<input type="number" name="height">
	<button>Submit</button>
</form>
	<?php 
	$height=$_GET['height'];
	$weight=$_GET['weight'];
	$bmi=($weight/$height);
if ($bmi<=19.5) {
	print"underweight";}
elseif ($bmi<=25.5) {
		print"normal";
	}
else {
	echo "overweight";
}
?>


</body>
</html>
