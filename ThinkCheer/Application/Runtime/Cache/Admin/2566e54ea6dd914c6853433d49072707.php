<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--360浏览器优先以webkit内核解析-->


    <title>反馈管理</title>

    <link rel="shortcut icon" href="favicon.ico"> <link href="/github/Wplus/ThinkWplus/Public/back/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/github/Wplus/ThinkWplus/Public/back/css/animate.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
      <form class="form-horizontal" role="form" action="<?php echo U('Admin/feedback/alldestroy');?>" method="post">
        <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>
                            账号
                        </th>
                        <th>
                            反馈类型
                        </th>
                        <th>
                           状态
                        </th>
                        <th>
                            用户名
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>                 
                    <?php if(is_array($feedbacks)): $i = 0; $__LIST__ = $feedbacks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td>
                            <label><input type="checkbox" name="id[]" value="<?php echo ($data["id"]); ?>" /></label>  
                        </td>
                        <td>
                            <?php echo ($data["id"]); ?>
                        </td>
                        <td>
                            <?php echo ($data["backtype"]); ?>
                        </td>
                        <td>
                            <?php echo ($data["backstate"]); ?>
                        </td>
                        <td>
                          <?php echo ($data["username"]); ?>
                        </td>
                        <td>

                            <a href="/github/Wplus/ThinkWplus/index.php/Admin/Feedback/reply/id/<?php echo ($data["id"]); ?>"><button type="button" class="btn btn-link ">
                              <span class="glyphicon  glyphicon-share-alt"></span>回复      
                             </button>
                             </a>
                            <a href="/github/Wplus/ThinkWplus/index.php/Admin/Feedback/destroy/id/<?php echo ($data["id"]); ?>"><button type="button" class="btn btn-link ">
                              <span class="glyphicon  glyphicon-trash"></span> 删除     
                            </button></a>
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
             <button type="submit" class="btn btn-danger ">
              <span class="glyphicon  glyphicon-trash"></span> 批量删除     
            </button>
           <!--  <button type="button" class="btn btn-success">
              <span class="glyphicon  glyphicon-share-alt"></span> 批量回复      
            </button>  -->
        </div>
        <div class="col-md-6 column">
            <ul class="pagination pagination-lg ">
                <?php echo ($page); ?>
            </ul>
        </div>
        </div>
       </form> 
    </div>    
    <!-- 全局js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/jquery.min.js?v=2.1.4"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/bootstrap.min.js?v=3.3.6"></script>
</body>
</html>