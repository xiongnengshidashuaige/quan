<?php
	//测试输出
	var_dump($_POST);
	var_dump($_FILES);
	
	//判断是否上传文件
	if(!empty($_FILES)){
		//获取文件信息
		$pic_info = $_FILES['pic'];
		//判断文件上传到临时 文件目录 是否出错
		if($pic_info['error'] > 0){
			$error_msg = '上传错误';
			switch ($pic_info['error']){
				case 1 :	$error_msg.= '文件大小超过了 php.ini中 upload_max_filesize选项限制的值！';
					break ;
				case 2 : $error_msg.= '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
					break ;
				case 3 : $error_msg.= '文件只有部分被上传';
					break ;
				case 4 : $error_msg.= '没有文件被上传';
					break ;
				case 6 : $error_msg.= '找不到临时文件夹';
					break ;
				case 7 : $error_msg.= '文件写入失败';
					break ;
				default : $error_msg.='未知错误！' ;
					break ;
			}
			echo $error_msg;
			return false;
		}
		
		//获取文件上传的类型
		$type = substr(strrchr($pic_info['name'],'.'),1);
		
		//判断上传文件的类型
		if($type !== 'jpg' ){
			echo '你上传的不是图片';
			return false;
		}
		
		//图片重命名
		$new_file = $_POST['file_name'].'.'.$type;
		
		//设置上传的路径
		$filename = './upload/'.$new_file;
		
		//图片上传到临时目录成功，将其保存到指定的目录中
		if(!move_uploaded_file($pic_info['tmp_name'],$filename)){
			echo '图片上传失败';
			return false;
		}else{
			echo "<script>alert('文件上传成功')</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>php上传文件</title>

    <!-- Bootstrap -->
   
    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/upload.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
    	<div class="jumbotron">
		  <h1>php文件上传</h1>
		</div>
    </header>
	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form action="upload.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="file_name">文件名</label>
				    <input type="text" class="form-control" id="file_name" placeholder="文件名称" name="file_name">
				  </div>
				  <div class="form-group">
				    <label for="pic">File input</label>
				    <input type="file" id="pic" name="pic">
				  </div>
				  <input type="submit" class="btn btn-success" value="提交">
				</form>
			</div>
			<div class="col-md-8"></div>
		</div>
		<div class="row imglist">
			<div class="col-xs-6 col-md-3">
			    <a href="#" class="thumbnail">
			      <img src="img/course4.jpg" alt="...">
			    </a>
			</div>
	 		<div class="col-xs-6 col-md-3">
			    <a href="#" class="thumbnail">
			      <img src="img/course4.jpg" alt="...">
			    </a>
			</div>
			<div class="col-xs-6 col-md-3">
			    <a href="#" class="thumbnail">
			      <img src="img/course4.jpg" alt="...">
			    </a>
			  </div>
			<div class="col-xs-6 col-md-3">
			    <a href="#" class="thumbnail">
			      <img src="img/course4.jpg" alt="...">
			    </a>
			</div>
		</div>
	</div>
	
	<footer>
		<p>《php案例——php文件上传》@大涛课堂</p>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<!--
相对路径：
	同级：
	lib/css/
	./lib/css/
	
	
	../lib/css/
	../../view/lib/css/
	
文件上传：
	由于浏览器默认会将表单提交的数据 当做字符串进行字节编码处理，
	因此在上传文件的时候，需要将<form></form>表单的enctype属性设置为 enctype="multipart/form-data"
	为了告诉浏览器，此表单中内除了字符串之外，还有文件数据。
	
	
	
-->