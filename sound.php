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
<body id="soundbody">
  <div class="clearfix" id="mnbox">
    <li class="menu active"><a href="sound.php">音楽・音響</a></li>
    <div class="line"></div>
    <li class="menu"><a href="dev.php">Web</a></li>
    <div class="line"></div>
    <li class="menu"><a href="visual.php">Visual Works</a></li>

  </div>
          <div class="container">
          <div class="row">
        <div id="biocon">
          <div id="headbox1">
          <h1 class="rtl">SOUND WORKS</h1>
          <h3 class="ltr">音楽・音響関連</h3>
            </div>
            <div class="onl2 bios col-xs-12">
              <h3 class="text-center">できること</h3>
              <div class="underline"></div>

                <div class="col-xs-12 col-sm-6"><p class="text-center sc">ギター及びベースの修理・メンテナンス<br>ギター及びベースの演奏<br>ボーカルや楽器などの音源ピッチ修正<br>ボーカルや楽器などの音源タイム修正</p></div>
                <div class="col-xs-12 col-sm-6"><p class="text-center sc">PAサウンドエンジニア(環境による)<br>レコーディング・エンジニア(環境による)<br>PAシステムセットアップ<br>レコーディングスタジオセットアップ</br></div></p>
              <div class="clearfix">
                <h3 class="text-center">利用可能ツール</h3>
              <div class="underline"></div>
              <div id="swbox" class="clearfix">
            <div class="swhalf">
            <div class="sws effect-fade"><img class="swi" src="img/logic.png">
                <div class="swscpt"><h4>Apple Logic Pro ★★★★★</h4>
              <p>
            作曲・録音・ミックス・マスター・映像後編集可能<br>
          メインツール、自由度・速度かなり高め</div>
          </div>
          <div class="sws effect-fade"><img class="swi" src="img/tools.png">
              <div class="swscpt"><h4>Avid Protools ★★★☆☆</h4>
            <p>
          録音・映像後編集可能<br>
          作業速度少し遅め
        </p></div>
        </div>
      </div>
      <div class="swhalf">
      <div class="sws effect-fade"><img class="swi" src="img/cubase.png">
          <div class="swscpt"><h4>Steinberg Cubase ★★★★☆</h4>
        <p>
      作曲・録音・ミックス可能<br>作業速度普通</p></div>
    </div>
    <div class="sws effect-fade"><img class="swi" src="img/waves.png">
        <div class="swscpt"><h4>Waves Plugins ★★★★☆</h4>
      <p>
    Waves Plugin 主に使用<br>作業速度速め</p></div>
  </div>
  </div>
</div>
</div><div class="effect-fade">
          <h3 class="text-center">作業曲試聴</h3>
          <p class="text-center sc">比較的に納品時期が早い主な作品になります。</p>
          <div class="underline"></div>
        </div>
          <div>
              <div class="halfcol col-xs-6">
                <div class="effect-fade dsc clearfix">
                <div class="jcblock">
              <div id="jquery_jplayer_1" class="jp-jplayer"></div>
              <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
              	<div class="jp-type-single">
              		<div class="jp-gui jp-interface">
              			<div class="jp-controls">
              				<button class="jp-play" role="button" tabindex="0">play</button>
              			</div>
              		</div>
              		<div class="jp-no-solution">
              			<span>アップデートが必要です。</span>
              			メデイアを再生するためにはお使いのブラウザとAdobe Flash Playerを最新状態に保つ必要があります。
              		</div>
              	</div>
              </div>
            </div>
            <div class="captionblock">
              <small>プロデュース (ガールズアイドル・ポップバラード)</small>
              <h4>BYME - To be ...</h4>
              <p>編曲・演奏・ミックス</p>
            </div>
          </div>
          <div class="underlineh effect-fade"></div>
          <div class="effect-fade dsc clearfix">
          <div class="jcblock">
              <div id="jquery_jplayer_2" class="jp-jplayer"></div>
              <div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
              	<div class="jp-type-single">
              		<div class="jp-gui jp-interface">
              			<div class="jp-controls">
              				<button class="jp-play" role="button" tabindex="0">play</button>
              			</div>
              		<div class="jp-no-solution">
                    <span>アップデートが必要です。</span>
              			メデイアを再生するためにはお使いのブラウザとAdobe Flash Playerを最新状態に保つ必要があります。
              		</div>
              	</div>
              </div>
            </div>
          </div>
          <div class="captionblock">
            <small>プロデュース (ガールズアイドル・ポップ・K-POP系)</small>
            <h4>BYME - BBB</h4>
            <p>作曲参加・編曲・演奏</p>
          </div>
        </div>
        <div class="underlineh effect-fade"></div>
        <div class="effect-fade dsc clearfix">
        <div class="jcblock">
              <div id="jquery_jplayer_3" class="jp-jplayer"></div>
              <div id="jp_container_3" class="jp-audio" role="application" aria-label="media player">
              	<div class="jp-type-single">
              		<div class="jp-gui jp-interface">
              			<div class="jp-controls">
              				<button class="jp-play" role="button" tabindex="0">play</button>
              			</div>
              		<div class="jp-no-solution">
                    <span>アップデートが必要です。</span>
              			メデイアを再生するためにはお使いのブラウザとAdobe Flash Playerを最新状態に保つ必要があります。
              		</div>
              	</div>
              </div>
              </div>
            </div>
            <div class="captionblock">
              <small>業務委託　(メンズ・ポップ系)</small>
              <h4>ORANGE JUICE BABY - City Boy</h4>
              <p>ミックス・マスタリング</p>
            </div>
          </div>
          <div class="underlineh effect-fade"></div>
          <div class="effect-fade dsc clearfix">
          <div class="jcblock">
              <div id="jquery_jplayer_4" class="jp-jplayer"></div>
              <div id="jp_container_4" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-single">
                  <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                      <button class="jp-play" role="button" tabindex="0">play</button>
                    </div>
                  <div class="jp-no-solution">
                    <span>アップデートが必要です。</span>
                    メデイアを再生するためにはお使いのブラウザとAdobe Flash Playerを最新状態に保つ必要があります。
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="captionblock">
              <small>業務委託　(メンズ・ポップ系)</small>
              <h4>ORANGE JUICE BABY - 何もしたくない</h4>
              <p>ミックス・マスタリング</p>
            </div>
          </div>
          <div class="underlineh effect-fade"></div>
            </div>
            <div class="halfcol col-xs-6">
              <div class="effect-fade dsc clearfix">
              <div class="jcblock">
              <div id="jquery_jplayer_5" class="jp-jplayer"></div>
              <div id="jp_container_5" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-single">
                  <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                      <button class="jp-play" role="button" tabindex="0">play</button>
                    </div>
                  </div>
                  <div class="jp-no-solution">
                    <span>アップデートが必要です。</span>
                    メデイアを再生するためにはお使いのブラウザとAdobe Flash Playerを最新状態に保つ必要があります。
                  </div>
                </div>
              </div>
            </div>
            <div class="captionblock">
              <small>業務委託 (ガールアイドル・ポップ)</small>
              <h4>シューレース - ヲータヲータ</h4>
              <p>単独作詞・単独作曲・ミックス</p>
            </div>
          </div>
          <div class="underlineh effect-fade"></div>
          <div class="effect-fade dsc clearfix">
          <div class="jcblock">
              <div id="jquery_jplayer_6" class="jp-jplayer"></div>
              <div id="jp_container_6" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-single">
                  <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                      <button class="jp-play" role="button" tabindex="0">play</button>
                    </div>
                  </div>
                  <div class="jp-no-solution">
                    <span>アップデートが必要です。</span>
                    メデイアを再生するためにはお使いのブラウザとAdobe Flash Playerを最新状態に保つ必要があります。
                  </div>
                </div>
              </div>
            </div>
            <div class="captionblock">
              <small>プロデュース (ガールアイドル・テーマソング)</small>
              <h4>BYME - Halloween Night Party</h4>
              <p>単独作曲・ミックス</p>
            </div>
          </div>
          <div class="underlineh effect-fade"></div>
          <div class="effect-fade dsc clearfix">
          <div class="jcblock">
              <div id="jquery_jplayer_7" class="jp-jplayer"></div>
              <div id="jp_container_7" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-single">
                  <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                      <button class="jp-play" role="button" tabindex="0">play</button>
                    </div>
                  </div>
                  <div class="jp-no-solution">
                    <span>アップデートが必要です。</span>
                    メデイアを再生するためにはお使いのブラウザとAdobe Flash Playerを最新状態に保つ必要があります。
                  </div>
                </div>
              </div>
              </div>
              <div class="captionblock">
                <small>共同作業 (バンド・ロック)</small>
                <h4>Foxee - Juliet</h4>
                <p>編曲・ミックス</p>
              </div>
            </div>
            <div class="underlineh effect-fade"></div>
            <div class="effect-fade dsc clearfix">
            <div class="jcblock">
              <div id="jquery_jplayer_8" class="jp-jplayer"></div>
              <div id="jp_container_8" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-single">
                  <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                      <button class="jp-play" role="button" tabindex="0">play</button>
                    </div>
                  </div>
                  <div class="jp-no-solution">
                    <span>アップデートが必要です。</span>
                    メデイアを再生するためにはお使いのブラウザとAdobe Flash Playerを最新状態に保つ必要があります。
                  </div>
                </div>
              </div>
              </div>
              <div class="captionblock">
                <small>共同作業 (バンド・サイケデリック・ロック)</small>
                <h4>Foxee - 茨道</h4>
                <p>作曲参加・編曲・ミックス</p>
              </div>
            </div>
</div>
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
