<div class="content">
    <?php echo $content; ?>
    <form class="validat form_style" action="" method="post">	
        <div class="row">
            <label class="label"><?php echo __('your_name'); ?></label>
            <div class="controls">
                <input class="valid <?php echo (isset($errors) AND in_array('name', $errors)) ? 'wrong indicator"' : ''; ?>" name="name" type="text" value="<?php echo isset($post['name']) ? $post['name'] : ''; ?>" />
            </div>
        </div>
        <div class="row">
            <label class="label">E-mail</label>
            <div class="controls">
                <input class="valid email <?php echo (isset($errors) AND in_array('email', $errors)) ? 'wrong indicator"' : ''; ?>" type="text" name="email" value="<?php echo isset($post['email']) ? $post['email'] : ''; ?>" />
            </div>
        </div>
        <div class="row">
            <label class="label"><?php echo __('message'); ?></label>
            <div class="controls">
                <textarea class="valid <?php echo (isset($errors) AND in_array('message', $errors)) ? 'wrong indicator"' : ''; ?>" name="message" style="width: 300px; height: 200px;"><?php echo isset($post['message']) ? $post['message'] : ''; ?></textarea>
            </div>
        </div>
        <div class="row">
            <label class="label"><?php echo __('control_code'); ?></label>
            <div class="controls">
                <input type="text" maxlength="4" size="4" autocomplete="off" class="valid captchaField <?php echo (isset($errors) AND in_array('captcha', $errors)) ? 'wrong indicator"' : ''; ?>" name="captcha" />
                <div class="captchImg"><?php echo $captcha; ?></div>
            </div>
        </div>
        <div class="row">
            <label class="label"></label>
            <div class="controls">
                <input type="button" class="but submit" value="<?php echo __('send'); ?>" />
            </div>                   
        </div>
    </form>
</div>