<?php
    // 打开文件
    $file = fopen('README.md', 'r');
    // echo $file;

    // 循环判断是否到达文件末尾
    while(!feof($file)) {
        // 逐行读
        // echo fgets($file).'<br>';
        // 逐字(字节)读
        echo fgetc($file).'<br>';
    }

    // 关闭文件
    fclose($file);
?>
