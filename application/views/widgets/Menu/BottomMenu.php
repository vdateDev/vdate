<?php if(count($pages) > 0):?>
    <ul class="footerMenu fll">
        <?php foreach ($pages as $page):?>
        <?php if ($page->url=='contact'): ?>
         <li><a href="<?php echo strtolower(Route::url('contact', array('language' => $language, 'action' => $page->url))); ?>"><?php echo $page->name; ?></a></li>
        <?php else: ?>
        <li><a href="<?php echo strtolower(Route::url('pages', array('language' => $language, 'url' => $page->url))); ?>"><?php echo $page->name; ?></a></li>
        <?php endif; ?>
        <?php endforeach;?>
    </ul>
<?php endif;?>