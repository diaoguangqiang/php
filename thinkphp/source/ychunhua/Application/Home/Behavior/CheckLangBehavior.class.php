<?php
namespace Home\Behavior;
use Think\Behavior;

class CheckLangBehavior extends Behavior{     
	// 行为扩展的执行入口必须是run     
	public function run(&$params){         
		if(C('TEST_PARAM')) {             
			echo 'RUNTCheckLang BEHAVIOR '.$params;         
		}  
	}
}