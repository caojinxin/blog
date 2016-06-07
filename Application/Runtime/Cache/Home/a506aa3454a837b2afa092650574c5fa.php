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
	<p class="content_top clearfix"> <span class="floatl backyotopandleave"><a href="<?php echo U('home/index/index');?>" class="backyotopandleave">网站首页</a></span> <span class="floatl backyotopandleaveb"><a href="<?php echo U('home/liuyan/liuyan');?>" class="backyotopandleaveb">留言板</a></span> <span class="floatr fontsizesmall">你，生命中最重要的过客，之所以是过客，因为你未曾为我停留。</span></p>
	<div class="contant_hold clearfix">
		<div class="content floatl">
			<ul class="content_ul_top clearfix">
				<li class="fontsizemiddle"><p class="top_command">被顶起来的评论</p></li>
				<?php if(is_array($list1)): foreach($list1 as $key=>$value): ?><li>
					<p class="floatl"><a href=""><img src="/Public/home/img/4.jpg" width="50" height="50"></a></p>
					<p class="fontsizesmall">yanbh</p>
					<p><?php echo ($value["content"]); ?></p>
					<p class="fontsizesmall">
						<span>2月24日</span> 
						<span>回复</span> 
						顶<span class='ding_top'><?php echo ($value["top"]); ?></span> 
						<span>转发</span>
					</p>
				</li><?php endforeach; endif; ?>
			</ul>
			<div class="content_middle clearfix">
				<ul class="floatl clearfix">
					<li class="p_middle_lifirst"><a href=""><span><?php echo ($num); ?></span>条评论</a></li>
					<!-- <li><a href=""><span>10</span>条新浪微博</a></li>
					<li><a href=""><span>6</span>条新浪微博</a></li> -->
				</ul>
				<ul class="floatr clearfix">
					<li><span><a href="">最新</a></span></li>
					<li><a href="">最早</a></li>
					<li><a href="">最热</a></li>
				</ul>
			</div>
			<ul class="content_ul_center">
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><li>
					<p class="floatl"><a href=""><img src="/Public/home/img/7.jpg" width="30" height="30"></a></p>
					<p class="fontsizesmall">yanbh</p>
					<p><?php echo ($vo["content"]); ?></p>
					<p class="fontsizesmall">
						<span>2月24日</span> 
						<span>回复</span> 
						顶<span class='ding_top2'><?php echo ($vo["top"]); ?></span> 
						<span>转发</span>
					</p>
				</li><?php endforeach; endif; ?>
			</ul>
			<div class="content_bottom">
				<ul class="floatr clearfix">
					<li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li class="dian">...........</li>
					<li><a href="">102</a></li>
				</ul>
			</div>
			<ul class="share clearfix">
				<li>社交登录账号：</li>
				<li><a href="">微信</a></li>
				<li><a href="">微博</a></li>
				<li><a href="">QQ</a></li>
				<li><a href="">人人</a></li>
				<li><a href="">更多》</a></li>
			</ul>
			<div class="toursaid">
				<a href=""><img src="/Public/home/img/2.jpg"></a>
					<form action="<?php echo U('home/liuyan/liuyan');?>" method='post'>
						<input type="text" name='content'>
						<p class="anounce">
							<span class="floatr"><input type='submit'></span>
						</p>
					</form>
				<p class="floatr fontsizesmall">杨青个人微博网站正在使用多说</p>	
			</div>
		</div>
		<div class="content_right floatl">
			<ul>
				<li>网名： DanceSmile |即步非烟</li>
				<li>姓名：杨青</li>
				<li>籍贯：四川省成都市</li>
				<li>现居：天津市-滨海新区</li>
				<li>职业：网页设计、网站制作</li>
				<li>喜欢的书：《黑与白》《红楼梦》</li>
				<li>《burning》《just one last dance》《相思引》</li>
				<li><a href=""><img src="/Public/home/img/joinQQ.jpg"></a></li>
				<li><a href=""><img src="/Public/home/img/ourQQemail.png"></a></li>
				<li><img src="/Public/home/img/person.jpg"></li>
			</ul>
		</div>
	</div>
	<p class="foot">Design by DanceSmile <span>蜀ICP备11002373号-1</span></p>
<script type="text/javascript">
	$(function(){
		$('.ding_top').click(function(){
			var num = $(this).html();  //不止一个ding_top
			var that = $(this);
			$.ajax({
				url:"<?php echo U('home/liuyan/top');?>",
				data:{'num':num},
				type:'post',
				dataType:'json',
				success:function(arr){
					that.html(arr.top);
				}
			});
		});
		$('.ding_top2').click(function(){
			var num = $(this).html();
			var that = $(this);
			$.ajax({
				url:"<?php echo U('home/liuyan/top');?>",
				data:{'num':num},
				dataType:'json',
				type:'post',
				success:function(arr){
					that.html(arr.top);
				}
			});
		});
	})
</script>
</body>
</html>