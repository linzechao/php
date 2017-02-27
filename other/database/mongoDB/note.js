/*
1、下载mongodb                 mongodb.org
2、启动并指定数据库存放路径    mongod.exe --dbpath F:\MongodbData
3、配置环境变量                path变量添加mongodb的bin路径
4、新建bat文件来启动数据库     mongod --dbpath F:\MongoDBData


sql语句                       db.persons.update({name:"superchao"}, {$set:{name:"chaosuper"}});
默认修改第一条数据
查看数据库                    show collections
 */
db.help();


var ps = db.runCommand({
    findAndModify:"mongotest",
    query:{_id:4},
    update:{$set:{age:22}},
    new:true
});

//use mongotest;
var m = db.mongotest;
var persons = [
    {_id:1, name:"l", age:24, language:"javascript", books:["javascript", "node", "lungo", "jquery", "ext", "bootstrap"]},
    {_id:0, name:"z", age:26, language:"node", books:["node", "zepto", "jquery", "ext", "bootstrap"]},
    {_id:2, name:"c", age:28, language:"zepto", books:["javascript", "node", "lungo", "jquery", "ext", "bootstrap"]},
    {_id:3, name:"lzc", age:12, language:"node", books:["javascript", "zepto", "jquery", "ext", "bootstrap"]},
    {_id:4, name:"lzec", age:16, language:"zepto", books:["javascript", "node", "zepto", "lungo", "jquery", "ext", "bootstrap"]},
    {_id:5, name:"s", age:18, language:"lungo", books:["node", "zepto", "jquery", "ext", "bootstrap"]},
    {_id:6, name:"cg", age:14, language:"javascript", books:["javascript", "zepto", "lungo", "jquery", "ext", "bootstrap"]},
    {_id:7, name:"sc", age:20, language:"jquery", books:["node", "zepto", "jquery", "ext", "bootstrap"]},
    {_id:8, name:"chao", age:22, language:"bootstrap", books:["javascript", "node", "zepto", "lungo", "ext", "bootstrap"]},
    {_id:9, name:"super", age:30, language:"ext", books:["javascript", "node", "lungo", "jquery", "ext"]}
];
for (var p in persons) {
    m.insert(persons[p]);
}

m.find({}, {_id:0, name:1, age:1});// 不返回id，返回其他2个
m.find({age:{$gte:20, $lte:30}}, {_id:0,age:1,name:1});
