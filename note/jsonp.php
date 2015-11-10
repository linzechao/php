<?php
header('Content-type: application/json');

//获取回调函数名
$callback = htmlspecialchars($_REQUEST['callback']);

//json数据
$json_data = '{"name": "Mr. Super", "sex": 1, "age": 24, "job": "Fe"}';

//输出jsonp格式的数据
echo $callback . '(' . $json_data . ')';