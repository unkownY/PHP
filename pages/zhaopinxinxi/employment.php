<!DOCTYPE html>
<html>
<head>
	<title>The Content</title>
	<!-- <meta charset="utf-8"> -->
	<!-- <link rel="stylesheet" type="text/css" href="/css/main.css"> -->
	<script src="/script/whole.js"></script>
	</head>
<body onload="a();">

	<div style="width:80%;margin: auto;">

		<?php
			system('python XiDian.py');
			$flag = $_GET['flag'];
			switch ($flag) {
				case "'south'":
					echo "<h3 style='text-align:center;'>South Campus</h3>";
					$south_path = 'XD_S.txt';
					if(file_exists($south_path)){
						$south = fopen($south_path, 'r');
						$contents = fread($south, filesize($south_path));
						echo $contents;
						fclose($south);
					}
					break;
				case "'north'":
					echo "<h3 style='text-align:center;'>North Compus</h3>";
					$north_path = 'XD_N.txt';
					if(file_exists($north_path)){
						$north = fopen($north_path, 'r');
						$contents = fread($north, filesize($north_path));
						echo $contents;
						fclose($north);
					}
					break;
				default:
					echo '<script>alert("Please Choose .");window.location.href="NorS.php"</script>';
					break;
			}

		?>
	</div>

</body>
</html>