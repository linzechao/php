<?
    echo '<h3>WAMP</h3>';
    echo '1、虚拟目录修改<br>';
    echo 'httpd.conf<br>';
    echo '--路径：DocumentRoot<br>';
    echo '--权限：Directory<br>';

    echo '<hr>';

    echo '2、默认首页<br>';
    echo 'httpd.conf<br>';
    echo '--DirectoryIndex<br>';
    echo '----index.*';

    echo '<hr>';

    echo '3、修改端口号<br>';
    echo 'httpd.conf<br>';
    echo '--Listen<br>';
    echo '可以多个Linsten *<br>';

    echo '<hr>';

    echo '4、虚拟主机(与第5个步骤配合)<br>';
    echo 'httpd.conf<br>';
    echo '--vhosts<br>';
    echo '----httpd-vhosts.conf';
    /*
    <VirtualHost *:80>
        DocumentRoot "d:/web"
        ServerName www.sc.com
            <Directory "d:/web">
                Allow from all
            </<Directory>>
    </VirtualHost>
    */

    echo '<hr>';

    echo '5、DNS域名配置<br>';
    echo 'hosts<br>';
    echo '--localhost<br>';
