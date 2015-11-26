<?
    # 缓存

    # 引入实例化
    require_once('./libs/Smarty.class.php');
    $smarty = new Smarty;

    # 页面缓存，生成文件缓存
    # 数据缓存，mysql读取缓存到更快的介质上(内存)

    # 开启页面缓存
    # 默认在cache文件夹中
    # 数据更改，需要删除缓存文件
    $smarty -> caching = 1; # 使用cache_lifetime时间来判断
    $smarty -> caching = 2; # 根据缓存文件自身的时间判断，前面注释代码里，在程序中修改cache_lifetime不会影响缓存时间

    # 修改固定时间刷新
    # 单位秒
    $smarty -> cache_lifetime = 20;

    # 单个变量不缓存
    # {$title nocache}
    # 也是不缓存
    $smarty -> assign('title', '标题', true);

    # 局部不缓存
    # {nocache}...{/nocache}

    # 缓存集合


    # 假如是分页
    $page = 4;
    # display(模板, 标记)
    $smarty -> display('07.html', $page);

    # 是否已经缓存了
    # $smarty -> isCached('07.html');
