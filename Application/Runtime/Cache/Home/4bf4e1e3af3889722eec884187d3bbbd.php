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
						<a <?php if(CONTROLLER_NAME=='Index'){echo 'class="color"';} ?> href="<?php echo U('home/liuyan/liuyan');?>"><span>留言板</span><br><span class="sub">Guestbook</span></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="menu">
				<a href="#">网站首页</a><a href="#" id="menu_a">关于我</a>
				<span>n像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span>
			</div>
			<div class="centent clearfix">
				<div class="centent_left">
					<h3>Just about me</h3>
					<div class="about">
					</div>
					<h3>About my blog</h3>
					<div class="about_second">			
						<p>
							<span><?php echo ($list["content"]); ?></span>
						</p>
					</div>
				</div>
				<div class="centent_right">
					<p>网名：<?php echo ($list["wang"]); ?></p>
					<p>姓名：<?php echo ($list["name"]); ?></p>
					<p>籍贯：<?php echo ($list["address"]); ?></p>
					<p>现居：<?php echo ($list["nowaddress"]); ?><p>
					<p>职业：<?php echo ($list["work"]); ?></p>
					<p>喜欢的书：<?php echo ($list["book"]); ?></p>
					<p>喜欢的音乐：<?php echo ($list["music"]); ?></p>
					<p><a href="#"><img src="/Public/home/img/ico_mailme_22.png"></a></p>
					<p><a href="#"><img src="/Public/home/img/picMode_light_m.png"></a></p>
				</div>
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