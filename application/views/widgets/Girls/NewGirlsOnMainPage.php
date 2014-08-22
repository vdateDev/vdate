<?php if ($girls): ?>
<div class="indexMod03 newMod">							
        <div class="indexModule">
                <div class="imTTL imT_girls"><?php echo __('new_girls'); ?></div>
                <div class="sliderRegister">
                        <div class="beforeUlRegister">
                                <ul>
                                        <?php foreach ($girls as $item): ?>
                                        <li>
                                                <?php if (HTML::isset_img('upload/photos/big/'.$item->photo)): ?>
                                                     <img src="<?php echo HTML::isset_img('upload/photos/big/'.$item->photo); ?>" alt="">
                                                <?php endif; ?>
                                                <div class="sliInf">
                                                        <div class="favOneOpt">
                                                                <a href="#" class="oneChat"></a>
                                                                <a href="#" class="oneMess"></a>
                                                                <a href="#" class="oneFav add_to_fav" data-id="<?php echo $item->id; ?>"></a>
                                                                <a href="#" class="oneDate"></a>
                                                                <a href="#" class="oneFlirt"></a>
                                                        </div>
                                                        <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$item->id))); ?>" class="sliName"><?php echo $item->firstname; ?></a>
                                                        <span class="sliAdr"><?php echo $item->city; ?>, <?php echo $item->country; ?></span>
                                                        <span class="sliID"><span>ID:</span> <?php echo $item->id; ?></span>
                                                        <span class="sliAge"><span><?php echo __('age'); ?>:</span> <?php echo $item->get_age(); ?></span>
                                                        <a href="#" class="sliChat"><?php echo __('live_chat'); ?></a>
                                                </div>
                                        </li>
                                        <?php endforeach; ?>
                                </ul>
                                <div class="sliderRegister_Prev slid_prev"></div>
                                <div class="sliderRegister_Next slid_next"></div>
                        </div>
                </div>
        </div>
</div>
<?php endif; ?>