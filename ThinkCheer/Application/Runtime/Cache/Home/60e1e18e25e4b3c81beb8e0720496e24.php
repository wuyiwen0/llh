<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>meIndex</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
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
        <div class="navbar redBack noBorder">
          <div class="navbar-inner">
            <div class="center">我</div>
            <div class="right">
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/setting" class="link icon-only external"><i class="fa fa-gear redBack"></i></a>
            </div>
          </div>
        </div>
        <div class="pages navbar-fixed toolbar-fixed">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content bW">
             <div class="tuoYuan">
             <a href="personal.html" class="external">
               <div class="imgCircle imgCerten"> </div>
              </a> 
                <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/personal" class="tag external">
                  <div class="level">13</div>
                </a>
              
               <div class="textCenter">
                 <p class="nikep1"><?php echo I("session.username")?></p>
                 <p class="nikep2"><a href="myFollow.html" class="whiteColor external">关注：0</a> &nbsp; &nbsp; &nbsp;<a href="fans.html" class="whiteColor external">粉丝：0</a></p>
               </div>
               </div>
               <div class="toolbar tabbar bW noBorder">
                <div class="toolbar-inner">
                   <a href="#" class="tab-link blackColor active redBorder">订单</a>
                   <a href="meIndex.html" class="tab-link blackColor">作品</a>
                   <a href="#" class="tab-link blackColor">收藏</a>
                </div>
              </div>
              <!-- 订单列表 -->
              <div class="orderList">
                <?php
 if(empty($unclaimed) && empty($inProgress)){ echo '<p class="noOrderTip font20">您还没有下过订单哦~</p>'; } ?>
                <?php if(is_array($inProgress)): $i = 0; $__LIST__ = $inProgress;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$in): $mod = ($i % 2 );++$i;?><div class="orderCardInpro">
                  <div class="orderContentInpro">
                    <div class="orderDetail floatLeft font16">
                      <p>代买食材：<span class="redColor"><?php echo ($in["ingredients"]); ?></span></p>
                      <p>截止时间：<?php echo ($in["deadline"]); ?></p>
                      <p>领取人：<?php echo ($in["username"]); ?></p>
                      <p>联系方式：<?php echo ($in["phonenum"]); ?></p>
                    </div>
                    <div class="orderStatus floatRight textCenter">
                      <i class="fa fa-clock-o font20 greyColor"></i>
                      <div class="statusFont">进行中</div>
                    </div>
                  </div>
                  <div class="orderBottom">
                    <div class="floatLeft font16 oNumber greyColor">订单号：00000000000</div>
                    <a href="#" class="button floatRight orderButton" style="width: 80px;">查看</a>
                  </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php if(is_array($unclaimed)): $i = 0; $__LIST__ = $unclaimed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$un): $mod = ($i % 2 );++$i;?><div class="orderCard">
                  <div class="orderContent">
                    <div class="orderDetail floatLeft font16">
                      <p>代买食材：<span class="redColor"><?php echo ($un["ingredients"]); ?></span></p>
                      <p>截止时间：<?php echo ($un["deadline"]); ?></p>
                    </div>
                    <div class="orderStatus floatRight textCenter">
                      <i class="fa fa-clock-o font20 greyColor"></i>
                      <div class="statusFont">待服务</div>
                    </div>
                  </div>
                  <div class="orderBottom">
                    <div class="floatLeft font16 oNumber greyColor">订单号：00000000000</div>
                    <a href="#" class="button floatRight orderButton" style="width: 80px;">取消</a>
                  </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div> <!--订单列表 end-->
          </div>
        </div>
        
      </div>
      <!-- Bottom Toolbar-->
         <div class="toolbar textCenter">
            <div class="toolbar-inner">
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Index/index" class="external tab-link greyColor">
                <i class="icon fa fa-home font20"></i>
                <span class="tabbar-label font11">主页</span>
              </a>
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Video/lists" class="external tab-link greyColor">
                <i class="icon fa fa-video-camera font16"></i>
                <span class="tabbar-label font11">直播间</span>
              </a>
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Nowait/requestlist" class="external tab-link greyColor">
                <i class="icon fa fa-shopping-bag font16"></i>
                <span class="tabbar-label font11">不等袋</span>
              </a>
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Nearby/lists" class="external tab-link greyColor">
                <i class="icon fa fa-map-signs font16"></i>
                <span class="tabbar-label font11">附近</span>
              </a>
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/index" class="external tab-link redColor">
                <i class="icon fa fa-user font16"></i>
                <span class="tabbar-label font11">我</span>
              </a>
            </div>
          </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>   
    <!-- Path to your app js-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script> 
  </body>
</html>