<?php  

//递归与静态变量

/*
static变量有一个特点：在第一次函数调用声明之后存在且不随函数结束而结束，
当函数再次被调用时，可以直接利用上次的结果。

*/

function t(){
	$a=10;
	$a++;
	return $a;
}

echo t(),"<br/>";//11
echo t(),"<br/>";//11
echo t(),"<br/>";//11

echo "<hr/>";

function t1(){
	static $a=10;
	$a++;
	return $a;
}

echo t1(),"<br/>";//11
echo t1(),"<br/>";//12
echo t1(),"<br/>";//13

echo "<hr/>";


//写递归函数，计算所有单元的数字之和
$arr=array(1,2,3,array(4,array(5,6)));
function sum($arr){
    static $sum=0;
	foreach ($arr as $v) {
		if(is_array($v)){
			sum($v);
		}else{
			$sum+=$v;
		}
	}
	//echo $sum,"<br/>";//11 4 6
	return $sum;
}

echo sum($arr);

?>