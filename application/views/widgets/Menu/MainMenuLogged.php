<div class="headMuneWrapp">
        <div class="site_size clearFix">
                <div class="headMenu">
                        <ul class="clearFix">
                                <li><a href="<?php echo strtolower(Route::url('default', array('language'=>$language))); ?>" <?php if ($controller=='main') echo 'class="curMenu"'; ?>><?php echo __('home'); ?></a></li>
                                <li><a href="<?php echo strtolower(Route::url('news', array('language'=>$language))); ?>" <?php if ($controller=='news') echo 'class="curMenu"'; ?>><?php echo __('news'); ?></a></li>
                                <li><a href="#"><?php echo __('inbox'); ?></a></li>
                                <li><a href="#"><?php echo __('outbox'); ?></a></li>
                                <li><a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'search'))); ?>" <?php if ($controller=='search') echo 'class="curMenu"'; ?>><?php echo __('search'); ?></a></li>
                        </ul>
                </div>
                <div class="overBlock smV"></div>
                <div class="statusModule">
                        <div class="smOpen"></div>
                        <?php if ($role->name=='girls'): ?>
                        <a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'girlaccount')));?>" class="myAcc  <?php if ($controller=='girlaccount') echo ' curMenu'; ?>"><?php echo __('my_account'); ?></a>
                        <?php else: ?>
                        <a href="<?php echo strtolower(Route::url('default',array('language'=>$language, 'controller'=>'manaccount')));?>" class="myAcc <?php if ($controller=='manaccount') echo ' curMenu'; ?>" ><?php echo __('my_account'); ?></a>
                        <?php endif; ?>
                        <div class="chs">
                                <span><?php echo __('chat_invitations'); ?>:</span>
                                <span class="checkIn"><?php echo __('on'); ?></span>
                                <label>
                                        <input type="checkbox" checked="checked" name="" value="ON"><span class="checkSli"><b></b></span>
                                </label>
                                <span class="checkOut"><?php echo __('off'); ?></span>
                        </div>
                </div>
        </div>
</div><!-- .headMuneWrapp -->