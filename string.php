<?php
    $name = 'Super';
    $tmp = 'My name is';
    echo $tmp.' '.$name.'.';

    /* 长度*/
    echo '<br>长度：'.strlen($name);

    /* 查找字符串*/
    echo '<br>'.strpos($name, 'Su');

    /* PHP也会类型自动转换*/
    if (1) {
        echo '<br>1是true.';
    } else {
        echo '<br>0是false.';
    }

    $num = 10;
    switch (true) {
        case $num < 5:
            echo '<br>'.$num.'小于5.';
        break;

        case $num > 5:
            echo '<br>'.$num.'大于5.';
        break;

        default:
        break;
    }

    
?>
