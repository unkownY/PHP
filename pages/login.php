<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF8">
</head>
<body>
<?php
	$name = $_POST['username'];
	$passwd = $_POST['userpasswd'];

	// 链接数据库
	$server = "127.0.0.1";
	$user = "root";
	$pswd = "ycj19950510";
	$db = "ycj";
	$conn = mysqli_connect($server ,$user ,$pswd , $db);

	if($conn){		//数据库连接成功
		$select_sql = "select passwd from vip_user where name ='" .$name ."'";
		$select_result = mysqli_query($conn ,$select_sql );
		$result = mysqli_fetch_assoc($select_result)["passwd"];

		if ($passwd==$result && isset($passwd) && isset($result)) {
			echo "<script>";
			echo "window.location.href='main.php'";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo 'alert("账号或密码错误！");';
			echo 'window.history.back()';
			echo "</script>";
		}
	}
	else{ 			//数据库连接失败
		echo "数据库连接失败";
	}
		
?>
</body>
</html>
