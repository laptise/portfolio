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
<!-- Foundation Framework CSS -->
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
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel ="stylesheet" href="css/bootstrap.min.css">
<link href="dist/skin/blue.monday/css/2jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="dist/add-on/jplayer.playlist.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="robots" content="noindex, nofollow" />
<link rel="stylesheet" href="style.css">
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

  $("#jquery_jplayer_1").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Juliet",
        mp3: "mp3/tobe.mp3"
      });
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp3",
    cssSelectorAncestor: "#jp_container_1",
    wmode: "window",
    globalVolume: true,
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });

  $("#jquery_jplayer_2").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "bbb",
        mp3: "mp3/bbb.mp3"
      });
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp3",
    cssSelectorAncestor: "#jp_container_2",
    wmode: "window",
    globalVolume: true,
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });

  $("#jquery_jplayer_3").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Hidden",
        mp3: "mp3/ctb.mp3"
      });
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp3",
    cssSelectorAncestor: "#jp_container_3",
    wmode: "window",
    globalVolume: true,
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });

  $("#jquery_jplayer_4").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Bubble",
        mp3: "mp3/nani.mp3"
      });
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp3",
    cssSelectorAncestor: "#jp_container_4",
    wmode: "window",
    globalVolume: true,
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });

  $("#jquery_jplayer_5").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Bubble",
        mp3: "mp3/ota.mp3"
      });
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp3",
    cssSelectorAncestor: "#jp_container_5",
    wmode: "window",
    globalVolume: true,
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });
  $("#jquery_jplayer_6").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Bubble",
        mp3: "mp3/hnp.mp3"
      });
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp3",
    cssSelectorAncestor: "#jp_container_6",
    wmode: "window",
    globalVolume: true,
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });
  $("#jquery_jplayer_7").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Bubble",
        mp3: "mp3/juliet.mp3"
      });
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp3",
    cssSelectorAncestor: "#jp_container_7",
    wmode: "window",
    globalVolume: true,
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });
  $("#jquery_jplayer_8").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Bubble",
        mp3: "mp3/wall.mp3"
      });
    },
    swfPath: "../../dist/jplayer",
    supplied: "mp3",
    cssSelectorAncestor: "#jp_container_8",
    wmode: "window",
    globalVolume: true,
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
  });
});


//]]>
</script>
</head>
<body id="devbody">
  <div class="clearfix" id="mnbox">
    <li class="menu"><a href="sound.php">Sound Works</a></li>
    <div class="line"></div>
    <li class="menu active"><a href="dev.php">ウェブ開発</a></li>
    <div class="line"></div>
    <li class="menu"><a href="visual.php">Visual Works</a></li>
  </div>
  <div class="container">
    <div class="row">
      <div id="biocon">
        <div id="headbox1">
          <h1 class="rtl">WEB DEV</h1>
          <h3 class="ltr">ウェブ開発</h3>
        </div>
        <div class="onl2 bios col-xs-12">
          <div class="text-center lighter devcap">
            ※このサイトはレスポンシブデザインに対応しています。<br>「HTML」「CSS」「Javascript」「jQuery」を使いコーディングしました。<br>
            Sound Worksページでは、オープンソース「jPlayer」を音源を再生しており、<br>
            用途(デザイン)に合わせコードを修正し、インターフェースに「Font-Awesome」のアイコンを入れています。<br>
            初期接続のパスワード入力にはPHPを利用しています。<br>
            また、「bootstrap」フレームワークを利用しています。</div>
            <div class="underline"></div>
            <div class="langs clearfix">
              <h4>HTML</h4><div class="prg-html prg"></div>
            </div>
            <div class="langcap"><strong>75%</strong> <span>理解及び作成可能<br>オープンソースの利用及び修正可能</span></div>
            <div class="langs clearfix">
              <h4>CSS</h4><div class="prg-css prg"></div></div>
              <div class="langcap"><strong>70%</strong> <span>理解及び作成可能<br>オープンソースの利用及び修正可能</span></div>
              <div class="langs clearfix">
                <h4>PHP</h4><div class="prg prg-php"></div></div>
                <div class="langcap"><strong>65%</strong> <span>理解及び作成・MySqlデータベース運用<br>オープンソースの利用及び修正可能</span></div>
                <div class="langs clearfix">
                  <h4>Javascript</h4><div class="prg prg-js"></div></div>
                  <div class="langcap"><strong>55%</strong> <span>多少時間がかかるが、理解及び作成可能<br>オープンソースの利用及び修正可能</span></div>
                  <div class="langs clearfix">
                    <h4>jQuery</h4><div class="prg prg-jq"></div></div>
                    <div class="langcap"><strong>50%</strong> <span>オープンソースの利用と修正可能</span></div>

                    <div class="langs clearfix">
                      <h4>Sql</h4><div class="prg prg-sql"></div></div>
                      <div class="langcap"><strong>40%</strong> <span>クエリ文発行可能</span></div>

                      <div class="underline"></div>
                      <h3 class="text-center">現在学習中</h3>
                      <div class="langs clearfix">
                        <h4>AWS</h4><div class="prg prg-aws"></div></div>
                        <div class="langcap"><strong>20%</strong> <span>EC2上にLinux・Apache・PHP・Node.js・MySQLを構築及び公開が可能<br>
                          ドメイン取得・割当が可能</span></div>
                          <div class="langs clearfix">
                            <h4>Laravel</h4><div class="prg prg-lrv"></div></div>
                            <div class="langcap"><strong>30%</strong> <span>導入・初期設定・データベースの接続及び操作・テンプレートの構成・ルーティングが可能<br>PHPに慣れていたのでPHPと混用すればLaravel上で完結させることはできます。</span></div>
                            <div class="langs clearfix">
                              <h4>Node.js</h4><div class="prg prg-node"></div></div>
                              <div class="langcap"><strong>15%</strong> <span>導入・初期設定・テンプレート・データベースの接続及び操作の構成が可能(自由度は低い)</span></div>


                              <div class="clearfix">
                                <div class="effect-fade">
                                  <h3 class="text-center">過去作品</h3>
                                  <p class="text-center sc">タイトルをクリックするとページへ移動します。</p>
                                </div>
                                <div class="sites first effect-fade col-xs-12">
                                  ミュージシャンホームページ (未公開・未完成・公開予定)
                                  <div class="underline"></div>
                                  <img src="img/bmn.jpg">
                                  <img src="img/bmn1.jpg">
                                  <div class="col-xs-12  lighter">現在制作しているものです。
                                    すべて自らコーディングしています。制作2日目で、メインページのレイアウトのみが確定しています。<br>イントロアニメーション、ボタンのhoverアニメーションなど華やかなデザインになります。
                                    公開予定があるのでリンクが添付できていませんが、面接の際に直接お見せします。<br>
                                    今後の計画としては、<br>
                                    １．PHPとデータベースを実装させ、管理者がグッズやお知らせ、イベント内容を追加できるようにすること<br>
                                    ２．下記の開発したシステムをレイアウトを合わせ設置し、システムで登録したイベントをこのサイトのメインページに露出させること<br>
                                    を計画しております。<br>
                                    2020年1月制作中 - 作業時間約10-12時間程度</div></div>
                                    <div class="sites effect-fade col-xs-12">
                                      <a href="http://foxeetheone.jp" target="_blank">ミュージシャンホームページ (http://foxeetheone.jp)</a>
                                      <div class="underline"></div>
                                      <a href="http://foxeetheone.jp" target="_blank"><img src="img/fx-full.jpg"></a>
                                      <a href="http://foxeetheone.jp/lastmoon.php" target="_blank"><img src="img/fx-full2.jpg"></a>
                                      <div class="col-xs-12  lighter">初めて作った、自身の活動しているバンドのホームページです。<br>
                                        Wordpressを試したが、入れたい機能を入れることが難しく、自由度が低く、HTMLテンプレートを購入し修正しています。
                                        しばらく使ってからPHPで予約機能を追加しました。<br>
                                        2017年10月制作</div></div>

                                        <div class="sites effect-fade col-xs-12">
                                          <a href="http://rhymehearts.com" target="_blank">作曲チームのウェブページ (http://rhymehearts.com)</a>
                                          <div class="underline"></div>
                                          <img src="img/rh-full.jpg">
                                          <img src="img/rhrs.png">
                                          <div class="col-xs-12 lighter">前職の会社で運営しているプロデューサチームのページです。<br>
                                            htmlのみの軽く、簡単なウェブページです。<br>2018年11月制作</div></div>
                                            <h3 class="text-center">WEBシステム開発</h3>
                                            <div class="sites effect-fade col-xs-12">
                                              <a href="http://byme-official.com/adv" target="_blank">アーティスト予約&amp;物販 (http://byme-official.com/adv)</a>
                                              <div class="underline"></div>
                                              <div class="adv">
                                                <div class="prv"><img src="img/adv-admin.png"><p class="text-center">管理者初期ページ</p></div>
                                                <div class="prv"><img src="img/adv-view.png"><p class="text-center">予約状況確認</p></div>
                                                <div class="prv"><img src="img/adv-sell.png"><p class="text-center">物販販売システム</p></div>
                                                <div class="prv"><img src="img/adv-sales.png"><p class="text-center">売上確認 (非同期通信)</p></div>
                                              </div>
                                              <div class="col-xs-12 lighter">前職の会社で使うために作ったシステムです。<br>
                                                本番環境では無線のバーコードリーダをスマートフォンに接続し、ラベルシールを付着させて使います。
                                                デザイン要素はなく、bootstrapで完成させてます。仕事をしながら必要だと感じたため、機能を実装することを中心に開発しました。<br>
                                                機能確認にはログインが必要となるため、このサイトについて以下に説明させて頂きます。<br>2019年12月制作</div></div>
                                              </div>
                                              <div class="sites effect-fade col-xs-12">
                                                <h4>予約機能</h4>
                                                <div class="underline"></div>
                                                <div class="col-xs-12 speci lighter">
                                                  顧客は会員登録をして、ウェブシステムより予約が可能。<br>
                                                  予約をするとダッシュボードに、予約したイベントの一覧が表示され、重複予約を防ぎます。<br>
                                                  スタッフがイベントを追加すると、顧客は予約が可能になります。外部購買ページがある場合、予約せずリンクへ移動させます。<br>
                                                  スタッフ以上のランクの会員は、いつでもどこでも予約者数と名望を確認できます。
                                                </div>
                                              </div>
                                              <div class="sites effect-fade col-xs-12">
                                                <h4>販売機能</h4>
                                                <div class="underline"></div>
                                                <div class="col-xs-12 speci lighter">
                                                  ワイヤレスバーコードリーダーを使い、グッズ販売をします。<br>
                                                  データベース上に商品のバーコードを与え、ラベルシールで印刷付着させて物販をすすめます。<br>
                                                  キーボード式の通信方式なのでスタッフが持つスマホにバーコードリーダーを接続し、当システムにログインします。<br>
                                                  バーコードをスキャンすると商品名と価格が表示され、販売が計上されます。<br>
                                                  スタッフは自分の販売量と売上が確認できます。終了後には販売を登録するイベントを選択し、送信するとデータベースへ保存されます。
                                                </div>
                                              </div>
                                              <div class="sites effect-fade col-xs-12">
                                                <h4>売上確認</h4>
                                                <div class="underline"></div>
                                                <div class="col-xs-12 speci lighter">
                                                  管理者以上のランクの会員は、イベントの総売上と販売内訳を確認できます。
                                                </div>
                                              </div>
                                              <div class="sites effect-fade col-xs-12">
                                                <h4>成果</h4>
                                                <div class="underline"></div>
                                                <div class="col-xs-12 speci  lighter">
                                                  ミスやデータ紛失等の事故防止<br>
                                                  簡単になった販売方式によりスタッフ教育の時間がほぼなくなる<br>
                                                  限られた物販時間を余裕を持って使うことが可能になる<br>
                                                </div>
                                              </div>
                                            </div>
                                            <div id="ft" class="onl2 col-xs-12">
                                              <div class="ftc">
                                                <!--
                                                <strong>Yoonsoo Kim</strong>
                                                <p class="thin"> / Mail :
                                                <a href="laptise@live.jp">laptise@live.jp</a> / Tel : 090-4385-9628</p>!-->
                                                <p class="thin2"><a href="out.php">最終更新日 : 2020年2月24日</a></p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </body>
