<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>- 主页</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/animate.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="logo-element" style="display: block;"><img src="/github/Wplus/ThinkWplus/Public/back/img/logo.png" width="50px" />
                        </div>
                    </li>
                    <li>
                        <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Index/indexIndex.html">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-desktop"></i>
                            <span class="nav-label">系统管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Admin/lists">管理员列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Admin/add">添加管理员</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Admin/modi">修改个人信息</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-folder-open"></i> <span class="nav-label">作品管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Work/articleLists">文章管理</a>
                            </li>
                            <li><a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Work/videoLists">视频管理</a>
                            </li>
                            <li><a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Work/imageLists">图片管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Feedback/index"><i class="fa fa-envelope"></i> <span class="nav-label">反馈管理</span></a>
                    </li>
                    <li>
                        <a href="user.html"><i class="fa fa-user"></i> <span class="nav-label">用户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/User/lists">用户列表</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-book"></i> <span class="nav-label">菜谱管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Recipe/lists">菜谱列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Recipe/add">添加菜谱</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="J_menuItem" href="/github/Wplus/ThinkWplus/index.php/Admin/Recommend/lists"><i class="fa fa-thumbs-up"></i> <span class="nav-label">推荐位管理</span></a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe id="J_iframe" width="100%" height="100%" src="/github/Wplus/ThinkWplus/index.php/Admin/Index/indexIndex" frameborder="0" data-id="index_v1.html" seamless></iframe>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

    <!-- 全局js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/jquery.min.js?v=2.1.4"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/hAdmin.js?v=4.1.0"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/index.js"></script>

    <!-- 第三方插件 -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/pace/pace.min.js"></script>

</body>

</html>