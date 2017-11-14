<?php

// print_r($_POST);

// php打开文件
/*
$fh是一个资源类型的变量
*/

/*
$fh=fopen('./msg.txt', 'a');//打开文件

// 往文件写内容，沿着管子（资源）写
fwrite($fh, "from php into txt");

// 关闭资源
fclose($fh);

echo "OK";
*/


/*
//写留言信息
$title=$_POST["title"];
$content=$_POST["content"];
$str=$title.",".$content."\n";

// $str=$_POST["title"].",".$_POST["content"]."\n";

$fh=fopen("./msg.txt", "a");
fwrite($fh, $str);
fclose($fh);

echo "OK";
*/


/*
//读取留言信息
$tid=$_GET["tid"];
// echo "你想看第".$tid."行留言";

//打开文件
$fh=fopen("./msg.txt", "r");

// print_r(fgetcsv($fh));

$i=1;

while ($row=fgetcsv($fh)) {
	if($tid==$i){
		print_r($row);
	}
	$i++;
}
*/



//打开文件
$fh=fopen("./msg.txt", "r");

$tid=$_GET["tid"];
$i=1;

while ($row=fgetcsv($fh)) {
	if($tid==$i){
		echo "<h1>",$row[0],"</h1>";
		echo "<p>",$row[1],"</p>";
	}
	$i++;
}


?>