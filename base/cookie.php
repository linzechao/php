<?php
    // 设置
    // 1小时的时限
    setcookie('super', 24, time() + 3600);

    echo $_COOKIE['super'];
    echo '<br>';

    // 删除
    // 什么鬼，下面删除后，上面就设置
    setcookie('super', '', time() - 10);
    echo $_COOKIE['super'];
?>
