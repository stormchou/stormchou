<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册后台</title>
	<link rel="stylesheet" href="../css/share-backstage.css">
</head>
<body>
<?php
	//链接数据库
	include("connect.php");

	//提取表单的值
	$name = $_POST["user"];
	$password = $_POST["password"];

	//如果用户名或密码为空
	if (!$name || !$password) {
		echo "
			<script>
				alert('页面填写不完整，点击确定重新填写');
			</script>
		";
		header("refresh:0; url = ../sign-up.html");
		exit();
	}

	//判断用户名是否已经注册过
	$sql = "select username from user";
	$result = mysql_query($sql, $con);
	while ($row = mysql_fetch_array($result)) {
		if ($name == $row["username"]) {
			echo "
				<script>
					alert('用户名已被注册, 点击确定重新注册');
				</script>
			";
			header("refresh:0; url=../sign-up.html");
			exit();
		}
	}
?>
<header></header>
<div class="wrap">
	<div class="logo">
		<img src="../img/backstage-logo.png" width="272px" height="239px">
	</div>
	<div class="content-top">
		<?php
			$sql_2 = "insert into user(username, password) values('$name', '$password')";//向数据库插入表单传来的值的sql
			$result_2 = mysql_query($sql_2, $con);//执行sql
			if (!$result_2) {
				die("Error: ".mysql_error());//如果sql执行失败输出错误
			}
			else {
				echo "Hello, "."<strong>".$name."</strong>"." , 你已注册成功";
				header("refresh:5; url = ../log-in.html");
			}

			//关闭数据库
			mysql_close($con);
		?>
	</div>
	<div class="content-bottom">
		<p>网页正在跳转, 请稍等 <span id="seconds"> 5 </span> 秒</p>
	</div>
</div>
<script src="../js/share-time.js"></script>
</body>
</html>