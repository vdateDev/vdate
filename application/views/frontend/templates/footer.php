

<footer id="footer">
<div class="site_size">
        <div class="footerUp clearFix">
            <?php if (isset($bottommenu))  echo $bottommenu; ?>
                <div class="contactInform flr">
                        <a href="mailto:info@VictoriaDate.com">info@VictoriaDate.com</a>
                        <span>8 800 200 28 21</span>
                </div>
        </div>
        <div class="footerBottom clearFix">
            <span class="copyR">All Rights Reserved © VictoriaDate.com 2014</span>
            <a href="#" class="wezom">Created by web-studio</a>
        </div>
</div> <!-- .site_size -->
</footer><!-- .footer -->
<span style="display: none;" id="site-language"><?php echo $language; ?></span>
<?php $message = $session->get('site_message'); ?>
<span style="display: none;" data-type="<?php echo $message['type']; ?>" data-time="<?php echo $message['time'] * 1000; ?>" id="site-message"><?php echo $message['text']; ?></span>
<?php $session->delete('site_message'); ?>
