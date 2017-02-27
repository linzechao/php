<?
## 应用入口文件

# 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<')) die('require PHP > 5.3.0 !');

# 开启调试模式、建议开发阶段开启、部署阶段注释或者设为false
define('APP_DEBUG', true);

# 定义应用目录
define('APP_PATH', './src/');

# 关闭自动生成index安全文件
define('BUILD_DIR_SECURE', false);

# 给静态文件设置访问常量
# 使用{$smarty.const.CSS_URL}来引入
define('CSS_PATH', '/src/Public/css/');
define('JS_PATH', '/src/Public/js/');
define('IMG_PATH', '/src/Public/img/');

##
    # Home文件夹存放前台显示控制器
    # Admin文件夹存放后台管理控制器


    # 内置常量
    # 不需要带上<?php echo "" ? >，直接用
    # http://主机/入口文件/分组/控制器/操作方法/key/value/key/value...
    # __MODULE__: 路由地址分组信息
    # __CONTROLLER__: 路由地址控制器信息
    # __ACTION__: 路由地址操作方法信息
    # __SELF__: 路由地址的全部信息


    # 名称
    # MODULE_NAME、CONTROLLER_NAME、ACTION_NAME


    # 一个数据表对应一个Model
    # 使用D()函数来构造也可以
##

# 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
