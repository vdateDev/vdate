<div class="leftSIDE">
        <div class="leftSIDE_content">
                <a href="#" class="accountListOpen"><?php echo __('open_my_account_menu'); ?></a>
                <ul class="accountList">
                    <?php if ($role->name=='girls'): ?>
                        <li><a href="#" class="acc_myinbox"><?php echo __('my_inbox'); ?> <span>(<b>5</b>)</span></a></li>
                        <li><a href="#" class="acc_myupdates"><?php echo __('my_updates'); ?> <span>(<b>121</b>)</span></a></li>
                        <li><a href="#" class="acc_statistics"><?php echo __('statistics'); ?></a></li>
                        <li><a href="#" class="acc_enterchat"><?php echo __('enter_to_chat'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'girlaccount','action'=>'settings'))); ?>" class="acc_mysettings <?php if ($controller=='girlaccount' and $action=='settings') echo ' acc_curr'; ?>"><?php echo __('my_settings'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('auth',array('language'=>$language,'action'=>'logout'))); ?>" class="acc_exit"><?php echo __('exit'); ?></a></li>
                        <li><a href="#" class="acc_gallery"><?php echo __('gallery'); ?></a></li>
                        <li><a href="#" class="acc_search"><?php echo __('search'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('default', array('language'=>$language,'controller'=>'girlaccount', 'action'=>'myfavorites'))); ?>" class="acc_myfavorites <?php if ($controller=='girlaccount' and $action=='myfavorites') echo ' acc_curr'; ?>"><?php echo __('my_favorites'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'girlaccount','action'=>'menonline'))); ?>" class="acc_hownline <?php if ($controller=='girlaccount' and $action=='menonline') echo ' acc_curr'; ?>"><?php echo __('men_online'); ?></a></li>
                        <li><a href="#" class="acc_services"><?php echo __('services'); ?></a></li>
                        <li><a href="#" class="acc_livechat"><?php echo __('live_chat'); ?></a></li>
                        <li><a href="#" class="acc_camshare"><?php echo __('camshare'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('pages',array('language'=>$language,'url'=>'information'))); ?>" class="acc_information"><?php echo __('information'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('pages',array('language'=>$language,'url'=>'how-to-use-a-chat'))); ?>" class="acc_howusechat"><?php echo __('how_to_use_a_chat'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('pages',array('language'=>$language,'url'=>'about-us'))); ?>" class="acc_aboutus"><?php echo __('about_us'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('contact',array('language'=>$language,'action'=>'contact'))); ?>" class="acc_contactinform"><?php echo __('contact_info'); ?></a></li>
                        <li><a href="#" class="accountListOpen"><?php echo __('open_my_account_menu'); ?></a></li>
                    <?php else: ?>
                        <li><a href="#" class="acc_myinbox"><?php echo __('my_inbox'); ?> <span>(<b>5</b>)</span></a></li>
                        <li><a href="#" class="acc_myupdates"><?php echo __('my_updates'); ?> <span>(<b>121</b>)</span></a></li>
                        <li><a href="#" class="acc_statistics"><?php echo __('statistics'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'manaccount','action'=>'settings'))); ?>" class="acc_mysettings <?php if ($controller=='manaccount' and $action=='settings') echo ' acc_curr'; ?>"><?php echo __('my_settings'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('auth',array('language'=>$language,'action'=>'logout'))); ?>" class="acc_exit"><?php echo __('exit'); ?></a></li>
                        <li><a href="#" class="acc_gallery"><?php echo __('gallery'); ?></a></li>
                        <li><a href="#" class="acc_search"><?php echo __('search'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('default', array('language'=>$language,'controller'=>'manaccount', 'action'=>'myfavorites'))); ?>" class="acc_myfavorites <?php if ($controller=='manaccount' and $action=='myfavorites') echo ' acc_curr'; ?>"><?php echo __('my_favorites'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'manaccount','action'=>'womenonline'))); ?>" class="acc_hownline <?php if ($controller=='manaccount' and $action=='womenonline') echo ' acc_curr'; ?>"><?php echo __('women_online'); ?></a></li>
                        <li><a href="#" class="acc_services"><?php echo __('services'); ?></a></li>
                        <li><a href="#" class="acc_livechat"><?php echo __('live_chat'); ?></a></li>
                        <li><a href="#" class="acc_camshare"><?php echo __('camshare'); ?></a></li>
                        <li><a href="#" class=""><?php echo __('my_account'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('pages',array('language'=>$language,'url'=>'information'))); ?>" class="acc_information"><?php echo __('information'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('pages',array('language'=>$language,'url'=>'how-to-use-a-chat'))); ?>" class="acc_howusechat"><?php echo __('how_to_use_a_chat'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('pages',array('language'=>$language,'url'=>'about-us'))); ?>" class="acc_aboutus"><?php echo __('about_us'); ?></a></li>
                        <li><a href="<?php echo strtolower(Route::url('contact',array('language'=>$language,'action'=>'contact'))); ?>" class="acc_contactinform"><?php echo __('contact_info'); ?></a></li>
                        <li><a href="#" class="accountListOpen"><?php echo __('open_my_account_menu'); ?></a></li>
                    <?php endif; ?>
                </ul>						
        </div>
</div><!-- .leftSIDE -->