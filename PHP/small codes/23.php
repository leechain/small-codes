<?php

/**
 * @Author: lee li
 * @Date:   2017-11-22 10:57:00
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-22 11:13:48
 */

// 接口的概念

/*
抽象类可以理解为“类的模板”；接口则是“方法”的模板
即：接口的粒度更小，用于描述通用的方法


接口的语法：
接口本身就是抽象的，方法前不用加abstruct
接口里的方法，只能是public
类可以同时实现多个接口

注意：抽象类，相当于一类事物的规范；接口：组成事物的零件的规范
*/

interface flyer{
	public function fly($a,$b);
}

interface runner{
	public function run($c,$d);
}

interface water{
	public function wate($e);
}


class Super implements flyer,runner{
	public function fly($a,$b){
		echo "我能飞";
	}

	public function run($c,$d){
		echo "我能跑";
	}
}

$a=new Super();
$a->fly('a','b');
$a->run('c','d');