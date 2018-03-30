<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>signin</title>
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/welcomescreen.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/main.css">
  </head>
  <body>
    <div class="statusbar-overlay"></div>
    <div class="views">
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar redBGColor">
          <div class="navbar-inner">
            <div class="left" style="width: 30px;"></div>
            <div class="center whiteColor">登录</div>
            <div class="right"><a href="/github/Wplus/ThinkWplus/index.php/Home/Signup/signup" class="external link whiteColor">注册</a></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-throug">
          <div data-page="index" class="page">
            <div class="page-content whiteBGColor">
              <form class="list-block inputList" id="form" action="/github/Wplus/ThinkWplus/index.php/Home/Signup/doSign" method="post">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-input">
                          <input type="text" placeholder="请输入手机账号" id="mobile" name="phonenum">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-inner bottomBorder">
                        <div class="item-input">
                          <input type="password" placeholder="请输入密码" id="password" name="password">
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </form>
              <div class="rightFloat problemLink">
                <a href="#" class="link redColor">登录遇到问题？</a>
              </div>
              <div class="clearFloat"></div>
              <div class="sign">
                <a href="#" class="external button signBtn" disabled="disabled" onclick="document.getElementById('form').submit();return false;">登录</a>
              </div>
              
              <p class="greyColor clearBoth OR">OR</p>
              <div class="orBox">
                <a href="#" class="greyColor"><i class="fa fa-qq"></i></a>
                <a href="#" class="greyColor"><i class="fa fa-wechat"></i></a>
                <a href="#" class="greyColor"><i class="fa fa-weibo"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/signin.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/welcomescreen.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/myapp/pages/IndexPageController.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/myapp/init.js"></script>
  </body>
</html>