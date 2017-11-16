<?php 

include('input.php');
include('connect.php');

// var_dump($_POST);
$content=$_POST['content'];
$user=$_POST['user'];

$input=new input();

// 调用函数，检查留言内容
$iscontent=$input->post($content);
if($iscontent==false){
	die("留言数据不正确");
}

// 调用函数，检查留言人
$isuser=$input->post($user);
if($isuser==false){
	die("留言数据不正确");
}

// var_dump($content,$user);

//将数据入库

//执行SQL语句
$time=time();

$sql = "INSERT INTO msg (content,user,intime) VALUES ('{$content}','{$user}','{$time}');";
$is=$db->query($sql);

if($is==true){
	echo "插入成功";
}else{
	echo "插入失败";
}

header("location:gbook.php");

/*
if ($content=="") {
	die("留言内容不能为空!");
}

if ($user=="") {
	die("留言人不能为空!");
}
*/

// 先循环读取禁止使用的用户名，使用if语句一一地与提交的留言人对比，任何一个相同，代表禁止使用的用户名
/*
$n=['张三','李四','王五'];
foreach ($n as $name) {
	if($user==$name){
		die("禁止使用的用户名！");
	}
}
*/


?>