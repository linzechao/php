<?php
    echo htmlspecialchars('<?php ... ?>');
    echo '<br>';
    echo '传统边界符';
    echo '<br>';
    echo '上线产品推荐使用';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
?>


<?
    echo htmlspecialchars('<? ... ?>');
    echo '<br>';
    echo '需要在PHP.ini中配置：short_open_tag = On';
    echo '<br>';
    echo '短标记风格(学习、测试使用)';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
?>


<%
    echo htmlspecialchars('<% ... %>');
    echo '<br>';
    echo '需要在PHP.ini中配置：asp_tags = On';
    echo '<br>';
    echo 'asp.net风格';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
%>


<script language="php">
    echo htmlspecialchars('<script language="php"></script>');
    echo '<br>';
    echo '需要在PHP.ini中配置：asp_tags = On';
    echo '<br>';
    echo '脚本标记风格';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
</script>
