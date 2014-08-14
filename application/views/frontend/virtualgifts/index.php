<div class="contentBlock">
    <ul class="presentCatList">
        <li>
             <ul class="presentList">
                     <?php foreach ($gifts as $gift): ?>
                     <li>
                             <p><span><?php echo $gift->name; ?></span></p>
                             <div class="presImg">
                                 <?php if (HTML::isset_img('upload/virtualgifts/'.$gift->image)): ?>
                                 <img src="<?php echo HTML::isset_img('upload/virtualgifts/'.$gift->image); ?>" alt="<?php echo $gift->name; ?>">
                                 <?php endif; ?>
                             </div>
                             <span class="presPrc"><span><?php echo $gift->cost; ?></span> <?php echo __('credits'); ?></span>
                             <a href="#" class="presADD"><?php echo __('add'); ?></a>
                     </li>
                     <?php endforeach; ?>
             </ul>
        </li>
    </ul>
</div>