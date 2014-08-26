<!DOCTYPE html>
<!-- (c) Wezom web-студия | http://www.wezom.com.ua/ -->
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="/imagetoolbar" content="no" />
<title>Site Control Panel</title>
<link type="text/css" rel="stylesheet" href="/media/backend/css/colorbox.css" />
<link type="text/css" rel="stylesheet" href="/media/backend/css/jquery-ui.custom.css" />
<link type="text/css" rel="stylesheet" href="/media/backend/css/style.css" />
<link type="text/css" rel="stylesheet" href="/media/backend/css/litree_cms.css" />
<link type="text/css" rel="stylesheet" href="/media/backend/css/admin.css" />
<link type="text/css" rel="stylesheet" href="/media/backend/css/jquery.autocomplete.css" />
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="/media/backend/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/media/backend/js/jquery.easing.min.1.3.js"></script>
<script type="text/javascript" src="/media/backend/js/jquery-ui-1.10.1.min.js"></script>
<script type="text/javascript" src="/media/backend/js/jquery.damnUploader.js"></script>
<script type="text/javascript" src="/media/backend/js/interfaceImageApi.js"></script>
<script type="text/javascript" src="/media/backend/js/i18n/jquery.ui.datepicker-ru.js"></script>
<!--<script type="text/javascript" src="/media/backend/js/jquery.colorbox-min.js"></script>-->
<script type="text/javascript" src="/media/backend/js/liValidForm.v2.js"></script>
<script type="text/javascript" src="/media/backend/js/jquery.liColl.js"></script>
<script type="text/javascript" src="/media/backend/js/jquery.litree_cms.js"></script>
<script type="text/javascript" src="/media/backend/js/main.js"></script>
<script type="text/javascript" src="/media/backend/js/plugins.js"></script>
<script type="text/javascript" src="/media/backend/js/backend.js"></script>
<script type="text/javascript" src="/media/backend/js/jquery.synctranslit.min.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="image_src" href="/pic/expres_icon.jpg" />
<!--[if IE 6]>
        <script src="/js/DD_belatedPNG_0.0.8a-min.js"></script>
        <script>
                DD_belatedPNG.fix(".png, img");
        </script>  
<![endif]-->
</head>
<body>
    <div id="wrapper">
      <div class="user_block">
        <div class="exit_poss"><a class="wlink" target="_blank" href="/">Back to the site</a> | <a class="wlink" href="<?php echo strtolower(Route::url('backend_auth', array('action' => 'logout'))); ?>">Log out</a></div>
        Hello, <?php // echo $user->username; ?>                
      </div>
        <div class="menu_wrap">
            <ul class="menu">
                <li <?php echo $controller == 'main' ? 'class="cur"' : ''; ?>><a href="/backend">Main</a></li>
                <?php if (HTML::access('pages', $access)): ?>
                <li <?php if ($controller == 'pages') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'pages'))); ?>">Content pages</a>
                    <?php if($controller == 'pages'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'pages'))); ?>">All pages<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'pages', 'action' => 'add'))); ?>">Add page<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <?php if (HTML::access('news', $access)): ?>
                <li <?php if ($controller == 'news' or $controller=='reviews') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'news'))); ?>">News</a>
                    <?php if($controller == 'news' or $controller=='reviews'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'news'))); ?>">All news<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'news', 'action' => 'add'))); ?>">Add news<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                        <li <?php if ($controller=='reviews') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'reviews', 'action' => 'index'))); ?>">Reviews<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('slideshow', $access)): ?>
                <li <?php if ($controller == 'slideshow') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'slideshow'))); ?>">Slideshow</a>
                    <?php if($controller == 'slideshow'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'slideshow'))); ?>">All images<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'slideshow', 'action' => 'add'))); ?>">Add image<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('giftgroups', $access)): ?>
                <li <?php if ($controller == 'giftgroups') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'giftgroups'))); ?>">Gift Categories</a>
                    <?php if($controller == 'giftgroups'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'giftgroups'))); ?>">All categories<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'giftgroups', 'action' => 'add'))); ?>">Add category<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('gifts', $access)): ?>
                <li <?php if ($controller == 'gifts') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'gifts'))); ?>">Gifts and Flowers</a>
                    <?php if($controller == 'gifts'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'gifts'))); ?>">All gifts<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'gifts', 'action' => 'add'))); ?>">Add gift<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('ordergifts', $access)): ?>
                <li <?php if ($controller == 'ordergifts') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'ordergifts'))); ?>">Orders of gifts</a>
                    <?php if($controller == 'ordergifts'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'ordergifts'))); ?>">All orders<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('virtualgifts', $access)): ?>
                <li <?php if ($controller == 'virtualgifts') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'virtualgifts'))); ?>">Virtual Gifts</a>
                    <?php if($controller == 'virtualgifts'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'virtualgifts'))); ?>">All virtual gifts<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'virtualgifts', 'action' => 'add'))); ?>">Add virtual gift<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('agency', $access)): ?>
                <li <?php if ($controller == 'agency') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'agency'))); ?>">Agencies</a>
                    <?php if($controller == 'agency'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'agency'))); ?>">All agencies<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'agency', 'action' => 'add'))); ?>">Add agency<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('sprav', $access)): ?>
                <li <?php if($controller == 'sprav') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav'))); ?>">User's private information</a>             
                    <?php if($controller == 'sprav'):?>
                    <ul>                        
                        <li <?php if ($action == 'index' and $category=='eyes' ) echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav', 'category'=>'eyes', 'action'=>'index'))); ?>">Eyes<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add' and $category=='eyes') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav', 'category'=>'eyes', 'action' => 'add'))); ?>">Add eyes color<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'index' and $category=='hair' ) echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'hair', 'action'=>'index'))); ?>">Hair<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add' and $category=='hair') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'hair','action' => 'add'))); ?>">Add hair color<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'index' and $category=='drinking' ) echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'drinking' , 'action'=>'index'))); ?>">Drinking<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add' and $category=='drinking') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'drinking','action' => 'add'))); ?>">Add drinking record<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'index' and $category=='smoking' ) echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'smoking', 'action'=>'index'))); ?>">Smoking<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add' and $category=='smoking') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'smoking','action' => 'add'))); ?>">Add smoking record<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'index' and $category=='marital' ) echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'marital', 'action'=>'index'))); ?>">Marital status<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add' and $category=='marital') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'marital','action' => 'add'))); ?>">Add marital status<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'index' and $category=='religion' ) echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'religion', 'action'=>'index'))); ?>">Religion<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add' and $category=='religion') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'religion','action' => 'add'))); ?>">Add religion<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'index' and $category=='education') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'education', 'action'=>'index'))); ?>">Education<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add' and $category=='education') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav','category'=>'education','action' => 'add'))); ?>">Add education<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>      
                <?php endif; ?>
                
                <?php if (HTML::access('height', $access)): ?>
                <li <?php if($controller == 'height') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'height'))); ?>">Height</a>             
                    <?php if($controller == 'height'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'height'))); ?>">Height<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'height', 'action' => 'add'))); ?>">Add height<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>      
                <?php endif; ?>
                
                <?php if (HTML::access('weight', $access)): ?>
                <li <?php if($controller == 'weight') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'weight'))); ?>">Weight</a>             
                    <?php if($controller == 'weight'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'weight'))); ?>">Weight<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'weight', 'action' => 'add'))); ?>">Add weight<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>      
                <?php endif; ?>
                
                <?php if (HTML::access('girls', $access)): ?>
                <li <?php if ($controller == 'girls') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'girls'))); ?>">Girl profiles</a>
                    <?php if($controller == 'girls'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'girls'))); ?>">All girls<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'girls', 'action' => 'add'))); ?>">Add girl<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('men', $access)): ?>
                <li <?php if ($controller == 'men') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'men'))); ?>">Men profiles</a>
                    <?php if($controller == 'men'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'men'))); ?>">All men<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'men', 'action' => 'add'))); ?>">Add man<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('adminltters', $access)): ?>
                <li <?php if ($controller == 'adminletters') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'adminletters' , 'action'=>'inbox'))); ?>">Admin letters</a>
                    <?php if($controller == 'adminletters'):?>
                    <ul>                        
                        <li <?php if ($action == 'inbox') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'adminletters', 'action' => 'inbox'))); ?>">Inbox<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'outbox') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'adminletters', 'action' => 'outbox'))); ?>">Outobx<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                
                <?php if (HTML::access('languages', $access)): ?>
                <li <?php if($controller == 'languages') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'languages'))); ?>">Languages</a>             
                    <?php if($controller == 'languages'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'languages'))); ?>">All languages<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'languages', 'action' => 'add'))); ?>">Add language<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>      
                <?php endif; ?>
                
                <?php if (HTML::access('seo', $access)): ?>
                <li <?php if($controller == 'seo') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'seo'))); ?>">Seo settings</a>             
                </li>      
                <?php endif; ?>
                
                <?php if (HTML::access('letters', $access)): ?>
                <li <?php if ($controller == 'letters') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'letters'))); ?>">Letter templates</a>
                    <?php if($controller == 'letters'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'letters'))); ?>">All templates<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'letters', 'action' => 'add'))); ?>">Add template<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>      
                <?php endif; ?>
                
                <?php if (HTML::access('infos', $access)): ?>
                <li <?php if($controller == 'infos') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'infos'))); ?>">Information messages</a>
                    <?php if($controller == 'infos'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'infos'))); ?>">All messages<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'infos', 'action' => 'add'))); ?>">Add message <img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>


                <?php if (HTML::access('admins', $access)): ?>
                <li <?php if ($controller == 'admins') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'admins'))); ?>">Administrators</a>
                    <?php if($controller == 'admins'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'admins'))); ?>">All<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'admins', 'action' => 'add'))); ?>">Add admin<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <?php if (HTML::access('roles', $access)): ?>
                <li <?php if ($controller == 'roles') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'roles'))); ?>">User roles</a>
                    <?php if($controller == 'roles'):?>
                    <ul>                        
                        <li <?php if ($action == 'index') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'roles'))); ?>">All roles<img src="/media/backend/pic/m_ic_allPage.png" class="m_ic"></a></li>
                        <li <?php if ($action == 'add') echo 'class="cur"';?>><a href="<?php echo strtolower(Route::url('backend', array('controller' => 'roles', 'action' => 'add'))); ?>">Add role<img src="/media/backend/pic/m_ic_add.png" class="m_ic"></a></li>
                    </ul>
                    <?php endif; ?>
                </li>    
                <?php endif; ?>


                <?php if (HTML::access('settings', $access)): ?>
                <li <?php if($controller == 'settings') echo 'class="cur"';?>>
                    <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'settings', 'action' => 'edit'))); ?>">Site Settings</a>                                      
                </li> 
                <?php endif; ?>
            </ul>
        </div>
        <div class="conteiner">
            <?php echo $content; ?>
        </div>
    </div>
    <footer id="footer">
        <div class="footer_size"> © 2014 Wezom Control Panel </div>
    </footer>
    <?php $message = $session->get('backend_success_message'); ?>
    <?php if (!empty($message)):?>
    <div id="dialog2" style="display:none;"></div>
    <div id="message_popup" style="display:none;" title="Message">
        <h2 align="center"><?php echo $message; ?></h2>
        <?php $session->delete('backend_success_message'); ?>
    </div>
    <?php endif; ?>
    <script>
        $(document).ready(function(e) {
            
            _div = $('#message_popup');
            $('#dialog2').attr('title',_div.attr('title')).html(_div.html());

            $("#dialog2").dialog({
                    weight:700,
                    buttons: {
                            'OK' : function () {
                                    $(this).dialog( "close" ).dialog("destroy");
                            }
                    }
            });
           
        });
            
    </script>
</body>
<?php echo View::factory('profiler/stats') ?>
</html>
