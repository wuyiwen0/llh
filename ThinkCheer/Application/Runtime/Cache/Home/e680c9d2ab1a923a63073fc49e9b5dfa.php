<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>验证手机</title>
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
  </head>
  <body>
    <div class="statusbar-overlay"></div>
    <div class="views">
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar redBGColor">
          <div class="navbar-inner">
            <div class="left"><a href="/github/Wplus/ThinkWplus/index.php/Home/Signup/signup"><i class="whiteColor fa fa-arrow-left"></i></a></div>
            <div class="center whiteColor">验证手机</div>
            <div class="right" style="width: 30px;"></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-throug">
          <div data-page="index" class="page">
            <div class="page-content whiteBGColor">
            <p class="Center verify">我们发送了6位验证码至</p>
            <p class="Center verify"><?php echo I("session.phonenum");?></p>
              <form class="list-block inputList" action="/github/Wplus/ThinkWplus/index.php/Home/Signup/doVerify" method="post" id="form">
                <div class="item-content  paddingRight">
                  <div class="item-inner">
                    <div class="item-input">
                      <input type="text" placeholder="输入验证码" id="PIN" name="verifycode">
                    </div>
                    <div class="">
                      <a href="#" class="button resendBtn" id="resend" disabled="disabled">60s后重新获取</a>
                    </div>
                  </div>
                </div>
              </form>
              <div class="sign">
                <a href="#" class="button signBtn" disabled="disabled" name="submit" onclick="document.getElementById('form').submit();return false;">下一步</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <!-- <script src="js/my-app.js"></script> -->
    <script src="/github/Wplus/ThinkWplus/Public/front/js/verify.js"></script>
  </body>
</html>