<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>添加信息--《学生信息管理系统》</title>

    <!-- Bootstrap -->
    <link href="./static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./static/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="./static/lib/jquery.datetimepicker.css"/>
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
  	<!--添加-->
  	<div class="container">
  		<ol class="breadcrumb">
			  <li><a href="index.html">主页</a></li>
			  <li class="active">添加学生</li>
			</ol>
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal">
				  <div class="form-group">
				    <label for="inputText1" class="col-sm-2 control-label">学号</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="inputText1" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputText2" class="col-sm-2 control-label">姓名</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputText2" placeholder="姓名">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="col-sm-2 control-label"> 头像 </label>
				    <div class="col-sm-10">
				      <input type="file" >
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="col-sm-2 control-label">性别</label>
				    <div class="col-sm-10">
					    <label class="radio-inline">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 男
						</label>
						<label class="radio-inline">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 女
						</label>
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="col-sm-2 control-label">班级</label>
				    <div class="col-sm-10">
				      	<select class="form-control">
						  <option>前端工程师</option>
						  <option>UI设计师</option>
						  <option>php工程师</option>
						  <option>python工程师</option>
						  <option>java工程师</option>
						</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="birthday" class="col-sm-2 control-label"> 生日 </label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="生日" id="birthday">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputText4" class="col-sm-2 control-label"> Q Q </label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputText4" placeholder="QQ">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputText5" class="col-sm-2 control-label"> 手机 </label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputText5" placeholder="手机">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputText6" class="col-sm-2 control-label"> 个人主页 </label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputText6" placeholder="个人主页">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inlineCheckbox" class="col-sm-2 control-label"> 个人爱好 </label>
				    <div class="col-sm-10">
				      	<label class="checkbox-inline">
						  <input type="checkbox" id="inlineCheckbox1" value="option1"> 阅读
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" id="inlineCheckbox2" value="option2"> 跑步
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" id="inlineCheckbox3" value="option3"> 爬山
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" id="inlineCheckbox3" value="option3"> 打篮球
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" id="inlineCheckbox2" value="option2"> 敲代码
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" id="inlineCheckbox3" value="option3"> 王者荣耀
						</label>
				    </div>
				  </div>
				 
				  <div class="form-group">
				    <label for="inputText7" class="col-sm-2 control-label"> 个人简介 </label>
				    <div class="col-sm-10">
				    	<textarea class="form-control" name="" rows="4" cols="60"  id="inputText7"></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">保存资料</button>
				      <button type="submit" class="btn btn-default">重新填写</button>
				    </div>
				  </div>
				</form>
			</div>
			<div class="col-md-6">
				<img src="./static/img/t1.jpg" class="pull-right img-circle" alt="" />
			</div>
		</div>
  </div>
	<!--底部-->
	<footer>
		<p>
			<a href="login.html">登录</a>
			<a href="photowall.html">照片墙</a>
			<a href="add.html">添加学生</a>
		</p>
		<p>大涛课堂——《学生信息管理系统》</p>
	</footer>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./static/lib/bootstrap/js/bootstrap.js"></script>
   	<script src="./static/lib/jquery.datetimepicker.js"></script>
    <script>
			//jQuery日历插件
			$(function(){
				var options = {lang:'ch',format:'Y-m-d',timepicker:false};
				$('#birthday').datetimepicker(options);
			});
		</script>
  </body>
</html>