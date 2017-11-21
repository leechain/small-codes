<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 14:20:38
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 14:28:41
 */

// 类常量
define("PI",3.14159265897);

class Math{

	const PI="3.1415926";
	public function test(){
		echo Math::PI;
	}

}

$m=new Math();
$m->test();
