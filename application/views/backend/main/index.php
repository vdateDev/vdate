<div style="text-align: center;">
    <h1>Site Control Panel</h1>
    <div class="control-pannel-container">
        <?php if (HTML::access('news', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'news'))); ?>">
                <span class="control-pannel-icon news-icon-big"></span>
                <span class="control-pannel-item-name">&nbsp; &nbsp; News &nbsp; &nbsp;</span>
            </a>
        </div>    
        <?php endif; ?>
      <!--  <?php if (HTML::access('actual', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'actual'))); ?>">
                <span class="control-pannel-icon list-icon-big"></span>
                <span class="control-pannel-item-name">Актуальное</span>
            </a>
        </div>    
        <?php endif; ?>
        <?php if (HTML::access('slideshow', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'slideshow'))); ?>">
                <span class="control-pannel-icon slideshow-icon-big"></span>
                <span class="control-pannel-item-name">Слайдшоу</span>
            </a>
        </div>
        <?php endif; ?>
         <?php if (HTML::access('fields', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'fields'))); ?>">
                <span class="control-pannel-icon form-icon-big"></span>
                <span class="control-pannel-item-name">Дополнительные поля анкеты</span>
            </a>
        </div>
        <?php endif; ?>
        <?php if (HTML::access('users', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'users'))); ?>">
                <span class="control-pannel-icon users-icon-big"></span>
                <span class="control-pannel-item-name">Пользователи</span>
            </a>
        </div>
        <?php endif; ?>-->
        <?php if (HTML::access('roles', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'roles'))); ?>">
                <span class="control-pannel-icon roles-icon-big"></span>
                <span class="control-pannel-item-name">User roles</span>
            </a>
        </div>
        <?php endif; ?>
        <?php if (HTML::access('admins', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'admins'))); ?>">
                <span class="control-pannel-icon admin-icon-big"></span>
                <span class="control-pannel-item-name">Administrators</span>
            </a>
        </div>
        <?php endif; ?>
        <?php if (HTML::access('pages', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'pages'))); ?>">
                <span class="control-pannel-icon pages-icon-big"></span>
                <span class="control-pannel-item-name">Content Pages</span>
            </a>
        </div>         
        <?php endif; ?>
        <!--<?php if (HTML::access('banners', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'banners'))); ?>">
                <span class="control-pannel-icon banners-icon-big"></span>
                <span class="control-pannel-item-name">Баннеры</span>
            </a>
        </div>         
        <?php endif; ?>-->
        <?php if (HTML::access('seo', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'seo'))); ?>">
                <span class="control-pannel-icon seo-icon-big"></span>
                <span class="control-pannel-item-name"> &nbsp; &nbsp; SEO &nbsp; &nbsp;</span>
            </a>
        </div>
        <?php endif; ?>
        <?php if (HTML::access('letters', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'letters'))); ?>">
                <span class="control-pannel-icon letters-icon-big"></span>
                <span class="control-pannel-item-name">Letter Templates</span>
            </a>
        </div>
        <?php endif; ?>
        <?php if (HTML::access('infos', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'infos'))); ?>">
                <span class="control-pannel-icon infos-icon-big"></span>
                <span class="control-pannel-item-name">Infromational Messages</span>
            </a>
        </div>
        <?php endif; ?>
        <?php if (HTML::access('languages', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'languages'))); ?>">
                <span class="control-pannel-icon languages-icon-big"></span>
                <span class="control-pannel-item-name"> &nbsp; Languages &nbsp;</span>
            </a>
        </div>
        <?php endif; ?>
        <?php if (HTML::access('settings', $access)): ?>
        <div class="control-pannel-item">
            <a class="control-pannel-link" href="<?php echo strtolower(Route::url('backend', array('controller' => 'settings', 'action' => 'edit'))); ?>">
                <span class="control-pannel-icon settings-icon-big"></span>
                <span class="control-pannel-item-name">Site Settings</span>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>