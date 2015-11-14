<?php
    // 发送邮件
    $from = 'linzechao44@163.com';
    $to = '631924081@qq.com';
    $subject = 'PHP Email Test.';
    $message = '来自PHP发送邮件';
    $headers = "From: $from";

    // 需要在php.ini中配置服务
    // mail($to, $subject, $message, $headers);
    echo 'Mail Send...';
?>
