<?php 

include('input.php');

// var_dump($_POST);
$content=$_POST['content'];
$user=$_POST['user'];

$input=new input();

// 调用函数，检查留言内容
$iscontent=$input->post($content);
if($iscontent==false){
	die("留言数据不正确");
}

$isuser=$input->post($user);
if($isuser==false){
	die("留言数据不正确");
}

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

var_dump($content,$user);

?>