<?php
	$s1="RBNB bcs";
	$s2="rbnb bbaca";
	$k=strcmp($s1,$s2);
	if($k==0)
		echo("Strings are same");
	else if($k>0)
		echo("First String Greater");
	else if($k<0)
		echo("Second String Greater");

?>