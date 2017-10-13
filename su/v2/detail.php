<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>xxx的个人主页--《学生信息管理系统》</title>

    <!-- Bootstrap -->
    <link href="./static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./static/css/style.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<!--头部-->
  	<div class="header">
	    <div class="jumbotron">
			  <h1>学生信息管理系统</h1>
			</div>
  	</div>
  	
  	<!--详情页-->
  	<div class="container">
  		<ol class="breadcrumb">
			  <li><a href="index.html">主页</a></li>
			  <li class="active">xxx的个人主页</li>
			  <a href="edit.html" class="btn btn-xs btn-success pull-right" >编辑资料</a>
			</ol>
			<div class="row">
				<div class="col-md-6">
					<ul class="list-group">
					  <li class="list-group-item">ID：01</li>
					  <li class="list-group-item">学号：20170609</li>
					  <li class="list-group-item">姓名：大涛哥</li>
					  <li class="list-group-item">性别：男</li>
					  <li class="list-group-item">班级：前端工程师</li>
					  <li class="list-group-item">Q  Q：2764132626</li>
					  <li class="list-group-item">手机：18502323596</li>
					  <li class="list-group-item">入学日期：2017-06-09</li>
					  <li class="list-group-item">个人主页：www.taoge.com</li>
					  <li class="list-group-item">个人爱好：
					  	<span class="label label-default">读书</span>
					  	<span class="label label-default">跑步</span>
					  	<span class="label label-default">爬山</span>
					  </li>
					  <li class="list-group-item">个人简介：
					  	<p>
					  		如果你有大量的设置为 inline 属性的标签全部放在一个较窄的容器元素内，
					  		在页面上展示这些标签就会出现问题，每个标签就会有自己的一个 inline-block 元素（就像图标一样）。
					  		解决的办法是为每个标签都设置为 display: inline-block; 属性。
					  		关于这个问题以及实例，请参考 #13219 。
					  	</p>
					  </li>
					</ul>
				</div>
				<div class="col-md-6">
					<img src="./static/img/t1.jpg" class="pull-right img-circle" alt="" />
				</div>
			</div>
  	</div>
  	
		<!--底部-->
		<footer>
			<p>
				<a href="./index.html">首页</a>
				<a href="./photowall.html">照片墙</a>
				<a href="./add.html">添加学生</a>
			</p>
			<p>大涛课堂——《学生信息管理系统》</p>
		</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./static/lib/bootstrap/js/bootstrap.js"></script>
  </body>
</html>