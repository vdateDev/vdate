<?php if(count($pages) > 0):?>
    <ul class="footerMenu fll">
        <?php foreach ($pages as $page):?>
        <li><a href="<?php echo strtolower(Route::url('pages', array('language' => $language, 'url' => $page->url))); ?>"><?php echo $page->name; ?></a></li>
        <?php endforeach;?>
    </ul>
<?php endif;?>