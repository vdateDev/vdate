<div class="profileStats clearFix">
        <div class="left50">
                <div class="contentBlock">
                        <div class="contentBlock_title"><?php echo __('membership'); ?></div>
                        <p><?php echo __('member_scince'); ?>: <?php echo date('d-m-Y',$user->girl->created_at); ?></p>
                </div>
        </div>
        <div class="right50">
                <div class="contentBlock">
                        <div class="contentBlock_title"><?php echo __('correspondences'); ?></div>
                        <ul class="corrList">
                                <li><a href="#" class="prf_message"><?php echo __('messages'); ?></a><span>136 <b>(13 new!)</b></span></li>
                                <li><a href="#" class="prf_flirt"><?php echo __('flirts'); ?></a><span>0</span></li>
                                <li><a href="<?php echo strtolower(Route::url('default', array('language'=>$language,'controller'=>'girlaccount','action'=>'myadmires'))); ?>" class="prf_myadmire"><?php echo __('my_admires'); ?></a><span><?php echo $cnt_admires; ?><?php if ($cnt_new_admires>0): ?><b>(<?php echo $cnt_new_admires; ?> new!)</b><?php endif; ?></span></li>
                                <li><a href="<?php echo strtolower(Route::url('default', array('language'=>$language,'controller'=>'girlaccount','action'=>'myfavorites'))); ?>" class="prf_myfavorite"><?php echo __('my_favorites'); ?></a><span><?php echo $cnt_favorites; ?></span></li>
                                <li><a href="<?php echo strtolower(Route::url('default', array('language'=>$language,'controller'=>'girlaccount','action'=>'mymatches'))); ?>" class="prf_mymatch"><?php echo __('my_matches'); ?></a><span><?php echo $cnt_matches; ?></span></li>
                                <li><a href="#" class="prf_chatinvitations"><?php echo __('chat_invitations'); ?></a><span>3</span></li>
                                <li><a href="#" class="prf_notifications"><?php echo __('notifications'); ?></a><span>2</span></li>
                                <li><a href="#" class="prf_photolikes"><?php echo __('photo_likes'); ?></a><span>1354 <b>(23 new!)</b></span></li>
                                <li><a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'girlaccount','action'=>'myvirtualgifts'))); ?>" class=""><?php echo __('virtual_gifts'); ?></a><span><?php echo $cnt_virtual_gifts; ?><?php if ($cnt_new_virtual_gifts>0): ?><b>(<?php echo $cnt_new_virtual_gifts; ?> new!)</b><?php endif; ?></span></li>
                        </ul>
                </div>
        </div>
</div><!-- .profileStats -->
<div class="contentBlock">
        <div class="contentBlock_title attn_title"><?php echo $attention->page_h1; ?></div>
        <div class="attn_block">
                <?php echo $attention->text; ?>
        </div>
</div><!-- .contentBlock -->