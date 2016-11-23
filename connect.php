<?php
	$server = "localhost";
	$db_username = "root";
	$db_password = "";

	//连接数据库
	$con = mysql_connect($server, $db_username, $db_password);
	if (!$con) {
		die("链接失败".mysql_error());
	}

	//选择数据库
	mysql_select_db("form", $con);

	//告诉服务器编码为utf-8
	mysql_query("set names 'UTF8'");
?>