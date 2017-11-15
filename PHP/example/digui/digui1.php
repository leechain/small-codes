<?php  

//1、采用递归方式计算1-100的和

function sum($n){
	if($n==1){
		return 1;
	}
	return $n+sum($n-1);
}

echo sum(100),"<hr/>";



//2、用递归打印当前目录下的所有文件，目录及子目录...
function printdir($path,$lev=1){
	$dh=opendir($path);//资源

	while(($row=readdir($dh))!==false){
		echo str_repeat("--", $lev),$row,"<br/>";//str_repeat("--", $lev)用于缩进

		if($row=="."||$row==".."){
			continue;
		}else{
			if(is_dir($path."/".$row)){//由于有.和..存在，陷入死循环
				printdir($path."/".$row,$lev++);
			}
		}
	}

	closedir($dh);//关闭资源

}

//显示当前目录
$path=".";
printdir($path);

?>