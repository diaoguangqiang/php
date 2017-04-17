<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/hd/handu_base.css" rel="stylesheet" type="text/css" />
<link href="themes/hd/handu_hstyle.css" rel="stylesheet" type="text/css" />
<link href="themes/hd/hstyle_flex.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript" src="themes/hd/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/hd/js/slides.min.jquery.js"></script>
<script type="text/javascript" src="themes/hd/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="themes/hd/js/hstyle_slide.js"></script>
</head>
<body>
<html>
<!--[if IE 6]>
<div id="yellowtip" style="width: 100%; background-color: rgb(254, 246, 227); border-top-width: 1px; border-bottom-width: 1px; border-style: solid none; border-top-color: rgb(229, 205, 150); border-bottom-color: rgb(229, 205, 150); height: 33px; min-width: 920px; z-index: 99999; background-position: initial initial; background-repeat: initial initial;">
    <div style="margin:0 auto;width:900px;line-height:33px;text-align:center;color:#82654D;">温馨提示：尊敬的用户，现在检测到您正在使用IE6浏览器。为了确保您的购物安全和更好的用户体验，请<a class="se6_download" style="color:#1C79A1" href="http://chrome.360.cn/" target="_blank">下载360极速浏览器</a>或者升级更高版本的IE浏览器</div>
    <div id="yellowtipclose" style="display:none;"></div>
  </div>
<![endif]-->
<div class='toolbar'>
    <div class="w">
        <ul class="fl lh">
            <li>
                <a href="index.php"  style='color:#c80a28' target="_blank">返回首页</a>
            </li>
            <li>
                <a href="javascript:window.external.addFavorite()" id='AddFavorite'rel="nofollow">收藏本站</a>
            </li>
      <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
      <li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <li>
                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=77898852&amp;site=qq&amp;menu=yes" target="_blank">在线客服</a>
            </li>
            <li><a href="user.php" target="_blank" >会员俱乐部</a></li>
        </ul>
        
         <ul class="fr">
            <li class="fore ld" id="phone_icon">
                <a href="/apps.html" target="_blank">
                    <img src="themes/hd/images/phone.png" alt="手机客户端" class="fl" style="margin-right: 4px;">
                    <span>手机版</span>
                </a>
            </li>
            <li class="fore ld" id='wireless_icon' style='padding:0;margin-right:-8px;'>
                <span> 关注我们</span>
                <img src='themes/hd/images/weixin.png' alt='官方微信' id='weixin' class='fl' style='margin:7px;margin-right:9px;'>
            </li>
        </ul>
        <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
        <ul class="fr" id="ECS_MEMBERZONE">
   <font><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
        </ul>
        <span class="clr"></span>
    </div>
</div>

<div id="header" >
    <div class="hstyle_head clearfix" >
        <a href="./"><div class="hstyle_logo"></div></a>
        
        <div class='tab_search' >
        			<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
                <input  onkeydown="if (event.keycode==13) {}" id='keyword' class='searchinput' value="- 搜索商品 -"  onfocus="if(this.value=='- 搜索商品 -')value='';" onblur="if(this.value=='')value='- 搜索商品 -';" title='search' size='10' name="keywords" >
                
                <input class='searchaction' onfocus="if(document.forms['search'].searchinput.value=='- 搜索商品 -')document.forms['search'].searchinput.value='';"  onclick="document.getElementById('searchForm').submit()" border=0 hspace=2 alt=search src="themes/hd/images/search_btn1.png"  type='image'>
                  </form>  
        </div>
        
        <div class='keyW'>
            <em>热门搜索:</em>
      <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        
        		 
        <div class='brandColumn_s' style='bottom:0;right:0'>
            <span></span>
              <a id="a" href="#" target="_blank"></a>
              <a id="b" href="#" target="_blank"></a>
              <a id="c" href="#" target="_blank"></a>
              <a id="d" href="#" target="_blank"></a>
              <a id="e" href="#" target="_blank"></a>
              <a id="f" href="#" target="_blank"></a>
              <a id="g" href="#" target="_blank"></a>
              <a id="h" href="#" target="_blank"></a>
        </div>
    </div>
    <div class="hstyle_nav" >
        <div class="navbg_r">
        </div>
        <div class="nav_w clearfix">
            <ul class="bd">
                <li class="rbg"> <a class="goodnews fl" href="./" style=" width: 200px;border:none;top:0;"> 全部商品分类 </a> </li>
                <li class="discovery" > <a href="./"  target="_blank"> 首页 </a> </li>
                <?php $this->assign('catchild', get_child_tree($this->_var['category']));?> 
                <?php $_from = $this->_var['catchild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['catspan'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catspan']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['catspan']['iteration']++;
?>
             <?php if ($this->_foreach['catspan']['iteration'] <= 7): ?>
              <li class="discovery"><a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                 </ul>
         </div>
    </div>
</div>
<div class='hstyle_top'>
      <div class='hstyle_banner'>
             <div class="hstyle_cate">
                      
                      
      <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
	<?php if ($this->_var['category'] == $this->_var['cat']['id']): ?>
    <?php if ($this->_var['topcat_id'] == $this->_var['cat']['id']): ?> 
		 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['curn']['iteration']++;
?>
                      <ul class="">
                          <h3><i id='c<?php echo $this->_foreach['curn']['iteration']; ?>'></i><a href="<?php echo $this->_var['child']['url']; ?>" id="menu2" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></h3>
                   <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['curn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['curn']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['curn']['iteration']++;
?>
			<li> <a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   </ul>
                       
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	<?php endif; ?> 
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </div>
              <div id="hstyle_banner">
            <div id="zzy_wrapper">
                <div class="zzySlider" >
                  <?php $this->assign('ecy_adflash', get_ecy_classpic($this->_var['category'],1)); ?>
                 <?php $_from = $this->_var['ecy_adflash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                 <a href="<?php echo $this->_var['item']['site_url']; ?>" target="_blank"><img src="data/ecyclasspic/<?php echo $this->_var['item']['brand_logo']; ?>" alt="<?php echo $this->_var['item']['brand_name']; ?>" title="<?php echo $this->_var['item']['brand_name']; ?>" /></a>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  	                     
                </div>
            </div>
        </div>
        
          <div class='notice' style='width: 1200px;background-position:0 0'>
       <a href="#" target="_blank" style="width:92px;height:45px;display: block;float: right;margin-right: 17%;"></a>
     </div>
      </div>
   
</div>
<div class='wrap'>
      
      <div class='section' style='margin-bottom: -20px;'>
                       <?php $this->assign('ecy_adpic_2', get_ecy_classpic_one($GLOBALS['smarty']->_var['category'],2)); ?>
                       <div class='hstyle_sad'><a href="<?php echo $this->_var['ecy_adpic_2']['site_url']; ?>" target="_blank"><img src="data/ecyclasspic/<?php echo $this->_var['ecy_adpic_2']['brand_logo']; ?>" class='fl'></a></div>  
                       <?php $this->assign('ecy_adpic_3', get_ecy_classpic_one($GLOBALS['smarty']->_var['category'],3)); ?>
                       <div class='hstyle_sad'><a href="<?php echo $this->_var['ecy_adpic_3']['site_url']; ?>" target="_blank"><img src="data/ecyclasspic/<?php echo $this->_var['ecy_adpic_3']['brand_logo']; ?>" class='fl'></a></div>
             
            <div class='hot_item'></div>
            <div class="flex-container flex_300" id='quikflex'>
                 <div class="flexslider" >
                       <ul class="slides">
                           <?php $this->assign('ecy_adflash1', get_ecy_classpic($this->_var['category'],4)); ?>
                 <?php $_from = $this->_var['ecy_adflash1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            <li>
                              <a href="<?php echo $this->_var['item']['site_url']; ?>" target="_blank"><img src="data/ecyclasspic/<?php echo $this->_var['item']['brand_logo']; ?>" alt="<?php echo $this->_var['item']['brand_name']; ?>" title="<?php echo $this->_var['item']['brand_name']; ?>" /></a>
                          </li>
                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                         
                      </ul>
                </div>
            </div>

      </div>
      
   
  <div class='section'>
      <h2 class='top10' style='position:relative'><a href="#" target="_blank" style='display: block;width: 50px;height: 18px;right: 17px;position: absolute;top: 25px;'></a></h2>
      <div id="slides">
        <div class="slides_container">
          

          <div class="slide">
               <?php
				$children = get_children($this->_var['category']);
				$this->assign('hot_goodss',   get_category_recommend_goods('hot',$children,10)); 
			?>
     <?php $_from = $this->_var['hot_goodss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['bestcun'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bestcun']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['bestcun']['iteration']++;
?>
      <?php if ($this->_foreach['bestcun']['iteration'] < 6): ?>
                    <div class="item">
                    <a  href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a>
                      <p class='hot'>热卖<?php echo $this->_var['goods']['salenum']; ?>件</p>
                      <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></p>
                      <p><span class="price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span></p>
                    </div>
  <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                            
              	 </div>
                 		 <div class="slide" >
              	 	   
                      <?php $_from = $this->_var['hot_goodss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['bestcun'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bestcun']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['bestcun']['iteration']++;
?>
      <?php if ($this->_foreach['bestcun']['iteration'] > 5): ?>
                    <div class="item">
                    <a  href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a>
                      <p class='hot'>热卖<?php echo $this->_var['goods']['salenum']; ?>件</p>
                      <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></p>
                      <p><span class="price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span></p>
                    </div>
  <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                  
         
          </div>
          
        </div>
      </div>
  </div>
  
     
 <?php $this->assign('get_child_list',get_child_treec($this->_var['category']));?>
<?php $_from = $this->_var['get_child_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cname');if (count($_from)):
    foreach ($_from AS $this->_var['cname']):
?>
   <div class='section'>
     <h2 class='section_title' id='hstyle_coat'><div class="catname"><?php echo $this->_var['cname']['name']; ?></div><a href="category.php?id=<?php echo $this->_var['cname']['id']; ?>" target="_blank" class='mLink'></a></h2>
      <ul class="hstyle_coat">
       <?php $this->assign("cat_goods",ecy_cat_goods($GLOBALS['smarty']->_var['cname']['id'],10));?>        
                   <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>
                              <li>
                      <a title="<?php echo $this->_var['goods']['name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
                        <img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
                      </a>
                      <p><span class="price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span></p>
                      <p class="name">
                      <a target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" class='tname' href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a>
                      </p>
                   </li>
               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>      
      </ul>
    </div>
      
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
      <div class='section'>
          <ul class='privilege'>
                     <h2 style='position:relative;'><a  href="#" target="_blank" style="display: block; width: 50px; height: 18px; right: 63px; position: absolute; top: 6px;">  </a></h2>
            <?php
				$children = get_children($this->_var['category']);
				$this->assign('best_goodss',   get_category_recommend_goods('best',$children,5)); 
			?>
     <?php $_from = $this->_var['best_goodss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['bestcun'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bestcun']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['bestcun']['iteration']++;
?>
                 <li>
                		<a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a>
                        <div class='info'><span><?php echo $this->_var['goods']['cuxiao_zhekou_price']; ?>折</span> <em><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></em></div>
                
                </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>              
          </ul>
      </div>
 
 
</div>
      
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script>
$(function(){
  $('#slides').slides({
    slideSpeed: 0,
    preload: false,
    generateNextPrev: true
  });
  var ii =0;
   $('.flex_300 .flexslider').flexslider({
         animation: "slide",   
         slideshow: true,
         pauseOnHover: true,
         useCSS: false,
         animationDuration: 300,    
         slideshowSpeed: 2000
   });
});
</script>
<script type="text/javascript">
String.prototype.about = function()           //保留1位小数
{ 
   return this.substring(0,this.indexOf('.')+0)
} 
$(function(){
    $('.zzySlider').nivoSlider({
        effect:'fade',
        directionNav:false,
        captionOpacity:0,
        slices:1,
        pauseTime: 4000,
        animSpeed: 200
    });
    var count = $('.nivo-controlNav a').size();
    var w = 965/count;
    var ww = w.toString().about()+'px';
    $('.nivo-controlNav a').css({'width':ww});
});
/*点击切换商品*/
function change_goods(goodsid)
{
	var goodsId = goodsid;
	 $('.hstyle_group').hide();
	 $('#tuangou'+goodsId).show();
 }
 
function checkSearchForm(){
	if(document.getElementById('keyword').value){
		return true;
	}else{
		alert("请输入搜索关键词！");
	    return false;
	}
}
</script>
</body>
</html>