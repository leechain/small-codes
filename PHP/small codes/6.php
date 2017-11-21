<?php

/**
 * @Author: lee li
 * @Date:   2017-11-20 20:42:58
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 08:28:06
 */

// 类与对象的关系

class A{
	public $name="xiaoming";
	public $age=20;
	public function kaiche(){
		echo "小明和小红是好朋友";
	}
}


$a=new A();
echo $a->name;
$a->kaiche();

echo "<hr/>";

$b=new A();
$b->name="xiaohong";
echo $b->name;
$b->kaiche();

echo "<hr/>";

echo $a->name;