<?php

/**
 * @Author: lee li
 * @Date:   2017-11-16 09:00:52
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-16 09:41:08
 */

$path='./';

// print_r($_SERVER);exit;//超级全局变量

$url=$_SERVER['REQUEST_URI'];

if(isset($_GET['dir'])){
	$path=$path.'/'.$_GET['dir'];
}else{
	$url=$url.'?dir=.';
}

// echo $path;exit;
echo realpath($path);exit;


$dh=opendir($path);
if($dh===false){
	echo "打开出错";
	exit;
}

$list=array();
while(($item=readdir($dh))!==false){
	$list[]=$item;
}

closedir($dh);

// print_r($list);
// exit;

?>


<!DOCTYPE html>
<html>
	<head>
		<title>文件管理系统</title>
		<meta charset="UTF-8"/>
		<style>
			td{
				border: 1px solid gray;
			}
		</style>
	</head>
	<body>
		<h1>文件管理系统</h1>
		<table>
			<tr>
				<td>序号</td>
				<td>文件名</td>
				<td>操作</td>
			</tr>
			<?php foreach($list as $k => $v) { 
			echo "<tr>";
			echo "<td>",$k,"</td>";
			echo "<td>",$v,"</td>";
			echo "<td>";
			if(is_dir($path.'./'.$v)){
				echo '<a href="',$url.'/',$v,'">浏览</a>';
			}else{
				echo '<a href="./',$_GET['dir'],'/',$v,'">查看</a>';
			}

			echo "</td>";
			echo "</tr>";
		    }
			?>
		</table>

	</body>
</html>