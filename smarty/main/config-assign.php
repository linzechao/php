<?
    # 配置与assign使用

    # 引入实例化
    require_once('./libs/Smarty.class.php');
    $smarty = new Smarty;

    # 定界符配置
    # $smarty -> left_delimiter = '{{';
    # $smarty -> right_delimiter = '}}';
    # 文件夹配置
    # $smarty -> setTemplateDir('./view');
    # $smarty -> setCompileDir('./view_c');

    # 传入参数
    $smarty -> assign('title', '01.html');
    $smarty -> assign('header', '01.html');
    $smarty -> assign('about', '这是一个01.html页面。');

    # 显示页面
    # 默认templates目录
    $smarty -> display('01.html');
