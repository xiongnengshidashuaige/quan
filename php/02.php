<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div class="box">
			<form action="" method="post">
				账号<input type="" name="" id="" value="" />
				<br />
				密码<input type="" name="" id="" value="" />
				<br />
				<input type="submit" name="" id="" value="提交" />
			</form>
		</div>
<?php
	header("Content-type: text/html; charset=utf-8"); 
			$link=mysqli_conncet('localhost','root','');
			if(!$link){
				die('Could not connect:'.mysqli_error());
			}
?>
	</body>
</html>
