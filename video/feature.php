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
    print_r($x);

    echo '<hr>';

    echo '// 使用“&”赋值';
    echo '<br>';
    $a = array('arr' => array('super', 'chao'));
    $b = &$a['arr'];
    array_push($b, 'lin');
    print_r($a);

    echo '<hr>';

    echo '// 销毁变量名', '<br>';
    echo 'unset()';
    echo '<br>';
    unset($a);
    print_r($b);

    echo '<hr>';

    echo '// 判断是否设置了变量', '<br>';
    echo 'isset()';

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

    // 判断是否为数字或数字字符串
    is_numeric('1234');

    // 判断是否为整数
    is_int(123.4);

    echo '<br>';

    var_dump(+'44');

    echo '<br>';
    // 多分支
    echo 'elseif推荐使用，至于什么鬼性能，就不知道了。';
    if (true) {

    } elseif (false) {

    }

    echo '<hr>';

    $w = 1;
    while ($w < 10) {
        ++$w;
        if (!$w % 3) {
            break;
        }
        echo $w.'<br>';
    }