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
		<div class="container conmwidth">
			<div class="banner">
				<div class="banner_mid conmwidth_10 clearfix">
					<div class="box_text fl">
						<p>我们不停的翻弄着回忆</p>
						<p>我们不停的翻弄着回忆</p>
						<p>我们不停的翻弄着回忆</p>
					</div>
					<div class="box_img fr">
						<img src="/Public/home/img/photos2.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="d20"></div>
			<div class="content conmwidth_10 clearfix">
				<div class="bg">
					<h3>文章推荐</h3>
				</div>
				<div class="content_l fl">
					<ul class="list">
						<?php if(is_array($list)): foreach($list as $k=>$vo): ?><li>
							<h5><?php echo ($vo["title"]); ?></h5>
							<div class="mid clearfix">
								<img class="fl" src="/Public/<?php echo ($vo["pic"]); ?>" alt="" width='150px' height='150px'>
								<div class="right_describe fr">
									<p><?php echo (htmlspecialchars_decode($vo["content"])); ?></p>
									<div class="whole">
										<a href="<?php echo U('home/'.$detail_url[$vo['parent_id']]['controller'].'/'.$detail_url[$vo['parent_id']]['method'],array('id'=>$vo['id']));?>">阅读全文></a>
									</div>
								</div>
							</div>
							<p class="info">
								<span><?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?></span>
								<span>作者：<?php echo ($vo["author"]); ?></span>
								<span>个人博客：[<a href=""><?php echo (htmlspecialchars_decode($vo["description"])); ?></a>]</span>
							</p>
						</li><?php endforeach; endif; ?>
					</ul>
					<div class='page'>
			   			<?php echo ($page); ?>
					</div>
				</div>				
				<div class="content_r fr">
					<img src="/Public/home/img/weather.jpg" alt="">
					<h4><p>最新<span>文章</span></p></h4>
					<ul class="news news1">
						<?php if(is_array($info)): foreach($info as $key=>$vo): ?><li><a href=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
					<h4><p>模板<span>排行</span></p></h4>
					<ul class="news news2">
						<?php if(is_array($info)): foreach($info as $key=>$vo): ?><li><a href=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>>
					</ul>
					<h4><p>友情<span>链接</span></p></h4>
					<div class="website">
						<a href="">三维模型下载</a>
					</div>
					<div class="icon clearfix">
						<a href="" class="bds_more">
						</a>
						<div class="share">
							<div class="share_c">分享到</div>
							<ul class="list_info clearfix">
								<li><a href=""><span class="list_info_1"></span>一键分享</a></li>
								<li><a href=""><span class="list_info_2"></span>QQ空间</a></li>
								<li><a href=""><span class="list_info_3"></span>新浪微博</a></li>
								<li><a href=""><span class="list_info_4"></span>百度</a></li>
							</ul>
							<div class="share_c">
								<a class="more_more fr" href=""><span class="list_info_0"></span>更多...</a>
							</div>
						</div>
						<a href="" class="bds_qzone"></a>
						<a href="" class="bds_tsina"></a>
						<a href="" class="bds_tqq"></a>
						<a href="" class="bds_renren"></a>
						<a href="" class="bds_weixin"></a>
					</div>
					<p class="prompt">扫描二维码关注<span>杨青博客</span>官方微信账号</p>
					<a href=""><img src="/Public/home/img/weixin.jpg" alt=""></a>
					
				</div>
			</div>
		</div>
		<div class="d20"></div>
		<div class="footer conmwidth">
			<div class="footer_mid conmwidth_10">
				<span class="footer_info">Design by DanceSmile</span>
				<a class="footer_a" href="">蜀ICP备11002373号-1</a>
			</div>
		</div>
	</body>
</html>