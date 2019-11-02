<html lang="zh-Hans" style="font-size: 10px;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>    
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
    <link rel="icon" type="image/png" href="./resources/192.png" sizes="32x32">
    <title>全球首款派对社交app</title>
    <style type="text/css">
    body{
        background: #000;
    }
    </style>
    <!--屏蔽PC端
    <script type="text/javascript">
        var system = {};
        var p = navigator.platform;
        var u = navigator.userAgent;
        
        system.win = p.indexOf("Win") == 0;
        system.mac = p.indexOf("Mac") == 0;
        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
        if (system.win || system.mac || system.xll) {//如果是PC转
            //alert('PC');
            if (u.indexOf('Windows Phone') > -1) {  //win手机端
                //alert('Windows Phone')
        
            }else {
            window.location.href = "error.html";
            }
        }
    </script>
    -->

</head>
<body>

<script>
    (function() {
          var height = window.innerHeight,
              width = document.body.clientWidth;
          if (typeof height != 'number') {
              height = document.body.clientHeight;
            }
            video_h_o = 1280;
            video_w_o = 720;
            video_h_n = video_h_o * width / video_w_o;
            document.write('<style>.phone-head-wrap{height:'+video_h_n+'px;}</style>');
      })();
</script>

  <style>
      .video-bg {
        width: 100%;
        height: 100%;
      }
    .mask{
        position: absolute;
        width: 100%;
        /*不要设置初始高度，否则mask中内容刷新会抖动*/
        left: 0;
        top: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgba(34, 34, 34, 0.8);
    }
    .apptitle{
        position: absolute;
        top:20;
        width: 70%;
    }
    .header_bottom{
        position: absolute;
        bottom:100;
        text-align: center;
        display: flex;
    }
    .showcase{
        width: 100%;
        margin-bottom: 20;
    }
    </style>
    <header class="phone-head-wrap" id="phone-head-wrap" >
        <!--
        <video class="video-bg" src="./resources/header264.mp4" preload="auto" muted autoplay playsinline loop x-webkit-airplay='true' x5-video-player-type='h5' type="video/mp4"></video>
        -->
        <img class="video-bg" src="./resources/xdm_bg.jpg">
        <div class="mask" id="mask" >     
            <img class="apptitle" src="./resources/Wemeet.png">
            <div class="header_bottom">
                    <a href="http://oss.dodomeet.com/app/release/wemeet_latest.apk">
                        <div style="font-size:30px; color:#fff;">全球首款派对社交app<br><br></div>
                        <img style="height: 30px; " src="./resources/androiddownload-7af2fefe76.png">
                    </a>
            </div>
        </div>
    </header>
    <div style="text-align: center; color: #fff; ">
        <br>
        <p style="font-size: 18px; font-weight: bold;">测算交友，微密懂你</p><br>
        <div style="text-align:justify; text-justify:inter-ideograph; width: 220px;margin: auto;">
        <p>采用人工智能算法，通过人脸，心理学帮你寻找最合适的人。</p><br>
        </div>
        <div>
            <img class="showcase" src="./resources/pic1.jpg">
            <img class="showcase"  src="./resources/pic2.jpg">
            <img class="showcase"  src="./resources/pic3.jpg">
            <img class="showcase"  src="./resources/pic4.jpg">
        </div>
    </div>

    <div style="text-align: center; color: #fff; ">
        <br>
        <p style="font-size: 18px; font-weight: bold;">在微密社区遇见有趣的灵魂</p><br>
        <div style="text-align:justify; text-justify:inter-ideograph; width: 220px;margin: auto;">
        <p>采用最先进算法和人工智能精挑细选，确保你收到的每一条分享都是那么的有趣</p><br>
        </div>
        <div>
            <img class="video-bg" src="./resources/xdm_bg1.jpg">
            <!--
            <video class="video-bg" src="./resources/demo.mp4" preload="auto" muted autoplay playsinline loop x-webkit-airplay='true' x5-video-player-type='h5' type="video/mp4"></video>
            -->
        </div>
    </div>
    <div style="background: #3d3745;padding-top:50px; padding-bottom: 20px;">
        <a href="http://oss.dodomeet.com/app/release/wemeet_latest.apk">
            <img src="./resources/lastpage.png" style="width: 100%; display: flex;" >
        </a>
        <div  style="text-align: center;">
            <p style="color: #b7b7b7; margin-bottom: 0">北京小豆苗科技有限公司</p>
        </div>
    </div>

    <div style="background: #3d3745;padding-top:5px; padding-bottom: 20px;">
        <div  style="text-align: center;">
            <a href="https://www.dodomeet.com/?page_id=1769" style="padding-right: 50px;">用户协议</a>
            <a href="https://www.dodomeet.com/?page_id=7">隐私政策</a>
        </div>
        <div  style="text-align: center;">
        <a target="_blank" href="#" style="display:inline-block;text-decoration:none;"><img src="./resources/government-d0289dc0a4.png" style="position:relative;top:0px;"><span style="margin: 0px 0px 0px 5px; color:#939393;">京ICP备18057848号</span></a>
        </div>
    </div>

</body>
<script type="text/javascript">
    (function() {
        var h = document.getElementById('phone-head-wrap').clientHeight;
        o = document.getElementById('mask');
        o.style.height = h+'px';
    })();
</script>
</html>