<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/lib/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/lib/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/lib/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/lib/jquery.bxslider/jquery.bxslider.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/lib/owl.carousel/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/lib/jquery-ui/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/animate.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/reset.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/style.css" />
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/responsive.css" />

<!-- filter -->
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/filter/list.css"/>
<link rel="stylesheet" type="text/css" href="/yc./Application/Home/Public/Css/filter/manhuaDate.1.0.css"/>


<script type="text/javascript" src="/yc./Application/Home/Public/Js/filter/jquery-1.5.1.js"></script><!--日期控件，JS库版本不能过高否则tab会失效-->
<script type="text/javascript" src="/yc./Application/Home/Public/Js/filter/datejs.js"></script>
<script type="text/javascript" src="/yc./Application/Home/Public/Js/filter/ui.tab.js"></script>
<!-- end filter -->

<script type="text/javascript">
$(document).ready(function(){
	var tab = new $.fn.tab({
		tabList:"#demo1 .ui-tab-container .ui-tab-list li",
		contentList:"#demo1 .ui-tab-container .ui-tab-content"
	});
	var tab = new $.fn.tab({
		tabList:"#demo1 .ui-tab-container .ui-tab-list2 li",
		contentList:"#demo1 .ui-tab-container .ui-tab-content2"
	});		
});	
</script>
<script type="text/javascript">
$(function (){
	$("input.mh_date").datejs({					       
		Event : "click",//可选				       
		Left : 0,//弹出时间停靠的左边位置
		Top : -16,//弹出时间停靠的顶部边位置
		fuhao : "-",//日期连接符默认为-
		isTime : false,//是否开启时间值默认为false
		beginY : 2010,//年份的开始默认为1949
		endY :2015//年份的结束默认为2049
	});
	
});
</script>
<script type="text/javascript">
               		$(document).ready(function(e) {
                        $("#selectList").find(".more").toggle(function(){
							$(this).addClass("more_bg");
							$(".more-none").show()
                    },function(){
						$(this).removeClass("more_bg");
						$(".more-none").hide()
						});
					});
               </script>
<script type="text/javascript">
    	$(document).ready(function(){
			var taboy_box=$(".lefttable-list");
			taboy_box.children("tbody").find("tr:gt(2)").hide(); 
			$(".leftbox-morea").toggle(function(){
				$(this).parent().prev().find("tr").show();
				$(this).addClass("more-i")
			},function(){
				$(this).removeClass("more-i");
				$(this).parent().prev().children("tbody").find("tr:gt(2)").hide(); 
			}
			);
		});
    </script>

<title><?php echo ($title); ?></title>
</head>



<body class="product-page">

<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->

<!-- HEADER -->
<div id="header" class="header">
   
   <div class="top-header">
        <div class="container">
        	
        	<div class="nav-top-links">
				<a class="first-item" href="#">亲，请登陆</a>
				<a href="#">免费注册</a>				
			</div>
			<!-- end nav-top-links -->        	
        
            <div class="nav-top-links">                
                <a href="#"><img alt="email" src="/yc./Application/Home/Public/Images/icon_index/email.png" />消息</a>
            	<a  href="#"><img alt="phone" src="/yc./Application/Home/Public/Images/icon_index/phone.png" />手机购物</a>
            </div>
            
            <!-- 
            <div class="currency ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dollar</a></li>
                        <li><a href="#">Euro</a></li>
                      </ul>
                </div>
            </div>
            
            
            <div class="language ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                      <img alt="email" src="/yc./Application/Home/Public/Images/icon_index/fr.jpg" />French
                      
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="/yc./Application/Home/Public/Images/icon_index/en.jpg" />English</a></li>
                        <li><a href="#"><img alt="email" src="/yc./Application/Home/Public/Images/icon_index/fr.jpg" />French</a></li>
                    </ul>
                </div>
            </div>
             -->
             
           	<div class="support-link">
           		
				<a href="#">网站地图</a>
                <a href="#">联系客服</a>
			</div>
			<!-- end support-link -->
			
			<!--
			<div id="user-info-top" class="user-info pull-right">
				<div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    	<span>卖家中心</span>
                    </a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">免费开店</a></li>
                        <li><a href="#">已卖出的商品</a></li>
                        <li><a href="#">销售中的商品</a></li>
                    </ul>
                </div>
			</div>
			-->
			<!-- end user-info-top -->
			
			<!-- 
			<div id="user-info-top" class="user-info pull-right">
				<div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    	<span>商品分类</span>
                    </a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">蔬菜</a></li>
                        <li><a href="#">水果</a></li>
                        <li><a href="#">花卉</a></li>
                        <li><a href="#">园林</a></li>
                        <li><a href="#">药材</a></li>
                        <li><a href="#">干货</a></li>
                        <li><a href="#">家禽</a></li>
                        <li><a href="#">畜牧</a></li>
                        <li><a href="#">水产</a></li>
                        
                    </ul>
                </div>
			</div>
			 -->
			<!-- end user-info-top -->
			
			<!--
			<div id="user-info-top" class="user-info pull-right">
				<div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>收藏夹</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">收藏的商品</a></li>
                        <li><a href="#">收藏的店铺</a></li>
                        
                    </ul>
                </div>
			</div>
			-->
			<!-- end user-info-top -->
			
			<!-- 
			<div id="user-info-top" class="user-info pull-right">
				<div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    	<span>购物车</span>
                    </a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="#">查看我的购物车</a></li>
                        
                    </ul>
                </div>
			</div>
			 -->
			<!-- end user-info-top -->
			
			<div id="user-info-top" class="user-info pull-right">
				<div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    	<span>我的账号</span>
                    </a>
                   
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                    	
                    	<li><a href="#">个人信息</a></li>
                        <li><a href="#">已买到的商品</a></li>
                        <li><a href="#">浏览过的店铺</a></li>
                        
                    </ul>
                </div>
			</div>
			<!-- end user-info-top -->
			
		</div>
		<!-- end container -->	
	</div>
	<!-- end top-header -->	

	
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <h1><font color="#FF3366" >迎春花<h4>&nbsp;&nbsp;ychunhua.com</h4></font></h1>
               
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline" action="/yc/index.php/Index/search" method="post">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">所有商品</option>
                           
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="播种春天的希望 ..." name="search_text">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="order.html">
                    <span class="title">购物车</span>
                    <span class="total">2 items - 122.38 €</span>
                    <span class="notify notify-left">2</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">2 Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="/yc./Application/Home/Public/Images/icon_index/data/product-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="/yc./Application/Home/Public/Images/icon_index/data/product-s5-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">122.38 €</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="order.html" class="btn-check-out">支&nbsp;&nbsp;付</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- END MANIN HEADER -->
    
	

	<div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">源产地商品列表</span>
                            <span class="btn-open-mobile pull-right home-page">
                            	<i class="fa fa-bars"></i>
                            </span>
                        </h4>
	                    <div class="vertical-menu-content is-home">
	                        <ul class="vertical-menu-list">
	                            <li>
									<a class="parent"  href="#">
										<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/1.png">东北地区&nbsp;(黑、吉、辽)
									</a>
									<div class="vertical-dropdown-menu">
	                                    <div class="vertical-groups col-sm-12">
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Tennis</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-custom-html col-sm-12">
	                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/banner-megamenu.jpg" alt="Banner"></a>
	                                        </div>
	                                    </div>
	                                </div>
								</li>
								
	                            <li>
	                                <a class="parent" href="#">
	                                	<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/2.png">华北地区&nbsp;(京、津、冀、晋、蒙)
	                                </a>
	                                <div class="vertical-dropdown-menu">
	                                    <div class="vertical-groups col-sm-12">
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Tennis</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-custom-html col-sm-12">
	                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/banner-megamenu.jpg" alt="Banner"></a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <li>
	                            	<a class="parent" href="#">
	                            		<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/3.png">华东地区&nbsp;(鲁、皖、闽、苏浙沪)
	                            	</a>
	                            	<div class="vertical-dropdown-menu">
	                                    <div class="vertical-groups col-sm-12">
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Tennis</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-custom-html col-sm-12">
	                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/banner-megamenu.jpg" alt="Banner"></a>
	                                        </div>
	                                    </div>
	                                </div>
	                            	
	                            </li>
	                            
	                            
	                            <li>
	                            	<a class="parent"  href="#">
	                            		<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/4.png">华中地区&nbsp;(鄂、湘、豫、赣)
	                            	</a>
	                            	<div class="vertical-dropdown-menu">
	                                    <div class="vertical-groups col-sm-12">
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Tennis</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-custom-html col-sm-12">
	                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/banner-megamenu.jpg" alt="Banner"></a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <li>
	                                <a class="parent" href="#">
	                                	<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/5.png">华南地区&nbsp;(粤、桂、琼)
	                                </a>
	                                <div class="vertical-dropdown-menu">
	                                        <div class="vertical-groups col-sm-12">
	                                            <div class="mega-group col-sm-12">
	                                                <h4 class="mega-group-header"><span>Special products</span></h4>
	                                                <div class="row mega-products">
	                                                    <div class="col-sm-3 mega-product">
	                                                        <div class="product-avatar">
	                                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/p10.jpg" alt="product1"></a>
	                                                        </div>
	                                                        <div class="product-name">
	                                                            <a href="#">Fashion hand bag</a>
	                                                        </div>
	                                                        <div class="product-price">
	                                                            <div class="new-price">$38</div>
	                                                            <div class="old-price">$45</div>
	                                                        </div>
	                                                        <div class="product-star">
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star-half-o"></i>
	                                                        </div>
	                                                    </div>
	                                                    
	                                                    <div class="col-sm-3 mega-product">
	                                                        <div class="product-avatar">
	                                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/p11.jpg" alt="product1"></a>
	                                                        </div>
	                                                        <div class="product-name">
	                                                            <a href="#">Fashion hand bag</a>
	                                                        </div>
	                                                        <div class="product-price">
	                                                            <div class="new-price">$38</div>
	                                                            <div class="old-price">$45</div>
	                                                        </div>
	                                                        <div class="product-star">
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star-half-o"></i>
	                                                        </div>
	                                                    </div>
	                                                    
	                                                    <div class="col-sm-3 mega-product">
	                                                        <div class="product-avatar">
	                                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/p12.jpg" alt="product1"></a>
	                                                        </div>
	                                                        <div class="product-name">
	                                                            <a href="#">Fashion hand bag</a>
	                                                        </div>
	                                                        <div class="product-price">
	                                                            <div class="new-price">$38</div>
	                                                            <div class="old-price">$45</div>
	                                                        </div>
	                                                        <div class="product-star">
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star-half-o"></i>
	                                                        </div>
	                                                    </div>
	                                                    
	                                                    <div class="col-sm-3 mega-product">
	                                                        <div class="product-avatar">
	                                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/p13.jpg" alt="product1"></a>
	                                                        </div>
	                                                        <div class="product-name">
	                                                            <a href="#">Fashion hand bag</a>
	                                                        </div>
	                                                        <div class="product-price">
	                                                            <div class="new-price">$38</div>
	                                                            <div class="old-price">$45</div>
	                                                        </div>
	                                                        <div class="product-star">
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star"></i>
	                                                            <i class="fa fa-star-half-o"></i>
	                                                        </div>
	                                                    </div>
	                                                    <!-- end col-sm-3 mega-product -->
	                                                    
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                            </li>
	                            
	                            <li>
	                            	<a class="parent" href="#"><img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/6.png">西南地区&nbsp;(川、滇、黔、藏、渝)</a>
	                            	<div class="vertical-dropdown-menu">
	                                    <div class="vertical-groups col-sm-12">
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Tennis</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-custom-html col-sm-12">
	                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/banner-megamenu.jpg" alt="Banner"></a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <li>
	                            	<a class="parent" href="#"><img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/7.png">西北地区&nbsp;(宁、新、陕、青、甘)</a>
	                            	<div class="vertical-dropdown-menu">
	                                    <div class="vertical-groups col-sm-12">
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Tennis</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-group col-sm-4">
	                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
	                                            <ul class="group-link-default">
	                                                <li><a href="#">Dresses</a></li>
	                                                <li><a href="#">Coats &amp; Jackets</a></li>
	                                                <li><a href="#">Blouses &amp; Shirts</a></li>
	                                                <li><a href="#">Tops &amp; Tees</a></li>
	                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
	                                                <li><a href="#">Intimates</a></li>
	                                            </ul>
	                                        </div>
	                                        <div class="mega-custom-html col-sm-12">
	                                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/banner-megamenu.jpg" alt="Banner"></a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <li><a class="parent" href="#"><img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/8.png">台港澳地区&nbsp;(港、澳、台)</a></li>
	                           
	                            <li>
	                            	<a class="parent" href="#">
	                            		<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/9.png">热门&nbsp;&nbsp;蔬菜&nbsp;&nbsp;水果&nbsp;&nbsp;五谷&nbsp;&nbsp;<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/9.png">
	                            	</a>
	                            </li>
	                            
	                            <li>
	                            	<a class="parent" href="#">
	                            		<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/10.png">热门&nbsp;&nbsp;花卉&nbsp;&nbsp;园林&nbsp;&nbsp;药材&nbsp;&nbsp;<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/10.png">
	                            	</a>
	                            </li>
	                            
	                            <li>
	                                <a href="#">
	                                    <img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/11.png">热门&nbsp;&nbsp;家禽&nbsp;&nbsp;畜牧&nbsp;&nbsp;水产&nbsp;&nbsp;<img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/11.png">
	                                   
	                                </a>
	                            </li>
	                            
	                            <li class="cat-link-orther">
	                                <a href="#">
	                                    <img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/5.png">
	                                    Television
	                                </a>
	                            </li>
	                            
	                            <li class="cat-link-orther">
	                                <a href="#">
	                                    <img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/7.png">Computers &amp; Networking
	                                </a>
	                            </li>
	                            
	                            <li class="cat-link-orther">
	                                <a href="#">
	                                    <img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/6.png">
	                                    Toys &amp; Hobbies
	                                </a>
	                            </li>
	                            <li class="cat-link-orther">
	                            <a href="#"><img class="icon-menu" alt="Funky roots" src="/yc./Application/Home/Public/Images/icon_index/data/9.png">Jewelry &amp; Watches</a></li>
	                        </ul>
	                        <div class="all-category"><span class="open-cate">更多</span></div>
	                    </div>
	                </div>
                </div>
                
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">s</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">首页</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">蔬菜</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="/yc./Application/Home/Public/Images/icon_index/data/men.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">MEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="/yc./Application/Home/Public/Images/icon_index/data/women.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">WOMEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="/yc./Application/Home/Public/Images/icon_index/data/kid.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Kids</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Shoes</a></li>
                                                    <li class="link_container"><a href="#">Clothing</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="/yc./Application/Home/Public/Images/icon_index/data/trending.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">TRENDING</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Men's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Kid's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Women's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="category.html" class="dropdown-toggle" data-toggle="dropdown">水果</a></li>
                                    
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">五谷</a>
                                            <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Asian</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Vietnamese Pho</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Seafood</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sausages</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Meat Dishes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Desserts</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">European</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Greek Potatoes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Chicken</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Italian Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">French Cakes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">FAST</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Hamberger</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sandwich</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Salad</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Paste</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <img src="/yc./Application/Home/Public/Images/icon_index/data/banner-topmenu.jpg" alt="Banner">
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">花卉</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="#">Mobile</a></li>
                                                    <li class="link_container"><a href="#">Tablets</a></li>
                                                    <li class="link_container"><a href="#">Laptop</a></li>
                                                    <li class="link_container"><a href="#">Memory Cards</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul> 
                                    </li>
                                    
                                    <li><a href="category.html">园林</a></li>
                                    <li><a href="category.html">药材</a></li>
									<li><a href="category.html">家禽</a></li>
									<li><a href="category.html">畜牧</a></li>
									<li><a href="category.html">水产</a></li>
									
                                    
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
    <!-- end menu -->
    
</div>



<div class="w1200">
  <div class="list-screen">
    <div class="screen-top" style="position:relative;"><span>目的地<input id="txtadress" type="text"/></span><span>入住<input type="text" class="mh_date" readonly="true" /></span><span>退房<input type="text" class="mh_date" readonly="true" /></span><span>酒店位置<input type="text" class="ju-adress"  /></span><span>酒店名称<input type="text" class="ju-name" /></span><a href="#" id="submit-btn"/>搜索</a></div>
    <div style="padding:10px 30px 10px 10px;"><div class="screen-address">
      <div class="list-tab">
        <div id="demo1" class="clearfix">
          <div class="jiud-name">酒店位置</div>
          <div class="ui-tab-container">
            <ul class="clearfix ui-tab-list">
              <li class="ui-tab-active">景点</li>
              <li>交通枢纽</li>
              <li>地铁周边</li>
              <li>行政区</li>
            </ul>
            <div class="ui-tab-bd">
              <div class="ui-tab-content clearfix">
                	<ul class="clearfix ui-tab-list2">
                      <li class="ui-tab-active">景点</li>
                      <li>交通枢纽</li>
                    </ul>
                    <div class="ui-tab-bd">
              			<div class="ui-tab-content2 clearfix"><p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    琶洲展馆</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    淘金/环市东 </label>
                </p></div>
                        <div class="ui-tab-content2 clearfix" style="display:none">22222</div>
                    </div>
              </div>
              <div class="ui-tab-content clearfix" style="display:none">
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    琶洲展馆</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    淘金/环市东 </label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    广州东站/天河北</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    北京路/海珠广场</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    珠江新城/跑马场 </label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    长隆景区/广州南站</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    沙面/上下九步行</label>
                </p>
              </div>
              <div class="ui-tab-content clearfix" style="display:none">
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    琶洲展馆</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    淘金/环市东 </label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    广州东站/天河北</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    北京路/海珠广场</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    珠江新城/跑马场 </label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    长隆景区/广州南站</label>
                </p>
                <p>
                  <label>
                    <input name="tabrad1" type="radio" value="" />
                    沙面/上下九步行</label>
                </p>
              </div>
              <div class="ui-tab-content clearfix" style="display:none">
                <p>
                  <input name="tabrad1" type="radio" value="" />
                  琶洲展馆</p>
                <p>
                  <input name="tabrad1" type="radio" value="" />
                  淘金/环市东 </p>
                <p>
                  <input name="tabrad1" type="radio" value="" />
                  广州东站/天河北</p>
                <p>
                  <input name="tabrad1" type="radio" value="" />
                  北京路/海珠广场</p>
                <p>
                  <input name="tabrad1" type="radio" value="" />
                  珠江新城/跑马场 </p>
                <p>
                  <input name="tabrad1" type="radio" value="" />
                  长隆景区/广州南站</p>
                <p>
                  <input name="tabrad1" type="radio" value="" />
                  沙面/上下九步行</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="screen-term">
      <div class="selectNumberScreen">
        <div id="selectList" class="screenBox screenBackground">
          <dl class="listIndex" attr="价格范围">
            <dt>酒店价格</dt>
            <dd>
              <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
              <label>
                <input name="radio2" type="radio" value="" />
                <a href="javascript:;" values2="99" values1="1" attrval="1-99">100元以下</a></label>
              <label>
                <input name="radio2" type="radio" value="" />
                <a href="javascript:;" values2="300" values1="100" attrval="100-300">100-300元 </a></label>
              <label>
                <input name="radio2" type="radio" value="" />
                <a href="javascript:;" values2="600" values1="300" attrval="300-600">300-600元</a></label>
              <label>
                <input name="radio2" type="radio" value="" />
                <a href="javascript:;" values2="1500" values1="600" attrval="5000以上">600-1500元</a></label>
              <div class="custom"><span>自定义</span>&nbsp;
                <input name="" type="text" id="custext1"/>
                &nbsp;-&nbsp;
                <input name="" type="text" id="custext2"/>
                <input name="" type="button" id="cusbtn"/>
              </div>
            </dd>
          </dl>
          <dl class=" listIndex" attr="terminal_os_s">
            <dt>酒店星级</dt>
            <dd>
              <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a> </label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" attrval="android"> 五星/豪华</a> </label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" attrval="symbian">四星/高档</a></label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" attrval="百度易平台">三星/舒适</a></label>
            </dd>
          </dl>
          <dl class="listIndex" attr="terminal_brand_s">
            <dt>主题风格</dt>
            <dd data-more=true>
              <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" attrval="小米">客栈</a></label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" attrval="华为">精品酒店</a> </label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" attrval="lenovo">情侣酒店</a> </label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" attrval="zte中兴">园林庭院</a></label>
                <span class="more"><em class="open"></em>更多</span>
               </dd> 
          </dl>
          <dl class="listIndex more-none" attr="terminal_brand_s"  style="display:none;border:none">
            <dt style='visibility:hidden'>主题风格</dt>
            <dd >
              <label style='visibility:hidden'><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
              <form action="" method="get"> 
                  <label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" attrval="华为">精品酒店2</a></label>
                  <label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" attrval="华为">精品酒店3</a> </label> 
                  <label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" attrval="华为">精品酒店4</a> </label>  
                </form> 
          </dl>
        </div>
      </div>   
    </div>

    </div>
    
    <div class="hasBeenSelected clearfix"><span id="time-num"><font>208</font>家酒店</span>
          <div style="float:right;" class="eliminateCriteria">【清空全部】 </div>
          <dl>
            <dt>已选条件：</dt>
            <dd style="DISPLAY: none" class=clearDd>
              <div class=clearList></div>
          </dl>
        </div>
      <script type="text/javascript" src="JS/shaixuan.js"></script> 
  </div>
</div>


<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 page-top-left">
                <div class="popular-tabs">
                      <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">列表</a></li>
                        <li><a data-toggle="tab" href="#tab-2">热销</a></li>
                        <li><a data-toggle="tab" href="#tab-2">特价</a></li>
                        <li><a data-toggle="tab" href="#tab-3">最新上市</a></li>
                      </ul>
                      <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs1.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <span class="product-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Sexy Lady</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs2.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Perfect Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs3.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="group-price">
                                                <span class="product-new">NEW</span>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Fresh Summer</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs4.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p48.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p49.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p50.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p51.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p60.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p61.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p62.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p63.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                      </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 page-top-right">
                <div class="latest-deals">
                    <h2 class="latest-deal-title">latest deals</h2>
                    <div class="latest-deal-content">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld1.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-10%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld2.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-90%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld3.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-20%)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-9 page-top-left">
                <div class="popular-tabs">
                      <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">列表</a></li>
                        <li><a data-toggle="tab" href="#tab-2">热销</a></li>
                        <li><a data-toggle="tab" href="#tab-2">特价</a></li>
                        <li><a data-toggle="tab" href="#tab-3">最新上市</a></li>
                      </ul>
                      <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs1.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <span class="product-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Sexy Lady</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs2.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Perfect Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs3.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="group-price">
                                                <span class="product-new">NEW</span>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Fresh Summer</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs4.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p48.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p49.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p50.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p51.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p60.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p61.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p62.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p63.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                      </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 page-top-right">
                <div class="latest-deals">
                    <h2 class="latest-deal-title">latest deals</h2>
                    <div class="latest-deal-content">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld1.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-10%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld2.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-90%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld3.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-20%)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-9 page-top-left">
                <div class="popular-tabs">
                      <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">列表</a></li>
                        <li><a data-toggle="tab" href="#tab-2">热销</a></li>
                        <li><a data-toggle="tab" href="#tab-2">特价</a></li>
                        <li><a data-toggle="tab" href="#tab-3">最新上市</a></li>
                      </ul>
                      <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs1.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <span class="product-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Sexy Lady</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs2.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Perfect Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs3.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="group-price">
                                                <span class="product-new">NEW</span>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Fresh Summer</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs4.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p48.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p49.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p50.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p51.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p60.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p61.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p62.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p63.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                      </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 page-top-right">
                <div class="latest-deals">
                    <h2 class="latest-deal-title">latest deals</h2>
                    <div class="latest-deal-content">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld1.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-10%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld2.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-90%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld3.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-20%)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-9 page-top-left">
                <div class="popular-tabs">
                      <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">列表</a></li>
                        <li><a data-toggle="tab" href="#tab-2">热销</a></li>
                        <li><a data-toggle="tab" href="#tab-2">特价</a></li>
                        <li><a data-toggle="tab" href="#tab-3">最新上市</a></li>
                      </ul>
                      <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs1.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <span class="product-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Sexy Lady</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs2.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Perfect Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs3.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="group-price">
                                                <span class="product-new">NEW</span>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Fresh Summer</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/bs4.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p48.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p49.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p50.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p51.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p60.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p61.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p62.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/p63.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">放入购物车</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                      </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 page-top-right">
                <div class="latest-deals">
                    <h2 class="latest-deal-title">latest deals</h2>
                    <div class="latest-deal-content">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld1.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-10%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld2.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-90%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/yc./Application/Home/Public/Images/icon_index/data/ld3.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-20%)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!---->

 
<!-- Footer -->
<footer id="footer">
     <div class="container">
            <!-- introduce-box -->
            <div id="introduce-box" class="row">
                <div class="col-md-3">
                    <div id="address-box">
                        <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/introduce-logo.png" alt="" /></a>
                        <div id="address-list">
                            <div class="tit-name">Address:</div>
                            <div class="tit-contain">Example Street 68, Mahattan, New York, USA.</div>
                            <div class="tit-name">Phone:</div>
                            <div class="tit-contain">+00 123 456 789</div>
                            <div class="tit-name">Email:</div>
                            <div class="tit-contain">support@business.com</div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="introduce-title">Company</div>
                            <ul id="introduce-company"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">My Account</div>
                            <ul id = "introduce-Account" class="introduce-list">
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Credit Slip</a></li>
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Personal In</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">Support</div>
                            <ul id = "introduce-support"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="contact-box">
                        <div class="introduce-title">Newsletter</div>
                        <div class="input-group" id="mail-box">
                          <input type="text" placeholder="Your Email Address"/>
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                        </div><!-- /input-group -->
                        <div class="introduce-title">Let's Socialize</div>
                        <div class="social-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /#introduce-box -->
        
            <!-- #trademark-box -->
            <div id="trademark-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-list">
                        <li id="payment-methods">Accepted Payment Methods</li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-ups.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-qiwi.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-wu.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-cn.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-visa.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-mc.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-ems.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-dhl.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-fe.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="/yc./Application/Home/Public/Images/icon_index/data/trademark-wm.jpg"  alt="ups"/></a>
                        </li>
                    </ul> 
                </div>
            </div> <!-- /#trademark-box -->
            
            <!-- #trademark-text-box -->
            <div id="trademark-text-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-search-list" class="trademark-list">
                        <li class="trademark-text-tit">HOT SEARCHED KEYWORDS:</li>
                        <li><a href="#" >Xiaomio Mi3</a></li>
                        <li><a href="#" >Digiflipo Pro XT 712 Tablet</a></li>
                        <li><a href="#" >Mi 3 Phones</a></li>
                        <li><a href="#" >Iphoneo 6 Plus</a></li>
                        <li><a href="#" >Women's Messenger Bags</a></li>
                        <li><a href="#" >Wallets</a></li>
                        <li><a href="#" >Women's Clutches</a></li>
                        <li><a href="#" >Backpacks Totes</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-tv-list" class="trademark-list">
                        <li class="trademark-text-tit">TVS:</li>
                        <li><a href="#" >Sonyo TV</a></li>
                        <li><a href="#" >Samsing TV</a></li>
                        <li><a href="#" >LGG TV</a></li>
                        <li><a href="#" >Onidai TV</a></li>
                        <li><a href="#" >Toshibao TV</a></li>
                        <li><a href="#" >Philipsi TV</a></li>
                        <li><a href="#" >Micromaxo TV</a></li>
                        <li><a href="#" >LED TV</a></li>
                        <li><a href="#" >LCD TV</a></li>
                        <li><a href="#" >Plasma TV</a></li>
                        <li><a href="#" >3D TV</a></li>
                        <li><a href="#" >Smart TV</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-mobile-list" class="trademark-list">
                        <li class="trademark-text-tit">MOBILES:</li>  
                        <li><a href="#" >Moto E</a></li>
                        <li><a href="#" >Samsing Mobile</a></li>
                        <li><a href="#" >Micromaxi Mobile</a></li>
                        <li><a href="#" >Nokian Mobile</a></li>
                        <li><a href="#" >HTCi Mobile</a></li>
                        <li><a href="#" >Sonyo Mobile</a></li>
                        <li><a href="#" >Appleo Mobile</a></li>
                        <li><a href="#" >LGG Mobile</a></li>
                        <li><a href="#" >Karbonni Mobile</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-laptop-list" class="trademark-list">
                        <li class="trademark-text-tit">LAPTOPS::</li> 
                        <li><a href="#" >Appleo Laptop</a></li>
                        <li><a href="#" >Acer Laptop</a></li>
                        <li><a href="#" >Samsing Laptop</a></li>
                        <li><a href="#" >Lenov Laptop</a></li>
                        <li><a href="#" >Sonyo Laptop</a></li>
                        <li><a href="#" >Delli Laptop</a></li>
                        <li><a href="#" >Asuso Laptop</a></li>
                        <li><a href="#" >Toshibao Laptop</a></li>
                        <li><a href="#" >LGG Laptop</a></li>
                        <li><a href="#" >HPo Laptop</a></li>
                        <li><a href="#" >Notebook</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-watches-list" class="trademark-list">
                        <li class="trademark-text-tit">WATCHES:</li>  
                        <li><a href="#" >FCUKo Watches</a></li>
                        <li><a href="#" >Titan Watches</a></li>
                        <li><a href="#" >Casioo Watches</a></li>
                        <li><a href="#" >Fastrack Watches</a></li>
                        <li><a href="#" >Timexi Watches</a></li>
                        <li><a href="#" >Fossili Watches</a></li>
                        <li><a href="#" >Dieselo Watches</a></li>
                        <li><a href="#" >Toshibao Laptop</a></li>
                        <li><a href="#" >Luxury Watches</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-shoes-list" class="trademark-list">
                        <li class="trademark-text-tit">FOOTWEAR:</li>  
                        <li><a href="#" >Shoes</a></li>
                        <li><a href="#" >Casual Shoes</a></li>
                        <li><a href="#" >Sports Shoes</a></li>
                        <li><a href="#" >Adidasi Shoes</a></li>
                        <li><a href="#" >Gas Shoes</a></li>
                        <li><a href="#" >Pumai Shoes</a></li>
                        <li><a href="#" >Reeboki Shoes</a></li>
                        <li><a href="#" >Woodlandi Shoes</a></li>
                        <li><a href="#" >Red tape Shoes</a></li>
                        <li><a href="#" >Nikeo Shoes</a></li>
                    </ul>
                </div>
            </div><!-- /#trademark-text-box -->
            <div id="footer-menu-box">
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Company Info - Partnerships</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Online Shopping</a></li>
                        <li><a href="#" >Promotions</a></li>
                        <li><a href="#" >My Orders</a></li>
                        <li><a href="#" >Help</a></li>
                        <li><a href="#" >Site Map</a></li>
                        <li><a href="#" >Customer Service</a></li>
                        <li><a href="#" >Support</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Most Populars</a></li>
                        <li><a href="#" >Best Sellers</a></li>
                        <li><a href="#" >New Arrivals</a></li>
                        <li><a href="#" >Special Products</a></li>
                        <li><a href="#" >Manufacturers</a></li>
                        <li><a href="#" >Our Stores</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Warantee</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Checkout</a></li>
                        <li><a href="#" >Discount</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Terms & Conditions</a></li>
                        <li><a href="#" >Policy</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Returns</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Warrantee</a></li>
                        <li><a href="#" >FAQ</a></li>
                        <li><a href="#" >Contact</a></li>
                    </ul>
                </div>
                <p class="text-center">Copyrights &#169; 2015 KuteShop. All Rights Reserved. Designed by KuteThemes.com</p>
            </div><!-- /#footer-menu-box -->
        </div> 
</footer>



<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->

<script type="text/javascript" src="/yc./Application/Home/Public/Css/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/yc./Application/Home/Public/Css/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/yc./Application/Home/Public/Css/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="/yc./Application/Home/Public/Css/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/yc./Application/Home/Public/Css/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/yc./Application/Home/Public/Css/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/yc./Application/Home/Public/Js/jquery.actual.min.js"></script>
<script type="text/javascript" src="/yc./Application/Home/Public/Js/theme-script.js"></script>







</body>
</html>