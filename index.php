<?php
 $url=explode(PHP_EOL, file_get_contents("http://fh.r0jbx1.cn/fh/dl.txt"));
 $urls = array_rand($url,1);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,viewport-fit=cover">
		<title>···</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="theme.css-v=1.4.css" /> 
	</head> 
<body>
<!-- 轮播 -->
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<a href="<?php echo $url[$urls]; ?>/8.html">点我获取永久入口</a>
        </div>
    </div>
	<div class="rj-space"></div>
<style>
	.weui-cells:before{border:0;}
</style>
<!-- 公告 -->
	<div class="swiper-container2" style="height:50px;">
		<div class="swiper-wrapper" style="height:40px;">
			<div class="swiper-slide">
				<a href="<?php echo $url[$urls]; ?>/5.html">我的书架</a>
				<a href="<?php echo $url[$urls]; ?>/6.html">书城首页</a>
				<a href="<?php echo $url[$urls]; ?>/7.html">每日送币</a>
			</div>
		</div>
	</div>
	<div class="rj-space"></div>
<style>
.more{	color: #999;	position: absolute;    right: 1em;}
.weui-cells__title div{ position: relative; }
</style>
	<div class="weui-grids">
		<a style="width:25%" href="<?php echo $url[$urls]; ?>/1.html" class="weui-grid rj_grids" target="_blank">
			<div class="rj-grid-img">
				<img src='https://wxpublic-1251448646.file.myqcloud.com/mobile/20220411/1649669492AHQHBU.png' />
			</div>
				<p class="weui-grid__label rj_title">阅读刚刚的书</p>
		</a>
		<a style="width:25%" href="<?php echo $url[$urls]; ?>/2.html" class="weui-grid rj_grids" target="_blank">
			<div class="rj-grid-img">
				<img src='https://wxpublic-1251448646.file.myqcloud.com/mobile/20220411/1649669510JBLUWZ.png' />
			</div>
			<p class="weui-grid__label rj_title">热书推荐</p>
		</a>
		<a style="width:25%" href="<?php echo $url[$urls]; ?>/3.html" class="weui-grid rj_grids" target="_blank">
			<div class="rj-grid-img">
				<img src='https://wxpublic-1251448646.file.myqcloud.com/mobile/20220411/1649669540FISEIF.png' />
			</div>
			<p class="weui-grid__label rj_title">视频1</p>
		</a>
		<a style="width:25%" href="<?php echo $url[$urls]; ?>/4.html" class="weui-grid rj_grids" target="_blank">
			<div class="rj-grid-img">
				<img src='https://wxpublic-1251448646.file.myqcloud.com/mobile/20220411/1649669579NLWWOF.png' />
			</div>
			<p class="weui-grid__label rj_title">视频2</p>
		</a>
	</div>
<div class="rj-space"></div>
</body>
</html>
