<?php

/**
 * @Author: lee li
 * @Date:   2017-11-22 10:38:20
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-22 10:56:07
 */

// 抽象类和抽象方法

/*
知识点
类前要加abstract，则为抽象类
方法前也可以加abstruct，则为抽象方法
抽象方法没有方法体
抽象类中也可以有已经实现的方法，但只要有一个方法为抽象，则该类仍是抽象的
抽象类不能实例化
*/


class aDB{
	/*
	 *参数：sql 语句
	 *返回值类型：array
	 */
	abstruct public function getAll($sql);

	/*
	 *参数：sql 语句
	 *返回值类型：array
	 */
	abstruct public function getRow($sql);

	public function a(){
		
	}

}


class Mysql extends aDB{
	public function getAll($sql){

	}

	public function getRow($sql){

	}
}