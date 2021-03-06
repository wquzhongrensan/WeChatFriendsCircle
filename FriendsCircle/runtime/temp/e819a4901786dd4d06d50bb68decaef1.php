<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:102:"D:\phpStudy\WWW\WeChatFriendsCircle\FriendsCircle\public/../application/mobile\view\publish\index.html";i:1525143750;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!-- 引入font-awesome.min.css -->
	<link rel="stylesheet" type="text/css" href="/static/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- 引入bootstrap.min.css -->
	<link rel="stylesheet" type="text/css" href="/static/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/static/mobile/css/publish.css">
	<!-- 引入IconFont 图标生成的symbol代码 -->
	<script src="/static/mobile/Iconfont/iconfont.js"></script>
	<title>发布页</title>
</head>
<body>
	<form action="<?php echo url('mobile/publish/upload'); ?>" method="post" enctype="multipart/form-data">
		<div class="header">
			<svg class="icon last" aria-hidden="true">
			  	<use xlink:href="#icon-xitongfanhui"></use>
			</svg>
			<div class="header_line"></div>
			<input type="submit" value="发送" class="button">
			<div sytle="clear:both;"></div>
		</div>
		<textarea autofocus id="textarea" name="idea" placeholder="这一刻的想法..."></textarea>
		<div class="picture_box">
			<div class="picture add">
				<svg class="icon" aria-hidden="true">
				  	<use xlink:href="#icon-add"></use>
				</svg>
			</div>
			<div sytle="clear:both;"></div>
		</div>
	</form>
	<div class="content">
		<svg class="icon" aria-hidden="true">
		  	<use xlink:href="#icon-my-weizhi"></use>
		</svg>
		<span class="txt">所在位置</span>
	</div>
	<div class="content limit">
		<svg class="icon" aria-hidden="true">
		  	<use xlink:href="#icon-diqiu"></use>
		</svg>
		<span class="txt">谁可以看</span>
		<span class="public">公开</span>
	</div>
	<div class="content">
		<svg class="icon" aria-hidden="true">
		  	<use xlink:href="#icon-momentpostmention"></use>
		</svg>
		<span class="txt">提醒谁看</span>
	</div>
	<svg class="icon zone" aria-hidden="true">
	  	<use xlink:href="#icon-kongjian"></use>
	</svg>
	<div class="watch">
		<img src="" class="img">
	</div>
	<!-- 引入jquery.min.js -->
	<script type="text/javascript" src="/static/bootstrap/js/jquery.min.js"></script>
	<!-- 引入bootstrap.min.js -->
	<script type="text/javascript" src="/static/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var i = 0
		//返回
		$(".last").click(function(){
			window.location.href = "<?php echo url('mobile/pyq/index'); ?>";
		})
		//zone
		$(".zone").click(function(){
			if($(this).hasClass("zone_color")){
				$(this).removeClass("zone_color")
			}else{
				$(this).addClass("zone_color")
			}
		})
		//全屏显示
		$(".picture>img").click(function(){
			$(".watch").children().attr("src",$(this).attr("src"))
			$(".watch").show()
			$(".watch>img").hide()
			$(".watch>img").fadeIn()
		})
		$(".watch").click(function(){
			$(this).hide()
		})
		function localView(from) {
		    var file = from.files[0]
		    var url = null ;
		    if (window.createObjectURL!=undefined) { 
		        url = window.createObjectURL(file) ;
		    } else if (window.URL!=undefined) {
		        url = window.URL.createObjectURL(file) ;
		    } else if (window.webkitURL!=undefined) { 
		        url = window.webkitURL.createObjectURL(file) ;
		    }
		    return url
		}
		$(".add").on('click',function(){
			i++
			if(i==9){
				$(".add").hide()
			}
			$(".picture_box").append('<input type="file" class="f" id="image'+i+'" style="display:none;" name="image[]">')
			$('#image'+i).click()
		})
		$(document).on("change",".f",function(){
			$(".picture_box").prepend('<div class="picture"><img src="" id='+i+'></div>')
			var src = localView(this)
			$("#"+i).attr("src",src)
		})
	</script>
</body>
</html>