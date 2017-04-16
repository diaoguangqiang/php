<?php
namespace Home\Controller;
use Think\Controller;
class RController extends ObjectController {
   	public $title;
   	
	public $menu_index;
	public $menu_vegetable;
	public $fruit_menu;
	public $menu_grains;
   	
	public function index(){
    	
     }
     
    public function title(){
     	$this->title = "迎春花";
     	return $this->title;  	
     }
     
	public function fruitmenu(){
		$this->fruit_menu = "水果";
		return $this->fruit_menu;
	}
	
	
     
}