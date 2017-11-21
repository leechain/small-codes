<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 10:46:25
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 10:57:54
 */

// final类和final方法

// final类不能被继承，final方法不能被子类重写但可以被调用

final class A{
	public function asay(){
		echo "aa";
	}
}

// class B extends aa{

// }

class C{
	final public function csay(){
		echo "cc";
	}
}

// $b=new B();
// $b->asay();//final类不能被继承

$c=new C();
$c->csay();//cc  final方法不能被子类重写但可以被调用