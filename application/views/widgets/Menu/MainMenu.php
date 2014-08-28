<div class="headMuneWrapp">
        <div class="site_size clearFix">
                <div class="headMenu">
                        <ul class="clearFix">
                                <li><a href="<?php echo strtolower(Route::url('default', array('language' => $language))); ?>" <?php if ($controller=='main') echo 'class="curMenu"'; ?>><?php echo __('home'); ?></a></li>
                                <li><a href="<?php echo strtolower(Route::url('news', array('language' => $language))); ?>" <?php if ($controller=='news') echo 'class="curMenu"'; ?>><?php echo __('news'); ?></a></li>
                                <li><a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'search'))); ?>" <?php if ($controller=='search') echo 'class="curMenu"'; ?>><?php echo __('search'); ?></a></li>
                        </ul>
                </div>
                <div class="overBlock smV"></div>
        </div>
</div><!-- .headMuneWrapp -->