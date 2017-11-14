<?php  
/*
一种羊，第二年生一个小羊，第四年生一个小羊，第五年死，20年后有多少羊？
*/

$yang=array(1,0,0,0,0);
for($i=0;$i<20;$i++){//20年
	$temp=$yang[1]+$yang[3];
	array_unshift($yang, $temp);
	array_pop($yang);
}
echo array_sum($yang);

?>