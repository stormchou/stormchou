<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录后台</title>
	<link rel="stylesheet" href="../css/share-backstage.css">
</head>
<body>
	<?php
		//连接数据库
		include("connect.php");

		//提取表单的值
		$name = $_POST["user"];
		$password = $_POST["password"];

		if ($name && $password) {//如果用户名和密码都不为空
			$sql = "select * from user where username = '$name' and password = '$password'";//检测数据库是否有对应的username和passwor的sql
			$result = mysql_query($sql, $con);
			$rows = mysql_num_rows($result);//返回一个数值
			if ($rows) {//0 false  1 true
				header("refresh:0; url = ../home.html");//如果成功跳转至首页
			} else {
				echo "
					<script>
						alert('用户名或密码错误,点击确定重新登录');
					</script>
				";
				header("refresh:0; url = ../log-in.html");
			}
		} else {//如果用户名或密码为空
			echo "
				<script>
					alert('页面填写不完整，点击确定重新填写');
				</script>
			";
			header("refresh:0; url = ../log-in.html");
		}
		
		//关闭数据库
		mysql_close();
	?>
</body>
</html>