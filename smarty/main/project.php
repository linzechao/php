<?
    # Smarty项目

    # 引入实例化
    require_once('./libs/Smarty.class.php');
    $smarty = new Smarty;

    # 数据恢复：mysql -uroot -p db < data.sql
    # 

    $smarty -> display('08.html');
