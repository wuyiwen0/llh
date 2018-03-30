<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章管理列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/github/Wplus/ThinkWplus/Public/back/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/github/Wplus/ThinkWplus/Public/back/css/animate.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
	    td a:link{
	    	color: #424242;
	    }
    </style>
</head>
<body class="gray-bg">
  <!-- 文章管理 -->
  <div class="row tab-pane active" style="margin-top:1%;">
    <div class="container">
      <form action="/github/Wplus/ThinkWplus/index.php/Admin/Work/articleBatchDelete" method="post">
      <div class="row" style="padding:1% 0;border-bottom:solid 1px #E0E0E0;">
        <div class="col-sm-8">
          <h2>文章管理</h2>
        </div>
      </div>
      <div class="row" style="padding-top:1%;">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th></th>
              <th>标题</th>
              <th>作者</th>
              <th>发表时间</th>
              <th>阅读量</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vl): $mod = ($i % 2 );++$i;?><tr>
              <td>
                <input type="checkbox" name="id[]" id="userCheckbox" value="<?php echo ($vl["id"]); ?>">
              </td>
              <td>
                <a href="/github/Wplus/ThinkWplus/index.php/Admin/Work/article/id/<?php echo ($vl["id"]); ?>"><?php echo ($vl["title"]); ?></a>
              </td>
              <td>
                <?php echo ($vl["username"]); ?>
              </td>
              <td>
                <?php echo ($vl["time"]); ?>
              </td>
              <td>
                <?php echo ($vl["amount"]); ?>
              </td> 
              <td>   
               
                <a href="/github/Wplus/ThinkWplus/index.php/Admin/Work/articleDelete/id/<?php echo ($vl["id"]); ?>"><button type="button" class="btn btn-link ">
                  <span class="glyphicon  glyphicon-trash"></span> 删除     
                </button></a>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
      </div>
      <div class="row" style="padding-top:1%;border-top:solid 1px #E0E0E0;margin-top:1%;">
        <!--分页和添加-->
        <div class="col-sm-1 col-sm-1 col-lg-1"></div>
        <div class="col-sm-7 col-sm-7 col-lg-7">
          <div class="input-group pull-left form">
            <button type="submit" class="btn btn-danger">
              <span class="glyphicon  glyphicon-trash"></span> 批量删除     
            </button>
          </div>
        </div> 
        <div class="col-sm-4 col-sm-4 col-lg-4">
          <ul class="pagination pagination-lg">
              <?php echo ($page); ?>
          </ul>
        </div>
      </div>
      </form>
    </div>
  </div>

    <!-- 全局js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/jquery.min.js?v=2.1.4"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- 自定义js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/content.js?v=1.0.0"></script>    
</body>
</html>