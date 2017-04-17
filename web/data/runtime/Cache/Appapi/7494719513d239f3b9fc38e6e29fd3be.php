<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>等级权限</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
	<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/web/public/appapi/css/swiper-3.4.2.min.css">
</head>
<script type="text/javascript">
	function calcuroot_size(blockWidth){
		var root_size=100*(blockWidth/750);
		$("html").css({"font-size":root_size+"px"});
	}
	calcuroot_size(window.innerWidth);
</script>
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
	}
	img{
		vertical-align: middle;
	}
	li,ul{
		list-style-type: none;
	}
	body{
		font-family: '微软雅黑';
	}
	.page{
		width: 100%;
		height: 100%;
		position: relative;
	}
	.page:before{
		display: table;
		content: '';
	}
    #status{
	    width:100%;
		height:0.4rem;
		background:#58BFBD;
	}
	#status:before{
		display: table;
		content: '';
    }
	#nav{
	    width:100%;
		height:0.88rem;
		background:#58BFBD;
		background-image:url(public/appapi/images/levels/return_back.png);
		background-repeat:no-repeat;
		background-position:0.3rem center;
		background-size: 0.9rem auto;
	}
	#nav p{
	    font-size:0.34rem;
		text-align:center;
		line-height:0.88rem;
		color:#FFF;
		float:left;
		margin-left:3.1rem;
	}
    #nav .exp{
	    margin-right:0.3rem;
    	height:0.88rem;
    	float:right;
    	font-size:0.28rem;
    	line-height:0.88rem;
    	color:#FFF;
    }
    #nav:before{
		display: table;
		content: '';
    }
	.headPic{
		width: 4.8rem;
		height: 3.01rem;
		margin:0.78rem auto 0;
		position: relative;
	}
	.headPic:before{
		content: '';
		display: table;
	}
	.headPic>img{
		width: 2.3rem;
		display: block;
		margin:0.29rem auto 0;
	}
	.headHover{
		position: absolute;
		width: 100%;
		height: 100%;
		background: url(public/appapi/images/levels/3.png);
		background-size: 100% 100%;
		z-index: 10;
		top:0;
	}
	.level{
		position: absolute;
		width: 2.61rem;
		height:0.4rem;
		top:2.19rem;
		left:1.08rem;
		text-align: center;
		font-size: 0.28rem;
		color:#fff;
	}
	.levelDesc{
		width: 4.77rem;
		margin:0.63rem auto 0;
		font-size: 0.2rem;
		color:#B0B0B0;
		text-align: center;
	}
	.alert{
		color:#58BFBD;
	}
	.levelDetail{
		width: 6.11rem;
		margin:0.14rem auto 0;
		overflow: hidden;
	}
	.levelDetail:before{
		content: '';
		display: table;
	}
	.currentLevel{
		float:left;
		font-size: 0.28rem;
		margin-right: 0.12rem;
	}
	.levelLine{
		width: 4.34rem;
		height: 0.08rem;
		border-radius:0.03rem;
		background: #E9E9E9;
		float: left;
		margin-top: 0.14rem;
		margin-bottom:0.36rem;
	}
	.getLev{
		width: 50%;
		height: 100%;
		border-radius: 0.03rem;
		background-color: #58BFBD;
	}
	.nextLevel{
		font-size: 0.28rem;
		margin-left: 0.12rem;
		color:#B0B0B0;
		float: left;
	}
	
	
	
	.cup{
	    width: 100%;
		height: 0.1rem;
		position: relative;
		background-color: #F4F4F4;
		}
	.grade{
		width: 4.77rem;
		margin:0.30rem auto 0 auto;
		font-size: 0.3rem;
		color:#373737;
		text-align: center;
		}
	.gradePic{
		width: 6.42rem;
		height: 4.26rem;
		margin:0 auto;
		margin-top:0.37rem;
		position: relative;
		}
	.gradePic:before{
		content: '';
		display: table;
		}
	.gradePage{
		float:left;
	    width:1.26rem;
		height:2.13rem;
	}
	.gradeCsc{
	    width: 1.26rem;
		display: block;
		margin:0 auto;
	}
	.gradeAsc{
		margin:0.09rem auto 0;
		font-size: 0.28rem;
		color:#373737;
		text-align: center;
	}
	.gradeBsc{
	    margin:0.07rem auto 0.23rem;
		font-size: 0.20rem;
		color:#B0B0B0;
		text-align: center;
	}
	.gradePage#gradePageone{
	    margin-left:1.32rem;
	    margin-right:1.32rem;
	}
	.gradePage#gradePagetwo{
		margin-left:1.32rem;
		margin-right:1.32rem;
	}
	.gradeDsc{
		    margin-top: 0.16rem;
		    margin-bottom: 0.36rem;
		    font-size: 0.24rem;
		    color: #B0B0B0;
		    text-align: center;
	}
	
	
	
	.upPic{
		width: 6.17rem;
		height: 4.22rem;
		margin:0.72rem auto 0;
		position: relative;
	}
	.upPic{
		content: '';
		display: table;
	}
	.upPic>img{
		width: 6.17rem;
		display: block;
		margin:0.72rem auto 0;
	}
	.gradeP{
	    margin-top:0.76rem;
		margin-bottom:0.7rem;
		font-size: 0.24rem;
		color:#373737;
		text-align: center;
	}
	.swiper-container{
		width: 100%;
		height: 5.5rem;
		position: relative;

	}
	.swiper-pagination {
	    position: absolute;
	    bottom: 0rem !important;
	    text-align: center;
    }
    .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet{
	    margin:0 0.25rem;
    }
    .swiper-pagination-bullet{
	    width:0.15rem;
    	height:0.15rem;
    	display:inline-block;
    	border-radius:100%;
    	background:#000;
    	opacity: .2;
    }
    .swiper-pagination-bullet-active{
	    opacity: 1;
    	background:#58BFBD;
    }
</style>

	<div class="page">
	    <div id="status"></div>
	    <div id="nav">
	        <p>我的等级</p>
	        <span class="exp">等级说明</span>
	    </div>
		<div class="headPic">
			<img src="http://192.168.1.109/web/public/appapi/images/levels/1.png">
			<div class="headHover">
				<p class="level">Lv.<?php echo ($level['levelid']); ?></p>
			</div>
		</div>
		<p class="levelDesc">当前累计经验<span class="alert"><?php echo ($experience); ?></span>,离升级还差<span class="alert"><?php echo ($cha); ?></span></p>
		<div class="levelDetail">
			<div class="currentLevel alert">
				Lv.<?php echo ($level['levelid']); ?>
			</div>
			<div class="levelLine">
					<div class="getLev"></div>
			</div>
			<div class="nextLevel">Lv.<?php echo ($level['levelid']+1); ?></div>
		</div>
	</div>
	
	<div class="cup"></div>
	
	<div class="page">
		<p class="grade">等级特权</p>
		<div class="swiper-container">
			<div class="swiper-pagination"></div>
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					
				    <div class="gradePic">
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/5.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">等级图标</p>
				            <p class="gradeBsc">LV1开启</p>
				        </div>
				        <div class="gradePage" id="gradePageone">
				            <img src="/web/public/appapi/images/levels/7.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">头像挂件</p>
				            <p class="gradeBsc">LV30开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/9.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">尊贵表情</p>
				            <p class="gradeBsc">骑士开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/11.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">高级飘屏</p>
				            <p class="gradeBsc">男爵开启</p>
				        </div>
				        <div class="gradePage" id="gradePagetwo">
				            <img src="/web/public/appapi/images/levels/13.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">特级礼物</p>
				            <p class="gradeBsc">子爵开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/15.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">视频连麦</p>
				            <p class="gradeBsc">子爵开启</p>
				        </div>
				    </div>
	    			
				</div>
				<div class="swiper-slide">
					
				    <div class="gradePic">
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/5.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">等级图标</p>
				            <p class="gradeBsc">LV1开启</p>
				        </div>
				        <div class="gradePage" id="gradePageone">
				            <img src="/web/public/appapi/images/levels/7.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">头像挂件</p>
				            <p class="gradeBsc">LV30开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/9.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">尊贵表情</p>
				            <p class="gradeBsc">骑士开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/11.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">高级飘屏</p>
				            <p class="gradeBsc">男爵开启</p>
				        </div>
				        <div class="gradePage" id="gradePagetwo">
				            <img src="/web/public/appapi/images/levels/13.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">特级礼物</p>
				            <p class="gradeBsc">子爵开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/15.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">视频连麦</p>
				            <p class="gradeBsc">子爵开启</p>
				        </div>
				    </div>
	    			
				</div>
				<div class="swiper-slide">
					
				    <div class="gradePic">
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/5.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">等级图标</p>
				            <p class="gradeBsc">LV1开启</p>
				        </div>
				        <div class="gradePage" id="gradePageone">
				            <img src="/web/public/appapi/images/levels/7.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">头像挂件</p>
				            <p class="gradeBsc">LV30开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/9.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">尊贵表情</p>
				            <p class="gradeBsc">骑士开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/11.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">高级飘屏</p>
				            <p class="gradeBsc">男爵开启</p>
				        </div>
				        <div class="gradePage" id="gradePagetwo">
				            <img src="/web/public/appapi/images/levels/13.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">特级礼物</p>
				            <p class="gradeBsc">子爵开启</p>
				        </div>
				        <div class="gradePage">
				            <img src="/web/public/appapi/images/levels/15.png" alt="" class="gradeCsc"/>
				            <p class="gradeAsc">视频连麦</p>
				            <p class="gradeBsc">子爵开启</p>
				        </div>
				    </div>
	    			
				</div>
			</div>
		</div>
		<p class="gradeDsc">更多特权，敬请期待~</p>
	    
	</div>
	
	<div class="cup"></div>
	
	<div class="page">
	    <p class="grade">如何快速升级</p>
	    <div class="upPic">
	        <img src="/web/public/appapi/images/levels/17.png">
	    </div>
	    <div class="gradeP">
	        <p>签到，直播，看播都可获得经验值，</p>
	        <p>如不想等待，礼物刷起来，刷的越多升级越快~</p>
	    </div>    
	</div>
	<script type="text/javascript" src="/web/public/appapi/js/swiper-3.4.2.min.js"></script>
	<script type="text/javascript">
			window.onload=function(){
				var mySwiper=new Swiper('.swiper-container',{
					pagination : '.swiper-pagination',
				})
			}
	</script>
</body>
</html>