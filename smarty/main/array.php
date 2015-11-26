<?
    # 数组的使用

    # 引入实例化
    require_once('./libs/Smarty.class.php');
    $smarty = new Smarty;

    $smarty -> assign('set', array(
        'name' => 'Super',
        'mini' => 'Chao'
    ));

    $smarty -> assign('list', array('HTML', 'CSS', 'JavaScript', 'NodeJs', 'PHP', 'MySQL'));
    $smarty -> assign('empty', array());

    $smarty -> display('04.html');
