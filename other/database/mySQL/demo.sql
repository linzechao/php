SELECT concat('super','-', 'chao');

SELECT concat_ws('-','super', 'chao', 'chao');

SELECT format(3500.10, 2);

SELECT lower('SuperChao');

SELECT upper('SuperChao');

SELECT left('SuperChao', 5);

SELECT right('SuperChao', 4);

SELECT length('Suepr Chao');

SELECT ltrim('  Super Chao    ');

SELECT rtrim('  Super Chao    ');

SELECT trim('  Super Chao    ');

SELECT trim(LEADING '?' FROM '??SuperChao??');/*删除前缀*/

SELECT trim(TRAILING '?' FROM '??SuperChao??');/*删除后 缀*/

SELECT replace('S u p e r C h a o', ' ', '');
 
SELECT substring('Super Chao', 1, 5);/*从1开始*/

SELECT 'Super Chao' LIKE '%S';

SELECT * FROM test WHERE first_name LIKE '%1%%' ESCAPE '1';

/*
%:任意字符
_:任意一个字符
*/




/*
数值运算
*/

SELECT ceil(25.001);

SELECT floor(25.99);

SELECT 3/4;

SELECT 8 DIV 5;/*取整*/

SELECT 8 MOD 5;/*取模*/

SELECT power(2, 3);

SELECT round(3.14159, 2);

SELECT truncate(125.89, 1);

SELECT truncate(125.89, -1);

SELECT 15 BETWEEN 1 AND 22;

SELECT 25 NOT BETWEEN 1 AND 22;

SELECT 10 IN(5, 10, 15, 2);

SELECT NULL IS NULL;

/*
日期函数
*/

SELECT NOW();
SELECT CURDATE();
SELECT CURTIME();

SELECT DATE_ADD('2014-3-12', INTERVAL -+365 DAY);

SELECT DATE_ADD('1992-4-11', INTERVAL 3 YEAR);

SELECT DATE_ADD('1992-4-11', INTERVAL 3 WEEK);

SELECT DATEDIFF('1992-4-11', (SELECT CURDATE()));

SELECT DATE_FORMAT('1992-4-11', '%m/%d/%Y');


/*
信息函数
*/
SELECT CONNECTION_ID();
SELECT DATABASE();

DESC tab_student;

SELECT LAST_INSERT_ID();

SELECT USER();

SELECT VERSION();


/*
聚合函数
*/
SELECT AVG();
COUNT();
MAX();
MIN();
SUM();



SHOW TABLES;

/*
加密函数
*/

MD5();
PASSWORD();


SELECT MD5('Super');

SELECT PASSWORD('Super');/*修改个人密码使用*/


/*自定义函数*/
SELECT DATE_FORMAT(NOW(), '%Y年%m月%d日 %H点:%i分:%s秒');

CREATE FUNCTION fy() RETURNS VARCHAR(30)
RETURN DATE_FORMAT(NOW(), '%Y年%m月%d日 %H点:%i分:%s秒');

SELECT fy();

DROP FUNCTION AVG2;


CREATE FUNCTION AVG2(n1 SMALLINT UNSIGNED, n2 SMALLINT UNSIGNED)
RETURNS FLOAT(10, 2) UNSIGNED
RETURN (n1+n2)/2;


/*解决创建函数方法*/
show variables like 'log_bin_trust_function_creators';
set global log_bin_trust_function_creators=1;

SELECT AVG2(100, 50);



/*使用分号结束*/
DELIMITER //

CREATE FUNCTION addUser(username VARCHAR(20))
RETURNS INT UNSIGNED
BEGIN
INSERT test(username) VALUES(username);
RETURN LAST_INSERT_ID();
END
//



/*
存储过程
优点：
1、增强SQL语句的功能和灵活性
2、实现较快的执行速度
3、减少网络流量

IN: 表示该参数的值必须在调用存储过程时指定
OUT: 表示该参数的值可以被存储过程改变，并且可以返回
INOUT: 表示该参数的值被调用时指定，并且可以被改变和返回
*/
CREATE PROCEDURE sp1()
SELECT VERSION();

CALL sp1;

DELIMITER //
CREATE PROCEDURE removeUserById(IN p_id INT UNSIGNED)
BEGIN
DELETE FROM users WHERE id = p_id;
END
//
DELIMITER ;

CALL removeUserById(4);

DELIMITER //
CREATE PROCEDURE removeUserAndReturnUserNums(IN p_id INT UNSIGNED, OUT userNums INT UNSIGNED)
BEGIN
DELETE FROM users WHERE id = p_id;
SELECT count(id) FROM users INTO userNums;
END
//
DELIMITER ;

CALL removeUserAndReturnUserNums(27, @nums);

SELECT @nums;
SET @i = 7;

/*使用系统函数*/
SELECT ROW_COUNT();

DELIMITER //
CREATE PROCEDURE rubaaris(IN p_age SMALLINT UNSIGNED, OUT dle_user SMALLINT UNSIGNED, OUT user_count SMALLINT UNSIGNED)
BEGIN
DELETE FROM users WHERE age = p_age;
SELECT ROW_COUNT() INTO del_user;
SELECT COUNT(id) INTO user_count;
END
//
DELIMITER ;

CALL rubaaris(20, @dle_user, @user_count);


/*
存储引擎

1、MyISAM
2、InnoDB
3、Memory
4、CSV
5、Archive

*/

SHOW TABLES;

SHOW CREATE TABLE tab_student;

























