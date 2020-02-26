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
      kitId: 'ole0jxa',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <title>金 潤洙 Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="robots" content="noindex, nofollow" />
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel ="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body id="visualbody">
  <div class="clearfix" id="mnbox">
    <li class="menu"><a href="sound.php">Sound Works</a></li>
    <div class="line"></div>
    <li class="menu"><a href="dev.php">Web</a></li>
    <div class="line"></div>
    <li class="menu active"><a href="visual.php">視覚デザイン</a></li>

  </div>
          <div class="container">
          <div class="row">
        <div id="biocon">
          <div  id="headbox1">
          <h1 class="rtl">VISUAL WORKS</h1>
          <h3 class="ltr">画像/映像等の視覚媒体</h3>
            </div>
            <div class="onl2 bios col-xs-12">
              <div class="clearfix">
                <div class="underline">
            <h3>利用可能ツール</h3>
          </div>
                <div id="swbox">
              <div class="swhalf">
              <div class="sws effect-fade"><img class="swico" src="img/ps.svg">
                  <div class="swscpt"><h4>Adobe Photoshop ★★★★☆</h4>
                <p>
              編集・制作・合成、ほとんど全ての作業早め<br>
            広告代理店勤務時に主に使用</p></div>
            </div>
            <div class="sws effect-fade"><img class="swico" src="img/ai.svg">
                <div class="swscpt"><h4>Adobe Illustrator ★★★★☆</h4>
              <p>
            編集・制作・合成、ほとんど全ての作業早め<br>
            グッズ制作に多様
          </p></div>
          </div>
        </div>
        <div class="swhalf">
        <div class="sws effect-fade"><img class="swico" src="img/pp.svg">
            <div class="swscpt"><h4>Adobe Premiere Pro ★★★☆☆</h4>
          <p>
        カット編集・字幕制作<br>作業速度は若干遅め</p></div>
      </div>
      <div class="sws effect-fade"><img class="swico" src="img/ae.svg">
          <div class="swscpt"><h4>Adobe Aftereffects ★★☆☆☆</h4>
        <p>
      アニメーション制作・トランジション製作<br>作業速度は遅め</p></div>
    </div>
  </div>
            </div>
          </div>
        <div class="effect-fade underline"></div>
    <h3 class="effect-fade">画像ポートフォリオ</h3>

<div class="pfs">
  <div class="effect-fade">
  <img class="im900" src="img/p2.jpg">
  翻訳・レイアウト再構成・合成</div>
  <div class="effect-fade">
  <img class="im900" src="img/p3.jpg">
  デザイン・合成・キャッチコピー</div>
  <div class="effect-fade">
  <img class="im900" src="img/p4.jpg">
  デザイン・合成・キャッチコピー</div>
  <div class="effect-fade">
  <img class="im900" src="img/p5.jpg">
  デザイン・合成・キャッチコピー</div>
  <div class="effect-fade">
  <img class="im900" src="img/p6.jpg">
  翻訳・レイアウト再構成・合成・部分デザイン</div>
  <div class="effect-fade">
  <img class="im900" src="img/p13.jpg">
  翻訳・レイアウト再構成・合成</div>
  <div class="effect-fade">
  <img class="im900" src="img/p14.jpg">
  翻訳・レイアウト再構成・合成</div>
  <div class="effect-fade">
  <div class="clearfix box1">
  <img class="im300" src="img/p7.jpg">
  <img class="im300" src="img/p8.jpg">
  <img class="im300" src="img/p9.jpg">
</div>
翻訳・レイアウト再構成・合成</div>
<div class="effect-fade">
<div class="clearfix box1">
  <img class="im450"src="img/p10.jpg">
  <img class="im450"src="img/p11.jpg">
</div>
フライヤーデザイン
</div>
<div class="effect-fade">
  <img class="im900"src="img/p12.jpg">
  フライヤーデザイン</div>
  <div class="effect-fade">
<img class="im900" src="img/p17.jpg">
フライヤー画像・グッズともにデザイン</div>
<div class="effect-fade">
<img class="im900" src="img/p18.jpg">
盤面デザイン</div>
<div class="effect-fade">
<img class="im900" src="img/p19.jpg">
CDジャケットデザイン</div>
</div>
<div class="effect-fade">
<div class="underline"></div>
<div class="pflinks">
  <h2>静止画・印刷物・グッズのPDF版ポートフォリオをダウンロードする</h2>
<p><a href="portfolio.pdf" download="portfolio.pdf">印刷用PDFファイルをダウンロード(22.9MB)</a></p>
<p><a href="portfolio_low.pdf" download="portfolio_low.pdf">プレビュー用PDFファイルをダウンロード(758KB)</a></p>
</div>
<div class="underline"></div>
</div>
<div class="effect-fade">
<h3>映像ポートフォリオ</h3></div>
<div class="pfs">
  <div class="effect-fade">
<iframe class="youtube" width="900" height="514" src="https://www.youtube.com/embed/nNS6nfdCdUM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
Premiere Pro / 編集全体</div>
<div class="effect-fade">
<iframe class="youtube"  width="900" height="514" src="https://www.youtube.com/embed/2v28SUO0hlE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
Premiere Pro / 編集・字幕全体</div>
<div class="effect-fade">
<iframe class="youtube"  width="900" height="514" src="https://www.youtube.com/embed/4_V27_aZE-o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
Aftereffects(一部) / イントロ・アウトロ・アニメーション(パペット)</div>
</div>

              </div>
              <div id="ft" class="onl2 col-xs-12">
                <div class="ftc">
                  <!--
                <strong>Yoonsoo Kim</strong>
                <p class="thin"> / Mail :
                <a href="laptise@live.jp">laptise@live.jp</a> / Tel : 090-4385-9628</p>
                !-->
                <p class="thin2"><a href="out.php">最終更新日 : 2020年1月24日</a></p>
              </div>
              </div>
              </div>
              </div>
              </div>
</body>
