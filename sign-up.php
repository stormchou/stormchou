<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册后台</title>
	<meta http-equiv="refresh" content="5; url=log-in.html">
<style>
* {
	margin: 0;
	padding: 0;
}
body {
	background: #f4f4f4;
}
.wrap {
	width: 960px;
	margin: 0 auto;
	background: #fff;
}
.content {
	width: 30%;
	margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrap">
	<div class="content">
		<?php
			print "Hello，".$_POST["user"]." ，欢迎来到waswaswas，你已注册成功"
		?>
		<div class="second">现在请稍等<span id="seconds">5</span>秒后，带你去登录页面</div>
	</div>
</div>
</body>
</html>