<?php

/**
 * @Author: lee li
 * @Date:   2017-11-23 20:27:55
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-23 20:40:23
 */

// 延迟绑定

/*
class Par{
	public function a(){
		echo "我是父类";
	}

	public function b(){
		$this->a();
	}
}

class Son extends Par{
	public function a(){
		echo "我是子类";
	}
}

$son=new Son();
$son->b();//我是子类
*/


/*
class Par1{
	public static function a(){
		echo "我是父类";
	}

	public static function b(){
		self::a();
	}
}

class Son1 extends Par1{
	public static function a(){
		echo "我是子类";
	}
}

Son1::b(); //我是父类，不符合生活常识，做如下修改
*/



class Par1{
	public static function a(){
		echo "我是父类";
	}

	public static function b(){
		// 延迟绑定
		static::a();
	}
}

class Son1 extends Par1{
	public static function a(){
		echo "我是子类";
	}
}

Son1::b();//我是子类