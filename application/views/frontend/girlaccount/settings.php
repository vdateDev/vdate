<form class="form_settings mysettings" method="post">
        <div class="contentBlock">
                <div class="contentBlock_title"><?php echo __('password'); ?></div>
                <hr>
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('your_current_password'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="password" name="old_password">
                                <p class="settInf">Enter a new password below then Save</p>
                        </div>
                </div>
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('change_your_password'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="password" name="password">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('confirm_new_password'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="password" name="password_confirm">
                        </div>
                </div>
                <div class="settRow">
                        <div class="fll">
                        </div>
                        <div class="flr">
                                <input type="submit" value="<?php echo __('save'); ?>">
                        </div>
                </div>
        </div><!-- .contentBlock -->
</form>

