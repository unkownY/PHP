<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8" />
</head>
<body>
	<?php 

		$db = "ycj";
		$user = "root";
		$conpass = "ycj19950510";
		$server = "127.0.0.1";
		$conn = mysqli_connect($server ,$user ,$conpass ,$db);

		$username = $_POST['username'];			//用户名
		$userpasswd = $_POST['userpasswd'];		//密码
		$flag = $_POST['flag'];					//标志  区分 学生 和管理员

		if($conn) {
			switch ($flag) {
				case '1':		//学生
					$stu_sql = "select passwd from student where name ='" .$username ."'";
					$stu_result = mysqli_query($conn ,$stu_sql );
					$stu_passwd = mysqli_fetch_assoc($stu_result)["passwd"];

					if($stu_passwd==$userpasswd && isset($userpasswd) && isset($stu_passwd)) {
						echo "<script>";
						echo "window.location.href='stu.php'";
						echo "</script>";
					}
					else {
						echo "<script>";
						echo "alert('学生密码或用户名错误')";
						echo "window.location.href='index.html'";
						echo "</script>";
					}
					break;
				
				case '2':		//管理员
					$admin_sql = "select admin_passwd from admin where admin_id ='" .$username ."'";
					$admin_result = mysqli_query($conn ,$admin_sql );
					$adm_passwd = mysqli_fetch_assoc($admin_result)["admin_passwd"];

					if($adm_passwd==$userpasswd && isset($userpasswd) && isset($adm_passwd)) {
						echo "<script>";
						echo "window.location.href='admin.php';";
						echo "</script>";
					}
					else {
						echo "<script>";
						echo "alert('管理员密码或用户名错误');";
						echo "window.location.href='index.html';";
						echo "</script>";
					}
					break;

				default:
					echo "<script>";
					echo "confirm('出现了未知错误.');";
					echo "window.location.href='login.php';";
					echo "</script>";
					break;
			}

		}
	?>
</body>
</html>