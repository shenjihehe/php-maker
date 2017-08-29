<?php
header("Content-type: text/html; charset=utf-8"); 
for($i =1; $i <= 9;$i +=1)
{
	for($j = 1;$j <= $i; $j += 1)
	{
		echo  $i , '*' , $j , '=' , $i * $j , '&nbsp';
	}
	echo '<br/>';
}
?>