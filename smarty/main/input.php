<?
    # 表单的使用

    # 引入实例化
    require_once('./libs/Smarty.class.php');
    $smarty = new Smarty;

    $smarty -> assign('seled', 'd');

    $smarty -> assign('outval', array(
        'a' => '足球',
        'b' => '篮球',
        'c' => '排球',
        'd' => '桌球'
    ));

    $smarty -> display('05.html');
