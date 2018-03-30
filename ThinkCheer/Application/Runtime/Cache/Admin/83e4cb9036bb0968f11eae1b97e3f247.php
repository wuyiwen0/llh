<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图片管理列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/github/Wplus/ThinkWplus/Public/back/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/github/Wplus/ThinkWplus/Public/back/css/animate.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body>
	<!-- 图片管理 -->
    <form action="/github/Wplus/ThinkWplus/index.php/Admin/Work/imageBatchDelete" method="post">
    <div class="row tab-pane" style="margin-top:1%;">
        <div class="container">
        	<div class="row" style="padding:1% 0;border-bottom:solid 1px #E0E0E0;">
                <div class="col-sm-8">
                    <h2>图片管理</h2>
                </div>
            </div>
            <?php if(is_array($image)): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vl): $mod = ($i % 2 );++$i;?><div class="" style="float:left; padding-top:1%;">
				<div style="margin-left: 10px;">
					<div>
						<label><input type="checkbox" name="id[]" id="userCheckbox" value="<?php echo ($vl["id"]); ?>"></label>
						<img src="<?php echo ($vl["path"]); ?>" width="25%"/>
					</div>
					<div class="" style="text-align: center; padding-top:1%;">
						<button type="button " class="btn ">
                            <a href="/github/Wplus/ThinkWplus/index.php/Admin/Work/imageDelete/id/<?php echo ($vl["id"]); ?>">删除</a>     
                        </button>
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
    <div class="row" style="padding-top:1%;border-top:solid 1px #E0E0E0;margin-top:1%;">
        <!--分页和添加-->
        <div class="col-sm-1 col-sm-1 col-lg-1"></div>
        <div class="col-sm-7 col-sm-7 col-lg-7">
        	<div class="input-group pull-left form">
                <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span> 批量删除     
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
	<!-- 全局js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/jquery.min.js?v=2.1.4"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- 自定义js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/content.js?v=1.0.0"></script>
</body>
</html>