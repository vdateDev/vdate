<?php if(count($langs) > 0):?>
    <span class="langOpen lang<?php echo strtoupper($language); ?>"></span>
    <span class="langOverlay overBlock"></span>
    <ul class="langSelect">
        <?php foreach($langs as $lang):?>
        <li <?php if ($language==$lang->key) echo 'class="curr"'; ?>><a href="<?php echo strtolower(Route::url('default', array('language' => $lang->key))); ?>" class="lang<?php echo strtoupper($lang->key);?>"><?php echo $lang->name; ?></a></li>
        <?php endforeach;?>
    </ul>
<?php endif; ?>
