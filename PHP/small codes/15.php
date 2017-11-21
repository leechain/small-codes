<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 14:09:56
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 14:19:50
 */

// 静态属性和静态方法

class Math{

	static public $name="lee";

	static public function add($a,$b){
		return $a+$b;
	}
}

//实例化对象调用方法
// $math=new Math();
// echo $math->add(2,3);


// 不实例化对象，采用静态变量的方式直接调用类中的方法
echo Math::$name; //注意：这里的name前面需要加$
echo Math::add(2,3);