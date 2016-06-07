<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/Public/home/css/yq.css">
		<link rel="stylesheet" href="/Public/home/css/com_css.css">		
		<script src="/Public/home/js/jquery2.1.4.min.js"></script>
		<script src="/Public/home/js/top_bur.js"></script>	
		<title>主页</title>
	</head>
	<body>
		<div class="header conmwidth">
			<div class="conmwidth_10 clearfix">
				<div class="fl">
					<img class="logo" src="/Public/home/img/logo.jpg" alt="">
				</div>
				<ul class="header_r fr">
					<li>
						<a <?php if(CONTROLLER_NAME=='Index'){echo 'class="color"';} ?> href="<?php echo U('home/index/index');?>"><span class="12">首页</span><br><span class="sub">Protal</span></a>
					</li>
					<li>
						<a <?php if(CONTROLLER_NAME=='About'){echo 'class="color"';} ?> href="<?php echo U('home/about/about');?>"><span>关于我</span><br><span class="sub">About</span></a>
					</li>
					<li>
						<a <?php if(CONTROLLER_NAME=='Manlife'){echo 'class="color"';} ?> href="<?php echo U('home/manlife/manlife');?>"><span>慢生活</span><br><span class="sub">Life</span></a>
					</li>
					<li>
						<a <?php if(CONTROLLER_NAME=='Lang'){echo 'class="color"';} ?> href="<?php echo U('home/lang/lang');?>"><span>岁言碎语</span><br><span class="sub">Doing</span></a>
					</li>
					<li>
						<a <?php if(CONTROLLER_NAME=='Index'){echo 'class="color"';} ?> href=""><span>模板分享</span><br><span class="sub">Share</span></a>
					</li>
					<li>
						<a <?php if(CONTROLLER_NAME=='Study'){echo 'class="color"';} ?> href="<?php echo U('home/study/study');?>"><span>学无止境</span><br><span class="sub">Learn</span></a>
					</li>
					<li>
						<a <?php if(CONTROLLER_NAME=='Index'){echo 'class="color"';} ?> href=""><span>留言板</span><br><span class="sub">Guestbook</span></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container clearfix">
			<h1>
				<a href="" class="n1">网站首页</a>
				<a href="" class="n2">慢生活</a>
				<span class="fr">删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span>
			</h1>
			<div class="d20"></div>
			<ul class="dateview">
				<li>
					<div class="dataciew_list">
						<p class="dataciew_list_text clearfix"><img class="fl" src="/Public/home/img/img1.jpg" alt="">生活的坑都是自己挖的！譬如，听别人讲话，听到最后，耳朵里只会记住两类话：最愿意听的和最不愿意听的。然后，喜欢听的未必化成快乐，但不喜欢听的一定化成了痛苦，其他的都化成了风。</p>
						<div class="triangle"></div>
						<div class="circle"></div>
						<div class="note">2015-02-01</div>
					</div>
				</li>
				<li>
					<div class="dataciew_list">
						<p class="dataciew_list_text clearfix"><img class="fl" src="/Public/home/img/img1.jpg" alt="">生活的坑都是自己挖的！譬如，听别人讲话，听到最后，耳朵里只会记住两类话：最愿意听的和最不愿意听的。然后，喜欢听的未必化成快乐，但不喜欢听的一定化成了痛苦，其他的都化成了风。</p>
						<div class="circle"></div>
						<div class="note">2015-02-01</div>
					</div>
				</li>
			</ul>
			<div class="page">
				<a class="first" href="">168</a>
				<a href="">1</a>
				<a href="">2</a>
				<a href="">3</a>
				<a href="">4</a>
				<a href="">></a>
				<a href="">>></a>
			</div>
		</div>
		<div class="footer conmwidth">
			<div class="footer_mid conmwidth_10">
				<span class="footer_info">Design by DanceSmile</span>
				<a class="footer_a" href="">蜀ICP备11002373号-1</a>
			</div>
		</div>
	</body>
</html>