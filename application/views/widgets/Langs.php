<?php if(count($langs) > 0):?>
    <ul>
        <?php foreach($langs as $lang):?>
            <li><a><?php echo $lang->name; ?></a></li>
        <?php endforeach;?>
    </ul>
<?php endif; ?>
