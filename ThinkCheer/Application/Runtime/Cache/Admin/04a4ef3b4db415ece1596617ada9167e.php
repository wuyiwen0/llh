<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>添加菜谱</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/github/Wplus/ThinkWplus/Public/back/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/animate.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/fileinput.css" rel="stylesheet" >
    <link href="/github/Wplus/ThinkWplus/Public/back/css/luxiaojia.css" rel="stylesheet" >

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加菜谱</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" action="/github/Wplus/ThinkWplus/index.php/Admin/Recipe/doAdd">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">菜名</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="recipename">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">标签</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">用料</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="食材" name="foodname[]">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="数量" name="foodnum[]">
                                </div>
                                <div class="addAndRemove" id="addFood">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">做法</label>

                                <div class="col-sm-9">
                                    <textarea name="step[]" id="" rows="3" class="form-control" placeholder="步骤"></textarea>
                                </div>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-9 paddingTop">
                                     //
                                </div>
                                <div class="addAndRemove" id="addProcedure">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">闹钟</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="第几步，请输入数字" name="clocknum[]">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="clocktime[]" placeholder="时间">
                                </div>
                                <div class="addAndRemove" id="addClock">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                            <!--上传图片-->
                            <!-- <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">图片</label>

                                <div class="col-sm-9">
                                    <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" name="img">
                                    <span class="help-block m-b-none">请上传所有步骤的图片，按ctrl多图片上传</span>
                                </div>
                            </div> -->
                            <div class="hr-line-dashed"></div>
                            <div class="form-group Center">
                                <button class="btn btn-primary" type="submit">保存内容</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/jquery.min.js?v=2.1.4"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/bootstrap.min.js?v=3.3.6"></script>   

    <!-- 自定义js -->
    
    <script src="/github/Wplus/ThinkWplus/Public/back/js/content.js?v=1.0.0"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/jquery.uploadView.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/luxiaojia.js"></script>


    <!-- iCheck -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    
    

</body>

</html>