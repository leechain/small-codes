<?php
$host="127.0.0.1";
$user="root";
$pwd="";
$dbname="php10";

$db=new mysqli($host,$user,$pwd,$dbname);

//检查是否连接成功
if($db->connect_errno!=0){
	echo "连接失败",$db->connect_error;
	exit;
}

$db->query("SET NAMES UTF8");

$sql="SELECT * FROM msg ORDER BY id DESC";
$mysql_result=$db->query($sql);

//判断是否是对象
if($mysql_result===false){
	echo "SQL错误";
	exit;
}

// var_dump($mysql_result);

$rows=[];
while($row=$mysql_result->fetch_array(MYSQL_ASSOC)){
	$rows[]=$row;
}
// var_dump($rows);



?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言本</title>
		<!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
		<style type="text/css">
			.wrap{
				width:600px;
				margin: 0px auto;
				/*background: #ccc;*/
			}
			.add{
				/*清除浮动*/
				overflow: hidden;
			}
			.add .content{
				width:598px;
				margin: 0;
				padding: 0;
			}

			.add .user{
				float: left;
			}

			.add .btn{
				float: right;
			}

			.msg{
				margin: 20px 0px;
				padding: 5px;
				background: #ccc;
			}

			.msg .info{
				overflow: hidden;
			}

			.msg .user{
				float: left;
				color: blue;
			}

			.msg .time{
				float: right;
				color: #999;
			}

			.msg .content{
				width: 100%;
				padding: 5px;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<!-- 发表留言 -->
			<div class="add">
				<form action="save.php" method="post">
					<textarea name="content" class="content" cols="50" rows="5"></textarea>
					<input class="user" type="text" name="user"/>
					<input class="btn" type="submit" value="发表留言"/>
				</form>
			</div>

			<?php
			foreach ($rows as $row) {
			?>

				<!-- 查看留言 -->
				<div class="msg">
					<div class="info">
						<span class="user"><?php echo $row['user']; ?></span>
						<span class="time"><?php echo date( 'Y-m-d H:i:s',$row['intime']); ?></span>
					</div>
					<div class="content">
						<?php echo $row['content']; ?>
					</div>
				</div>

			<?php
			}
			?>

		</div>
	</body>
</html>