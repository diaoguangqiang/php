<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>PHP+jQuery+Ajax+SESSION登录与退出实例</title>
        <meta name="keywords" content="SESSION登录实例,SESSION退出实例" />
        <meta name="description" content="本文使用Ajax无刷新登录和退出，从而提升了用户体验。" />
        <link rel="stylesheet" type="text/css" href="http://www.sucaihuo.com/jquery/css/common.css" />
        <style>
            #login{width:420px; height:200px; margin:60px auto; border:1px solid #aac6eb}
            #login h3{height:32px; line-height:32px; padding-left:8px; background:#e8f5fe}
            #login_form{margin:20px 10px}
            #login p{height:30px; line-height:30px; margin:10px 0}
            #login p label{float:left; width:120px; text-align:right}
            .input{width:180px; height:24px; line-height:24px; padding:2px; border:1px solid #d3d3d3}
            .sub{height:42px; line-height:42px; position:absolute}
            .btn{width:86px; height:33px; background:url(images/login_btn.jpg) no-repeat; border:none; text-indent:-999em; display:block; cursor:pointer; margin-left:120px}
            .cur_select{border:1px solid #aac6eb}
            #msg,#errmsg{position:absolute; width:200px; height:32px; line-height:32px; left:220px; top:0; color:#f30; font-weight:bold}
            .loading{background:url(images/loading.gif) no-repeat 0 6px; padding-left:18px; color:#999}
            #result{margin:20px; text-align:center}
            #result p{line-height:22px; margin:2px 0}
            #result p span{color:#f30; margin:4px; font-weight:bold}
        </style>
    </head>
    <body>
        <div class="head">
            <div class="head_inner clearfix">
                <ul id="nav">
                    <li><a href="http://www.sucaihuo.com">首 页</a></li>
                    <li><a href="http://www.sucaihuo.com/templates">网站模板</a></li>
                    <li><a href="http://www.sucaihuo.com/js">网页特效</a></li>
                </ul>
                <a class="logo" href="http://www.sucaihuo.com"><img src="http://www.sucaihuo.com/Public/images/logo.jpg" alt="素材火logo" /></a>
            </div>
        </div>
        <div id="container">
            <div class="demo">
                <p style="margin:20px">提示：用户名和密码都是 <b>sucaihuo</b>。</p>
                <div id="login">
                    <h3>用户登录</h3>
                    <?php
                    session_start();
                    if (isset($_SESSION['user'])) {
                        ?>
                        <div id="result">
                            <p><strong><?php echo $_SESSION['user']; ?></strong>，恭喜您登录成功！</p>
                            <p>您这是第<span><?php echo $_SESSION['login_counts']; ?></span>次登录本站。</p>
                            <p>上次登陆本站的时间是：<span><?php echo date('Y-m-d H:i:s', $_SESSION['login_time']); ?></span></p><p><a href='#' id='logout'>【退出】</a></p>
                        </div>
                    <?php } else { ?>
                        <div id="login_form">
                            <p><label>用户名：</label> <input type="text" class="input" name="user" id="user" /></p>
                            <p><label>密 码：</label> <input type="password" class="input" name="pass" id="pass" /></p>
                            <div class="sub">
                                <input type="submit" class="btn" value="登 录" />
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="foot">
            Powered by sucaihuo.com  本站皆为作者原创，转载请注明原文链接：<a href="http://www.sucaihuo.com" target="_blank">www.sucaihuo.com</a>
        </div>
        <script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script> 
        <script type="text/javascript" src="global.js"></script>
    </body>
</html>

