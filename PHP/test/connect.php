<?php

/**
 * @Author: lee li
 * @Date:   2017-11-16 11:18:07
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-16 11:20:27
 */

//数据库的连接过程
//预先定义数据库连接参数
$host='127.0.0.1';
$dbuser='root';
$pwd='';
$dbname='php10';

$db=new mysqli($host,$dbuser,$pwd,$dbname);

if($db->connect_errno!=0){
	echo "连接失败,".$db->connect_error;
}


//设定数据库数据传输的编码
$db->query("SET NAMES UTF8");
