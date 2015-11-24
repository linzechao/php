<!DOCTYPE html>
<html lang="cmn-Hands">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
</head>
<body class="container">
    <h4 class="text-center">User Login</h4>
    <?
        # 判断是否登录
        if (isset($_POST['submit'])) {
            $user = $_POST['user'];
            $pwd = $_POST['pwd'];
            # 跳转页面
            header('location: http://www.baidu.com');

            # GET方式提交大小容量
            # PHP.ini

            # POST方式
            # XML格式提交
            # post_max_size = 8M
        }
    ?>
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label class="col-xs-2 control-label text-right" for="user">User：</label>
            <span class="col-xs-10">
                <input id="user" class="form-control" name="user" type="text" placeholder="email / phone / qq / user" required>
            </span>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label text-right" for="pwd">Password：</label>
            <span class="col-xs-10">
                <input id="pwd" class="form-control" name="password" type="password" placeholder="6 ~ 20 Char..." required>
            </span>
        </div>
        <div class="form-group">
            <div class="col-xs-10 col-xs-offset-2">
                <input id="submit" name="submit" class="btn btn-default" type="submit" value="Login">
            </div>
        </div>
    </form>
</body>
</html>
