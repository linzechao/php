<?php
    // die会直接退出程序
    // die ('File not found.');
    // echo 'is Echo.';

    // 抛出异常
    try {
        throw new Exception('throw the error.');
    } catch(Exception $e) {
        echo $e->errorMessage();
    }
?>
