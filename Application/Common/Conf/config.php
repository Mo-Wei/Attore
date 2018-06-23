<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST' 	=> 	array('Home','Admin','Common'),
    'DEFAULT_MODULE'       	=>  'Home',  	// 默认模块
  	'DEFAULT_CONTROLLER'    =>  'Base', 	// 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', 	// 默认操作名称

    /*数据库PDO*/
    'DB_PARAMS'    =>    array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),

    /* 异常页面信息 */
    'ERROR_MESSAGE' => '404 - Not Found！',

    /* 全局过滤配置 */
    'DEFAULT_FILTER' => '', //全局过滤函数

    /* 用户相关设置 */
    'USER_MAX_CACHE'     => 1000, //最大缓存用户数
    'USER_ADMINISTRATOR' => 1,    //管理员用户ID

    /* URL配置 */
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 2,    //URL模式
    'VAR_URL_PARAMS'       => '',   //PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/',  //PATHINFO URL分割符

    /* 数据库配置 */
    'DB_TYPE'   => 'mysql',     //数据库类型
    'DB_NAME'   => 'attore',    //数据库名
    'DB_USER'   => 'root',      //用户名
    'DB_PWD'    => '123456',    //密码
    'DB_PREFIX' => '',          //数据库表前缀
    'DB_DSN'    => 'mysql:host=127.0.0.1:3306;dbname=attore;charset=utf8',

    /* 文档模型配置 (文档模型核心配置，请勿更改) */
    'DOCUMENT_MODEL_TYPE' => array(2 => '主题', 1 => '目录', 3 => '段落'),

    /* 邮件配置 */
    'MAIL_HOST'     => 'smtp.163.com',
    'MAIL_SMTPAUTH' => TRUE, //启用smtp认证
    'MAIL_USERNAME' => '',
    'MAIL_FROM'     => '',
    'MAIL_FROMNAME' => '',
    'MAIL_PASSWORD' => '',
    'MAIL_CHARSET'  => 'utf-8',
    'MAIL_ISHTML'   => TRUE, //是否HTML格式邮件
    );