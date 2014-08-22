<div class="indexModule">
        <div class="imTTL imT_videochat"><?php echo __('free_video_chat'); ?></div>
        <div class="videoIndMod">
                <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls preload="auto" width="100%" height="270" poster="/media/frontend/video/video_index.jpg" data-setup="{}">
                        <source src="/media/frontend/video/video_index.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                        <!-- <source src="video/video01.webm" type='video/webm; codecs="vp8, vorbis"' />
                        <source src="video/video01.ogv" type='video/ogg; codecs="theora, vorbis"' /> -->
                        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                </video>
        </div>
        <p class="defP"><?php echo __('thousand_ladies_wating_for_you'); ?> <a href="<?php echo strtolower(Route::url('auth', array('language'=>$language, 'action'=>'registration'))); ?>"><?php echo __('sign_up'); ?></a> <?php echo __('and_enjoy_the_videochat'); ?></p>
</div>