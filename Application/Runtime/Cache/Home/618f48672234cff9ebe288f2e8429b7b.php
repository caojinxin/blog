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
		<div class="container clearfix">
			<h1>
				<a href="<?php echo U('home/index/index');?>" class="n1">网站首页</a>
				<a href="<?php echo ($bar["url"]); ?>" class="n2"><?php echo ($bar["name"]); ?></a>
				<span class="fr">我们长路漫漫，只因学无止境。</span>
			</h1>
			<div class="container-left fl clearfix">
			   <?php if(is_array($list)): foreach($list as $k=>$v): ?><div class="container-left-left clearfix">
			   		<h2>
						<a href=""><?php echo ($v["title"]); ?></a>
					</h2>
					<p>
						<span>发布时间：<?php echo (date('Y-m-d H:i:s',$v["create_time"])); ?></span>
						<span>作者：<?php echo ($v["author"]); ?></span>
						<span>
						<a href=""><?php echo ($categroy[$v['categroy_id']]['name']); ?></a>
						</span>
					</p>
					<figure class="fl">
						<a href=""title="IP要突破2000+了">
							<img src="/Public/<?php echo ($v["pic"]); ?>">
						</a>
					</figure>
					<div class="container-left-right fl">
						<p>
							<?php echo (htmlspecialchars_decode($v["content"])); ?>
						</p>
						<a href="<?php echo U('home/study/detail',array('id'=>$v['id']));?>">
							详细信息>>
						</a>
					</div>
					<div class="line fl"></div>
			   </div><?php endforeach; endif; ?>
			   <div class='page'>
			   		<?php echo ($page); ?>
				</div>
			</div>
			<div class="content_r fl">
				<form>
					<input type="text" value="请输入关键字"class="input">	
					<button>搜索</button>
				</form>
				<div class="nav">
					<ul>
						<?php if(is_array($categroy)): foreach($categroy as $key=>$value): if($value['parent_id'] == 5){ ?>
							<li class="nav1">
								<a href="<?php echo U('home/study/study',array('categroy_id'=>$value['id']));?>"><?php echo ($value["name"]); ?></a>
							</li>
							<?php continue; ?>
						<?php } endforeach; endif; ?>					
					</ul>
				</div>
				<h4 class="right-top"><p>最新<span>文章</span></p></h4>
				<ul class="news news1">
					<?php if(is_array($info1)): foreach($info1 as $key=>$vo): ?><li><a href=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
				<h4><p>模板<span>排行</span></p></h4>
				<ul class="news news2">
					<?php if(is_array($info)): foreach($info as $key=>$vo): ?><li><a href=""><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
				
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