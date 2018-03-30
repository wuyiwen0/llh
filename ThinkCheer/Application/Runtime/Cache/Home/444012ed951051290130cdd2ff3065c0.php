<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>address</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/jialin.css">
  </head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar ">
          <div class="navbar-inner">
           <div class="left">
              <a href="personal.html" class="link icon-only external"> <i class="fa fa-arrow-left blackColor"></i></a>
            </div> 
            <div class="center addressHeader">收货地址管理</div>
          </div>
        </div>
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
              <?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="card cardM1">
        			  <div class="card-content">
        			    <div class="card-content-inner mT8">
          			    <div class="row">
          			    	<div class="col-25 carName"><?php echo ($vo["username"]); ?></div>
          			    	<div class="col-50 carName"><?php echo ($vo["phonenum"]); ?></div>
          			    	<div class="col-25 "><a href="#" class="button buttonColor">一键代</a></div>
          			    </div>
        			    	<div class="cardAddress" style="font-size: 18px;"><?php echo ($vo["province"]); echo ($vo["city"]); echo ($vo["area"]); echo ($vo["community"]); echo ($vo["address"]); ?></div>
        			    	<div class="mT10"><a href="#" class="icon fa fa-dollar">在线支付</a></div>
        			    </div>
        			  </div>
        			  <div class="card-footer">
        			    <span class="footerLeft"><a href="#" class="fontGrey"><i class="fa fa-chevron-circle-down redColor"></i>&nbsp;默认地址</a></span>
        			    <span class="footerRight"><a href="#" class="icon fa fa-edit fontGrey">&nbsp;编辑</a><a href="#">&nbsp;&nbsp;</a>
        			    <a href="#" class="icon fa fa-trash fontGrey">&nbsp;删除</a></span>
        			  </div>
        			</div><?php endforeach; endif; else: echo "" ;endif; ?>     
            </div>
            <div class="toolbar">
              <div class="toolbar-inner redBack">
                <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/addAddress" class="link redBack imgCerten external"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;新建收货地址</a>
              </div>
            </div>
          </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
  </body>
</html>