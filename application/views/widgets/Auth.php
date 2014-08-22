<div class="overBlock tmV"></div>
<div class="topModule unLogin">
        <div class="usrFoto"></div>
        <div class="tmOpen"></div>
        <div class="tmUp"><?php echo __('login'); ?>, <a href="<?php echo strtolower(Route::url('auth', array('action'=> 'registration'))); ?> " class="topLink"><?php echo __('or_join_free'); ?></a></div>
        <div class="tmBt">
                <form class="logForm" method="post" action="<?php echo strtolower(Route::url('auth',array('language'=>$language,'action'=>'login'))); ?>">
                        <input type="text" name="email" placeholder="<?php echo __('enter_email'); ?>">
                        <input type="password" name="password" placeholder="<?php echo __('enter_password') ?>">
                        <input type="submit" value="<?php echo __('go'); ?>">
                </form>
        </div>
</div>