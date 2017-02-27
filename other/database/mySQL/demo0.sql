CREATE TABLE tab_student (
id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(10) NOT NULL,
age TINYINT UNSIGNED NULL,
sex ENUM('1', '2', '3') DEFAULT '3',
sid SMALLINT UNSIGNED,
FOREIGN KEY REFERENCES tab_score (id)
);



CREATE TABLE tab_score (
id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
chinese TINYINT UNSIGNED NOT NULL,
math TINYINT UNSIGNED NOT NULL,
english TINYINT UNSIGNED NOT NULL
);

/*


-----------------------------创建表前-----------------------------

RRIMARY KEY, 主键
AUTO_INCREMENT, 自动增长
UNIQUE KEY, 唯一约束
DEFAULT, 默认约束


my.ini [myslqd]
default-storage-engine=INNODB


FOREIGN KEY REFERENCES, 外键约束(数字类型需一致，字符类型则无需)


FOREIGN KEY REFERENCES table (id) ON DELETE CASCADE 
从父表删除或更新且自动删除或更新子表中匹配的行


FOREIGN KEY REFERENCES table (id) ON DELETE SET NULL
不能指定NOT NULL约束
从父表删除或更新行，并设置子表中的外键为空


FOREIGN KEY REFERENCES table (id) ON DELETE RESTRICT
拒绝对父表的删除或更新操作


FOREIGN KEY REFERENCES table (id) ON DELETE NO ACTION
标准SQL的关键字，在MySQL中与RESTRICT相同



-----------------------------创建表后-----------------------------
添加列
ALTER TABLE tab_score ADD computer TINYINT UNSIGNED NOT NULL;
ALTER TABLE tab_score ADD Sports TINYINT UNSIGNED NOT NULL AFTER computer;
ALTER TABLE tab_score ADD oooo TINYINT UNSIGNED NOT NULL FIRST;

删除列
ALTER TABLE score DROP oooo;
ALTER TABLE score DROP 1111, DROP 2222;

添加主键约束
ALTER TABLE score ADD CONSTRAINT PK_score PRIMARY KEY (id);

添加唯一约束
ALTER TABLE score ADD UNIQUE (id);

添加外键约束
ALTER TABLE score ADD FOREIGN KEY (sid) REFEREMCES tab_student (id);

删除主键约束（不需要制订列名）
ALTER TABLE score DROP PRIMARY KEY

删除唯一约束（或索引）
ALTER TABLE score DROP INDEX lie;

删除外键约束
ALTER TABLE score DROP FOREIGN KEY PK;


修改列定义
ALTER TABLE tab_score MODIFY computer TINYINT UNSIGNED NOT NULL FIRST;

修改列名称
ALTER TABLE tab_score CHANGE computer new_computer TINYINT UNSIGNED NOT NULL;


修改表名
ALTER TABLE tab_score RENAME new_table
RENAME TABLE tab_score TO new_table




*/


SELECT * FROM tab_student;
SELECT * FROM tab_score;



INSERT tab_student VALUES(NULL, '林泽超', 22, 1, 1);
INSERT tab_student VALUES(NULL, '休叵', 18, 2, 2);
INSERT tab_student VALUES(NULL, '超哥', 25, 1, 3);
INSERT tab_student VALUES(NULL, '小林', 10, 2, 4);

INSERT tab_score VALUES(DEFAULT, 100, 100, 40);

INSERT tab_score SET chinese = 80, math = 90, english = 60;


UPDATE tab_score SET chinese = chinese * .8 where id = 2;

/*删除表数据*/
DELETE FROM tableName where id = 4;

SELECT VERSION();
SELECT NOW();

SHOW COLUMNS FROM tab_score;


SELECT chinese AS c, math AS m, english AS e FROM tab_score;


/*分组*/
SELECT sex FROM tab_student GROUP BY sex;
SELECT * FROM tab_score GROUP BY 1;

/*HAVING必须出现在查询结果中*/
SELECT sex, age FROM tab_student GROUP BY age HAVING age > 20;

SELECT * FROM tab_student GROUP BY age HAVING count(age) >= 1 ORDER BY age ASC;
SELECT * FROM tab_student GROUP BY age HAVING count(age) >= 1 ORDER BY age DESC;

SELECT * FROM tab_student ORDER BY sex, age;



/*返回几条数据*/
/*第1条开始到第3条*/
SELECT * FROM tab_student LIMIT 3;
/*从第2条开始取2条记录*/
SELECT * FROM tab_student LIMIT 1, 2;


/*插入已有表中数据*/
INSERT test(name) SELECT name FROM tab_student LIMIT 2;


/*子查询*/
SHOW TABLES;
SHOW COLUMNS FROM tab_student;
SELECT * FROM tab_student;













