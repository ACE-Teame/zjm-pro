<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<title>链接统计系统</title>
	<link rel="stylesheet" type="text/css" href="css/font/iconfont.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<div class="container clear">
		<div class="container-left">
			<div class="logo">
				<div class="img"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
			</div>
			<ul class="nav">
				<li>
				    <a href="index.php" class="active menu_list">首页</a>
				</li>
				<li>
				    <a href="domain.php" class="menu_list">域名管理</a>
				</li>
				<li>
				    <a href="dp-links.php" class="menu_list">部门链接管理</a>
				</li>
				<li>
				    <a href="links.php" class="menu_list">个人链接管理</a>
				</li>
				<li>
				    <a href="permit.php" class="menu_list">权限管理</a>
				</li>
			</ul>
		</div>
		<div class="container-right">
			<div class="top">
				<ul class="handle">
					<li><a href="#" class="login">登录</a></li>
				</ul>
			</div>
			<div class="main">
				<h2>权限管理</h2>
				<div class="operate">
					<a href="#" class="btn add">新增</a>
				</div>

				<div class="table">
					<table>
						<thead>
							<tr>
								<th>序号</th>
								<th>用户名</th>
								<th>密码</th>
								<th>权限</th>
								<th>状态</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>John</td>
								<td>***</td>
								<td>管理员</td>
								<td>启用</td>
								<td>
									<a href="#" class="btn modify">修改</a>
									<a href="#" class="btn delete">删除</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div> <!-- end table -->
			</div><!-- end main -->

			<div class="popup">
				<div class="content">
					<div class="title">新增</div>
					<div class="form">			
						<form action="#" class="operateForm">
							<div class="entry">
								<input type="hidden" name="domainID">
							</div>
							<div class="entry">
								<label>用户名:</label>
								<input type="text" name="username" placeholder="">
							</div>
							<div class="entry">
								<label>密码</label>
								<input type="text" name="password" placeholder=""> 
							</div>
							<div class="entry">
								<label>权限:</label>
								<input type="text" name="power" placeholder="">
							</div>
							<div class="entry">
								<label>状态:</label>
								<input type="text" name="status" placeholder="">
							</div>
						</form>
					</div>
					<div class="operate">					
						<a href="#" class="btn save">保存</a>
						<a href="#" class="btn cancle">取消</a>
					</div>
					<div class="close"><a href="#" class="btn-close"><i class="iconfont icon-close"></i></a></div> 
				</div>
			</div><!-- end popup -->

			<div class="popupLogin">
				<div class="content">
					<div class="title">登录</div>
					<div class="form">						
						<form action="#" class="loginForm">
							<div class="entry">
								<input type="hidden" name="dplinkID">
							</div>
							<div class="entry">
								<label>用户名:</label>
								<input type="text" name="username" placeholder="">
							</div>
							<div class="entry">
								<label>密码:</label>
								<input type="password" name="password" placeholder=""> 
							</div>
						</form>
					</div>
					<div class="operate">					
						<a href="#" class="btn save">登录</a>
						<a href="#" class="btn cancle">取消</a>
					</div>
					<div class="close"><a href="#" class="btn-close"><i class="iconfont icon-close"></i></a></div> 
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>