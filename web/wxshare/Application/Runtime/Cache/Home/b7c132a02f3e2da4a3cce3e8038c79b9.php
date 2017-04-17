<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="telephone=no" name="format-detection">
    <title><?php echo ($config['sitename']); ?></title>
    <link rel="stylesheet" type="text/css" href="/wxshare/Public/phone/css/wap_base.css">
    <link rel="stylesheet" href="/wxshare/Public/phone/css/swiper.min.css">
    <style type="text/css">
        body { }
        #container { left:0;top:0;right:0;bottom:0;width:100%;height:100%;text-align: center}
        .user-pic-bg {width:42px; height: 42px; border-radius: 999px; border-color: #fff; border: 1px solid; position: relative; display: inline-block; float: left}
        .user-pic { width: 42px;height:42px;border-radius: 42px;display: block;}
        .num { border: 2px solid #fff;width: 43px;height:43px;border-radius: 43px;right:15px;top:15px;box-shadow: inset 0px 1px 2px #666}
        .num-img { width: 25px;margin: 5px 0 0 10px;}
        .num-s { width: 100%;bottom:2px;left:0;text-align: center;color: #fff;text-shadow: 0px 1px 2px #666}
        .btn-box { width: 100%;height: 46px;bottom:25px;left:0;line-height: 37px;z-index: 2;position: fixed;}
        .desc { bottom:56px;left:0;width: 90%;height: 20px;text-overflow:ellipsis;white-space:nowrap;overflow: hidden;padding:0 5%;color: #fff;font-size: 16px}
        .btn { width: 60px;height: 60px;background: url(/wxshare/Public/phone/images/play.png) no-repeat 0 0;z-index: 6;background-size: 60px;left:50%;top:50%;margin: -30px 0 0 -30px;}
        .pause { background-image: url(/wxshare/Public/phone/images/pause.png);}
        .loading { background-image: url(/wxshare/Public/phone/images/loading.gif);}
        * {
				  -webkit-tap-highlight-color: transparen;
				}
        .user {left: 5px;top: 15px;background: none; padding: 3px 3px 3px;opacity: 0.85; max-width:200px}

        .user-bg {background:#000;height:100%;width:100%;opacity:0.4;left:0;top:0;border-radius:999px; z-index: -100}
        .user-wz {margin-left:3px;height:21px;width:80px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap; width: 100%; color: #8ee2d3; padding-left: 5px; font-size: 1em;}
        .user-name {margin:0 0 0 7px;min-width: 60px;line-height: 21px; color: #fff; max-width: 100px; font-size: 1em;}
        .k, .a { width: 30%;height: 36px;border-radius: 36px;top:5px; }
        .k { left:28%;}
        .a { left:64%;}
        .talk {max-width: 10.4%;left:4%;top:5px;max-height: 36px;}
        .talk-box {left:0;right:0;bottom:10px;}
        #l {bottom:50px;left:0;}
        .send-box {bottom: 0;left:0;width: 100%;box-sizing:border-box;padding: 0 67px 0 10px;}
        .talk-btn {position: absolute;right:10px;top:0;padding:5px 7px 4px;line-height: 23px;height: 23px;background-color: #63DAC3;border-radius: 3px;color:#fff;outline: none;}
        .talk-input {display:block;border:0;background: 0;height: 32px;width: 100%;box-sizing:border-box;outline: none;background-color: #fff;border:1px solid #F7F7F6;border-radius: 2px;opacity: 0.60}
        .msg-box {left:0;width: 100%;bottom:85px;max-height: 130px;overflow-y: auto;}
        .msg-box p {font-size: 18px;color: #fff;line-height: 26px;padding:0 10px;}
        .msg-box p label {color: #CF7916;}
        .msg-box .msg-xitong {color: #B092FE}
        .msg-box .msg-to, .msg-box .msg-to a {color: #D67FD9}

        .down_btn {float: right; right:1%; top:5px;}


        .shade { position: fixed;left:0;top: 0;right: 0;bottom:0;background-color: #000;z-index: 11}
        .point-box { position: fixed;left:50%;margin-left:-30px;top: 40%;width: 60px;height: 60px;border-radius: 60px;border:1px solid #F4378B;-webkit-animation:load 1s linear infinite;animation:load 1s linear infinite;}
        @keyframes load {
            0% {
                transform:rotate(0);
            }
            100% {
                transform:rotate(360deg);
            }

        }
        @-webkit-keyframes load {
            0% {
                -webkit-transform:rotate(0);
            }
            100% {
                -webkit-transform:rotate(360deg);
            }
        }
        .point { position: absolute;left:50%;top: -3px;margin-left:-3px;width:6px;height: 6px;background-color:#F4378B;border-radius: 4px; }

        .jiantou {
            position:relative;
            width:11px;
            height:11px;
            right: 25px;
            top:7px;
            border-top: 2px solid #8ee2d3;
            border-right: 2px solid #8ee2d3;
            float: right;

            transform:rotate(45deg);
            -ms-transform:rotate(45deg);    /* IE 9 */
            -moz-transform:rotate(45deg);   /* Firefox */
            -webkit-transform:rotate(45deg); /* Safari 和 Chrome */
            -o-transform:rotate(45deg);
        }
        .error_msg_bg {
            width: 100%;
            text-align: center;
            height: 200px;
            background: #000
        }
        #error_msg {
            text-align: center;
            color: #fff;
            position: relative;
            top: 97px;
        }

        .gift-btn {max-width: 10.4%;left:17%;top:5px; max-height: 36px;}
        .gift-box {
            width: 100%;
            margin: 0 auto;
            text-align: center;
            position: absolute;
            bottom: 0px;
            height: 240px;
            background-color: #000;
            z-index: 7;
            visibility: hidden;
        }
        .gift-lists {
            display: block;
            height:203px;
        }
        .gift-list {
            display: block;
            height:100%;
        }
        .gift-list li{
            list-style: none;
            float: left;
            width: 25%;
            height: 90px;
            margin: 5px 0px 0px 0px;
            position: relative;


        }
        .mask{background:rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000,endColorstr=#b2000000);zoom:1;}
        .gift-pic {
            width: 5rem;
        }
        .gift-price {
            height: 11px;
            line-height: 11px;

        }
        .gift-price span {
            margin: 0 auto;
            vertical-align:middle;
            color:#8ee2d3;
        }
        .gift-price img {vertical-align:middle; width: 10px}
        .gift-exp {
            font-size: 0.7em;
            max-width:80px;
            overflow: hidden;text-overflow:ellipsis; white-space:nowrap;
        }
        .gift-lian {
            position: absolute;
            right: 0px;
            width: 1rem;
            height:1rem;
            background: url(/wxshare/Public/phone/images/MzU3OTExNDQ3ODM1Nzg3.jpg) no-repeat;
            background-size:cover;
        }
        .gift-selected {
            position: absolute;
            right: 0px;
            width: 1rem;
            height:1rem;
            background: url(/wxshare/Public/phone/images/MzA2NjYxNDQ3ODM1NTgx.jpg) no-repeat;
            background-size:cover;
        }
        .gift-bbar {
            border-top: 1px solid;
            text-align: left;
            padding-left: 10px;
            height: 36px;
            line-height: 36px;
        }
        .gift-bbar-text {
            color: #8ee2d3;
            font-size: 1rem;
            vertical-align:middle;
        }
        .gift-bbar-money {
            font-size: 1rem;
            vertical-align:middle;
        }
        .gift-bbar img{
            width: 20px;
            vertical-align:middle;
            margin-right: 5px;
        }
        .gift-bbar-send-hide {
            float: right;
            height: 100%;
            text-align: center;
            width: 80px;
            font-size: 1rem;
            background-color: #ccc;
            border: 0px;
            color: #fff;
        }
        .gift-bbar-send {
            float: right;
            height: 100%;
            text-align: center;
            width: 80px;
            font-size: 1rem;
            background-color: #8ee2d3;
            color: #fff;
            border: 0px;
        }
        .gift-box-close {
            right: 0px;
            position: absolute;
            width: 36px;
            height: 36px;
            top: -36px;
            text-align: center;
            line-height: 36px;
            font-size: 17px;
            border-radius: 999px 0px 0px 0px;
        }
        .gift-box-close div{
            position: relative;
            margin-left: 16px;
            color: #fff;
            right: 2px;
            top: 3px;
        }
        .gift-countdown-bg {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            border-radius: 999px;
            position: absolute;
            z-index: 1;
            bottom: 7px;
            right: 12px;
            background: url(/wxshare/Public/phone/images/liansong.jpg) no-repeat;
            background-size: contain;
            background-position: center;
        }
        .gift-countdown-bg2 {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            border-radius: 999px;
            position: absolute;
            z-index: 1;
            bottom: 7px;
            right: 12px;
            background: url(/wxshare/Public/phone/images/ODc0NzkxNDQ3ODMzMjQ3.jpg) no-repeat;
            background-size: contain;
            background-position: center;
        }

        .gift-countdown-btn {
            position: absolute;
            z-index: 1;
            height: 83px;
            width: 83px;
            border-radius: 999px;
            text-align: center;
            color: #fff;
            line-height: 90px;
            font-size: 18px;
            top: 8px;
            left: 8px;
        }
        .gift-countdown-btn-text {
            color: #fff;
            text-align: center;
            height: 30px;
            margin-top: -13px;
            font-size: 23px;
            font-weight: bold;
        }
        .gift-countdown-btn-time{
            color:#fff;
            text-align: center;
            font-size: 23px;
            font-weight: bold;
        }
        .anim-bg {
            position: absolute;
            width: 200px;
            height: 170px;
            z-index: 10;
            overflow: hidden;text-overflow:ellipsis; white-space:nowrap;
        }
        .anim-nick {
            vertical-align:middle;
            color: #e86d83;
            overflow: hidden;text-overflow:ellipsis; white-space:nowrap;
            font-size: 16px;
        }
        .anim-nick span {
            color: #e86d83;
            font-size: 16px;
        }
        .anim-nick img {
            margin-right: 5px;
        }
        .anim-image-bg {
            position: absolute;
            left:0px;
        }
        .anim-image{
            width:100%;
        }
        .anim-seq {
            color: #8ee2d3;
            text-shadow: 0 0 3px #ffff00;
            text-align: right;
            bottom: 82px;
            font-weight: bold;
            width: 117px;
            height: 40px;
            text-align:center;
            line-height: 40px;
            position: absolute;
            right:0px;
        }
        .user-point-bg {
            opacity: 0.75;
            position: absolute;
            top: 80px;
            max-width: 250px;
            width: 140px;
            border-radius: 0px 90px 90px 0px;
            line-height: 20px;
            height: 20px;
						display:none;
        }
        .user-point-text{
            color:#8ee2d3;
            margin-left: 5px;
        }
        .user-point-value{
            color: #fff;
            overflow: hidden;text-overflow:ellipsis; white-space:nowrap;
        }
        .user-point-fans {
            vertical-align:middle;
            float: right;
            background-color: #fff;
            color: #000;
            border-radius: 999px;
            width: 14px;
            height: 14px;
            text-align: center;
            font-size: 10px;
            margin: 3px 3px;
            line-height: 14px;
        }
        .user-point-fans img {

        }
        .confirm-bg {
            width:100%;
            position:absolute;
            height: 130px;
            text-align: center;
            top: 25%;
            z-index: 7;
        }
        .confirm-content {
            width: 70%;
            background-color: #fff;
            height:100%;
            margin: 0 auto;
            border-radius: 10px;
        }
        .confirm-text {}
        .confirm-text-title{
            text-align: center;
            font-size: 18px;
            padding-top: 10px;
            font-weight: bold;
            color: #000;
        }
        .confirm-text-content{
            text-align: center;
            padding: 10px;
            color: #000;
        }
        .confirm-btn-left{
            float: left;
            width:49%;
            line-height: 32px;
            color: blue;
        }
        .confirm-btn-right{
            float: right;
            width: 49%;
            line-height: 32px;
            color: blue;
            font-weight: bold;
        }
        .confirm-line {
            height: 1px;
            background-color: #ccc;
        }
        .confirm-line2{
            float: left;
            background-color: #ccc;
            width: 1px;
            height: 33px;
        }
        .shadd{
            display: none;
            position: absolute;
            z-index: 5;
            width:100%;
            height: 86%;
            left: 0px;
            right: 0px;
            opacity: 0.1;
        }
        div{
            -webkit-touch-callout:none;
            -webkit-user-select:none;
            -khtml-user-select:none;
            -moz-user-select:none;
            -ms-user-select:none;
            user-select:none;
        }
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
        #quxiao{
            width: 64%;
            height: 14%;
            position: absolute;
            z-index: 15;
            bottom: -15px;
            left: 18%;
        }

        .tiaozhuan{
            font-family:"微软雅黑";
            font-size: 1.5em;
            background-color: #FFFFFF;
            height: 22%;
            width: 100%;
            text-align: center;
            left: 0px;
            top: 0px;
            position: absolute;
            z-index: 12;
            display: none;
        }
        .tiaozhuan img{
            transform:scale(0.7,0.7);
            -ms-transform:scale(0.7,0.7);
            -moz-transform:scale(0.7,0.7);
            -webkit-transform:scale(0.7,0.7);
            -o-transform:scale(0.7,0.7);
            float: right;

        }
        .div1{
            height: 50%;
        }
        .bg{
            background-color: black;
            opacity: 0.6;
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: 11;
            display: none;
        }
        .sp1{
            width: 50%;
            position: absolute;
            top: 14%;
            left: 11%;
        }
        .sp2{
            width: 65%;
            position: absolute;
            top: 64%;
            left: 8%;
        }
        .cl{
            clear: right;
        }
        .img{
            width: 15%;
            position: absolute;
            left: 70%;
            top: 51%;
        }
        .img2{
            width: 38%;
            position: absolute;
            left: 57%;
            top: 8%;
        }
        .mask{background:rgba(0,0,0,0.8);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000,endColorstr=#b2000000);zoom:1;}
        #shui{
            width: 32%;
            height: 5%;
            position: absolute;
            top: 3%;
            right: 4%;
            z-index: 10;
        }

        .online-user-list {
            top: 19px;
            right: 10px;
            width: 253px;
            text-overflow:ellipsis;
            white-space:nowrap;
            overflow: hidden;
            overflow: auto;
            z-index: 11;
        }
        .online-user {
            display: inline-block;
            position: relative;
            width: 43px;
            margin: 1px
        }
        .online-user-pic{
            width: 42px;
						height:42px;
            border-radius: 999px;
        }
        .online-user-v {
            width: 16px;
            position: relative;
            top: -3px;
            left: -18px;
        }
        .close{
            width: 10.4%;
            float: right;
            margin-right: 2%;
            margin-top: 0.5%;
        }
        #dakai{
            width: 100%;
            height: 24px;
            background-color:#C45E44;
            position: absolute;
            bottom: 0px;
            left: 0px;
        }
        .dakai img{
            width: 57%;
            margin-left: 22%;
            margin-top: 2px;
            z-index: 2;
        }
        .id-img{
            font-size: 1.1em;
            color: #fff;
            opacity: 0.5;
            position: absolute;
            top: 80px;
            right:17px;
            z-index: 10;
        }
    </style>

    <script src="/wxshare/Public/phone/js/jquery-1.9.1.min.js"></script>
    <script src="http://apps.inke.tv/s/js/jwplayer.js?v=5"></script>

    <script >jwplayer.key="lsUqQ+PB1edH+bYoMb85Yr5CuPlXyhK/ngcyNQ==";</script>
    <script src="/wxshare/Public/phone/js/socket.io.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script src="/wxshare/Public/phone/js/weixin_share.js"></script> 
    <script src="/wxshare/Public/phone/js/swiper.min.js"></script>
		
    <!-- <script src="/wxshare/Public/phone/js/phonesocket.js"></script> -->
</head>
<body>
<!--遮罩-->
<div class="shadd" onselectstart="return false">
</div>
<!--遮罩 结束-->

<!--无法播放信息-->
<div class="error_msg_bg" style="display:none">
    <p id="error_msg">直播结束，下载APP可以观看TA的更多直播</p>
</div>
<!--无法播放信息 结束-->

<!--播放器-->
<div class="player" style="display:none">
    <div id='container'>
    </div>
</div>
<!--播放器 结束1-->


<!--用户信息-->
<div class="user pa">
    <div class="user-bg pa" ></div>
    <div class="user-pic-bg">
        <img class="user-pic fl" id="user_pic">
    </div>
    <div style="float:left;margin-right: 7px;">
        <h3 class="user-name to" id="user_nick"></h3>
        <h4 class="user-wz" id="user_num" style="display:none"></h4>
    </div>
</div>
<!--用户信息 结束-->

<!--用户列表-->
<div class="online-user-list pa">
</div>
<!--用户列表结束-->

<!--映票-->

<div class="user-point-bg mask">
        <span class="user-point-text"></span>
        <span class="user-point-value"></span>
        <div class="user-point-fans">
            <img src="/wxshare/Public/phone/images/room_yingpiao_check.jpg">
        </div>
    </div>
<!--映票结束-->


<!--新图片水印-->
<img id="shui" src="/wxshare/Public/phone/images/shuiyin.jpg">
<!--新图片水印结束-->

<!--底部工具-->
<div class="btn-box">
    <img class="close" src="/wxshare/Public/phone/images/close.jpg">
    <center><img src="/wxshare/Public/phone/images/mg_room_slogan.png" id="open_android" style="bottom: 4px;height: 36px;width: auto; display:none"></center>
    <img src="/wxshare/Public/phone/images/chat.jpg" class="talk pa" id="talk_btn" style="display:none">
    <img src="/wxshare/Public/phone/images/gift.jpg" class="gift-btn pa" id="gift_btn" style="display:none">
</div>
<a class="dakai"><div id="dakai"><img src="/wxshare/Public/phone/images/bottom-ad.jpg"></div></a>
<!--底部工具 结束-->

<!--聊天-->
<div class="talk-box pa none">
    <div class="send-box pa">
        <a href='javascript:;' class="talk-btn" id="send">Send</a>
        <input id="message" class="talk-input" value="" />
    </div>
</div>
<div class="msg-box pa" id="msg_box" style="display:none;"></div>
<!--聊天 结束-->
<!--映客号水印-->
<div class="id-img">房间号:<span></span></div>
<!--映客号水印结束-->
<!--礼物墙-->
<div class="gift-box mask">
    <div class="gift-box-close mask"><div>X</div></div>
    <div class="gift-lists swiper-container">
        <div class="swiper-wrapper">
            </div>
<div class="swiper-pagination"></div>
</div>
<div class="gift-bbar">
    <a href="javascript:;" onclick="gift.pay()">
        <span class="gift-bbar-text">充值：</span>
        <span class="gift-bbar-money"></span>
        <img src="/wxshare/Public/phone/images/zuanshi.jpg">
        <span class="gift-bbar-text">></span>
    </a>
    <button class="gift-bbar-send-hide" id="gift_send">发送</button>
    <div class="gift-countdown-bg none" id="gift_countdown_bg">
        <div class="gift-countdown-btn">
            <p class="gift-countdown-btn-text" onselectstart="return false">连发</p>
            <p class="gift-countdown-btn-time" onselectstart="return false">30</p>
        </div>
    </div>
</div>
</div>
<!--礼物墙结束-->
<!--提示-->
<div class="confirm-bg none">
    <div class="confirm-content">
        <div class="confirm-text">
            <p class="confirm-text-title">余额不足</p>
            <p class="confirm-text-content">当前余额不足，充值才能继续送礼，是否去充值？</p>
        </div>
        <div class="confirm-line"></div>
        <div class="confirm-btn-left">取消</div>
        <div class="confirm-line2"></div>
        <div class="confirm-btn-right">充值</div>
    </div>
</div>
<!--提示结束-->

<!--直播名称-->
<!--<p class="desc pa" id="live_name"></p>-->
<!--直播名称 结束-->

<!--视频状态-->
<div style="height: 60px; left:0;width:100%;top: 65%;margin: -30px 0 0 0px;position: absolute;z-index: 12" id="media_status_msg"></div>
<!--视频状态提示 结束-->


<!--底部空白-->
<div style="height: 50px; width:100%; background-color: #fff; display:none" class="bottom_empty"></div>
<!--底部空白-->

<!--动画-->
<div class="anim-bg none">
    <div class="anim-nick">donghr</div>
    <div class="anim-image-bg"><img src="/wxshare/Public/phone/images/donghr.jpg" class="anim-image"></div>

    <div class="anim-seq"></div>
</div>
<!--动画结束-->


<!--跳转提示-->
<div class="tiaozhuan">
    <div class="div1"><div class="sp1">1.请点击右上角</div><img class="img2" src="/wxshare/Public/phone/images/share.jpg"><div class="cl"></div></div>
    <div class="div1"><div class="sp2">2.选择在浏览器打开</div><img class="img" src="/wxshare/Public/phone/images/safari.jpg"><div class="cl"></div></div>
</div>
<div class="bg"></div>
<!--跳转提示 结束-->

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
<input type="hidden" id="weixin_share_img" value="<?php echo ($userinfo['avatar']); ?>">
<input type="hidden" id="weixin_share_title" value="<?php echo ($config['sitename']); ?>">

<input type="hidden" id="token" value="<?php echo ($token); ?>">
<input type="hidden" id="token_time" value="">

<input type="hidden" id="rp_money" value="">

<input type="hidden" id="path" value="S">

<!--数据 结束-->
</body>
</html>

<script>
    var debug = true;
		<?php echo ($media_info); ?>

    var uid = $('#uid').val();

    var isiPad = /iPad/i.test(navigator.userAgent);
    var isiPhone = /iPhone|iPod/i.test(navigator.userAgent);
    var isAndroid = /Android/i.test(navigator.userAgent);
    var isWeixin = /MicroMessenger/i.test(navigator.userAgent);
    var isQQ = /QQ/i.test(navigator.userAgent);
    var isIOS = (isiPad || isiPhone);
    var isWeibo = /Weibo/i.test(navigator.userAgent);
    var playing = false;

    $('.id-img span').html(media_info.user.roomnum);
    $('.id-img span').css({"color":"#fff","opacity": "0.7"});
    //遮罩效果
    $('.shadd').bind("click",function(){
       // onDisplayClick();
        $(this).hide();
        $("#dakai").show();
        $('.talk-box').hide();
    });

    //跳转判断
    if(isIOS){
        if(!isWeixin){
            if(!isQQ){
                if($("#isappinstalled").val()==1){
                   // $(".dakai").attr("href","inke://?live="+$("#roomnum").val()+"");
                    document.getElementById("dakai").click();
                }else{
                    set_down_url();
                }
            }else{
               // $(".dakai").attr("href","inke://?live="+$("#roomnum").val()+"");
            }
        }else{
            if($("#isappinstalled").val()==1){
                $(".dakai").click(function(){
                    $(".tiaozhuan,.bg").show();
                })
            }else{
                set_down_url();
            }
        }
    }else{
        set_down_url();
    }
    $(".bg").click(function(){
        $(".tiaozhuan,.bg").hide();
    });
    $(".close").click(function(){
        window.location.href='./index?roomnum=<?php echo ($userinfo['id']); ?>';
    });
    //跳转判断结束

    function controlbar_hide() {
        $('#container_controlbar').css('display', 'none');
        setTimeout("controlbar_hide()", 10);
    }
    function debug(msg) {
        if ($('#from').val() == 'debug') {
            //alert(msg);
        }
    }
    function shade_show() {
        $('.shade').show();
    }
    function shade_hide() {
        $('.shade').hide();
    }
    function getWidth(){
        return $(window).width();
    }
    function getHeight() {
        if(isiPad) {
            return "960";
        }else{
            return $(window).height();
        }
    }
    function onComplete() {
        //alert('播放完毕');
    }
    function onBuffer() {
        $('#media_status_msg').hide();
    }
    function onPlay() {
      //  $('.shadd').css({display:"block"});
        $('#media_status_msg').hide();
        if (media_info.status == 1) {
            //直播开始时才显示聊天按钮和送礼按钮
            if ($('#view_uid').val() > 0) {
                //$('#talk_btn').show();
                $('#msg_box').show();
            }
            //if(gift.data.length) {
            //    $('#gift_btn').show();
            //}

        }
        $('.bottom_empty').hide();
        playing = true;

       // get_online_user(true);
    }
    function onPause() {
        if (media_info.status == 1 && isWeixin) {
            //player.play();
        }
        $('#media_status_msg').hide();
    }
    function onDisplayClick() {
        //直播没有暂停，录播有
        if (media_info.status == 1) {
            $('.btn-box').show();
            $('.talk-box').hide();
           // gift.hide();
            player.pause();
        }else{

        }

    }
    function onSetupError() {}
    function json_decode(str) {
        var data = null;
        try{
            str = str.replace(/\"(\w+)\":/g, "$1:");
            data = eval('('+str+')');
        }catch(e) {
            console.log('error:', e);
        }
        return data;
    }
    var player = null;
    function play() {
        if (media_info.status == -1) {
            alert('此视频目前不能播放');
            return;
        }

        if (media_info.status == 1) {
            player = jwplayer("container").setup({
                file: media_info.file[0],
                type: "mp4",
                width: getWidth(),
                height: getHeight(),
                skin: "/wxshare/Public/phone/js/vapor.xml",
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
        }else{
            //录播
            var playlist = [];
            for(var i = 0; i < media_info.file.length; i++) {
                playlist.push({file: media_info.file[i], image: media_info.image});
            }
            player = jwplayer("container").setup({
                playlist: playlist,
                type: "mp4",
                width: getWidth(),
                height: getHeight(),
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
                    onComplete: onComplete
                }
            });
            //$('.num').hide();
        }
    }
    var send_top = $('.talk-box').offset().top;
    function send_btn_monitor() {
        if ($('.talk-box').offset().top < send_top) {

        }
        setTimeout("send_btn_monitor()", 1000);
    }
    var chat = function() {
        this.roomid = '';
        this.uid = '';
        var self = this;
       // this.socket = null;
       /* this.enter_room = function(roomid, uid) {
            this.roomid = roomid;
            this.uid = uid;
            var session = $('#session').val();
            if (session == '') {
                session = '1';
            }
            if (this.socket != null) {
                var msg = {b: {ev: 'c.lr'}};
                this.socket.emit('c.lr', msg);

            }
            var token = $('#token').val();
            var token_time = $('#token_time').val();
						
						
           // this.socket = io.connect('101.200.133.23:19967?uid='+this.uid+'&nickname='+$('#view_nick').val()+'&equipment=pc&roomnum='+this.roomid+'&token='+token);
            socket.on('conn', function (data) {
                console.log("connected-------");
            });
            socket.on('message', function(data, ack) {
                if (ack) {
                    ack();
                }
                //console.log("data: ", data);
                data = json_decode(data);

                if (data != null) {
                    //聊天
                    if (typeof data.b != 'undefined' && data.b.ev == 's.m') {
                        var msg_list = self.parse_message(data);
                        self.show_message(msg_list);
                        if (playing) {
                            //暂停送礼效果
                            //gift.push_animate(data);
                        }
                        
                    }
										*/
                    //房间人数
					/*data:  {"b":{"ev":"s.m"},"f":6,"dest":2,"userid":57278669,"p":"r","liveid":"1460799683206472","ms":[{"tp":"usernu","n":9726}]} */
						/*				if (typeof data.b != 'undefined' && data.b.ev == 's.m') {
											//console.log("data: ", data);
                        if (typeof data.ms !== 'undefined' && data.ms.length == 1) {
                            if (typeof data.ms[0].tp && data.ms[0].tp == 'usernu' && typeof data.ms[0].n != 'undefined' && parseInt(data.ms[0].n) > 0) {
                                update_user_num(data.ms[0].n);
                            }
                        }
                    }*/
					/*
                    if (typeof data.b != 'undefined' && data.b.ev == 's.pb') {
					
						console.log("data: ", data);
                        if (typeof data.ms !== 'undefined' && data.ms.length == 1) {
                            if (typeof data.ms[0].tp && data.ms[0].tp == 'usernu' && typeof data.ms[0].n != 'undefined' && parseInt(data.ms[0].n) > 0) {
                                update_user_num(data.ms[0].n);
                            }
                        }
                    }
					*/
            /*        //送礼返回
                    if (typeof data.b != 'undefined' && data.b.ev == 'c.g') {
                        //gift.after_send(data);
                    }
                    //映票数
                    //{"dest":2,"b":{"ev":"s.pb"},"userid":106921,"ms":[{"num":2702,"tp":"iu"}],"liveid":"1447731697395872"}
                    if (typeof data.b != 'undefined' && data.b.ev == 's.pb' && typeof data.ms != 'undefined' && data.ms.length == 1) {
                        if (typeof data.ms[0].tp && data.ms[0].tp == 'iu' && typeof data.ms[0].num != 'undefined' && parseInt(data.ms[0].num) > 0) {
                            update_user_point(data.ms[0].num);
                        }
                    }
                }


            })
        };
        this.send = function(msg) {
            var data = {b: {ev: "c.ch"}, c: msg};
            this.socket.send(JSON.stringify(data));

            var arr = [{
                nick: $('#view_nick').val(),
                msg: msg
            }];
            this.show_message(arr);
        };
        this.parse_message = function(data) {
            var msg_list = [];
            if (typeof data.b != 'undefined' && typeof data.b.ev != 'undefined' && data.b.ev == 's.m' && typeof data.ms != 'undefined' && data.ms.length) {
                var ms = data.ms;
                for(var i = 0; i < ms.length; i++) {
                    if (typeof ms[i].from != 'undefined' && typeof ms[i].c != 'undefined') {
                        msg_list.push({nick: ms[i].from.nic, msg: ms[i].c});
                    }
                }
            }
            return msg_list;
        };
				 */
        this.show_message = function(msg_list) {

           // for(var i= 0; i < msg_list.length; i++) {
					      if(msg_list.msgtype=='2'){								
										var color = '#fff';									
										var msg = '<p><label>'+decodeURIComponent(msg_list.uname)+'</label>：<font color="'+color+'">'+msg_list.ct+'</font></p>'
										$('#msg_box').append(msg);
										//console.log(msg);
								}
          //  }
            $("#msg_box").scrollTop($("#msg_box").height());
            $('#msg_box').scrollTop($('#msg_box').prop('scrollHeight'));

        };
        this.send_gift = function(gift, num, uid, seq) {
            var data = {b: {ev: "c.g"}, id: gift.id, repeat: num, cl: [255,255,255], to: uid, seq: seq};
            this.socket.send(JSON.stringify(data));
            //console.log(JSON.stringify(data));
        }
    }
    
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
        $('.dakai').attr('href', down_url);
        $("#a_hong1,#a_hong2").attr('href', down_url);

        if (down_url == '') {
            $('.dakai').on('click', function() {
                alert('IOS新版即将更新，敬请期待');
                return false;
            });
            $("#a_hong1,#a_hong2").on('click', function() {
                alert('IOS新版即将更新，敬请期待');
                return false;
            })
        }
    }


    function update_user_num(num) {
        $('#user_num').html(num+'人看');
        $('#user_num').show();
    }
    function update_user_point(point) {
        //$('.user-point-value').html(point);
       //$('.user-point-bg').show();
    }
    function down_log() {
		 /*
        $.ajax( {
            type: "get",
            url: "/s/index/downLog",
            dataType: "json",
            data:{
                view_uid: $('#view_uid').val(),
            },
            cache:false,
            success:function(result) {},
            error : function() {}
        });
				*/
    }
    function get_user_num() {
        if (media_info.status != 0 && media_info.status != 1) return;
				/*
        $.ajax( {
            url:'/s/index/getusernum',
            data:{
                roomnum: $('#roomnum').val(),
                status: media_info.status
            },
            type:'post',
            cache:false,
            dataType:'json',
            success:function(result) {
                if (typeof result.data != 'undefined' && result.data !== false && result.data != 0) {
                    update_user_num(result.data);
                }
                //setTimeout("get_user_num()", 10000);
            },
            error : function() {

            }
        });
				*/
    }
    function random(min,max){
        return Math.floor(min+Math.random()*(max-min));
    }
		
		/*
    var gift_manager = function() {
        var gift_self = this;
        this.data = [];
        this.gift = false;
        this.uid = $('#uid').val();
        this.animate_queue = [],
                this.self_animate_queue = [];
        this.animate_stop = false;
        this.is_countdown = false;
        this.countdown_handler = null;
        this.seq = 0;
        this.init = function() {
            $('li[id^=gift_]').each(function(index, o) {
                var o = $(o);
                var item = {
                    id: parseInt(o.attr('data-id')),
                    type: o.attr('data-type'),
                    image: o.attr('data-image'),
                    anim_image: o.attr('data-anim-image'),
                    anim_image_width: o.attr('data-anim-image-width'),
                    anim_image_height: o.attr('data-anim-image-height'),
                    icon: o.attr('data-icon'),
                    gold: o.attr('data-gold'),
                    exp: o.attr('data-exp'),
                    selected: 0
                }
                gift_self.data.push(item);


                o.on('click', function() {
                    gift_self.select(o.attr('data-id'));
                })
            });

            $('#gift_send').on('click', function() {
                gift_self.send();
            });

            $('.gift-box-close').on('click', gift_self.hide);
            $('.shadd').on('click', gift_self.hide);
            $('#gift_btn').on('click', gift_self.show);
            $('#gift_btn').click(function(){
                $(".shadd").show();
            })
            $('.gift-countdown-btn').on('click', gift_self.seq_send);
            this.send_btn_show();
            this.seq = 0;

            setTimeout("gift.get_animate()", 100);


            $('.confirm-btn-left').on('click', function() {
                $('.confirm-bg').hide();
            });
            $('.confirm-btn-right').on('click', function() {
                gift_self.pay();
            });


            $('.gift-countdown-btn').on('mousedown', function() {
                $('#gift_countdown_bg').attr('class', "gift-countdown-bg2");
            });
            $('.gift-countdown-btn').on('mouseup', function() {
                $('#gift_countdown_bg').attr('class', "gift-countdown-bg");
            })
        };
        this.pay = function() {
            var url = "/wxpay/?uid="+$('#view_uid').val()+'&openid='+$('#weixin_openid').val()+'&verify='+$('#wxpay_verify').val();
            location.href=url;
        };
        this.show = function() {
            $('.gift-box').css('visibility', 'visible');
            $('.gift-box').show();
            $('.gift-box-close').show();
            //$('.talk-box').hide();
            $('.btn-box').hide();
            $('#msg_box').hide();
            //$('.hot_list').hide();
            window.scrollTo(0,0);
        };
        this.hide = function() {
            //$('.gift-box').css('visibility', 'hidden');
            $('.gift-box').hide();
            $('.gift-box-close').hide();
            $('.btn-box').show();
            $('#msg_box').show();
            //$('.hot_list').show();
        };
        this.select = function(id) {
            if (this.is_countdown) return;
            for(var i = 0; i < this.data.length; i++) {
                var gift = $('#gift_select_'+this.data[i].id);
                var classname = '';
                if (this.data[i].type == 1) {
                    classname = 'gift-lian';
                }
                this.data[i].selected = 0;
                if (this.data[i].id == id) {
                    if (gift.attr('class') != 'gift-selected') {
                        classname = 'gift-selected';
                        this.data[i].selected = 1;
                    }
                }
                gift.attr('class', classname);
            }
            this.send_btn_view();
        };
        this.countdown_show = function() {
            $('.gift-countdown-bg').show();
            $('.gift-countdown-btn-time').html('30');
            this.is_countdown = true;
            this.seq = 0;
            this.countdown_handler = setTimeout("gift.countdown();", 100);
        };
        this.countdown_hide = function() {
            $('.gift-countdown-bg').hide();
        };
        this.countdown = function() {
            var time = parseInt($('.gift-countdown-btn-time').html()) - 1;
            if (time > 0) {
                $('.gift-countdown-btn-time').html(time);
                this.countdown_handler = setTimeout("gift.countdown();", 100);
            }else{
                if (this.countdown_handler !== null) {
                    clearInterval(this.countdown_handler);
                }
                this.countdown_handler = null;
                this.is_countdown = false;
                this.countdown_hide();
                this.send_btn_show();
                this.seq = 0;
                $('.anim-bg').remove();
            }

        };
        this.send_btn_show = function() {
            $('#gift_send').show();
        };
        this.send_btn_hide = function() {
            $('#gift_send').hide();
        };
        this.get_selected = function() {
            this.gift = false;
            for(var i = 0; i < this.data.length; i++) {
                if (this.data[i].selected == 1) {
                    this.gift = this.data[i];
                    break;
                }
            }
        };
        this.send_btn_view = function() {
            this.get_selected();
            if (this.gift !== false) {
                $('#gift_send').attr('class', 'gift-bbar-send');
            }else{
                $('#gift_send').attr('class', 'gift-bbar-send-hide');
            }
        };
        this.seq_send = function() {
            if (gift.gift === false) {
                return;
            }
            gift.seq++;
            gift._send(1, gift.seq);
            $('.gift-countdown-btn-time').html('30');
        };
        this.send = function() {
            this.get_selected();
            if (this.gift === false) {
                return;
            }
            if (this.gift.type == 1) {
                this.send_btn_hide();
                this.countdown_show();
            }else{
                this._send(1, 0);
            }

        };
        this._send = function(num, seq) {
            c.send_gift(this.gift, num, this.uid, seq);
        };
        this.after_send = function(r) {
            if (r.b.err != 0) {
                if (r.b.err == -8) {
                    $('.confirm-bg').show();
                }else{
                    //alert(r.b.c);
                }
            }
            var gold = r.gd;
            gift_self.update_user_money(gold);
            if (gift_self.is_countdown == false) {
                gift_self.hide();
            }

        };
        this.get_img = function(img) {
            if (img.indexOf('http') == -1) {
                return 'http://img.meelive.cn/'+img;
            }else{
                return img;
            }

        };
        this.update_user_money = function(gold) {
            $('.gift-bbar-money').html(gold);
        }
        this.push_animate = function(data) {
            for(var j = 0; j < data.ms.length; j++) {
                if (typeof data.ms[j].gift == 'undefined') continue;
                var gift_info = data.ms[j].gift;
                var from = data.ms[j].from;
                var id = gift_info.id;
                var res_id = gift_info.res_id;
                var seq = typeof gift_info.seq == 'undefined' ? 0 : gift_info.seq;
                var uid = from.id;
                var nic = from.nic;
                var image = icon = '';
                var type = -1;
                var name = gift_info.name;
                var width = height = '';

                for(var i = 0; i < this.data.length; i++) {
                    if (id == this.data[i].id) {
                        type = this.data[i].type;
                        image = this.get_img(this.data[i].anim_image);
                        icon = this.get_img(this.data[i].icon);
                        width = this.data[i].anim_image_width;
                        height = this.data[i].anim_image_height;
                    }
                }
                if (type == -1) {
                    continue;
                }

                var d = {
                    id: id,
                    type: type,
                    res_id: res_id,
                    seq: seq,
                    uid : uid,
                    nic: nic,
                    image: image,
                    icon: icon,
                    name: name,
                    width: width,
                    height: height
                };
                if (this.uid == uid) {
                    this.self_animate_queue.push(d);
                }else{
                    this.animate_queue.push(d);
                }
            }
        };
        this.get_animate = function() {
            var data = false;
            if (this.self_animate_queue.length) {
                data = this.self_animate_queue.shift();
            }else if (this.animate_queue.length) {
                data = this.animate_queue.shift();
            }
            if (data) {

                this.run_animate(data);
            }
            setTimeout("gift.get_animate()", 100);
        };
        this.animate_init = function(id, seq, data) {
            return;
            var height = $('.player').height();
            var width = $('.player').width();

            var html = '<div class="anim-bg" id="'+id+'">';
            html += '<div class="anim-nick"><img src="http://img.meelive.cn/MjkxMTgxNDQ3OTAzMjIy.jpg">'+data.nic+'：送'+data.name+'<span id="anim_count_'+data.uid+'_'+data.id+'">1</span>个</div>';
            html += '<div class="anim-image-bg" style="width:'+data.width+'px; height:'+data.height+'px"><img src="'+data.image+'" class="anim-image" id="anim_img_'+data.uid+'_'+data.id+'"></div>';
            html += '<div class="anim-seq" id="anim_seq_'+data.uid+'_'+data.id+'" >'+seq+'</div>';
            html += '</div>';
            $('.player').append(html);

            var min_left = 20;
            var max_left = width - 190;
            var max_top = height - $('.gift-box').height()-100;
            var min_top = 220;
            var left = random(min_left, max_left);
            var top = random(min_top, max_top);
            if (left < 20) left = 20;
            if (top < 220) top = 220;
            var img_id = 'anim_img_'+data.uid+'_'+data.id;
            $('#'+img_id).css('width', '0%');
            $('#'+id).css('left', left).css('top', top).show();
        };
        this.run_animate = function(data) {
            return;
            var height = $('.player').height();
            var width = $('.player').width();
            var duration = 4000;
            var id = 'anim_'+data.uid+'_'+data.id;
            var seq = '';
            var new_anim = false;
            if (data.seq == 1) {
                seq = 'x'+data.seq;
                this.animate_init(id, seq, data);
                new_anim = true;
            }else if (data.seq > 1) {
                seq = 'x'+data.seq;
                $('#anim_seq_'+data.uid+'_'+data.id).html(seq);
                $('#anim_count_'+data.uid+'_'+data.id).html(data.seq);
            }else{
                this.animate_init(id, '', data);
                new_anim = true;
            }

            if (new_anim) {
                var img_id = data.uid+'_'+data.id;
                $.when(this.a1(img_id, 500)).then(this.a2(img_id, 500)).then(this.a3(img_id, 500)).then(this.a4(img_id, 2500));
            }
            if (seq != '')  {
                var seq_id = 'anim_seq_'+data.uid+'_'+data.id;
                $.when(this.a_num1(seq_id, 100)).then(this.a_num2(seq_id, 100)).then(this.a_num3(seq_id, 100));

            }
        };
        this.a_num1 = function(id, duration){
            return $('#'+id).animate({
                fontSize: "60px"
            },{
                duration: duration
            }).promise();
        };
        this.a_num2 = function(id, duration){
            return $('#'+id).animate({
                fontSize: "30px"
            },{
                duration: duration
            }).promise();
        };
        this.a_num3 = function(id, duration){
            return $('#'+id).animate({
                fontSize: "40px"
            },{
                duration: duration
            }).promise();
        }
        this.a1 = function(id, duration) {
            return $('#anim_img_'+id).animate({
                width: '120%'
            },{
                duration: duration
            }).promise();
        };
        this.a2 = function(id, duration) {
            return $('#anim_img_'+id).animate({
                width: '70%'
            },{
                duration: duration

            }).promise();
        };
        this.a3 = function(id, duration) {
            return $('#anim_img_'+id).animate({
                width: '100%'
            },{
                duration: duration
            }).promise();
        };
        this.a4 = function(id, duration) {
            return $('#anim_'+id).animate({
                letterSpacing:"0px"
            },{
                duration: duration,
                done: function() {
                    if (gift.is_countdown === false) {
                        $(this).remove();
                    }

                }
            }).promise();
        };

    }
		
		*/

    function init_online_user() {
        var window_width = getWidth();
        var user_width = $('.user').width();
        var online_user_width = window_width - user_width - 30;
        $('.online-user-list').width(online_user_width);
    }
    function get_path() {
        return $('#path').val();
    }

    var curr_count = 0;
    var curr_start = 0;
    function get_online_user(all) {
        var count = 10;
        var start = curr_start + count;
        if (all === true) {
            //如果有偏移取消全量更新
        
            if ($('.online-user-list').scrollLeft() > 40) {
                //setTimeout('get_online_user(true)', 50000);
                return false;
            }
            start = 0;
        }
				
        $.ajax( {
            url:'./userlist',
            data:{
                roomnum: $('#roomnum').val(),
                start: start,
                count: count
            },
            type:'get',
            cache:false,
            dataType:'json',
            success:function(result) {
                if (result.status == 0) {  							
                    var html = '';
                    var list = result.data;
                    curr_count = result.count;
                    curr_start = result.start;
                    $('#shui').hide();
                    for(var i = 0; i < list.length; i++) {
                        html += '<div class="online-user">';
                        html += '<img class="online-user-pic" src="'+list[i].avatar+'">';
                        //if (list[i].verifyied_img != '') {
                        //    html += '<img src="'+list[i].verifyied_img+'" class="online-user-v">';
                        //}
                        html += '</div>';
                    }
									
                    if (html != '') {
                        if (all === true) {
                            $('.online-user-list').html(html);
                        }else{
                            $('.online-user-list').append(html);
                        }
                    }
                }
                if (all === true) {
                    //setTimeout('get_online_user(true)', 50000);
                }
                
            },
            error : function() {
                if (all === true) {
                    //setTimeout('get_online_user(true)', 50000);
                }
            }
        });
				
    }

    function online_user_right() {
        var width = $('.online-user-list').width();
        var scrollLeft = $('.online-user-list').scrollLeft();
        var scrollWidth = document.getElementsByClassName('online-user-list')[0].scrollWidth;
        if (scrollLeft + width == scrollWidth) {
            return true;
        }
        return false;
    }

    var c = new chat(); 
    //var gift = new gift_manager;
    $(document).ready(function() {
        if (isWeixin) {
            //gift.init();
            weixin_share();
        }

        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 1,
            pagination: '.swiper-pagination'
        });


        $('#user_nick').html(media_info.user.nick);
        $('#user_area').html(media_info.user.area);
        $('#user_pic').attr('src', media_info.user.pic);
        $('#live_name').html(media_info.name);
        if ((media_info.status == 0 && media_info.file.length == 0) || media_info.forbid == 1 || media_info.shieldstat === false) {
            //无法播放
            $('.error_msg_bg').show();
            $('.player').hide();
            $('.error_msg').val(media_info.reason);
            $('.desc').css('bottom', '350px');
            //get_hot_list();
        }else{
            $('.error_msg_bg').hide();
            $('.player').show();
            play();
            //setTimeout("get_hot_list();", 1000);
            $('.hot_list').hide();
            $('.bottom_empty').hide();
        }

        update_user_num(media_info.online_users);
        if (media_info.status == 1) {

            var roomid = $('#roomnum').val();
            var view_uid = $('#view_uid').val();

            if (roomid != '' && view_uid != '' && view_uid != '0') {
               // c.enter_room(roomid, view_uid);
								
								 //Socket.inituser(roomid, view_uid);
            }

            if ($('.desc').html() != '') {
                $('#msg_box').css('bottom', '80px');
            }

            $('#talk_btn').click(function(){
                if (isWeixin) {
                    $('.btn-box').hide();
                    $('.talk-box').show();
                    $("#dakai").hide();
                    $('#msg_box').show();
                    $('#message').focus();
                    $(".shadd").show();

                    window.scrollTo(0,0);
                }else{
                    $('#msg_box').show();
                    window.scrollTo(0,0);
                    alert('先下载客户端，才能发言');
                }
                
            });
            //$('#send').click(function() {
            //    var message = $('#message').val();
            //    if (message == '') return;
            //    c.send(message);
            //    $('#message').val('');
            //    $('#message').focus();
            //})
            //$('#message').focus(function() {
            //    if (isAndroid) {
            //        setTimeout("window.scrollTo(0,0);", 100);
            //    }

            //});
            $(window).resize(function() {
                setTimeout("window.scrollTo(0,0);", 100);
            });

            setTimeout("send_btn_monitor()", 1000);
        }else{
            //get_user_num();
        }

        $('.msg-box').on('click', function() {
            $('.btn-box').show();
            $('.talk-box').hide();
        });

        //自动播放
        if (media_info.status == 1) {
            player.play();
        }


        //在线用户列表滚动到最右面加载下一页
        //$('.online-user-list').scroll(function(){
        //    if (online_user_right()) {
        //        get_online_user();
        //    }
        //});
    
        init_online_user();
				
				get_online_user(true);
				
        controlbar_hide();
				
				 $('#msg_box').show();
        
    })
</script>