<?php

/**
 * @Author: lee li
 * @Date:   2017-11-22 09:46:52
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-22 10:01:36
 */

// 魔术方法

/*
知识点
魔术方法：在某种场景下能够自动调用的方法
如：__construct、__destruct、__set、__get、__isset、__unset、__call

__construct()：构造方法，new实例时，自动调用
__destruct()：析构方法，对象销毁时自动调用
__get(属性名)：当读取对象的一个不可见属性时，自动调用，并返回值（不可见：未定义或无权访问时）
__set(属性名，属性值)：当对一个不可见的属性赋值时，自动调用
__isset(属性名)：当用isset或empty判断一个不可见属性时，自动调用
__unset(属性名)：当unset一个不可见属性时，自动调用
*/

class A{
	public function __get($a){
		echo $a;
	}	

	public function __set($b,$c){
		echo $b.'---'.$c;
	}

	public function __isset($d){
		echo $d;
	}

	public function __unset($e){
		echo $e;
	}
}

$a=new A();
$a->AA;
$a->BB="CC";
isset($a->AA);
unset($a->AA);