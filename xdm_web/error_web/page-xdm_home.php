<html lang="zh-Hans" style="font-size: 10px;">

<head>
    <meta charset="utf-8">
    <meta name="description" content="「WeMeet」是一款基於小遊戲的群體聊天社交類產品。用戶可以利用碎片化的時間，隨時隨地選擇適合自己的話題、人群以及遊戲模式進行交友互動。聊天方式可以針對不同人群、選擇各種遊戲模式和階段目標組合，找到最適合的交友場景。遊戲成果還可以分享到社區和社交網絡，結識有同樣愛好的朋友，讓聊天不再是尷尬。">
    <meta name="HandheldFriendly" content="True">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>    

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">

    <script type="text/javascript">
        var system = {};
        var p = navigator.platform;
        var u = navigator.userAgent;
        
        system.win = p.indexOf("Win") == 0;
        system.mac = p.indexOf("Mac") == 0;
        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
        if (system.win || system.mac || system.xll) {//如果是PC转
            alert('PC');
            if (u.indexOf('Windows Phone') > -1) {  //win手机端
                alert('Windows Phone')
        
            }else {
            window.location.href = "error.html";
            }
        }
    </script>


    <script>/*
      # 不做適配時，html fontsize默認設置，便於css使用rem
      */
      !function() {
          var designFontSize = 10 || 10;
          document.documentElement.style.fontSize = designFontSize + "px";
      }();
    </script>
    <link rel="icon" type="image/png" href="./resources/192.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./resources/192.png" sizes="96x96">
    <link rel="icon" type="image/png" href="./resources/192.png" sizes="16x16">
    
    <script type="text/javascript">
      $(document).ready(function(){
        $(".video-large-wrap").hide();
        $("#video-play").click(function(){
        $(".video-large-wrap").show();
        $("#video-large").trigger("play");
        $(".body-wrap").hide();
        });

        $("#video-close").click(function(){
        $(".video-large-wrap").hide();
        $("#video-large").trigger("pause");
        $(".body-wrap").show();
        });

        $("#header-tab-expand").click(function(){
        $(".nav-wrapper-phone").attr('class','nav-wrapper-phone show-tab');
        });

        $("#header-tab-close").click(function(){
          document.getElementById("wind").className = "nav-wrapper-phone";  
        });

      });

    </script>

    <link rel="stylesheet" href="./css/keep_icon-645549d368.css">
    <link rel="stylesheet" href="./css/common-a6bafdb17d.css">
    <link rel="stylesheet" href="./css/homepage-ddedc35afe.css">
    <link type="text/css" rel="stylesheet" href="css/carousel.css">
    <title>全球首款命理交友app</title>
</head>
<body data-keepversion="">

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog center-block"style="width: 200;bottom: -200">
        <div class="modal-content">
            <div class="modal-body" style="text-align:center;">
                感謝關注，尚未提供下載，<br>請與管理員聯繫。
            </div>
            <div  style="text-align: center">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-bottom: 10">关闭</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

  <div class="video-large-wrap">
        <div id="video-close"><i class="keep-icon-close"></i></div>
        <video id="video-large" src="./resources/full.mp4" controls="" muted="" autoplay="autoplay"></video>
  </div>

  <script>
      (function() {
          var height = window.innerHeight,
              width = document.body.clientWidth;
          if (typeof height != 'number') {
              height = document.body.clientHeight;
          }
          var ratio = height / width;
          document.write('<style>.video-head-wrap{padding-bottom:' + ratio * 100 + '% !important;}.body-wrap{padding-top:' + ratio * 100 + '%;}</style>');
          if ((ratio<=1.7)){document.write('<style>.phone-head-wrap{height:118%;margin-left:' + leftOffset + 'px;}</style>');}
          if ((ratio>1.7)&&(ratio<=1.8)) {document.write('<style>.phone-head-wrap{height:100%;margin-left:' + leftOffset + 'px;}</style>');}
          if ((ratio>1.8)&&(ratio<=2.1)) {document.write('<style>.phone-head-wrap{height:88%;margin-left:' + leftOffset + 'px;}</style>');}
          if (ratio>2.1) {document.write('<style>.phone-head-wrap{height:82%;margin-left:' + leftOffset + 'px;}</style>');}
          //背景視頻為1280*720
          if (ratio > (720 / 1280)) {
              var leftOffset = -(height * 1280 / 720 - width) / 2;
              document.write('<style>#video-bg{width:100%;margin-left:' + leftOffset + 'px;}</style>');
          } else {
              var topOffset = -(width * 720 / 1280 - height) / 2;
              document.write('<style>#video-bg{width:100%;margin-top:' + topOffset + 'px;}</style>');
          }
      })();
  </script>

  <style>
      #appicon{
        border-radius: 5px;
      }
      .video-head-wrap {
          /*padding-bottom: 94.29590017825312% !important;*/
      }

      .body-wrap {
          /*padding-top: 94.29590017825312%;*/
      }
  </style>
  <style>
      #video-bg {
          margin-left: 0;
      }
      #video1-bg {
          width: 100%;
      }
  </style>

  <style>
      .video1-txt {
          font-size: 2.4rem;
          position: absolute;
          margin-top: -500;
          left: 12%;
          font-weight: bold;
          color:#e9e9e9e9
      }
      .video2-txt {
          font-size: 1.4rem;
          position: absolute;
          margin-top: -450;
          left: 27%;
          color:#ffffff
      }     
      .video-img{
          position: absolute;
          margin-top: -200;
          left: 12%;
      } 
    .caroursel{margin:150px auto;}  
    .turn_play{
        margin-left: 0;
    }    
  </style>

  <div class="body-wrap">
        <div class="keep-header">
            <nav class="nav-wrapper-pc-wider">
                <div class="head-left">
                  <a href="/"><img src="./resources/sdm.png" height="32px"></a>
                  <a href="/"><img id="appicon" src="./resources/192.png" height="32px"></a>
                </div>

                <div class="head-right">
                    <div class="nav-pc"><a href="/explore">發現逗趣</a><a href="/training">話題廣場</a></div>
                    <div class="social-media"><a href="javascript:;" class="wechat-link"><i class="keep-icon-wechat"></i><div class="wechat-qr"><img src="./resources/wechat-qr-429ecdac26.jpg"></div></a><a href="http://weibo.com/p/1006065342268417/home" target="_blank"><i class="keep-icon-weibo"></i></a><a href="https://twitter.com/KeepTrainer" target="_blank"><i class="keep-icon-twitter"></i></a><a href="https://www.instagram.com/keeptrainer/" target="_blank"><i class="keep-icon-instagram"></i></a></div>
                </div>
            </nav>
            <nav id="wind" class="nav-wrapper-phone">
                <div class="phone-head" style="text-align: center;" ><a href="/" id="header-home-link">
                    <img src="./resources/Wemeet.png" style="width: 70%;"></a>
                    <div id="header-tab-close" class="act-tab keep-icon-close"></div>
                </div>
                <div class="phone-tabs-wrap">
                    <div><a href="/" class="link">首頁</a><a href="/explore" class="link">發現精選</a><a href="/training" class="link">產品內容</a></div>
                </div>
            </nav>
        </div>
        <header class="video-head-wrap">
            <div class="video-container"><video id="video-bg" src="./resources/5s.mp4" muted="" autoplay="" loop=""></video>
                <div class="video-control"><img src="./resources/slogan-cfd33df7dd.png"><img id="video-play" src="./resources/play-1a7aadd99d.png"></div>
                    <div class="video-bottom">
                        <div class="bottom-left" >全球首款命理社交app<br><br><br></div>
                        <div class="bottom-right"><a href="/app?type=ios"><img src="./resources/appledownload-bf3fce6ff0.png"></a><a href="/app?type=android"><img src="./resources/androiddownload-7af2fefe76.png"></a><a href="javascript:;" class="qrcode"><span></span><img src="./resources/QRcode.png" class="qrcode"></a></div>
                    </div>
                </div>
        </header>
        <header class="phone-head-wrap">
            <div class="phone-download-wrap"></div>
            <div class="phone-download">

            <div class="video-container"><video id="video-bg" src="./resources/header264.mp4" muted="" autoplay="" loop=""></video>
                
                <div class="video-control">                        
                    <div style="height: 100; display: flex; align-items: center; margin-bottom: -360;" data-toggle="modal" data-target="#myModal">
                            <a ><img style="height: 30px; position: relative;" src="./resources/androiddownload-7af2fefe76.png"></a>
                    </div>
                </div>
                    <div class="video-bottom" style="bottom:  200px;">
                        <div class="bottom-left-phone" style="font-size:30px">全球首款命理社交app<br><br><br></div>
                        <div class="video-bottom" style="bottom:  -170px;"></div>
                    </div>

            </div>
        </header>
        <div class="content-wrap">
            <section>
                <div class="paragraph">
                    <div class="para-title">測算交友，微密懂你</div>
                    <div class="para-text">採用人工智能算法，通過人臉，心理學幫你尋找最合適的人。</div>
                </div>
                <div class="training-wrap">
                    <div class="training-wrap-inner">
                        
                        <div class="training-block"><a href="http://xdm-game-version.oss-cn-beijing.aliyuncs.com/h5/zhanbu/AIXiangMian/index.html?type=1" style="background-image: url('./resources/1478591073270_750x700.jpg')" class="training-item"><div class="training-detail"><div class="training-title"></div><div class="training-population"></div></div></a><a href="http://xdm-game-version.oss-cn-beijing.aliyuncs.com/h5/zhanbu/AIXiangMian/index.html?type=2&uid=88" style="background-image: url('./resources/1478588565783_750x700.jpg')" class="training-item"><div class="training-detail"><div class="training-title"></div><div class="training-population"></div></div></a><a style="background-image: url('./resources/1488452269169_750x700.jpg')" class="training-item"><div class="training-detail"><div class="training-title"></div><div class="training-population"></div></div></a><a href="/workouts/56d415419f0274a548831890" style="background-image: url('./resources/54cc47743b800000.jpg')" class="training-item"><div class="training-detail"><div class="training-title"></div><div class="training-population"></div></div></a></div>

                        <div class="training-block"><a  style="background-image: url('./resources/ceyice.jpg')" class="training-item"><div class="training-detail"><div class="training-title"></div><div class="training-population"></div></div></a><a href="/workouts/56d415419f0274a548831890" style="background-image: url('./resources/54cc47743b800000.jpg')" class="training-item"><div class="training-detail"><div class="training-title"></div><div class="training-population"></div></div></a></div>

                        <div class="body-pic-wrap"><img src="./resources/body-17083f5af5.png" class="body-pic"><img src="./resources/bodycircle-de9a04cd4e.png" class="circle-pic"><img src="./resources/heart-ee688b8cbb.png" class="animate-heart"></div><img src="./resources/traindata-b45741aab8.png" class="data-pic"><img src="./resources/trainchart-22f298e54c.png" class="chart-pic"><img src="./resources/trainpic-ed1960e938.png" class="cal-pic"></div>
                        </div>
            </section>

            <section style="margin-top: 250">
                <div class="paragraph community-para">
                    <div class="para-title">在微密社區遇見有趣的靈魂</div>
                    <div class="para-text">採用最先進算法和人工智能精挑細選，確保你收到的每一條分享都是那麼的有趣</div><br><br>
                    <div ><video id = "video1-bg"  src="./resources/demo.mp4" muted="" autoplay="" loop=""></video></div>
            </section>

            <section>
                <div class="paragraph run-para" style="padding-bottom: 0;">
                    <div class="para-title">在微密</div>
                    <div class="para-text">還有更多樂趣等你發現</div>
                    <div class="para-text" style="color:white"><br></div>
                    
                    <div class="turn_play">
                        <article class="jq22-container">
                          <div class = "caroursel poster-main" data-setting = '{
                              "width":300,
                              "height":260,
                              "posterWidth":272,
                              "posterHeight":200,
                              "scale":0.8,
                              "dealy":"3000",
                              "algin":"middle"
                              }'>
                          <ul class = "poster-list">
                            <li class = "poster-item"><img src="resources/a1.png" width = "100%" height="100%"></li>
                            <li class = "poster-item"><img src="resources/a2.png" width = "100%" height="100%"></li>
                            <li class = "poster-item"><img src="resources/a3.png" width = "100%" height="100%"></li>
                            <li class = "poster-item"><img src="resources/a4.png" width = "100%" height="100%"></li>
                            <li class = "poster-item"><img src="resources/a5.png" width = "100%" height="100%"></li>
                            <li class = "poster-item"><img src="resources/a6.png" width = "100%" height="100%"></li>
                            <li class = "poster-item"><img src="resources/a7.png" width = "100%" height="100%"></li>
                            <li class = "poster-item"><img src="resources/a8.png" width = "100%" height="100%"></li>
                            <li class = "poster-item"><img src="resources/a9.png" width = "100%" height="100%"></li>
                          </ul>
                      
                          <ul class="btn-box">
                            <li class="index-btn"></li>
                            <li class="index-btn"></li>
                            <li class="index-btn"></li>
                            <li class="index-btn"></li>
                            <li class="index-btn"></li>
                            <li class="index-btn"></li>
                            <li class="index-btn"></li>
                            <li class="index-btn"></li>
                            <li class="index-btn"></li>      
                          </ul>
                          <div class = "poster-btn poster-prev-btn"></div>
                          <div class = "poster-btn poster-next-btn"></div>
                        </div>
                      </article>
                  </div>
                </div>
            </section>

            <img src="./resources/lastpage.png" style="width: 100%"  data-toggle="modal" data-target="#myModal">
            <div  style="position: absolute;bottom: 0; width: 100%;text-align: center;">
                <p style="color: #b7b7b7;">北京小豆苗科技有限公司</p>
            </div>

        </div>
  </div>

  <script>
      ! function t(o, c, s) {
        function w(n, e) { if (!c[n]) { if (!o[n]) { var i = "function" == typeof require && require; if (!e && i) return i(n, !0); if (l) return l(n, !0); var a = new Error("Cannot find module '" + n + "'"); throw a.code = "MODULE_NOT_FOUND", a } var r = c[n] = { exports: {} };
                o[n][0].call(r.exports, function(e) { var i = o[n][1][e]; return w(i || e) }, r, r.exports, t, o, c, s) } return c[n].exports } for (var l = "function" == typeof require && require, e = 0; e < s.length; e++) w(s[e]); return w }({ 1: [function(e, i, n) { "use strict"; var a, r = e("keep-jsbridge/dist/keepjsbridge.common.js"),
                t = (a = r) && a.__esModule ? a : { default: a };
            window.KeepJsbridge = t.default }, { "keep-jsbridge/dist/keepjsbridge.common.js": 2 }], 2: [function(e, i, n) { "use strict";

            function a(e) { var i;
                o ? (i = e, window.WebViewJavascriptBridge ? i() : document.addEventListener("WebViewJavascriptBridgeReady", function() { i() }, !1)) : c && function(e) { if (window.WebViewJavascriptBridge) return e(); if (window.WVJBCallbacks) return window.WVJBCallbacks.push(e);
                    window.WVJBCallbacks = [e]; var i = document.createElement("iframe");
                    i.style.display = "none", i.src = "wvjbscheme://__bridge_loaded__", document.documentElement.appendChild(i), setTimeout(function() { document.documentElement.removeChild(i) }, 0) }(e) } var r = "undefined" != typeof window && window.navigator.userAgent.toLowerCase(),
                t = r && 0 < r.indexOf("keep"),
                o = r && 0 < r.indexOf("android"),
                c = r && /iphone|ipad|ipod|ios/.test(r),
                s = { ready: function(e) { var i;
                        i = e, t && a(i) }, readyC: function(e) { this.ready(e) }, _onKeepBridgeEventFunction: window.WebViewJavascriptBridge = null, _onKeepBridgeEventCallbackArr: [], onKeepBridgeEvent: function(e) { e.callback && s._onKeepBridgeEventCallbackArr.push(e.callback), s._onKeepBridgeEventFunction || (s._onKeepBridgeEventFunction = function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler(e.eventName, function(e, i) { for (var n = 0, a = s._onKeepBridgeEventCallbackArr.length; n < a; n++) "function" == typeof s._onKeepBridgeEventCallbackArr[n] && (e && "string" == typeof e && (e = JSON.parse(e)), s._onKeepBridgeEventCallbackArr[n](e, i)) }) }, s._onKeepBridgeEventFunction()) }, KeepBridgeCaller: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler(i.callerName, i.data, function(e) { i.success && (e ? "string" == typeof e && (e = JSON.parse(e)) : e = {}, "showModal" === i.callerName && "true" !== e.confirm ? i.cancel && i.cancel(e) : "fail" === e.shareResult ? i.fail && i.fail(e) : i.success(e)) }) }, checkJsApi: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("checkJsApi", { jsApi: i.jsApi }, function(e) { "string" == typeof e && (e = JSON.parse(e)), i.success && i.success(e) }) }, showPrivilegeDialog: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("showPrivilegeDialog", { privilegeName: e.privilegeName }) }, setKeepShareOption: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setKeepShareOption", { title: e.title, content: e.content, image: e.image, showShareIcon: !1 !== e.showShareIcon, url: e.url, statistics: e.statistics || {} }) }, setShareOption: function(i) { var e = { title: i.title, content: i.content, image: i.image, url: i.url, showShareIcon: !1 !== i.showShareIcon, statistics: i.statistics || {} };
                        i.wxApp && i.wxApp.userName && (e.wxApp = i.wxApp), i.wxAppInMoment && (e.wxAppInMoment = i.wxAppInMoment), window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setShareOption", e, function(e) { "string" == typeof e && (e = JSON.parse(e)), "success" == e.shareResult ? i.success && i.success() : "fail" == e.shareResult && i.fail && i.fail() }) }, setShareOptionC: function(e) { this.setShareOption(e) }, setImageShareOption: function(i) { var e = { base64Image: i.base64Image, statistics: i.statistics || {} };
                        window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setImageShareOption", e, function(e) { "string" == typeof e && (e = JSON.parse(e)), "success" == e.shareResult ? i.success && i.success() : "fail" == e.shareResult && i.fail && i.fail() }) }, invokeShare: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("invokeShare", {}) }, invokeShareC: function() { this.invokeShare() }, isWeChatInstalled: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("isWeChatInstalled", {}, function(e) { "string" == typeof e && (e = JSON.parse(e)), i.callback && i.callback(e) }) }, launchMiniProgram: function(e) { var i = {};
                        e.wxApp && e.wxApp.userName && (i.wxApp = e.wxApp), window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("launchMiniProgram", i) }, riskVerify: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("riskVerify", { verified: e.verified, msg: e.msg }) }, invokeSpecificShare: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("invokeShare", { type: e.type }) }, invokeSpecificShareC: function(e) { this.invokeSpecificShare(e) }, stopLoadingAnimation: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("stopLoadingAnimation", {}) }, stayHighlight: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("stayHighlight", {}) }, stayHighlightC: function() { this.stayHighlight() }, enableOnBack: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("enableOnBack", {}) }, phone: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("phone", { phoneNumber: e.phoneNumber }) }, setTitleBarVisibility: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setTitleBarVisibility", { visible: e.visible }) }, setTitle: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setTitle", { title: e.title }) }, setTitleC: function(e) { this.setTitle(e) }, setTitleOpacity: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setTitleOpacity", { opacity: e.opacity }) }, showOptionMenu: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("showOptionMenu", {}) }, hideOptionMenu: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("hideOptionMenu", {}) }, showToast: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("showToast", { msg: e.msg, type: e.type }) }, showToastC: function(e) { this.showToast(e) }, showModal: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("showModal", { title: i.title, msg: i.msg, showCancel: i.showCancel || !0, confirmText: i.confirmText, cancelText: i.cancelText }, function(e) { "string" == typeof e && (e = JSON.parse(e)), "true" == e.confirm ? i.success && i.success() : i.cancel && i.cancel() }) }, showModalC: function(e) { this.showModal(e) }, closeWebview: function(e) { var i = !0;
                        e && (i = e.animation), window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("closeWebview", { animation: i }) }, closeWebviewC: function() { this.closeWebview() }, openNewPage: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("openNewPage", { url: e.url, newWindow: e.newWindow }) }, showErrorPage: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("showErrorPage", {}) }, checkIOSHealthkit: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("checkIOSHealthkit", {}, function(e) { i.success && i.success(e) }) }, getIOSHealthkitStatus: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("getIOSHealthkitStatus", {}, function(e) { i.success && i.success(e) }) }, connectIOSHealthkit: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("connectIOSHealthkit", {}) }, disableiOSBounces: function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("disableiOSBounces", {}) }, setWebviewBgColor: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setWebviewBgColor", { color: e.color }) }, playVideo: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("playVideo", { url: e.url }) }, playEntryVideoList: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("playVideoList", e) }, setSensorPageEvent: function(e) {
                        function i() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setSensorPageEvent", { event: e.event, data: e.data }) } i(), e.notOnShow || this.onShow({ callback: i }) }, setAdReportersEvent: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setAdReportersEvent", { data: e.data }) }, jumpAdLink: function(e) { window.WebViewJavascriptBridge.callHandler("jumpAdLink", { url: e.url, data: e.data }) }, logToApp: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("logToApp", { tag: "webjsbridge_" + e.tag, message: e.message }) }, openMap: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("openMap", { lng: e.lng, lat: e.lat }) }, getLocationCity: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("getLocationCity", {}, function(e) { "string" == typeof e && (e = JSON.parse(e)), i.success && i.success(e) }) }, invokeReward: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("showPayAppreciationView", { entryId: i.entryId }, function(e) { "string" == typeof e && (e = JSON.parse(e)), i.callback && i.callback(e) }) }, previewImages: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("previewImages", { imageList: e.imageList, userName: e.userName, index: e.index }) }, getTitleBarHeight: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("getTitleBarHeight", {}, function(e) { "string" == typeof e && (e = JSON.parse(e)), i.success && i.success(e) }) }, getWxOAuthCode: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("getWxOAuthCode", {}, function(e) { "string" == typeof e && (e = JSON.parse(e)), i.success && i.success(e) }) }, joinEvent: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("joinEvent", { eventId: e.eventId }) }, setPushPermission: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("setPushPermission", {}, function(e) { "string" == typeof e && (e = JSON.parse(e)), "success" == e.result ? i.success && i.success() : "fail" == e.result && i.fail && i.fail() }) }, sendBroadcastEvent: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("sendBroadcastEvent", { name: e.name, data: e.data }) }, configWebBarRightButtons: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("configWebBarRightButtons", e) }, jumpToSearchProduct: function(n) { var a = this;
                        window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("jumpToSearchProduct", function(e, i) { a.openNewPage({ url: "keep://search/goods?name=商品&source=product", newWindow: 1 }), n.callback && n.callback(i) }) }, updateStatusBarStyle: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("updateStatusBarStyle", e) }, _onShowFunction: null, _onShowCallbackArr: [], onShow: function(e) { e.callback && s._onShowCallbackArr.push(e.callback), s._onShowFunction || (s._onShowFunction = function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("onShow", function(e, i) { for (var n = 0, a = s._onShowCallbackArr.length; n < a; n++) "function" == typeof s._onShowCallbackArr[n] && s._onShowCallbackArr[n]() }) }, s._onShowFunction()) }, onShowC: function(e) { this.onShow(e) }, _onHideFunction: null, _onHideCallbackArr: [], onHide: function(e) { e.callback && s._onHideCallbackArr.push(e.callback), s._onHideFunction || (s._onHideFunction = function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("onHide", function(e, i) { for (var n = 0, a = s._onHideCallbackArr.length; n < a; n++) "function" == typeof s._onHideCallbackArr[n] && s._onHideCallbackArr[n]() }) }, s._onHideFunction()) }, onHideC: function(e) { this.onHide(e) }, _onPullDownRefreshFunction: null, _onPullDownRefreshCallbackArr: [], onPullDownRefresh: function(e) { e.callback && s._onPullDownRefreshCallbackArr.push(e.callback), s._onPullDownRefreshFunction || (s._onPullDownRefreshFunction = function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("onPullDownRefresh", function(e, i) { for (var n = 0, a = s._onPullDownRefreshCallbackArr.length; n < a; n++) "function" == typeof s._onPullDownRefreshCallbackArr[n] && s._onPullDownRefreshCallbackArr[n]() }) }, s._onPullDownRefreshFunction()) }, onBack: function(n) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("onBack", function(e, i) { n.callback && n.callback(i) }) }, _onPageShareFunction: null, _onPageShareCallbackArr: [], onPageShare: function(e) { e.callback && s._onPageShareCallbackArr.push(e.callback), s._onPageShareFunction || (s._onPageShareFunction = function() { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("onPageShare", function(e, i) { for (var n = 0, a = s._onPageShareCallbackArr.length; n < a; n++) "function" == typeof s._onPageShareCallbackArr[n] && s._onPageShareCallbackArr[n]() }) }, s._onPageShareFunction()) }, onPaySuccess: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("onPaySuccess", function(e) { i.callback && i.callback(e) }) }, iOSIapOnPaySuccess: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("iOSIapOnPaySuccess", function(e) { i.callback && i.callback(e) }) }, openApplicationUrl: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("applicationOpenUrl", { url: e.url }) }, openWechatPaySign: function(e) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.callHandler("renewSign", { bizType: e.bizType, itemId: e.itemId, planId: e.planId, tradeFrom: e.tradeFrom }) }, onWechatPaySignResult: function(i) { window.WebViewJavascriptBridge && window.WebViewJavascriptBridge.registerHandler("onRenewSignResult", function(e) { "string" == typeof e && (e = JSON.parse(e)), i.callback && i.callback(e) }) }, version: "1.12.3" };
            i.exports = s }, {}] }, {}, [1]);
  </script>
  <script>
      KeepJsbridge.ready(function() {
          KeepJsbridge.stopLoadingAnimation();
      })
  </script>
  <script>
    var is_weixin = false;
  </script>
  <script>
      ! function c(i, a, r) {
        function u(t, e) { if (!a[t]) { if (!i[t]) { var n = "function" == typeof require && require; if (!e && n) return n(t, !0); if (l) return l(t, !0); var s = new Error("Cannot find module '" + t + "'"); throw s.code = "MODULE_NOT_FOUND", s } var o = a[t] = { exports: {} };
                i[t][0].call(o.exports, function(e) { var n = i[t][1][e]; return u(n || e) }, o, o.exports, c, i, a, r) } return a[t].exports } for (var l = "function" == typeof require && require, e = 0; e < r.length; e++) u(r[e]); return u }({ 1: [function(e, n, t) { "use strict"; var s, o = e("keep-wechatjssdk/dist/keepwechatjssdk.common.js"),
                c = (s = o) && s.__esModule ? s : { default: s };
            window.Wxcommon = c.default, c.default.init({ url: window.location.href }) }, { "keep-wechatjssdk/dist/keepwechatjssdk.common.js": 2 }], 2: [function(e, n, t) { "use strict"; var s = "undefined" != typeof window && window.navigator.userAgent.toLowerCase(),
                c = (s && s.indexOf("android"), s && /iphone|ipad|ipod|ios/.test(s), s && 0 < s.indexOf("micromessenger")),
                i = ["onMenuShareTimeline", "onMenuShareAppMessage", "onMenuShareQQ", "onMenuShareQZone", "launch3rdApp", "getInstallState"],
                o = { init: function(e) { var n = e.url,
                            t = e.jsApiList,
                            s = e.callback; if (c) { var o = "https://show.gotokeep.com/wxjssdk?url=" + encodeURIComponent(n);
                            window.wx && function(e, n) { var t = this,
                                    s = new XMLHttpRequest;
                                s.open("GET", e, !0), s.onreadystatechange = function() { 4 === s.readyState && 200 === s.status && n.call(t, s.responseText) }, s.send() }(o, function(e) { var n = JSON.parse(e);
                                window.wx.config({ debug: !1, beta: !0, appId: n.appId, timestamp: n.timestamp, nonceStr: n.nonceStr, signature: n.signature, jsApiList: t || i }), s && "function" == typeof s && s() }) } }, setShareOption: function(s) { window.wx && window.wx.ready(function() { var e = s.title || "Keep",
                                n = s.image || "https://static1.keepcdn.com/2018/05/28/20/1527510336925_192x192.jpg",
                                t = s.url || window.location.href;
                            window.wx.onMenuShareTimeline({ title: e, link: t, imgUrl: n, success: function() { s.successCallback && "function" == typeof s.successCallback && s.successCallback() } }), window.wx.onMenuShareAppMessage({ title: e, desc: s.content, link: t, imgUrl: n, success: function() { s.successCallback && "function" == typeof s.successCallback && s.successCallback() } }), window.wx.onMenuShareQQ({ title: e, desc: s.content, link: t, imgUrl: n, success: function() { s.successCallback && "function" == typeof s.successCallback && s.successCallback() } }), window.wx.onMenuShareQZone({ title: e, desc: s.content, link: t, imgUrl: n, success: function() { s.successCallback && "function" == typeof s.successCallback && s.successCallback() } }) }) }, version: "1.0.0" };
            n.exports = o }, {}] }, {}, [1]);
  </script>  

  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/jquery.carousel.js"></script>
  <script>Caroursel.init($('.caroursel'))</script>

</body>
</html>