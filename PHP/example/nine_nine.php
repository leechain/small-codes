<?php  
/*
打印九九乘法表
*/

for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
		echo $j,"*",$i,"=",$i*$j,"&nbsp";
	}
	echo "<br/>";
}
?>