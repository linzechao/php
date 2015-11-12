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

    echo '<br>';

    function autoDomain($src) {
        if (!$src) {return null;}
        $tmp = strtoupper($src);
        echo $tmp.'-->>';

        if (0 === stripos($tmp, 'HTTP://') || 0 === stripos($tmp, 'HTTPS://')) {
            return $src;
        } else {
            return 'http://wwwwwwwwwww:/com'.$src;
        }
    }

    echo autoDomain('http://abck.cn');
    echo '<br>';

    echo autoDomain('abck/ab/aba');
    echo '<br>';

    echo autoDomain('https://abck.com');
    echo '<br>';

    echo autoDomain('ddeewwssgg;');
    echo '<br>';

    echo var_dump(strval(1234));
    echo '<br>';

    $n = 123;
    if (is_null($n)) {
        echo 'is null';
    }
    
?>
