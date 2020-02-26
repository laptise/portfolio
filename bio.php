<?php
session_start();
$cf = 'checked';
if(strcmp($_SESSION['check'],$cf)==0){
}else{
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<head>
  <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
  <script type="text/javascript">
  $(function(){
    $(window).scroll(function (){
      $('.effect-fade').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight){
          $(this).addClass('effect-scroll');
        }
      });
    });
  });</script>

  <script>
  (function(d) {
    var config = {
      kitId: 'izw8tow',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
  </script>  <title>金 潤洙 Portfolio</title>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel ="stylesheet" href="css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="robots" content="noindex, nofollow" />
  <link rel="stylesheet" href="style.css">
</head>
<body id="mainbody">
  <div class="clearfix" id="mnbox">
    <li class="menu"><a href="sound.php">Sound Works</a></li>
    <div class="line"></div>
    <li class="menu"><a href="dev.php">Web</a></li>
    <div class="line"></div>
    <li class="menu"><a href="visual.php">Visual Works</a></li>
    <div class="line"></div>
    <li class="menu active"><a href="bio.php">略歴</a></li>
  </div>
    <div class="container">
    <div class="row">
      <div id="biocon">
        <div id="headbox1">
          <h1 class="v79 rtl">BIOGRAPHY</h1>
          <h3 class="ltr">クリエイティブなことが好きで、
            新しいことを学習し、成長を楽しみます。</h3>
          </div>
          <div class="onl2 bios col-md-12 col-md-offset-0 col-xs-12 ">
            <h2>略歴</h2>
            <div class="underline"></div>
            <li>韓国釜山(プサン)出身で、14歳に来日</li>
            <li>2006年来日後、ギターを始める</li>
            <li>2010年頃から作曲を始める</li>
            <li>2012年韓国へ帰国</li>
            <li>2013年音響学を勉強する</li>
            <li>2013年6月からインディーズバンド活動を開始</li>
            <li>2014年初のデビューシングル発売</li>
            <li>2015年初のフルアルバムを発表後、バンド活動終了</li>
            <li>2016年再来日、専修大学へ入学</li>
            <li>2017年末、日本でバンド活動開始</li>
            <li>独学でホームページを制作し、公開</li>
            <li>2018年3月、アルバムリリース、初めてデザイン作業を手掛ける(CD・ジャケット・ブックレット)</li>
            <li>2018年9月頃、新大久保コスメショップのPOP、ポスター等デザイン業務委託を受ける</li>
            <li>2019年2月、セカンド・アルバムリリース(盤面・ジャケット・ブックレット)自作</li>
            <li>2019年4月、音楽プロダクション事業を準備しながら広告代理店勤務</li>
            <li>2019年9月、専属契約成約、音楽ビジネス開始</li>
            <li>2020年1月、離職・現在求職中</li>

          </div>
          <div id="ft" class=" onl2 col-md-12 col-xs-12">
            <div class="ftc">
              <!--
              <strong>Yoonsoo Kim</strong>
              <p class="thin"> / Mail :
                <a href="mailto:laptise@live.jp">laptise@live.jp</a> / Tel : 090-4385-9628</p>
                !-->
                <p class="thin2"><a href="out.php">最終更新日 : 2020年1月24日</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </body>
