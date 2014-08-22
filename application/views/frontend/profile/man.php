<div class="leftSIDE">
        <div class="leftSIDE_title"><?php echo __('man_profile'); ?></div>
        <div class="leftSIDE_content">
                <div class="ladiesPhoto">
                        <?php if (HTML::isset_img('upload/photos/big/'.$def_photo->photo)): ?>
                            <img src="<?php echo HTML::isset_img('upload/photos/big/'.$def_photo->photo); ?>" alt="">
                        <?php else: ?>
                        <?php endif; ?>
                        <div class="ladiesStatus isOnline"></div>
                       <a href="#" class="ladiesReit add_to_fav" data-id="<?php echo $man->user_id; ?>"></a>
                </div><!-- .ladiesPhoto -->
                <ul class="leftContentOptions">
                        <li><a href="#" class="lcoSM"><span><?php echo __('send_message'); ?></span></a></li>
                        <li class="lco_available"><a href="#" class="lcoAFC"><span><?php echo __('available_for_chat'); ?></span></a></li>
                        <li class="lco_available"><a href="#" class="lcoCO"><span><?php echo __('camera_on'); ?></span></a></li>
                        <li><a href="#" class="lcoATF add_to_fav" data-id="<?php echo $man->user_id; ?>"><span><?php echo __('add_to_favorites'); ?></span></a></li>
                        <li><a href="#" class="lcoSFF"><span><?php echo __('send_free_flirt'); ?></span></a></li>
                </ul><!-- .leftContentOptions -->
                <div class="clear"></div>
        </div><!-- .leftSIDE_content -->
        <div class="leftSIDE_advModule">
            <a href="#" target="_blank"><img src="/media/frontend/pic/images/banner01.jpg" alt=""></a>
        </div>
</div><!-- .leftSIDE -->
<div class="rightSIDE">
        <div class="rightSIDE_contentWrapp">
                <div class="rightSIDE_head">
                        <div class="rightSIDE_title beforeChat"><?php echo $man->firstname; ?>, <span><?php echo $age; ?></span></div>
                        <address class="ladiesAddr"><?php echo $man->city; ?>,<?php echo $man->region; ?>, <?php echo $man->country; ?></address>
                        <div class="lID">ID: <span id="ladiesID"><?php echo $man->user_id; ?></span></div>
                        <div class="overBlock lvV"></div>
                        <div class="liveChat">
                                <div class="lvOpen"></div>
                                <a href="#"><span>L</span><span>i</span><span>v</span><span>e</span>&nbsp;<span>C</span><span>h</span><span>a</span><span>t</span></a>
                        </div>
                </div>
                <div class="rightSIDE_content clearFix">
                        <table class="ladiesParams">
                                <tr>
                                        <?php if ($man->birthday>0): ?> <td><p><?php echo __('date_of_birth'); ?></p><span><?php echo date('Y-m-d',$man->birthday); ?></span></td> <?php endif; ?>
                                        <?php if ($man->eyes>0): ?> <td><p><?php echo __('eyes'); ?></p><span><?php echo $sprav[$man->eyes]->name; ?></span></td><?php endif; ?>
                                        <?php if ($man->hair>0): ?><td><p><?php echo __('hair'); ?></p><span><?php echo $sprav[$man->hair]->name; ?></span></td><?php endif; ?>
                                </tr>
                                <tr>
                                        <?php if ($man->height>0): ?><td><p><?php echo __('height'); ?></p><span><?php echo $man->get_height(); ?></span></td><?php endif; ?>
                                        <?php if ($man->weight>0): ?><td><p><?php echo __('weight'); ?></p><span><?php echo $man->get_weight(); ?></span></td><?php endif; ?>
                                        <?php if ($man->children!=''): ?><td><p><?php echo __('number_of_children'); ?></p><span><?php echo $man->children; ?></span></td><?php endif; ?>
                                </tr>
                                <tr>
                                        <?php if ($man->smoking>0): ?><td><p><?php echo __('smoking'); ?></p><span><?php echo $sprav[$man->smoking]->name; ?></span></td><?php endif; ?>
                                        <?php if ($man->drinking>0): ?><td><p><?php echo __('drinking'); ?></p><span><?php echo $sprav[$man->drinking]->name; ?></span></td><?php endif; ?>
                                        <?php if ($man->religion>0): ?><td><p><?php echo __('religion'); ?></p><span><?php echo $sprav[$man->religion]->name; ?></span></td><?php endif; ?>
                                </tr>
                                <tr>
                                        <?php if ($man->marital_status>0): ?><td><p><?php echo __('marital_status'); ?></p><span><?php echo $sprav[$man->marital_status]->name; ?></span></td><?php endif; ?>
                                        <?php if ($man->education>0): ?><td><p><?php echo __('education'); ?></p><span><?php echo $sprav[$man->education]->name; ?></span></td><?php endif; ?>
                                        <?php if ($man->place_work!=''): ?><td><p><?php echo __('place_of_work'); ?></p><span><?php echo $man->place_work; ?></span></td><?php endif; ?>
                                </tr>

                        </table><!-- .ladiesParams -->
                        <?php if (sizeof($photos)>0): ?>
                        <div class="contentBlock">
                                <div class="contentBlock_title"><?php echo __('my_gallery'); ?></div>
                                <div class="sliderMyPhoto">
                                        <ul>
                                                <?php foreach ($photos as $photo): ?>
                                                    <?php if (HTML::isset_img('upload/photos/medium/'.$photo->photo)): ?>
                                                        <li>
                                                                <a href="<?php echo HTML::isset_img('upload/photos/large/'.$photo->photo) ?>" class="fresco" data-fresco-group="myPhoto">
                                                                        <img src="<?php echo HTML::isset_img('upload/photos/medium/'.$photo->photo) ?>" alt="">
                                                                </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                        </ul>
                                        <div class="sliderMyPhoto_Prev slid_prev"></div>
                                        <div class="sliderMyPhoto_Next slid_next"></div>
                                </div>
                        </div><!-- .contentBlock -->
                        <?php endif; ?>
                        <div class="contentRight">
                                <div class="contentBlock videoWrapp">
                                        <div class="contentBlock_title"><?php echo __('my_video'); ?></div>
                                       <!-- <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls preload="auto" width="100%" height="270" poster="video/video01.jpg" data-setup="{}">
                                        <source src="video/video01.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        <source src="video/video01.webm" type='video/webm; codecs="vp8, vorbis"'>
                                        <source src="video/video01.ogv" type='video/ogg; codecs="theora, vorbis"'>
                                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                        </video>-->
                                </div>
                        </div><!-- .contentRight -->
                        <div class="contentLeft">
                                <div class="contentBlock">
                                        <div class="contentBlock_title"><?php echo __('about_me'); ?></div>
                                        <p><?php echo $man->about; ?></p>
                                </div><!-- .contentBlock -->
                                <div class="contentBlock">
                                        <div class="contentBlock_title"><?php echo __('hobbies'); ?></div>
                                        <p><?php echo $man->hobbies; ?></p>
                                </div><!-- .contentBlock -->
                                <div class="contentBlock">
                                        <div class="contentBlock_title"><?php echo __('perfect_relationships'); ?></div>
                                        <p><?php echo $man->relationships; ?></p>
                                </div><!-- .contentBlock -->
                        </div><!-- .contentLeft -->
                </div>
        </div>
</div><!-- .rightSIDE -->