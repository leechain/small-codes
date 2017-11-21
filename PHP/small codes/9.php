<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 09:54:29
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 10:05:15
 */

// 构造方法和析构方法

/*
对象什么时候被“销毁”？
1、存储对象的变量被赋值为其他值
2、变量被unset
3、页面结束时


知识点：构造方法的旧式声明
一个和类名同名的方法，被理解为构造方法；
老旧的PHP代码中会遇到，遇到时认识即可。
*/

class Method{
	//构造方法，当类被实例化时就调用
	public function __construct(){
		echo "aaa";
	}

	public function a(){
		echo "111";
	}

	// 析构方法，当对象被销毁时调用
	public function __destruct(){
		echo "bbb";
	}
}

$a=new Method();
$a->a();