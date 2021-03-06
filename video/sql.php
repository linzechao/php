<?
    echo '# 连接<br>';
    echo '# 进入mysql安装的bin目录<br>';
    echo 'mysql -hlocalhost -uroot -proot -P3306<br>';
    echo 'mysql -uroot -p';

    echo '<hr>';
    echo '# 创建<br>';
    echo 'create database dbName [charset=utf8];';

    echo '<hr>';
    echo '# 显示<br>';
    echo 'show databases;';

    echo '<hr>';
    echo '# 判断<br>';
    echo 'if not exists';
    
    echo '<hr>';
    echo '# 关键字<br>';
    echo '加上反引号即可<br>';
    echo 'create database `create`;';

    echo '<hr>';
    echo '# 查询数据库创建语句<br>';
    echo 'show cretae batabase dbName;';

    echo '<hr>';
    echo '# 更改数据库字符编码<br>';
    echo 'alter database dbName charset=utf8;';

    echo '<hr>';
    echo '# 删除数据库<br>';
    echo 'drop database if exists dbName;<br>';

    echo '<hr>';
    echo '# 选择数据库<br>';
    echo 'use dbName;';

    echo '<hr>';
    echo '# 创建表<br>';
    echo 'create table tabName (<br>';
    echo 'id int [null || not null] [default "def"] [auto_increment] [primary key]<br>';
    echo ');<br>';
    echo '# 主键可以由多个字段一起组成';

    echo '<hr>';
    echo '# 数据类型<br>';
    echo 'int(整数) tinyint(小整数) binary(二进制) decimal(3总位数, 1小数位数) char(定长-效率高) varchar(可变长度-效率低) text(文本)';

    echo '<hr>';
    echo '# 查看所有表<br>';
    echo 'show tables;';

    echo '<hr>';
    echo '# 查看创建表语法<br>';
    echo 'show create table tabName \G;';

    echo '<hr>';
    echo '# 显示表结构<br>';
    echo '(describe || desc) tabName;';

    echo '<hr>';
    echo '# 删除表<br>';
    echo 'drop table tabName[, ..., ...];';

    echo '<hr>';
    echo '# 增加数据<br>';
    echo 'insert into tabName (id, name) values (null, "super");<br>';

    echo '<hr>';
    echo '# 删除数据<br>';
    echo 'delete from tabName [where];';

    echo '<hr>';
    echo '# 修改数据<br>';
    echo 'update tabName set name = "super", sex = "man" where id = 44;';

    echo '<hr>';
    echo '# 查询数据<br>';
    echo 'select * from tabName [where] [order by age (desc-降序 || asc-升序-默认)] [limit 0, 10];';

    echo '<hr>';
    echo '# 聚合函数<br>';
    echo 'sum(求和)，avg(求平均值)，max(最大值)，min(最小值)，count(记录数);';

    echo '<hr>';
    echo '# 注意<br>';
    echo 'utf8, 没有横杠；f赋值与判断相等，都是=号；不相等使用<><br>';
    echo '与、或、非 -> and、or、not<br>';
