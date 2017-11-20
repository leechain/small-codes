<?php

/**
 * @Author: lee li
 * @Date:   2017-11-20 20:40:52
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-20 20:45:23
 */

// 属性赋值的变化

class Stu{
	public $name=array(
		'a'=>array('b'=>33)
	);
}

$stu=new Stu();

var_dump($stu->name);