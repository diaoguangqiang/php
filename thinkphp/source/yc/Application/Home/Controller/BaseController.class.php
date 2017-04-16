<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends ObjectController {
	
	public function _initialize(){		
		$this->title();//更新访客
		
		$this->menu();
	}
	
	
    public function index(){
    	
     }
     
    public function title(){
    	$r = A('R');
    	$this->assign('title', $r->title());
    }
    
    public function menu(){
    	$r = A('R');
    	$this->assign('fruit_menu', $r->fruitmenu());
    	//$this->assign('fruit_menu', $r->fruitmenu());
    }
    
     
}