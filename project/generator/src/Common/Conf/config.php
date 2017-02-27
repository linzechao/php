<?php
return array(
	# 使用Smarty引擎
    'TMPL_ENGINE_TYPE' => 'Smarty',

    # 添加Smarty引擎配置
    'TMPL_ENGINE_CONFIG' => array(
        'left_delimiter' => '<{',
        'right_delimiter' => '}>'
    ),

    # 数据库配置
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'sc',
    'DB_USER' => 'root',
    'DB_PWD' => '',
    # 端口默认3306
    # 数据库表的名称前缀(用来区分不同数据库表，因为有可能只有一个数据库可以用)
    'DB_PREFIX' => 'basic_',
    'DB_PARAMS' => array(), # 数据库连接参数
    'DB_DEBUG' => TRUE, # 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE' =>  true, # 启用字段缓存
    'DB_CHARSET' => 'utf8', # 数据库编码默认采用utf8

    # 显示页面跟踪信息
    'SHOW_PAGE_TRACE' => true,

    # 默认模块
    'DEFAULT_MODULE' => 'Home',
    # 定义可供访问的分组列表
    'MODULE_ALLOW_LIST' => array('Home', 'Admin')
);