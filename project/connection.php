<!DOCTYPE html>
<html lang="cmn-Hands">
<head>
    <meta charset="utf-8">
    <title>Connection</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
</head>
<body class="container">
    <?
        # 数据库连接常量
        define('HOST', 'localhost');
        # 账号错误都连接成功？
        define('USER', 'root');
        define('PWD', '');
        define('DB', 'sc');

        # 需要在PHP.ini中，启动mysql拓展

        # 连接数据库
        # 加上@号，可以屏蔽乱七八糟的错误提示
        $link = @mysql_connect(HOST, USER, PWD) or die('<span class="text-danger">连接失败...</span>');
        echo '<span class="text-success">连接成功...</span><br>';

        # 选择数据库

        # 方法1
        # mysql_query('use '.DB) or die('<span class="text-danger">选择数据库失败...</span>');

        # 方法2
        mysql_select_db(DB) or die('<span class="text-danger">选择数据库失败...</span>');
        echo '<span class="text-success">选择数据库成功...</span><br>';

        # 设置字符编码
        mysql_query('set names utf8');

        # 取出数据
        $result = mysql_query('select * from user');
        echo '<span class="text-info">资源类型：';
        var_dump($result);
        echo '...</span><br>';

        # 获取总数
        echo '<span class="text-primary">总数：', mysql_num_rows($result), '</span><br>';

        $table = '<table class="table table-hover table-bordered table-striped table-condensed"><thead><tr>'.
            '<th>ID</th>'.
            '<th>Name</th>'.
            '<th>Sex</th>'.
            '<th>Birth</th>'.
            '<th>Address</th>'.
            '<th>Email</th>'.
            '<th>Phone</th>'.
            '<th>QQ</th>'.
            '<tr></thead><tbody>';

        # foreach只能循环PHP数组
        # 匹配行

        # mysql_fetch_row: 索引数组
        # mysql_fetch_assoc: 关联数组
        # mysql_fetch_array: 索引、关联数组都支持
        # mysql_fetch_object: 返回对象

        while ($res = mysql_fetch_assoc ($result)) {
            // print_r($res);
            $table .= '<tr><td>'.$res['id'].'</td>'.
                '<td>'.$res['name'].'</td>'.
                '<td>'.$res['sex'].'</td>'.
                '<td>'.$res['birth'].'</td>'.
                '<td>'.$res['address'].'</td>'.
                '<td>'.$res['email'].'</td>'.
                '<td>'.$res['phone'].'</td>'.
                '<td>'.$res['qq'].'</td></tr>';
        }

        $table .= '</tbody></table>';
        echo $table;

        # 查询：select、show -> 记录集
        # 操作：insert、update、dalete、drop -> boolean || null



        # 释放资源
        # 自动执行释放资源，可不必要手动
        mysql_free_result($result);

        # 关闭数据库
        mysql_close($link);
    ?>
</body>
</html>
