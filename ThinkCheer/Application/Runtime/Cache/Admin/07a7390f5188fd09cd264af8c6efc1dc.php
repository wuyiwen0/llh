<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--360浏览器优先以webkit内核解析-->
    <title>用户管理</title>
    <link rel="shortcut icon" href="favicon.ico"> <link href="/github/Wplus/ThinkWplus/Public/back/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/animate.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row clearfix">
        <form action="/github/Wplus/ThinkWplus/index.php/Admin/User/batchDelete" method="post">
        <div class="col-md-12 column">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>头像</th>
                        <th>用户名</th>
                        <th>称呼</th>
                        <th>性别</th>
                        <th>邮箱地址</th>
                        <th>手机号</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                  <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vl): $mod = ($i % 2 );++$i;?><tr>
                        <td><input type="checkbox" name="id[]" id="userCheckbox" value="<?php echo ($vl["id"]); ?>"></td>
                        <td>
                          <?php echo ($vl["headimg"]); ?>
                        </td>
                        <td>
                           <?php echo ($vl["username"]); ?>
                        </td>
                        <td>
                            <?php echo ($vl["call"]); ?>
                        </td>
                        <td>
                           <?php echo ($vl["sex"]); ?>
                        </td>
                        <td>
                           <?php echo ($vl["e-mail"]); ?>
                        </td>
                         <td>
                           <?php echo ($vl["phonenum"]); ?>
                        </td>
                        <td>
                            <a href="/github/Wplus/ThinkWplus/index.php/Admin/User/delete/id/<?php echo ($vl["id"]); ?>"><button type="button" class="btn btn-link ">
                              <span class="glyphicon  glyphicon-trash"></span>
                              删除     
                            </button>
                            </a> 
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        </div>
        <div class="row clearfix">
        <div class="col-md-1 column">
        </div>
        <div class="col-md-5 column">
            <div class="input-group pull-left form">
            <button type="submit" class="btn btn-danger  ">
              <span class="glyphicon  glyphicon-trash"></span>批量删除     
            </button>
            </div>
        </div>
        <div class="col-md-6 column">
            <ul class="pagination pagination-lg ">
                <li>
                     <a href="#">上一页</a>
                </li>
                <li>
                     <a href="#">1</a>
                </li>
                <li>
                     <a href="#">2</a>
                </li>
                <li>
                     <a href="#">3</a>
                </li>
                <li>
                     <a href="#">4</a>
                </li>
                <li>
                     <a href="#">5</a>
                </li>
                <li>
                     <a href="#">下一页</a>
                </li>
            </ul>
        </div>
        </div>
        </form>
    </div>    
    <!-- 全局js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/jquery.min.js?v=2.1.4"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/layer/layer.min.js"></script>
    <!-- Flot -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/flot/jquery.flot.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/flot/jquery.flot.pie.js"></script>
    
</body>

</html>