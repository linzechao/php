<?php
    // alert弹出
    // echo $_SERVER["PHP_SELF"].'<script>alert("Hacked")</script>';
    // 过滤html
    echo htmlspecialchars($_SERVER["PHP_SELF"].'<script>alert("Hacked")</script>');
    echo '<br>';

    // 去除反斜杠，与使用单引号，再去除反斜杠一致功能
    echo "\n\t\s\/";
    echo '<br>';
    echo stripslashes('\n\t\s\/');
?>
