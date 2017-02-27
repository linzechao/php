#### MongoDB

> 1、新建启动服务器bat文件，名为(自定义)：mongodbserver.bat，内容为
``` bash
mongod --dbpath F:\MongoDBData
```
> 2、新建连接服务器bat文件，名为(自定义)：linkserver.bat，内容为
``` bash
mongo 127.0.0.1:27017/admin
```
> 3、先打开mongodbserver.bat、再打开linkserver.bat(或使用图形界面，如mongoVUE)即可


#### 基本
> 1、文档(相当列)：元素排列是有序的、区分大小写、不可重复
>
> 2、集合(相当表)：各种各样的文档
>
> 3、命名
``` mongodb
1、全部小写
2、不能以system.开头，不能包含$、.、/、\和\0(表示为集合名的结尾)字符
3、最多64个字节
```
> 4、读取
``` mongodb
db.data.findOne(); // 第一个文档
```
> 5、更新
``` mongodb
old.addattr = 'new attr.';
db.data.update({_id: 2}, old);
```
> 6、如果集合名与数据库故有属性重名，可使用getCollection('arr'); // 特殊字符下也行，与js的[]有异曲同工之作，都可以用。
>
> 7、null与undefined、数字都是64位浮点数、_id => ObjectId()(12字节、默认)、日期new Date()、正则/aabbccdd/i、代码function() {}、数组与对象
>
> 8、删除为永久性，不能撤销
>
> 9、修改器：{'$inc': {'key': 1}} // += 1 // 值必须为整数 // 不能改变_id, 如果加上$inc和true参数，无的话则添加，再进行更新，第4个参数为true的话代表所有
>
> 10、{'$set': {'key': ''/[]}} // 没有添加，有覆盖 // 可以使用$unset删除 // key可以为.的引用形式
>
> 11、数组修改器
``` mongodb
{'$push': {_id: 123, data: 'msg'}} // 可以重复
{'$ne': {name: 'super'}} // 为第二个参数 // 如果没有就加，有的话不加
$addToSet与$ne类似，但不需要$push做第三个参数
'$addToSet': {name: {'$each': ['super', 'chao']}} // 可插入多个
$pop: {key: 1} // 1从尾删除，-1从头删除
$pull: {name: 'chao'} // 删除制定的元素
$set: {name.$.first: 'super'} // 匹配第一个
db.data.save({name: 'super'}) // 非常方便
```


#### 查询
> 1、第二个参数：{name: 1, _id: 0} // 1为返回的键值，0为不返回
>
> 2、第一个参数：find({name: 'super'}, {'$lte': 20, '$gte': 10}); // 小于等于20并且大于等于10
>
> 3、第一个参数：'$ne': 不等于、'$in': [1, '2', true] // 查找所有匹配的(or的操作)、'$nin' // 不匹配、'$or': [{}, {}] // 或者、'$not' // 匹配的取反
>
> 4、一条语句能包含多个条件，但不能包含多个修改器对同个值进行操作，'$exists' // 等于
>
> 5、使用正则查询时，可以匹配正则本身
>
> 6、匹配数组
``` mongodb
'$all': [1, '2']并且，必须包含所有，无顺序之分
'name.2': 'super'，表示第3个元素为super
'$size': 3，长度为3的数组
'$slice': 10：前10，-10：后10，[10, 20]：取区间
```
> 7、匹配对象
``` mongodb
与顺序、元素个数有关
通常使用.引用的方式，{'name.last': 'chao', 'name.first': 'super'}
数组里嵌套对象时用到：
'$elemMatch': 模糊命名条件
// 速度慢，避免使用，不能使用索引，需从BSON转成javascript
'$where': function () {
	return true;
}
```
> 8、游标
``` mongodb
limit(10) // 10条数据
skip(10) // 跳过前面10条数据、略过过多的时候有性能问题
sort({name: 1}) // 使用name来升序，-1：降序
```
> 9、索引
``` mongodb
db.data.ensureIndex({name: 1}); // 给name加上索引，1和-1表示升序与降序
db.data.ensureIndex({name: 1, age: -1}); // 索引组合
第二参数：{'name': '索引名称'}
第二参数：{'unique': true} // 唯一索引
第二参数：{'unique': true, 'dropDups': true} // 将重复的删除
复合唯一索引
键值的组合不同即可
explain() // find()后调用，查看索引情况
hint({name: 1}) // 使用某些索引
{'backgrount': true} // 后台建立索引
db.runConmmand({dropIndexs: 'data', index: 'age'}) // 删除制定索引，*号代表所有
空间索引
db.map.ensureIndex({'gps': '2d'});
gps一定为以下格式
-180到180之间数值
[0, 100];
{x: 20, y: 40}
{xxx: 40, yyy: 100}
使用'$near': [20, 40]来查找
或db.runCommand({geoNear: 'map', near: [40, 100], num: 10});
```
