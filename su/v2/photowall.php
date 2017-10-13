<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>照片墙--《学生信息管理系统》</title>

    <!-- Bootstrap -->
    <link href="./static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./static/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="./static/css/photowall.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="photowall container">
		
		<div class="center-img" >
			<img src="./static/img/datao.png" alt="" />
		</div>
		<div class="pic-list row">
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
			<a href="javascript:;" class="col-md-2"><img src="./static/img/t1.jpg" alt="" /></a>
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
	
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.pic-list a').each(function(){
				
				$(this).click(function(){
					var img = $(this).children();
					img =$(img).attr('src');
//					console.log(img);
					$('.center-img img').attr('src',img);
				});
			});
		});
	</script>
  </body>
</html>