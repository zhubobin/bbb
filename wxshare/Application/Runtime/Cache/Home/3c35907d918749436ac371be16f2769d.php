<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta content="telephone=no" name="format-detection">
	<title><?php echo ($config['sitename']); ?></title>
	<link rel="stylesheet" type="text/css" href="/wxshare/Public/phone/css/wap_base.css">
	<style type="text/css">
		body{
		 -webkit-overflow-scrolling: touch;overflow-scrolling: touch;
		 }
		*{padding: 0px;margin: 0px;-webkit-overflow-scrolling: touch;}
		#top{width: 100%;position: relative;}
		#bestTop{width:100%;height:47px;position: absolute;left: 0px;top:0px;background: rgba(0,0,0,0.5);z-index: 2;}
		.fl{float: left;}
		.fr{float: right;}
		.cb{clear: both;}
		.logo1{width: 41%;margin-left: 3%;margin-top: 5px;}
		.down1{width: 23%;margin-right: 3%;margin-top: 10px;}
		#topBom{width: 100%;height:25px;position:absolute;left:0px;bottom:0px;background: rgba(239,121,90,0.8);z-index: 2;}
		.title2{width: 48%;margin: 3px 0px -3px 25%;}
		.icon{width: 50px;height:50px;border: #95DDD0 solid 1px;border-radius: 54px;margin: 9px 3px 4px 8px;}
		.gender{width: 8%;margin: 2px 0px 0px 5px;}
		.jibie{width: 17%;margin: 2px 0px 0px 6px;}
		.ziliao{max-width:58%;margin: 8px 0px 0px 4px;}
		.nick{max-width:68%;color: #000;font-size: 1.1em;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
		.qiamming{max-width:100%;font-size: 0.8em;  text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
		#top2{width: 100%;}
		#xian{width: 100%;height: 8px;background: #D5DFDD;}
		#tab{width: 100%;height:44px;background: #95DDD0;line-height: 44px;font-size: 16px;letter-spacing: 1px;}
		.hot{height:100%;margin-left: 32%;color: #42938B;border-bottom: solid #42938B 2px;}
		.back{height:100%;margin-right: 22%;color: white;}
		.fix{ position: fixed;top:0;left:0;z-index:2;}
		.swiper-slide .lists{width: 48.5%;float: left;margin-left:1%;margin-top:3px;position: relative;}
		.swiper-slide .lists .icon-big{width: 100%;height:181px;}
		.ziliao2{width:100%;height:15%;position: absolute;left: 0;bottom: 2%;background: rgba(0,0,0,0.5);line-height: 200%;}
		.icon-little{width: 19%;border: solid #95DDD0 1px;border-radius: 55px;margin-left: 3%;margin-top: -10%;}
		.eye{width: 11%;margin-top: 4%;}
		.nick2{color:#fff;font-size:0.8em;max-width: 42%;text-overflow: ellipsis;overflow: hidden;white-space:nowrap;}
		.fans{color: #fff;font-size:0.8em;max-width: 31%;text-overflow: ellipsis;overflow: hidden;white-space:nowrap;margin-left: 3%;margin-right: 1%;}
		.icon-little2{  border: solid 1px #95DDD0;border-radius: 55px;width: 10%;position: relative;left: 2%;bottom: -18%;}
		.jchf li{border-bottom: solid 1px #E7E3E3;height: 69px;list-style-type: none;}
		.ziliao3{width: 60%;margin-top: -2%;  margin-top: 3%;}
		.vv{ width: 4%;position: relative;left: -2%;top: 52%;}
		.nick3{display: block;max-width: 64%;color: #9D9D9D;font-family: "微软雅黑";font-size: 1.2em;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
		.clock{width: 7%;margin-left: 3%;margin-right: 2%;}
		.times{color: #9D9D9D;font-size: 0.9em;font-family: "微软雅黑";display: block;}
		.huifang{width: 15%;position: relative;top: 6px;}
		.fans2{max-width: 15%;color: #666;font-size: 0.8em;margin-right: 2%;margin-left: 1%;margin-top:2%;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
		.people{width: 6%;  margin-top: 3%;}
		.tiaozhuan{font-family: "微软雅黑";font-size: 1.5em;background-color: #FFFFFF;height: 22%;width: 100%;text-align: center;left: 0px;top: 0px;position: absolute;z-index: 4;display: none;}
		.div1 {height: 50%;}
		.sp1 {width: 50%;position: absolute;top: 14%;left: 11%;}
		.tiaozhuan img {transform: scale(0.7,0.7);-ms-transform: scale(0.7,0.7);-moz-transform: scale(0.7,0.7);-webkit-transform: scale(0.7,0.7);-o-transform: scale(0.7,0.7);float: right;}
		.cl{clear: left;}
		.sp2 {width: 65%;position: absolute;top: 64%;left: 8%;}
		.bg {background-color: black;opacity: 0.6;width: 100%;height: 100%;position: absolute;left: 0px;top: 0px;z-index: 3;display: none;}
		#shadow{width:100%;height:100%;position: absolute;z-index: 1;opacity: 0.5;background-color: black;display: none;}
		.no-player-text{width:100%;text-align: center;position: absolute;top: 44%;z-index: 4;display: none;}
		.skip-hot{font-size: 1em;color: #fff;width: 44%;margin: 0 auto;}
		#hf-text{text-align: left;position: absolute;left:5px;top:54px;z-index: 2;display: none;}
        #live-bg{width: 100%;position: relative;}
		.live-bg{width: 100%;}
        .play-btn{width: 11%;position: absolute;left: 47%;top:44%;}
		.ID{color:#A7E3D8;font-size: 0.9em;font-family: "微软雅黑";line-height: 14px;}
		.bo-id{color:#A7E3D8; }

		.mask{background:rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000,endColorstr=#b2000000);zoom:1;}
		#hong1{
			margin-top: 10%;
			width: 64%;
			transform:scale(1.2,1.2);
			-ms-transform:scale(1.2,1.2);
			-moz-transform:scale(1.2,1.2);
			-webkit-transform:scale(1.2,1.2);
			-o-transform:scale(1.2,1.2);
		}
		#hong2{
			position: absolute;
			z-index: 15;
			top: 10%;
			left: 41%;
			border-radius: 999px;
			width: 18%;
			height: 18%;
		}
		#mingzi{
			width: 38%;
			position: absolute;
			z-index: 15;
			top: 28%;
			left: 31%;
			color: #FFFFFF;
			font-size: 1.1em;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
		}
		#shiyuan{
			width: 76%;
			height: 8%;
			position: absolute;
			z-index: 15;
			top: 43%;
			left: 12%;
			color: #EAC411;
			font-size: 1.9em;
			letter-spacing: 1px;
		}
	</style>

	<link rel="stylesheet" href="/wxshare/Public/phone/css/swiper.min.css">
	<script src="/wxshare/Public/phone/js/jquery-1.9.1.min.js"></script>
	<script src="/wxshare/Public/phone/js/jwplayer.js?v=5"></script>
	<script >jwplayer.key="lsUqQ+PB1edH+bYoMb85Yr5CuPlXyhK/ngcyNQ==";</script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script src="/wxshare/Public/phone/js/weixin_share.js"></script>
	<script src="/wxshare/Public/phone/js/swiper.min.js"></script>
</head>
<body>

<div id="top">
	<!--暂无视频-->
	<div id="shadow"></div>
	<div class="no-player-text">
		<div style="color: #95DDD0;line-height: 22px;font-size: 1.5em;">直播已结束</div>
		<div id="user_num" style="font-size: 1em;color: #fff"></div>
		<div class="skip-hot">去看看其他热门直播 ></div>
	</div>
	<img src="" class="user_pic bg_user_pic" style="width: 100%;height: 100%;">
	<!--暂无视频结束-->
	<div id="bestTop">
		<img src="/wxshare/Public/phone/images/logo1.jpg" class="fl logo1">
		<a id="down"><img src="/wxshare/Public/phone/images/down.jpg" class="fr down1"></a>
	</div>
	<!--播放器-->
	<div class="player" style="display:none">
		<div id='container'>
		</div>
	</div>
	<!--播放器 结束-->
	<!--直播-->
	<div id="live-bg">
		<img src="" class="live-bg">
		<img src="/wxshare/Public/phone/images/play2.jpg" class="play-btn">
	</div>
	<!--直播 结束-->
	<a class="topBom">
		<div id="topBom">
			<img src="/wxshare/Public/phone/images/bottom-ad.jpg" class="title2">
		</div></a>
	<div id="hf-text">
		<div style="font-size: 1em;color: #95DDD0;">精彩回放</div>
	</div>
</div>

<!--用户信息-->
<div id="top2">
	<img src="/wxshare/Public/phone/images/user_pic.jpg" class="fl icon user_pic" >
	<div class="fl ziliao">
		<div class="fl nick user_nick"></div>
		<!-- <img class="fl gender"> -->
		<!-- <img class="fl jibie"> --><br/>
		<div class="ID">ID:<span class="bo-id"></span></div>
		<div class="qiamming"></div>
	</div>
	<div class="cb"></div>
</div>
<div id="xian"></div>
<!--用户信息结束-->
<!--热门 精彩回放-->
<div id="tab">
	<div style="width:50%;height:95%;float:left;"><div class="fl hot prev">热门直播</div></div>
	<!-- <div style="width:50%;height:95%;float:left;"><div class="fr back next">他的精彩回放</div></div> -->

</div>
<div class="swiper-container" style="width: 100%;">
	<div class="swiper-wrapper" style="width: 100%;">
		<div class="swiper-slide hots" style="width: 100%;">
		</div>
		<div class="swiper-slide" style="width: 100%;">
			<ul class="jchf">
			</ul>
		</div>
	</div>
</div>
<!--热门 精彩回放结束-->
<!--打开app跳转提示-->
<div class="tiaozhuan">
	<div class="div1"><div class="sp1">1.请点击右上角</div><img  src="/wxshare/Public/phone/images/share.jpg"><div class="cl"></div></div>
	<div class="div1"><div class="sp2">2.选择在浏览器打开</div><img style="margin-right: 12%;" src="/wxshare/Public/phone/images/safari.jpg"><div class="cl"></div></div>
</div>
<div class="bg"></div>
<!--打开app跳转提示 结束-->



<!--数据-->
<input type="hidden" id="showid" value="<?php echo ($userinfo['showid']); ?>">
<input type="hidden" id="uid" value="<?php echo ($userinfo['id']); ?>">
<input type="hidden" id="roomnum" value="<?php echo ($userinfo['id']); ?>">
<input type="hidden" id="live_uid" value="<?php echo ($userinfo['id']); ?>">
<input type="hidden" id="view_uid" value="<?php echo ($view_uid); ?>">
<input type="hidden" id="view_nick" value="<?php echo ($view_nick); ?>">
<input type="hidden" id="from" value="">
<input type="hidden" id="weixin_openid" value="<?php echo ($weixin_openid); ?>">
<input type="hidden" id="sio_ip" value="">
<input type="hidden" id="session" value="">
<input type="hidden" id="wxpay_verify" value="">
<input type="hidden" id="first_login" value="">
<input type="hidden" id="isappinstalled" value="0">

<input type="hidden" id="weixin_appid" value="<?php echo ($config['wx_appid']); ?>">
<input type="hidden" id="weixin_signature" value="<?php echo ($config['wx_appsecret']); ?>">
<input type="hidden" id="weixin_timestamp" value="<?php echo ($nowtime); ?>">
<input type="hidden" id="weixin_noncestr" value="mEYBZRqXbkcwthwIrWuw">
<input type="hidden" id="weixin_share_link" value="<?php echo ($config['wx_siteurl']); ?>Phone/index?roomnum=<?php echo ($userinfo['id']); ?>">
<input type="hidden" id="weixin_share_name" value="">
<input type="hidden" id="weixin_share_desc" value="你丑你先睡，我美我直播！<?php echo ($userinfo['user_nicename']); ?>正在直播，快来一起看~">
<input type="hidden" id="weixin_share_img" value="<?php echo ($userinfo['snap']); ?>">
<input type="hidden" id="weixin_share_title" value="<?php echo ($config['sitename']); ?>">

<input type="hidden" id="token" value="">
<input type="hidden" id="token_time" value="">

<input type="hidden" id="rp_money" value="">

<input type="hidden" id="path" value="S">

<!--数据 结束-->
</body>
</html>
<script type="text/javascript">

	var debug = true;
	<?php echo ($media_info); ?>

	
	var showid = $('#showid').val(); 
	var uid = $('#uid').val();
	var isiPad = /iPad/i.test(navigator.userAgent);
	var isiPhone = /iPhone|iPod/i.test(navigator.userAgent);
	var isAndroid = /Android/i.test(navigator.userAgent);
	var isWeixin = /MicroMessenger/i.test(navigator.userAgent);
	var isQQ = /QQ/i.test(navigator.userAgent);
	var isIOS = (isiPad || isiPhone);
	var isWeibo = /Weibo/i.test(navigator.userAgent);
	var playing = false;

	//丄滑置顶
	/* $(window).bind("scroll",function(){
	 //console.log($(document).scrollTop());
	 if($(document).scrollTop()>=8+$("#top").height()+$("#top2").height()){
	 $("#tab").addClass("fix");
	 }else{
	 $("#tab").removeClass("fix");
	 }
	 });*/

	 /*$(document).scroll(function(){
	 if($(document).scrollTop()>=8+$("#top").height()+$("#top2").height()){
	 $("#tab").addClass("fix");
	 }else{
	 $("#tab").removeClass("fix");
	 }
	 })*/

	/* var start,end;
	 document.addEventListener("touchstart",function(e){
	 start=e.targetTouches[0].clientY;
	 if($(document).scrollTop()>=8+$("#top").height()+$("#top2").height()){
	 $("#tab").addClass("fix");
	 }else{
	 $("#tab").removeClass("fix");
	 }
	 },false)*/


	/*document.addEventListener("touchmove",function(e){
		end=e.targetTouches[0].clientY;
		if($(document).scrollTop()>=8+$("#top").height()+$("#top2").height()){
			$("#tab").addClass("fix");
		}else{
			$("#tab").removeClass("fix");
		}
	},false);
	document.addEventListener("touchend",function(e){
		if($(document).scrollTop()<=8+$("#top").height()+$("#top2").height()){
			/!*$("#tab").addClass("fix");*!/
			$("#tab").removeClass("fix");
		}
	});*/
	//红包

	function get_path() {
        return $('#path').val();
    }

	//tab切换
	function focus(e){
		e.css({"color":"#42938B","borderBottom":"solid #42938B 2px"});
	}
	function init(){
		$(".hot,.back").css({"color":"#fff","borderBottom":"solid #42938B 0px"});
	}
	$(".hot,.back").click(function(){
		init();
		focus($(this));

	});
	var n=0;
	var mySwiper = new Swiper ('.swiper-container', {
		direction: 'horizontal',
		loop: false,
		nextButton: '.next',
		prevButton: '.prev',
		onSlideChangeStart: function(){
			if(n==0){
				$(".back").css({"color":"#42938B","borderBottom":"solid #42938B 2px"});
				$(".hot").css({"color":"#fff","borderBottom":"solid #42938B 0px"});
				n=1;
			}else{
				$(".hot").css({"color":"#42938B","borderBottom":"solid #42938B 2px"});
				$(".back").css({"color":"#fff","borderBottom":"solid #42938B 0px"});
				n=0;
			}
		},
		onSlideChangeEnd:function(){
			$(".swiper-wrapper").scrollTop(0);
		}
	});
	//播放器
	var player;
	function onComplete() {
		//alert('播放完毕');
	}
	function onBuffer() {
		$('#media_status_msg').hide();
	}
	function onPlay() {
			$(".jwplayer").css({"height":$(window).height()+'px'});
		$("#top").css({"height":$(".jwplayer").height()+25+'px'});
		//alert($(".jwplayer").height()+"qqq"+$("#top").height());
	}
	function onPause() {
		if (media_info.status == 1 && isWeixin) {
			//player.play();
		}
		$('#media_status_msg').hide();
	}
	function onDisplayClick() {
		if (media_info.status == 1) {
			player.pause();
		}else{

		}
	}
	function onSetupError() {}
	function onTime(d){}
	function play() {
		if (media_info.status == -1) {
			alert('此视频目前不能播放');
			return;
		}

		if (media_info.status == 1) {
			//if(!isAndroid){
				$("#shadow").hide();//阴影隐藏
				$("#hf-text").hide();//精彩回放字体隐藏
				$("#live-bg").show();//直播假图显示
				$(".live-bg").css({"height":$(document).width()});
				$("#live-bg").css({"height":$(".live-bg").height()});
				$(".play-btn").click(function(){
					window.location.href='./live?roomnum='+$("#roomnum").val();
				});
			/*}else{
				$("#live-bg").hide();//直播假图隐藏
				$("#shadow").hide();//阴影隐藏
				$("#hf-text").hide();//精彩回放字体隐藏
				player = jwplayer("container").setup({
				 file: media_info.file[0],
				 type: "mp4",
				 width: "100%",
				 height: $(window).width(),
				 skin: "http://apps.inke.tv/web/Public/jwplayer/jwplayer-skins-premium/vapor.xml",
				 image: media_info.image,
				 stretching: 'fill',
				 controls: true,
				 primary: "html5",
				 events: {
				 onPlay: onPlay,
				 onPause: onPause,
				 onBuffer: onBuffer,
				 onDisplayClick: onDisplayClick,
				 onSetupError: onSetupError,
				 onComplete: onComplete
				 }
				 });
			}*/
		}else{
			$("#shadow").show();//阴影显示
			$("#live-bg").hide();//直播假图隐藏
			var playlist = [];
			for(var i = 0; i < media_info.file.length; i++) {
				playlist.push({file: media_info.file[i], image: media_info.image});
			}
			player = jwplayer("container").setup({
				playlist: playlist,
				type: "mp4",
				width: "100%",
				height: $(window).width(),
				skin: "/wxshare/Public/phone/js/bekle.xml",
				stretching: 'fill',
				image: media_info.image,
				controls: true,
				primary: "html5",
				events: {
					onPlay: onPlay,
					onPause: onPause,
					onBuffer: onBuffer,
					onDisplayClick: onDisplayClick,
					onSetupError: onSetupError,
					onComplete: onComplete,
				}
			});
			$("#hf-text").show();
			$("#shadow").click(function(){
				$(this).hide();
				player.play();
			});
		}
	}

	
	//热门
	$(function(){

		var url='./hotlist?uid='+$("#uid").val();
		$.ajax({
			type: "get",
			url: url,
			dataType: "json",
			cache:false,
			success:function(result) {
				var hots="";
				for(var i=0;i<result.length;i++){
					hots+='<div class="lists"><img src="'+result[i].avatar+'" class="icon-big">';
					hots+='<div class="ziliao2"><img src="'+result[i].avatar+'" class="icon-little fl">';
					hots+='<div class="nick2 fl">'+result[i].user_nicename+'</div><div class="fans fr">'+result[i].nums+'</div>';
					hots+='<img src="/wxshare/Public/phone/images/eye.jpg" class="eye fr"></div></div>';
          
				}
				$(".hots").html(hots);
				
				$(".lists").click(function(){
					 var o=$(this).index();
					 //window.location.href='/'+$("#path").val()+'/index/live?uid='+$("#uid").val()+'&showid='+result[o].showid+'&share_uid='+$("#uid").val()+'&isappinstalled='+$('#isappinstalled').val();
					 window.location.href='./live?roomnum='+result[o].uid;
				})
			},
			error : function() {
				//alert('网络异常');
			}
		});


		if($(".lists").height==0){
			$(".lists").css({"height":$(".icon-big").height()});
		}else{
			$(".lists").css({"height":$(".icon-big").height()});
		}
    //精彩回放
		/*
		var url2='/'+get_path()+'/index/recordlist?uid='+$("#live_uid").val()+'&showid='+$("#showid").val()+'';
		$.ajax({
			type: "get",
			url: url2,
			dataType: "json",
			cache:false,
			success:function(result) {
				var jcs="";
				for(var i=0;i<result.data.length;i++){
					jcs+='<li><img src="'+result.data[i].portrait+'" class="icon-little2 fl">';
					if(result.data[i].verified_img!==""){
						jcs+='<img src="'+result.data[i].verified_img+'" class="vv fl">';
					}else{
						jcs+='<img src="http://img.meelive.cn/NTkwMzExNDU3MzQyMTAw.jpg" class="vv fl" style="opacity: 0.1">';
					}
					jcs+='<div class="ziliao3 fl"><span class="nick3 fl">'+result.data[i].nick+'</span>';
					jcs+='<img src="http://img.meelive.cn/ODY3ODUxNDU3MzQxOTMx.jpg" class="clock fl">';
					jcs+='<span class="times fl">'+result.data[i].date+'</span><br/>';
					jcs+='<img src="http://img.meelive.cn/OTA1NjQxNDU3MzQyMTM4.jpg" class="huifang"></div>';
					jcs+='<div class="fans2 fr">'+result.data[i].online_users+'</div>';
					jcs+='<img src="http://img.meelive.cn/ODg4NzMxNDU3MzQyMTYz.jpg" class="people fr"></li>';
					$(".jchf").html(jcs);
				}
				//精彩回放列表点击
				$(".jchf li").click(function(){
					if ((media_info.status == 0 && media_info.file.length == 0) || media_info.forbid == 1 || media_info.shieldstat === false){
						$(".no-player-text,.bg_user_pic").hide();
						$("#shadow").hide();
						$(".player").show();
						$("#topBom").show();
					}
					$("#top").css({"height":""});//既无直播又无录播时点击
							if (media_info.status == 1) {
                            $("#live-bg").hide();//直播界面点击
							$("")
							}
					$(document).scrollTop(0);//置顶
					var url2='/'+get_path()+'/index/recordlist?uid='+$("#live_uid").val()+'&showid='+$("#showid").val()+'';
					 $.ajax({
					 type: "get",
					 url: url2,
					 dataType: "json",
					 cache:false,
					 success:function(result) {
					 console.log(result.data[0].record_url);
					 for(var i=0;i<result.data.length;i++){
					 var players = jwplayer("container").setup({
					 type: "mp4",
					 width: "100%",
					 height: $(window).width(),
					 skin: "http://apps.inke.tv/web/Public/jwplayer/jwplayer-skins-premium/bekle.xml",
					 stretching: 'fill',
					 image: media_info.image,
					 controls: true,
					 primary: "html5",
					 file:result.data[i].record_url,
					 events: {
					 onPlay: onPlay,
					 onPause: onPause,
					 onBuffer: onBuffer,
					 onDisplayClick: onDisplayClick,
					 onSetupError: onSetupError,
					 onComplete: onComplete,
					 }
					 });
					 players.play();
					 }
					 },
					 error : function() {
					 	//alert('网络异常');
					 }
					 });
				});
			},
			error : function() {
				//alert('网络异常');
			}
		});
		*/
	});


	//下载
	function set_down_url() {
		//设置下载按钮
		var down_url = '';
		if (isWeixin) {
			if (isAndroid) {
				down_url = '<?php echo ($config["app_android"]); ?>';
			}else if (isiPhone) {
				down_url = '<?php echo ($config["app_ios"]); ?>';
			}else if (isiPad) {
				down_url = '<?php echo ($config["app_ios"]); ?>';
			}else{
				down_url = '<?php echo ($config["siteurl"]); ?>/index.php/Xiazai/';
			}
		}else if (isQQ) {
			if (isAndroid) {
				down_url = '<?php echo ($config["app_android"]); ?>';
			}else if (isiPhone) {
				down_url = '<?php echo ($config["app_ios"]); ?>';
			}else if (isiPad) {
				down_url = '<?php echo ($config["app_ios"]); ?>';
			}else{
				down_url = '<?php echo ($config["siteurl"]); ?>/index.php/Xiazai/';
			}
		}else{
			if (isAndroid) {
				down_url = '<?php echo ($config["app_android"]); ?>';
			}else if (isiPhone) {
				down_url = '<?php echo ($config["app_ios"]); ?>';
			}else if (isiPad) {
				down_url = '<?php echo ($config["app_ios"]); ?>';
			}else{
				down_url = '<?php echo ($config["siteurl"]); ?>/index.php/Xiazai/';
			}
		}
		$('#open_down').attr('href', down_url);
		$("#a_hong1,#a_hong2").attr('href', down_url);

		$('#down').attr('href', down_url);

		if (down_url == '') {
			$('#open_down').on('click', function() {
				alert('新版即将更新，敬请期待');
				return false;
			});
			$("#a_hong1,#a_hong2,#down").on('click', function() {
				alert('新版即将更新，敬请期待');
				return false;
			})
		}
	}




	$(document).ready(function() {
		if (isWeixin) {
            weixin_share();
        }
		if ((media_info.status == 0 && media_info.file.length == 0) || media_info.forbid == 1 || media_info.shieldstat === false) {
			//既无录播也无直播
			$("#shadow").show();//阴影显示
			$('.player').hide();
			$(".no-player-text,.bg_user_pic").show();

			$("#top").css({"height":$(window).width()+'px'});//高度吻合
			$(".skip-hot").click(function(){
				$(document).scrollTop(8+$("#top").height()+$("#top2").height());
			});
			$("#topBom").hide();//打开app隐藏
			$("#hf-text").hide();//精彩回放字隐藏
			$("#live-bg").hide();//直播假图隐藏
		}else{
			//直播 或 录播
			$('.player').show();
			play();
			$(".no-player-text,.bg_user_pic").hide();
			//打开app显示
			$("#topBom").show();
			if(isIOS){
				if(!isWeixin){
					if(!isQQ){
						if($("#isappinstalled").val()==1){
							//$(".topBom").attr("href","inke://?live="+$("#showid").val()+"");
							//document.getElementById("topBom").click();
						}else{
							$(".topBom").click(function(){document.getElementById("down").click();})
						}
					}else{
						//$(".topBom").attr("href","inke://?live="+$("#showid").val()+"");
					}
				}else{
					if($("#isappinstalled").val()==1){
						$("#topBom").click(function(){
							//$(".tiaozhuan,.bg").show();
							document.getElementById("down").click();
						})
					}else{
						$(".topBom").click(function(){document.getElementById("down").click();})
					}
				}
			}else{
				$(".topBom").click(function(){document.getElementById("down").click();})
			}
			$(".bg").click(function(){
				$(".tiaozhuan,.bg").hide();
			});
			//setTimeout("get_hot_list();", 1000);
			//$('.hot_list').hide();
		}

		//下载开关
		set_down_url();

		var swiper = new Swiper('.swiper-container', {
			spaceBetween: 1,
			pagination: '.swiper-pagination'
		});
		//用户信息
		$('.user_nick').html(media_info.user.nick);
		$('#user_area').html(media_info.user.area);
		$('.user_pic').attr('src', media_info.user.pic);
		$('.live-bg').attr('src', media_info.image);
		$('#live_name').html(media_info.name);
		$('.gender').attr("src",media_info.user.gender_img);
		$('.jibie').attr("src",media_info.user.level_img);
		$('.qiamming').html(media_info.user.description);
		$('.bo-id').html(media_info.user.roomnum);
		if(media_info.user.gender==0){
			$(".back").html("她的精彩回放");
		}else{
			$(".back").html("他的精彩回放");
		}

		$(".swiper-slide .lists").css({"height":$(".icon-big").height()});

	})
</script>