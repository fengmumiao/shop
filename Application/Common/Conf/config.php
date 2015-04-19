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
    'APP_DEBUG'=>true,
    'DB_FIELD_CACHE'=>false,
    ' HTML_CACHE_ON'=>false,

    // 配置邮件发送服务器
    'MAIL_SMTP'                     =>TRUE,
    'MAIL_HOST'                     =>'f1120428399@163.com',
    'MAIL_SMTPAUTH'                 =>TRUE,
    'MAIL_USERNAME'                 =>'MerlinFeng',
    'MAIL_PASSWORD'                 =>'fengqiang.123',
    'MAIL_SECURE'                   =>'tls',
    'MAIL_CHARSET'                  =>'utf-8',
    'MAIL_ISHTML'                   =>TRUE,
 
);
