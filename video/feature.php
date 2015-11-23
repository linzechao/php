<?
    IF (1) {
        echo '// 关键字不区分大小写，变量名区分大小写';
        eChO '<br>';
        ECHO '我是使用的大写关键字的方式输出的。';
    }

    echo '<hr>';

    // 赋值有传值与传址
    $x = array('arr' => array('super', 'chao'));
    $y = $x['arr'];
    array_push($y, 'lin');
    var_dump($x);

    echo '<hr>';

    echo '// 使用“&”赋值';
    echo '<br>';
    $a = array('arr' => array('super', 'chao'));
    $b = &$a['arr'];
    array_push($b, 'lin');
    var_dump($a);

    echo '<hr>';

    echo '// 销毁变量名';
    echo '<br>';
    unset($a);
    var_dump($b);

    echo '<hr>';

    echo '// 变量可以存变量名，使用$$来获取';
    echo '<br>';
    $i = '锄禾日当午';
    $y = 'i';
    echo $$y;

    echo '<hr>';
    echo '常量：一定要赋值';
    ECHO '<br>';
    define('COUNTANT', '常量');
    ECHO COUNTANT;


    ECHO '<hr>';
    echo '// 判断是否已定义';
    echo '<br>';
    ECHO 'defined("COUNTANT")';
    IF (!defined("COUNTANT")) {
        ECHO '未定义COUNTANT';
    };
