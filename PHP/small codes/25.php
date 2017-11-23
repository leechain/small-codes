<?php

/**
 * @Author: lee li
 * @Date:   2017-11-22 11:15:55
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-23 15:44:00
 */

// 异常

/*
程序运行的每个环节都有可能出错
要判断程序的运行逻辑，要靠返回不同的值
*/

/*
什么时间用异常？
不该出错的地方，却有可能出错，就用异常。
如：连接数据库，不应该出错。
如：查询用户是否存在，可能返回true/false，此时就用return
*/

function t1(){
	if(rand(1,10)>5){
		// return false;
		throw new Exception("first", 1);
	}else{
		return t2();
	}
}

function t2(){
	if(rand(1,10)>5){
		// return false;
		throw new Exception("second", 2);	
	}else{
		return t3();
	}
}

function t3(){
	if(rand(1,10)>5){
		// return false;
		throw new Exception("third", 3);
	}else{
		return true;
	}
}
try {
	var_dump(t1());
} catch (Exception $e) {
	// var_dump($e);

	echo '文件：'.$e->getFile();
	echo '行号：'.$e->getLine();
	echo $e->getMessage();
}
