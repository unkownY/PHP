<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="css/index.css" type="text/css">
        <script type="text/javascript" src="js/index.js"></script>
    </head>

<body onload=a(); onresize=a();>
    <div class="login" id="login">

        <div class="infomation">

            <form action="test.php" method="post">

                <table>
                    <tbody>
                        <tr>
                            <td><input type="text" id="name" name="name" class="text" placeholder="用户名"></td></tr>
                        <tr>
                            <td><input type="password" id="passwd" name="passwd" class="text" placeholder="密码"></td></tr>
                        <tr>
                            <td><input type="submit" value="登 录" class="logbt"></td></tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>