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
		<div class="study_container clearfix">
			<h1>
				<a href="<?php echo U('home/index/index');?>" class="n1">网站首页</a>
				<a href="<?php echo U('home/study/study',array('categroy_id'=>$list['categroy_id']));?>" class="n2"><?php echo ($list1["name"]); ?></a>
				<span class="fr">我们长路漫漫，只因学无止境。</span>
			</h1>
			<div class="container-left fl clearfix">
			   <h2 class="c-title"><?php echo ($list["title"]); ?></h2>
			   <p class="c-box">
			   	  <span class="d_time">发布时间：<?php echo (date('Y-m-d,H:i:s',$list["create_time"])); ?></span>
			   	  <span>
			   	  	编辑：
			   	  	<a href=""><?php echo ($list["author"]); ?></a>
			   	  </span>
			   	  <span>
			   	  	阅读 <?php echo ($list["read_num"]); ?>
			   	  </span>
			   </p>
			   <div class="c-info">
				   	<p>
				   		<?php echo ($list["description"]); ?>
				   	</p>
				   	<p>
				   		<img src="/Public/home/img/daima.png">
				   	</p>				  
				   <p>				   
						<?php echo (htmlspecialchars_decode($list["content"])); ?>
				   </p>
			   </div>
			   <div class="key">
			   		<p>
			   			<span>关键字</span>:帝国cms,首页,自定义页面,分页
			   		</p>
			   </div>
				<div class="nextinfo">
					<p>
						上一篇:<a href="<?php echo U('home/study/detail',array('id'=>$list3['id']));?>"><?php echo ($list3["title"]); ?></a>
					</p>
					<p>
						下一篇:<a href="<?php echo U('home/study/detail',array('id'=>$list4['id']));?>"><?php echo ($list4["title"]); ?></a>
					</p>
				</div>
				<div class="otherlink">
					<h2>相关文章</h2>
					<ul class="clearfix">
						<li>
							<a href="">帝国cms常用标签调用方法总结（不得不收藏哦）</a>
						</li>
						<li>
							<a href="">帝国cms怎样修改列表分页函数</a>
						</li>
					</ul>
				</div>
			   <div class="page">
					<a class="first" href="">168</a>
					<a href="">1</a>
					<a href="">2</a>
					<a href="">3</a>
					<a href="">4</a>
					<a href="">></a>
					<a href="">>></a>
			   </div>
			   <div class="content floatl">
					<ul class="content_ul_top clearfix">
						<li class="fontsizemiddle"><p class="top_command">被顶起来的评论</p></li>
						<?php if(is_array($list9)): foreach($list9 as $key=>$value1): ?><li>
							<p class="floatl"><a href=""><img src="/Public/home/img/4.jpg" width="50" height="50"></a></p>
							<p class="fontsizesmall">yanbh</p>
							<p><?php echo ($value1["content"]); ?></p>
							<p class="fontsizesmall">
								<span>2月24日</span>
								<span>回复</span> 
								顶<span class='ding_top'><?php echo ($value1["top"]); ?></span> 
								<span>转发</span>
							</p>
						</li><?php endforeach; endif; ?>
					</ul>
					<div class="content_middle clearfix">
						<ul class="floatl clearfix">
							<li class="p_middle_lifirst"><a href=""><span><?php echo ($num); ?></span>条评论</a></li>
						<!-- 	<li><a href=""><span>10</span>条新浪微博</a></li>
					 		<li><a href=""><span>6</span>条新浪微博</a></li> -->
						</ul>
						<ul class="floatr clearfix">
							<li><span><a href="">最新</a></span></li>
							<li><a href="">最早</a></li>
							<li><a href="">最热</a></li>
						</ul>
					</div>
					<ul class="content_ul_center">	
						<?php if(is_array($list8)): foreach($list8 as $key=>$value2): ?><li>
							<p class="floatl"><a href=""><img src="/Public/home/img/7.jpg" width="30" height="30"></a></p>
							<p class="fontsizesmall">yanbh</p>
							<p><?php echo ($value2["content"]); ?></p>
							<p class="fontsizesmall">
								<span>2月24日</span> 
								<span>回复</span> 
								顶<span class='ding_top2'><?php echo ($value2["top"]); ?></span> 
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
					<form action="<?php echo U('home/liuyan/huifu');?>" method='post'>
						<input type="text" name='content'>
						<p class="anounce">
							<span class="floatr"><input type='submit'></span>
						</p>
						<input class='id_top' type='hidden' name='blog_id' value='<?php echo ($list["id"]); ?>'>
					</form>
						<p class="floatr fontsizesmall">杨青个人微博网站正在使用多说</p>	
					</div>
			   </div>
			</div>
			<div class="content_r fl">
				<form>
					<input type="text" value="请输入关键字"class="input">	
					<button>搜索</button>
				</form>
				<div class="nav">
					<ul>
						<?php if(is_array($list7)): foreach($list7 as $key=>$vo): ?><li class="nav1">
							<a href="<?php echo U('home/study/study',array('categroy_id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
				<h4 class="right-top"><p>最新<span>文章</span></p></h4>
				<ul class="news news1">
					<?php if(is_array($list5)): foreach($list5 as $key=>$vo1): ?><li><a href="<?php echo U('home/study/study',array('id'=>$vo1['id']));?>"><?php echo ($vo1["title"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
				<h4><p>模板<span>排行</span></p></h4>
				<ul class="news news2">
					<?php if(is_array($list6)): foreach($list6 as $key=>$vo2): ?><li><a href="<?php echo U('home/study/study',array('id'=>$vo2['id']));?>"><?php echo ($vo2["title"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
				
			</div>
		</div>
		<div class="footer conmwidth">
			<div class="footer_mid conmwidth_10">
				<span class="footer_info">Design by DanceSmile</span>
				<a class="footer_a" href="">蜀ICP备11002373号-1</a>
			</div>
		</div>
<script type="text/javascript">
	$(function(){
		$('.ding_top').click(function(){
			var num = $(this).html();  //不止一个ding_top
			var id = $('.id_top').attr('value');
			var that = $(this);
			$.ajax({
				url:"<?php echo U('home/study/top');?>",
				data:{'num':num,'id':id},
				type:'post',
				dataType:'json',
				success:function(arr){
					that.html(arr.top);
				}
			});
		});
		$('.ding_top2').click(function(){
			var num = $(this).html();
			var id = $('.id_top').attr('value');
			var that = $(this);
			$.ajax({
				url:"<?php echo U('home/study/top');?>",
				data:{'num':num,'id':id},
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