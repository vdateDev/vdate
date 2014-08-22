<?php if ($role->name=='girls'): ?>
<div class="topModule usrLogin">
        <?php if (HTML::isset_img('upload/photos/tiny/'.$avatar->photo)): ?>
        <div class="usrFoto">
                <img src="<?php echo HTML::isset_img('upload/photos/tiny/'.$avatar->photo); ?>" alt="">
        </div>
        <?php endif; ?>
        <div class="tmOpen"></div>
        <div class="tmUp"><span class="usrName"><?php echo $user->girl->firstname; ?></span>!</div>
        <div class="tmBt">
                <span class="usrID"><?php echo __('login'); ?>: <span><?php echo $user->username; ?></span></span>
                <a href="<?php echo strtolower(Route::url('auth',array('language'=>$language,'action'=>'logout'))); ?>" class="lgOut"><?php echo __('log_out'); ?></a>
        </div>
</div>
<?php else: ?>
<div class="topModule">
        <div class="usrFoto">
        </div>
        <div class="tmOpen"></div>
        <div class="tmUp"><?php echo __('hi'); ?>, <span class="usrName"><?php echo $user->men->firstname; ?></span>!</div>
        <div class="tmBt">
                <a href="#" class="crdBuy"><?php echo __('buy_credits'); ?> <span class="crdCnt"><?php echo (int) $user->men->balance; ?></span></a>
                <a href="<?php echo strtolower(Route::url('auth',array('language'=>$language,'action'=>'logout'))); ?>" class="lgOut"><?php echo __('log_out'); ?></a>
        </div>
</div>
<?php endif; ?>
