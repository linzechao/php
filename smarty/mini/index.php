<?
    require('./MiniSmarty.class.php');
    $smarty = new Smarty;
    $smarty -> assign('title', 'Title');
    $smarty -> assign('about', 'About Me.');
    $smarty -> assign('time', Date('Y-m-d h:m:s'));
    $smarty -> display('index.html');
