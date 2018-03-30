<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>NearBy</title>
  <!-- Path to Font-awesome Library CSS-->
  <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
  <!-- Path to Framework7 Library CSS-->
  <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
  <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
  <!-- Path to your custom app styles-->
  <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
</head>
<body>
  <!-- Status bar overlay for fullscreen mode-->
  <div class="statusbar-overlay"></div>
  <!-- Views-->
  <div class="views">
    <!-- Your main view, should have "view-main" class-->
    <div class="view view-main">
      <!-- Top Navbar-->
      <div class="navbar redBGColor">
        <div class="navbar-inner">
          <!-- We have home navbar without left link-->
          <div class="center sliding whiteColor">附近</div>
          <div class="right">
            <!-- Right link contains only icon - additional "icon-only" class--><a href="#" data-popover=".popover-links" class="link icon-only open-popover"> <i class="icon fa fa-plus whiteColor"></i></a>
          </div>
        </div>
      </div>
      <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
      <div class="pages navbar-through toolbar-through">
        <!-- Page, data-page contains page name-->
        <div data-page="index" class="page">
          <!-- Scrollable page content-->
          <div class="page-content">
            <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="card facebook-card">
              <div class="card-header">
                <div class="fb">
                  <div class="facebook-avatar"><img src="/github/Wplus/ThinkWplus/Public/<?php echo ($vo["head"]); ?>"></div>
                  <div class="facebook-name"><?php echo ($vo["username"]); ?></div>
                  <div class="facebook-date"><?php echo ($vo["time"]); ?></div>
                </div>
                <a href="#" class="button followBtn">关注</a>
              </div>
              <div class="card-content">
                <div class="card-content-inner">
                  <a href="/github/Wplus/ThinkWplus/index.php/Home/Nearby/content" class="cardLink external">
                    <h3><?php echo ($vo["title"]); ?></h3>
                    <p><?php echo ($vo["content"]); ?></p>
                    <img src="/github/Wplus/ThinkWplus/Public/<?php echo ($vo["img"]); ?>" width="100%">
                  </a>
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="link"><i class="icon fa fa-heart-o"> 112</i></a>
                <a href="#" class="link"><i class="icon fa fa-commenting-o"> 24</i></a>
                <a href="#" class="link"><i class="icon fa fa-share-square-o"> 152</i></a>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>
      </div>
      <!-- Bottom Toolbar-->
      <div class="toolbar">
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
          <a href="/github/Wplus/ThinkWplus/index.php/Home/Nearby/lists" class="external tab-link redColor">
            <i class="icon fa fa-map-signs font16"></i>
            <span class="tabbar-label font11">附近</span>
          </a>
          <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/index" class="external tab-link greyColor">
            <i class="icon fa fa-user font16"></i>
            <span class="tabbar-label font11">我</span>
          </a>
        </div>
      </div><!-- toolbar end -->
    </div>
  </div>
  <!-- Links popover -->
  <div class="popover popover-links">
    <div class="popover-angle"></div>
    <div class="popover-inner">
      <div class="list-block">
        <ul>
          <li><a href="/github/Wplus/ThinkWplus/index.php/Home/Nearby/essayedit" class="external list-button item-link">写文章</a></li>
          <li><a href="/github/Wplus/ThinkWplus/index.php/Home/Nearby/dynamicedit" class="external list-button item-link">发动态</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Path to Framework7 Library JS-->
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
  <!-- Path to your app js-->
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
 </body>
</html>