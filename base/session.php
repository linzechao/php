<?php
    // 开始session
    session_start();

    $_SESSION['name'] = 'Super';

    echo $_SESSION['name'];

    // 销毁变量
    unset($_SESSION['views']);

    // 销毁session
    session_destroy();

    echo isset($ohmygod);
?>
