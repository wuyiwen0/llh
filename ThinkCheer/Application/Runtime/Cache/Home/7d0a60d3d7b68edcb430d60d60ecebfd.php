<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>完善资料</title>
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
            <div class="center sliding whiteColor">完善资料</div>
            <div class="right" style="width: 30px;"></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-throug">
          <div data-page="index" class="page">
            <div class="page-content whiteBGColor">
              <form class="list-block inputList" action="/github/Wplus/ThinkWplus/index.php/Home/Signup/doSet" method="post" id="form">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-input">
                          <input type="text" placeholder="输入用户名" id="nick" class="improve" name="username">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-inner bottomBorder">
                        <div class="item-input">
                          <input type="password" placeholder="输入6-16位密码" id="password" class="improve" name="password">
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </form>
              <div class="sign">
                <a href="#" class="button signBtn" disabled="disabled" name="submit" onclick="document.getElementById('form').submit();return false;">下一步</a>
              </div>
              
              <p class="greyColor clearBoth OR font11">点击下一步即代表同意味+</p>
              <p class="clearBoth Center"><a href="#" class="redColor font11">使用条款与隐私协议</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/improve.js"></script>
  </body>
</html>