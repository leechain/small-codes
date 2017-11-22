<?php

/**
 * @Author: lee li
 * @Date:   2017-11-22 08:58:37
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-22 09:04:29
 */

// self与parent

/*
知识点
$this   代表 本对象
self    代表 本类
parent  代表 父类
*/

class Ad{
	public $rand;
	static public $ob=null;

	final protected function __construct(){
		$this->rand=mt_rand(1000,9999);
	}

	static public function getins(){
		if(self::$ob===null){
			self::$ob=new self();
		}
		return self::$ob;
	}
}
var_dump(Ad::getins());
