<?php
return array(

	//开启用户组
	//'APP_GROUP_LIST' => 'Index,Admin',
	//'DEFAULT_GROUP' => 'Index',
	
	//'配置项'=>'配置值'
	//'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置
	
	// 字段缓存
	'DB_FIELDS_CACHE'=>false,

	'APP_DEBUG'=>true,

	//数据库配置信息
	'DB_TYPE'   => 'mysql', 
	// 数据库类型
	
	//数据库地址	
	'DB_HOST'   => 'localhost', 
	
	// 数据库名	
	'DB_NAME'   => 'db_ych', 
	
	// 用户名	
	'DB_USER'   => 'root', 
	
	// 密码		
	'DB_PWD'    => 'passwd', 
	
	// 端口
	'DB_PORT'   => 3306, 

	//--------------------------------------------------
	/*
	//数据库配置信息
	'DB_TYPE'   => 'mysql', 
	// 数据库类型
	
	//数据库地址
	'DB_HOST'   => 'hdm-126.hichina.com', 
	//'DB_HOST'   => 'localhost', 
	
	// 数据库名
	'DB_NAME'   => 'hdm1260614_db', 
	//'DB_NAME'   => 'db_ych', 
	
	// 用户名
	'DB_USER'   => 'hdm1260614', 
	//'DB_USER'   => 'root', 
	
	// 密码	
	'DB_PWD'    => 'diaoguangqiang', 
	//'DB_PWD'    => 'passwd', 
	
	// 端口
	//'DB_PORT'   => 3306, 
	*/


	// 数据库表前缀 
	'DB_PREFIX' => 'tb_', 
	 
	'DB_CHARSET'=> 'utf8', // 字符集

	//数据库配置1
	'DB_CONFIG' => array(    
		'db_type'  => 'mysql',    
		'db_user'  => 'root',    
		'db_pwd'   => 'passwd',    
		'db_host'  => 'localhost',    
		'db_port'  => '3306',    
		'db_name'  => 'db_baifen',    
		'db_charset' => 'utf8',
	),
	
	//数据库配置2
	//'DB_CONFIG2' => 'mysql://root:passwd@localhost:3306/db_baifen#utf8',

	'TMPL_L_DELIM'=>'<{',
	'TMPL_R_DELIM'=>'}>',
);