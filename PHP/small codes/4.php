<?php

/**
 * @Author: lee li
 * @Date:   2017-11-20 20:16:54
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-20 20:45:05
 */

// 类的语法

//类名，不区分大小写，但是......
class Ren{
	// 类的属性
	public $name="xiaoming";

	// 类的方法
	function man(){
		echo "666";
	}
}

// 实例化时不区分大小写，但是你要人为地区分
// $r=new REN();

//实例化
$r=new Ren();

// 调用类的属性
echo $r->name;

// 调用类的方法
$r->man();