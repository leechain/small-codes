<?php

/**
 * @Author: lee li
 * @Date:   2017-11-20 14:19:47
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-20 14:37:36
 */

// 第一个类

class fei{
	//类中的属性
	public $name="zhaosi";

	//类中的方法
	public function fly(){
		echo "飞起来啦！";
	}
	
}


//对象
$ff=new fei();

//调用类中的属性，注意name前面不加$！
echo $ff->name;

// 调用类中的方法
$ff->fly();