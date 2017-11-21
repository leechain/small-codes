<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 09:00:31
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 09:59:48
 */

// 封装Mysql类

class Mysql{
	//构造方法
	public function __construct(){
		$this->conn();
	}

	public $link;
	// 链接数据库
	public function conn(){
		$cfg=array(
			'host'=>'localhost',
			'user'=>'root',
			'password'=>'',
			'db'=>'test',
			'charset'=>'utf8'
		);

		// 链接数据库（地址，用户名，密码，选库）
		$this->link=mysqli_connect($cfg['host'],$cfg['user'],$cfg['password'],$cfg['db']);

		$sql='set names '.$cfg['charset'];
		mysqli_query($this->link,$sql);

	}

	// 发送查询
	public function query($sql){

		return mysqli_query($this->link,$sql);
	}

	// 查询所有数据，返回数组
	public function getAll($sql){
		$data=array();
		$res=$this->query($sql);
		while ($row=mysqli_fetch_assoc($res)) {
			$data[]=$row;
		}

		return $data;
	}

}


$mysql=new Mysql();

// $mysql->conn();

$a=$mysql->getAll('select * from user');

var_dump($a);


?>