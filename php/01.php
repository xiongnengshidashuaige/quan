<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>php操作数据库</title>
</head>
<body style="text-align: center;">
	<form action="" method="get">
		账号：<input type="text" name="username">
		密码：<input type="password" name="password">
			<input type="submit" value="提交" />
	</form>
<?php

//连接数据库
$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

//选择数据库
mysqli_query($link,'use php_base');

//插入的Sql语句
//isset() 检测变量是否设置
if(isset($_GET['username']) || isset($_GET['password'])){
	$name = $_GET['username'];
	$pass = $_GET['password'];
	$sql = "INSERT INTO `admin` (`name`, `pass`) VALUES ('$name', MD5($pass))";
	$result = mysqli_query($link,$sql);
	if (!$result) {
	    die('Invalid query: ' . mysql_error());
	}else{
		echo "
			<script>
				//alert('数据添加成功！');
				window.location.href = '04.php';
			</script>
		";
	}
}

$sql2 = "select * from `admin`";
//echo $sql2;
$result2 = mysqli_query($link,$sql2);
echo "<h1>列表展示</h1>";
echo '<table border="1" cellpadding="10" cellspacing = "0" align="center">';
while ($row = mysqli_fetch_assoc($result2)) {
       //var_dump($row);
       echo '<tr>';
       echo '<td>'.$row['id'].'</td>';
       echo '<td>'.$row['name'].'</td>';
       echo '<td>'.$row['pass'].'</td>';
       echo '<td>'.$row['time'].'</td>';
       echo '<td><a href="javascript:;">编辑</a>|<a href="javascript:;">删除</a></td>';
       echo '</tr>';
}
echo '</table>';
//关闭数据库
mysqli_close($link);
?>
</body>
</html>
<!--
1、在phpmyadmin中 新建一个数据库 php_base
2、在数据库 php_base下面，新建一个表 admin(管理员表)
	`id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,//账户名
  `pass` varchar(32) NOT NULL,//密码
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP //添加的时间
3、在 php中写代码
 第一步 连接数据库：
 	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {
	    die('Could not connect: ' . mysql_error());
	}
 第二步 选择数据库：
  	mysqli_query($link,'use php_base');
 第三步 准备/操作 SQL语句：
 
 	【添加功能】
 	//你想要 往数据库里面 添加什么东西 先要拿到你要添加的东西
 	$name = $_GET['username'];
	$pass = $_GET['password'];
	
	//拼接SQL语句
	$sql = "INSERT INTO `admin` (`name`, `pass`) VALUES ('$name', MD5($pass))";
	
	//执行SQL语句
	$result = mysqli_query($link,$sql);
	
	//判断执行的结果
	if (!$result) {
	    die('Invalid query: ' . mysql_error());
	}else{
		echo "
			<script>
				//alert('数据添加成功！');
				window.location.href = '04.php';
			</script>
		";
	}
	
	【查询功能】
	//准备SQL语句
	$sql2 = "select * from `admin`";
	//执行SQL语句
	$result2 = mysqli_query($link,$sql2);
	
	//mysql_fetch_assoc — 从结果集中取得一行作为关联数组
	//遍历结果集
	while ($row = mysqli_fetch_assoc($result2)) {
	       //var_dump($row);
	       echo '<tr>';
	       echo '<td>'.$row['id'].'</td>';
	       echo '<td>'.$row['name'].'</td>';
	       echo '<td>'.$row['pass'].'</td>';
	       echo '<td>'.$row['time'].'</td>';
	       echo '<td><a href="javascript:;">编辑</a>|<a href="javascript:;">删除</a></td>';
	       echo '</tr>';
	}

第四步：关闭数据库
mysqli_close($link);
-->