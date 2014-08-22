<!DOCTYPE html>
<html>
<!-- (c) Wezom web-студия | www.wezom.com.ua -->
<head>
	<meta charset="utf-8">

	<title><?php echo $page_title; ?></title>
	<meta name="description" content="<?php echo $page_description; ?>">
	<meta name="keywords" content="<?php echo $page_keywords; ?>">
	<meta http-equiv="imagetoolbar" content="no">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="target-densitydpi=device-dpi">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="apple-touch-icon" href="/media/frontend/pic/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/media/frontend/pic/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/media/frontend/pic/apple-touch-icon-114x114.png">

	<link rel="stylesheet" href="/media/frontend/css/plugin.css">
	<link rel="stylesheet" href="/media/frontend/css/video-js.css">
	<link rel="stylesheet" href="/media/frontend/css/style.css">
	<link rel="stylesheet" href="/media/frontend/css/responsive.css">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="/media/frontend/js/modernizr.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js">\x3C/script>')</script>
	<script src="/media/frontend/js/plugins.js"></script>
	<script src="/media/frontend/js/video.js"></script>
	<script src="/media/frontend/js/init.js"></script>
        <script src="/media/frontend/js/noty/packaged/jquery.noty.packaged.min.js"></script>
        <script src="/media/frontend/js/programming.js"></script>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="image_src" href="/media/frontend/pic/expres_icon.jpg">
	<!--[if IE 6]><script src="js/DD_belatedPNG_0.0.8a-min.js"></script><script>DD_belatedPNG.fix('.png, img');</script><![endif]-->
	<!--[if IE]><script>document.createElement('header');document.createElement('nav');document.createElement('section');document.createElement('article');document.createElement('aside');document.createElement('footer');</script><![endif]-->
</head>
<body>
	<section class="isSection profileLadiesPage nonIndex">
		<header class="isHeader">
			<div class="site_size clearFix">
                                <a href="<?php echo strtolower(Route::url('default',array('language'=>$language))); ?>" class="logo"><img src="/media/frontend/pic/logo.png" alt=""></a>
                                <div class="overBlock cmV"></div>
                                <?php if (isset($widgets['ChatNow'])) echo  $widgets['ChatNow'];  ?>
				<div class="overBlock tmV"></div>
                                <?php if (isset($widgets['Auth'])) echo  $widgets['Auth'];  ?>
                                <?php if (isset($widgets['MyAccount'])) echo  $widgets['MyAccount'];  ?>
                                <?php if (isset($widgets['Langs'])) echo $widgets['Langs']; ?>
			</div><!-- .site_size -->
                        <?php if (isset($widgets['MainMenu'])) echo $widgets['MainMenu']; ?>

		</header><!-- .isHeader -->
		<!-- conteniner -->
		<div id="conteiner">
			<div class="site_size clearFix">
                            <?php echo $content; ?>
                        </div><!-- .site_size -->
                </div><!-- .indexConteiner -->
                <!-- #conteiner-->
        </section><!-- .isSection -->
        <?php echo $footer; ?>
</body>
</html>