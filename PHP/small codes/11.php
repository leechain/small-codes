<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 10:38:57
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 10:44:30
 */

// 类的继承

/*
继承的好处
子类可以继承父类的属性及方法，并允许覆盖父类的方法或新增方法；
通过自然界的比喻就是，通过“进化”来获得新特性，同时不影响旧物种。
*/

class bb{
	function aa(){
		echo "bb";
	}
}

class cc extends bb{
	function aa(){
		echo "cc";
	}

	function ee(){
		echo "ee";
	}
}

$dd=new cc();
$dd->aa();
$dd->ee();
