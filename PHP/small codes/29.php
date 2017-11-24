<?php

/**
 * @Author: lee li
 * @Date:   2017-11-24 22:01:00
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-24 22:09:47
 */

// 多态

/*
PHP语言中，不做参数的类型检测，可以传任意类型，本身谈不上多态的；
在强类型语言中，会检测参数的类型；
在声明时，可以声明参数的父类类型，如Car,
具体的实参可以是Car型，以及Car的子类，
这种现象就是多态。
*/

class Car{

}

class BMW extends Car{
	public function run(){
		echo "BMW";
	}
}

class BC extends Car{
	public function run(){
		echo "BengChi";
	}
}

function drive($car){
	echo $car;
	// $car->run();
}

// drive(new BMW());
// drive(new BC());

drive(1);
drive("abc");