<?php
session_start();
if(!empty($_SESSION)) {
	include_once 'dbconnect.php';

	if( isset($_SESSION['user']) != "") {
// ユーザーIDからユーザー名を取り出す
$query = "SELECT * FROM users WHERE user_id=".$_SESSION['user']."";
$result = $mysqli->query($query);
if (!$result) {
	print('クエリーが失敗しました。' . $mysqli->error);
	$mysqli->close();
	exit();
}

// ユーザー情報の取り出し
while ($row = $result->fetch_assoc()) {
	$username = $row['username'];
	$email = $row['email'];
	$upt = $row['upt'];
	$ulevel = $row['ulevel'];
}

// データベースの切断
$result->close();
}
}
?>
<!DOCTYPE html>
<html lang="en-US">


    <!-- head
    ============================================================================ -->
    <head>


        <!-- Basic Info
        ======================================================================== -->
        <title>Foxee Official | ニュース一覧</title>

        <meta name="author" content="JUN/FOXEE">
        <meta name="robots" content="index follow">
        <meta name="googlebot" content="index follow">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="keywords" content="Foxee, フォクシー, Official, ニュース, News">
        <meta name="description" content="Foxee ニュース一覧ページ">

        <!-- Mobile Configurations
        ======================================================================== -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- fav and icons for Mobile
        ======================================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

        <!-- Google Fonts
        ======================================================================== -->

        <!--  CSS Files
        ======================================================================== -->
        <link rel="stylesheet" href="js/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!--  Head JS Libs
        ======================================================================== -->
        <script src="js/vendor/modernizr-custom.js"></script>


    </head><!-- /End head -->


    <!-- body
    ============================================================================ -->
    <body>


        <!-- To top Button
        ======================================================================== -->
        <a href="#" class="btn-gfort-top"><i class="fa fa-angle-up"></i></a>


        <!-- Main Wrapper
        ======================================================================== -->
        <div id="main-wrapper">


            <!-- Header Section
            ==================================================================== -->
            <header class="header-section fixed-header">
                <!-- Header Section Container -->
                <div class="header-section-container">


                    <!-- Header Menu -->
                    <div class="header-menu">
                        <!-- Header Menu Container -->
                        <div class="header-menu-container">


                            <!-- Navbar -->
                            <nav class="navbar">
                                <!-- container -->
                                <div class="container">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col-md-12 -->
                                        <div class="col-md-12">


                                            <!-- Navbar Header / Logo -->
                                            <div class="navbar-header">
                                                <a href="index.php" class="navbar-brand" title="foxee">
                                                    <img src="images/index/music/logo-light.png" alt="Foxee Logo" class="transparent-header-logo" />
                                                    <img src="images/index/music/logo.png" alt="Foxee Logo" />
                                                </a>
                                            </div><!-- /End Navbar Header / Logo -->


                                            <!-- Header Buttons -->
                                            <ul class="header-btns">




                                                <!-- Header Language Button -->
                                                <li class="header-lang-btn">
                                                    <a href="#" title="Japanese">JP</a>
                                                    <!-- Header Language Menu -->
                                                    <nav class="header-language-menu">
                                                        <ul>
  <!--
                                                            <li>
                                                                <a href="#" title="French">
                                                                    <img src="images/header/header-lang-flags/fr.jpg" alt="French">Fr
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" title="Deutsch">
                                                                    <img src="images/header/header-lang-flags/ge.jpg" alt="Deutsch">De
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" title="Italian">
                                                                    <img src="images/header/header-lang-flags/it.jpg" alt="Italian">It
                                                                </a>
                                                            </li>
  -->
                                                        </ul>
                                                    </nav><!-- /End Header Language Menu -->
                                                </li><!-- /End Header Language Button -->



                                            </ul><!-- /End Header Buttons -->


                                            <!-- Toggle Menu Button -->
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                                <span class="menu-wd">Menu</span>
                                                <span class="lines-wrapper"><i class="lines"></i></span>
                                            </button><!-- /End Toggle Menu Button -->


                                            <!-- Navbar Collapse (Menu) -->
                                            <div class="navbar-collapse collapse">
                                                <ul class="nav navbar-nav">


                                                    <li>
                                                        <a href="index.php">HOME</a>
                                                    </li>


                                                    <li>
                                                        <a href="about-us-2.php">ABOUT</a>
                                                    </li>

                                                    <li>
                                                        <a href="event-timeline.php">SCHEDULES</a>
                                                        <ul class="submenu">


																													<li>
																															<a href="event-timeline.php">ライブ情報</a>

																													</li>
																													<li>
																															<a href="rsv.php">予約ページへ</a>

																													</li>



                                                        </ul>
                                                    </li>


                                                    <li  class="current_page_item">
                                                        <a href="#">NEWS/VIDEOS</a>
                                                        <ul class="submenu">


                                                            <li>
                                                                <a href="news-list.php">ニュース</a>

                                                            </li>


                                                            <li>
                                                                <a href="video-list.php">動画</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">ギャラリー</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li>
                                                        <a href="disco.php">DISCOGRAPHY</a>
                                                    </li>

                                                    <li>
                                                        <a href="contact.php">Contact</a>
                                                    </li><?
                                                    if(isset($_SESSION['user']) != "") {
                                                      echo '<li>
                                                          <a href="#">ACCOUNT</a>
                                                          <ul class="submenu">
                                                            <li>
                                                                <a href="dashboard.php">MYPAGE</a>
                                                            </li>
                                                              <li>
                                                                  <a href="signout.php?logout">LOGOUT</a>
                                                              </li>
                                                          </ul>
                                                      </li>';
                                                    }
                                                    if(!isset($_SESSION['user']) != "") {
                                                      echo '<li>
                                                          <a href="sign-in.php">LOGIN</a>

                                                      </li>';
                                                    }
                                                    ?>



                                                </ul>
                                            </div><!-- /End Navbar Collapse (Menu) -->


                                        </div><!-- /End col-md-12 -->
                                    </div><!-- /End row -->
                                </div><!-- /End container -->
                            </nav><!-- /End Navbar -->


                            <!-- Header Search Form Block
                            ==================================================== -->
                            <div class="form-block header-search-form-block">
                                <!-- Form Block Container -->
                                <div class="form-block-container">
                                    <!-- Form -->
                                    <form method="get" action="search-results.html">


                                        <!-- col-md-12 -->
                                        <div class="col-md-12">
                                            <!-- Form Group -->
                                            <div class="form-group">

                                                <!-- Close Button -->
                                                <a href="#" class="form-close-btn">&times;</a>

                                                <input type="text" class="form-control" placeholder="ページ内サーチ" name="s" autocomplete="off">

                                            </div><!-- /End Form Group -->
                                        </div><!-- /End col-md-12 -->


                                    </form><!-- /End Form -->
                                </div><!-- /End Form Block Container -->
                            </div><!-- /End Header Search Form Block -->


                        </div><!-- /End Header Menu Container -->
                    </div><!-- /End Header Menu -->


                </div><!-- /End Header Section Container -->
            </header><!-- /End Header Section -->


            <!-- Page Title Section
            ==================================================================== -->
            <div class="page-title-section page-title-section-wide grey-background-color">
                <!-- Section Container -->
                <div class="section-container">


                    <!-- Breadcrumb Title -->
                    <div class="breadcrumb-title">
                        <!-- container -->
                        <div class="container">

                            <h1 class="breadcrumb-main-title">NEWS</h1>

                        </div><!-- /End container -->
                    </div><!-- /End Breadcrumb Title -->


                    <!-- Breadcrumb Block -->
                    <div class="breadcrumb-block">
                        <!-- container -->
                        <div class="container">

                            <ol class="breadcrumb">
                                <li><a href="index.html" title="Home"><i class="fa fa-home"></i></a></li>
                                <li class="active">NEWS LISTS</li>
                            </ol>

                        </div><!-- /End container -->
                    </div><!-- /End Breadcrumb block -->


                </div><!-- /End Section Container -->
            </div><!-- /End Page Title Section -->


            <!-- Page Body
            ==================================================================== -->
            <div class="page-body">


                <!-- Main Content
                ================================================================ -->
                <div class="main-content">
                    <!-- Main Content Container -->
                    <div class="main-content-container">


                        <!-- gfort Section -->
                        <div class="gfort-section">
                            <!-- Section Container -->
                            <div class="section-container">
                                <!-- container -->
                                <div class="container">
                                    <!-- row -->
                                    <div class="row">


                                        <!-- col-md-12 -->
                                        <div class="col-md-12">


                                            <!-- Blog items Wrapper -->
                                            <div class="blog-items-wrapper blog-col-1 blog-minimal">

                                              <?php
                                              require('dbconnect.php');
                                              $recordset = mysqli_query($mysqli, 'SELECT * from nse_news order by created_at desc LIMIT 20');
                                              ?>
                                              <?while($table = mysqli_fetch_assoc($recordset)) {
                                                $date = new DateTime($table['created_at']);

                                                    ?>


                                                <!-- Blog item -->
                                                <article class="blog-item format-standard">
                                                    <!-- Blog item Container -->
                                                    <div class="blog-item-container">


                                                        <!-- Blog item Body -->
                                                        <div class="blog-item-body">


                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-format">
                                                                    <a href="#">
                                                                        <i class="fa fa-file-text-o"></i>
                                                                        <i class="fa fa-file-text-o"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="item-meta-date">
                                                                    <time datetime="<?echo $date->format('Y');?>-<?echo $date->format('m');?>-<?echo $date->format('d');?>"><?echo $date->format('Y');?>年-<?echo $date->format('m');?>月-<?echo $date->format('d');?>日</time>
                                                                </span>
                                                                <span class="item-meta-category">
                                                                    <a href="#" title="Standard">NEWS</a>
                                                                </span>

                                                            </div><!-- /End Blog item Meta -->


                                                            <!-- Blog item Title -->
                                                            <h2 class="blog-item-title">
                                                                <a href="news-single.php?no=<?echo($table['no']);?>" title="<?echo($table['title']);?>"><?echo($table['title']);?></a>
                                                            </h2><!-- /End Blog item Title -->


                                                        </div><!-- /End Blog item Body -->

                                                    </div><!-- /End Blog item Container -->
                                                </article><!-- /End Blog item -->
                                                <?php
                                                }
                                                $recordset->close();
                                                ?>



                                            </div><!-- /End Blog items Wrapper -->





                                        </div><!-- /End col-md-12 -->


                                    </div><!-- /End row -->
                                </div><!-- /End container -->
                            </div><!-- /End Section Container -->
                        </div><!-- /End gfort Section -->


                    </div><!-- /End Main Content Container -->
                </div><!-- /End Main Content -->


            </div><!-- /End Page Body -->


            <!-- Footer Section
            ==================================================================== -->
            <footer class="footer-section">


                <!-- Footer Top Section -->
                <div class="footer-top-section">
                    <!-- Footer Top Section Container -->
                    <div class="footer-top-section-container">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">


                                <!-- col-md-2 -->
                                <div class="col-md-2">


                                    <!-- Widget Block ( Link ) -->
                                    <div class="widget-block widget-block-link">
                                        <!-- Widget Block Container -->
                                        <div class="widget-block-container">


                                            <!-- Widget Block Title -->
                                            <div class="widget-block-title">
                                                <h6>概要</h6>
                                            </div><!-- /End Widget Block Title -->


                                            <!-- Widget Block Body -->
                                            <div class="widget-block-body">

																							<!-- Links Block -->
																							<ul class="links-block">
																									<li><a href="contact.php" title="Portfolio">CONTACT</a></li>
																									<li><a href="about-us-2.php" title="About us">About us</a></li>
																									<li><a href="#" title="Terms of use">Terms of use</a></li>
																									<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
																							</ul><!-- /End Links Block -->

                                            </div><!-- /End Widget Block Body -->


                                        </div><!-- /End Widget Block Container -->
                                    </div><!-- /End Widget Block ( Link ) -->


                                </div><!-- /End col-md-2 -->



                                <!-- col-md-3 -->
                                <div class="col-md-3">



                                </div><!-- /End col-md-3 -->


                                <!-- col-md-3 -->
                                <div class="col-md-3">



                                </div><!-- /End col-md-3 -->


                            </div><!-- /End row -->
                        </div><!-- /End container -->
                    </div><!-- /End Footer Top Section Container -->
                </div><!-- /End Footer Top Section -->


                <!-- Footer copyright Section -->
                <div class="footer-copyright-section">
                    <!-- Footer copyright Section Container -->
                    <div class="footer-copyright-section-container">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">


                                <!-- copyright Widget ( Left ) -->
                                <div class="copyright-widget widget-left-side">
                                    <!-- copyright Widget Container -->
                                    <div class="copyright-widget-container">


                                        <!-- Info Block -->
                                        <div class="info-block">
                                            <!-- Info Block Container -->
                                            <div class="info-block-container">

                                                <p>&copy; 2018 <a href="index.php" title="Foxee" target="_blank">Foxee</a>, all rights reserved.</p>

                                            </div><!-- /End Info Block Container -->
                                        </div><!-- /End Info Block -->


                                    </div><!-- /End copyright Widget Container -->
                                </div><!-- /End copyright Widget ( Left ) -->


                                <!-- copyright Widget ( Right ) -->
                                <div class="copyright-widget widget-right-side">
                                    <!-- copyright Widget Container -->
                                    <div class="copyright-widget-container">

                                        <!-- Social Icons Block ( small ) -->
                                        <div class="social-icons-block icons-transparent icons-sm icons-style-1">
                                            <ul>

                                                <li>
                                                    <a href="https://www.facebook.com/FoxeeOfficial/" title="Facebook">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://twitter.com/foxee_official" title="Twitter">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://www.youtube.com/channel/UCxjnHfGy9lGgZ3TFLVOjNLQ" title="youtube">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /End Social Icons Block ( small ) -->

                                    </div><!-- /End copyright Widget Container -->
                                </div><!-- /End copyright Widget ( Right ) -->


                            </div><!-- /End row -->
                        </div><!-- /End container -->
                    </div><!-- /End Footer copyright Section Container -->
                </div><!-- /End Footer copyright Section -->


            </footer><!-- /End Footer Section -->


        </div><!-- /End Main Wrapper -->


        <!-- Java Script Files
        ======================================================================== -->
        <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>


    </body>
</html>
