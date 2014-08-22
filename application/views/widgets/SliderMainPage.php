<?php if (count($slides)>0): ?>
<div class="indexPageContent">
        <div class="sliderIndex">
                <ul>
                        <?php foreach ($slides as $item): ?>
                        <li>
                                <?php if (HTML::isset_img('upload/slideshow/'.$item->image)): ?>
                                <img src="<?php echo HTML::isset_img('upload/slideshow/'.$item->image); ?>" alt="">
                                <div class="sliderIndexTXT">
                                        
                                        <div class="sliderText02"><?php echo $item->text; ?></div>
                                        
                                        <a href="<?php echo strtolower(Route::url('auth', array('language'=>$language,'action'=>'registration'))); ?>" class="labelFree"><?php echo __('get_started_today'); ?></a>
                                </div>
                                <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                </ul>
        </div>
</div>
<?php endif; ?>