<?php
return array(
    //'配置项'=>'配置值'
    /* 数据库设置 */
    'DB_TYPE'               =>  'PDO',     // 数据库类型
    // 'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    // 'DB_NAME'               =>  'class90',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'feng_miao',          // 密码
    // 'DB_PORT'               =>  '3306',        // 端口
    'DB_DSN'    => 'mysql:host=127.0.0.1;dbname=sh_shop;charset=UTF8',
    'DB_PREFIX'             =>  'sh_',    // 数据库表前缀
    'SHOW_PAGE_TRACE' =>true,
);