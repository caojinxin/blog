<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="/Public/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="/Public/admin/css/charisma-app.css" rel="stylesheet">
    <link href='/Public/admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='/Public/admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='/Public/admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='/Public/admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='/Public/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='/Public/admin/css/uploadify.css' rel='stylesheet'>
    <link href='/Public/admin/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="/Public/admin/js/jquery.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <link href="/Public/vendor/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/Public/vendor/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/vendor/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/vendor/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/Public/vendor/umeditor/lang/zh-cn/zh-cn.js"></script>

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="/Public/admin/images/logo20.png" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">              
                        <li><a class="ajax-link" href="<?php echo U('admin/blog/index');?>"><i
                                    class="glyphicon glyphicon-edit"></i><span> Blogs</span></a></li>
                        <li><a class="ajax-link" href="<?php echo U('admin/categroy/index');?>"><i class="glyphicon glyphicon-list-alt"></i><span> Categroy</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo U('admin/doing/index');?>"><i class="glyphicon glyphicon-font"></i><span> 碎言碎语</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo U('admin/about/update');?>"><i class="glyphicon glyphicon-picture"></i><span> About</span></a>
                        </li>
                        <li class="nav-header hidden-md">Sample Section</li>
                        <li><a class="ajax-link" href="table.html"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="calendar.html"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
                        <li><a class="ajax-link" href="grid.html"><i
                                    class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                        <li><a href="<?php echo U('admin/comment/index');?>"><i class="glyphicon glyphicon-globe"></i><span> Comment</span></a></li>
                        <li><a class="ajax-link" href="icon.html"><i
                                    class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                        <li><a href="error.html"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                        </li>
                        <li><a href="login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
<div class="col-lg-12 col-sm-12 row">
<a href="<?php echo U('admin/doing/add');?>">新增</a>
<table class = 'table'>
	<tr>
		<th>ID</th>
		<th>文章</th>
		<th>图片地址</th>
		<th>图片</th>
		<th>创建时间</th>
		<th>更新时间</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
		<td><?php echo ($vo["id"]); ?></td>
		<td><?php echo (mb_substr($vo["content"],0,10,utf8)); ?></td>
		<td><?php echo ($vo["pic"]); ?></td>
		<td><img src="/Public/uploads/<?php echo ($vo["pic"]); ?>" alt="" width="100px" height="100px"></td>
		<td><?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?></td>
		<td><?php echo (date('Y-m-d H:i:s',$vo["update_time"])); ?></td>
		<td><a href="<?php echo U('admin/doing/update',array('id'=>$vo['id']));?>">修改</a>/<a href="<?php echo U('admin/doing/delete',array('id'=>$vo['id']));?>">删除</a></td>
	</tr><?php endforeach; endif; ?>
</table>
<div class="page"><?php echo ($page); ?></div>
</div>
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
<footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->
</body>
</html>