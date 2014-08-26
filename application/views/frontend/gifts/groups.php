<li>
       <?php if ($group): ?><div class="presentList_title"><?php echo $group->name; ?>:</div><?php endif; ?>
        <ul class="presentList">
                <?php foreach ($gifts as $gift): ?>
                <li>
                        <p><span><?php echo $gift->name; ?></span></p>
                        <div class="presImg">
                            <?php if (HTML::isset_img('upload/gifts/'.$gift->image)): ?>
                            <img src="<?php echo HTML::isset_img('upload/gifts/'.$gift->image); ?>" alt="<?php echo $gift->name; ?>">
                            <?php endif; ?>
                        </div>
                        <span class="presPrc"><span><?php echo $gift->cost; ?></span> <?php echo __('credits'); ?></span>
                        <a href="#" class="presADD" data-id="<?php echo $gift->id; ?>"><?php echo __('add'); ?></a>
                </li>
                <?php endforeach; ?>
        </ul>
</li>