<?php

/**
 * @Author: lee li
 * @Date:   2017-11-16 10:27:38
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-16 14:37:41
 */

//连接数据库
$host='127.0.0.1';
$user='root';
$pwd='';
$dbname='php10';

$db=new mysqli($host,$user,$pwd,$dbname);


if($db->connect_errno!=0){
	echo "连接失败,".$db->connect_error;
}

// var_dump($db);


//设定数据库数据传输的编码
$db->query("SET NAMES UTF8");


//编写SQL语句
//$sql = "INSERT INTO msg (content,user,intime) VALUES ('11aaa','77bbb',123456);";
$sql="select * from msg WHERE id>=20 ORDER BY id DESC;";

//执行SQL语句
$mysqli_result=$db->query($sql);
// var_dump($mysqli_result);

//判断是否是对象
if($mysqli_result===false){
	echo "SQL错误";
	exit;
}

/*
首次调用显示最新一条记录，
重复调用，依次显示后面的记录，
如果没有记录可以显示，就返回NULL
*/
// var_dump($mysqli_result->fetch_array(MYSQL_ASSOC));
// var_dump($mysqli_result->fetch_array(MYSQL_ASSOC));
// var_dump($mysqli_result->fetch_array(MYSQL_ASSOC));
// var_dump($mysqli_result->fetch_array(MYSQL_ASSOC));
// var_dump($mysqli_result->fetch_array(MYSQL_ASSOC));
// var_dump($mysqli_result->fetch_array(MYSQL_ASSOC));
// var_dump($mysqli_result->fetch_array(MYSQL_ASSOC));

$rows=[];
while ($row=$mysqli_result->fetch_array(MYSQL_ASSOC)) {
	// var_dump($row);
	$rows[$row['id']]=$row;
}
var_dump($rows);

// $row=$mysqli_result->fetch_array(MYSQL_ASSOC);
// echo $row['id'];
// echo $row['content'];
// echo $row['user'];
// echo $row['intime'];
