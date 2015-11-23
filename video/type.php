<?
    echo '<h3>1、标量类型</h3>';
    echo '1、整数(integer)：-2<sup>31</sup> ~ 2<sup>31</sup> - 1';
    echo '<br>';
    echo '2、浮点(float)：整数与小数都可以';
    echo '<br>';
    echo '3、布尔(boolean)：true、false';
    echo '<br>';
    echo '4、字符串(string)：使用引号包住';
    echo '<br>';
    echo '--双引号的变量会被替换，所以使用单引号包住的才算真正的字符串';
    echo '<br>';
    echo '--单引号效率高';
    echo '<br>';
    define('NAME', 'Chao');
    $name = 'Super';
    // echo "{$name}Chao";
    echo "${name}";
    // 取不了常量
    // echo '<br>';
    // echo "${NAME}";
    echo '<hr>';

    echo '<h3>2、复合类型</h3>';
    echo '1、数组';
    echo '<br>';
    echo '2、对象';
    echo '<hr>';

    echo '<h3>3、</h3>';
    echo '<hr>';

    echo '<h3>4、</h3>';
    echo '<hr>';
