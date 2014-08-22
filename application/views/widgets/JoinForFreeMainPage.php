<div class="indexModule creditMod">
        <div class="imTTL imT_join"><?php echo __('join_for_free'); ?></div>
        <div class="creditTXT">
               <?php echo __('join_now_and_receive_credits'); ?>
        </div>
        <a href="<?php echo strtolower(Route::url('auth', array('language'=> $language, 'action'=>'registration'))); ?>" class="creditLink"><?php echo __('join_now'); ?></a>
</div>