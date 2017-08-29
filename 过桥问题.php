<?php
header("Content-type: text/html; charset=utf-8"); 
for($n = 0 , $money = 100000 ; $money >= 5000;)
{
	if ($money > 50000) {
		$money = $money * 0.95;
	}
	else
	{
		$money = $money - 5000;
	}
	$n += 1;
	echo'第',$n,'次，','还剩',$money,'元<br/>';

}
?>