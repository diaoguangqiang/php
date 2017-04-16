<?php
return array(
	//'配置项'=>'配置值'
	//'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置
	
	'URL_CASE_INSENSITIVE' =>true,//要访问类似UserTypeController的控制器,// 正确的访问地址http://serverName/index.php/home/user_type/index
	
	'TMPL_PARSE_STRING' => array(
			//'__PUBLIC__' => __ROOT__ . '/' . APP_PATH . APP_NAME . '/View/default/Public', // /baifen/./Application/Admin/View/default/Public
			'__PUBLIC__' => __ROOT__  . APP_PATH . APP_NAME . '/Public', // /baifen/./Application/Admin/View/default/Public
			'__VIEW_PATH__'=> __ROOT__ . APP_PATH . APP_NAME ,
),
		
	'ACTION_BIND_CLASS'    =>    false,
	
);