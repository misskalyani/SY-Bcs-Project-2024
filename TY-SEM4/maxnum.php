
<body>
	<form method="post" action="#">
	Enter First No=
	<input type="number" name="t1"><br>
	Enter Second No= 
	<input type="number" name="t2"><br>
	<input type="submit" name="OK"><br>
	<input type="reset" name="Clear"><br>
</body>

<?php
	$n1=$_POST["t1"];
	$n2=$_POST["t2"];
	if($n1<$n2)
		echo("Second Number is Maximum");
	else
		echo("First Number is Maximum");
?>