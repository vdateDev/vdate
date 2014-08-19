<div class="leftSIDE">
        <div class="leftSIDE_title"><?php echo __('ledies_profile'); ?></div>
        <div class="leftSIDE_content">
                <div class="ladiesPhoto">
                        <?php if (HTML::isset_img('upload/photos/medium/'.$def_photo->photo)): ?>
                            <img src="<?php echo HTML::isset_img('upload/photos/medium/'.$def_photo->photo); ?>" alt="">
                        <?php else: ?>
                        <?php endif; ?>
                        <div class="ladiesStatus isOnline"></div>
                        <a href="#" class="ladiesReit"></a>
                </div><!-- .ladiesPhoto -->
                <ul class="leftContentOptions">
                        <li><a href="#" class="lcoSM"><span><?php echo __('send_message'); ?></span></a></li>
                        <li><a href="#" class="lcoSFG"><span><?php echo __('send_gifts_and_flowers'); ?></span></a></li>
                        <li class="lco_available"><a href="#" class="lcoAFC"><span><?php echo __('available_for_chat'); ?></span></a></li>
                        <li class="lco_available"><a href="#" class="lcoCO"><span><?php echo __('camera_on'); ?></span></a></li>
                        <li><a href="#" class="lcoATF"><span><?php echo __('add_to_favorites'); ?></span></a></li>
                        <li><a href="#" class="lcoSFF"><span><?php echo __('send_free_flirt'); ?></span></a></li>
                        <li><a href="#" class="lcoSVG"><span><?php echo __('send_virtual_gifts'); ?></span></a></li>
                        <li><a href="#" class="lcoDT"><span><?php echo __('date_me'); ?></span></a></li>
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
                        <div class="rightSIDE_title beforeChat"><?php echo $girl->firstname; ?>, <span><?php echo $age; ?></span></div>
                        <address class="ladiesAddr"><?php echo $girl->city; ?>,<?php echo $girl->region; ?>, <?php echo $girl->country; ?></address>
                        <div class="lID">ID: <span id="ladiesID"><?php echo $girl->user_id; ?></span></div>
                        <div class="overBlock lvV"></div>
                        <div class="liveChat">
                                <div class="lvOpen"></div>
                                <a href="#"><span>L</span><span>i</span><span>v</span><span>e</span>&nbsp;<span>C</span><span>h</span><span>a</span><span>t</span></a>
                        </div>
                </div>
                <div class="rightSIDE_content clearFix">
                        <table class="ladiesParams">
                                <tr>
                                        <td><p><?php echo __('date_of_birth'); ?></p><span><?php echo date('Y-m-d',$girl->birthday); ?></span></td>
                                        <td><p><?php echo __('eyes'); ?></p><span><?php echo $sprav[$girl->eyes]->name; ?></span></td>
                                        <td><p><?php echo __('hair'); ?></p><span><?php echo $sprav[$girl->hair]->name; ?></span></td>
                                </tr>
                                <tr>
                                        <td><p><?php echo __('height'); ?></p><span><?php echo $girl->height_zna; ?> <?php echo __('cm'); ?> (<?php echo $height_feet['feet'].' '.__('feet').' '.$height_feet['inches'].' '.__('inches'); ?>)</span></td>
                                        <td><p><?php echo __('weight'); ?></p><span><?php echo $girl->weight_zna; ?> <?php echo __('kg'); ?> (<?php echo $weight_ibs; ?> <?php echo __('ibs'); ?>)</span></td>
                                        <td><p><?php echo __('number_of_children'); ?></p><span><?php echo $girl->children; ?></span></td>
                                </tr>
                                <tr>
                                        <td><p><?php echo __('smoking'); ?></p><span><?php echo $sprav[$girl->smoking]->name; ?></span></td>
                                        <td><p><?php echo __('drinking'); ?></p><span><?php echo $sprav[$girl->drinking]->name; ?></span></td>
                                        <td><p><?php echo __('religion'); ?></p><span><?php echo $sprav[$girl->religion]->name; ?></span></td>
                                </tr>
                                <tr>
                                        <td><p><?php echo __('marital_status'); ?></p><span><?php echo $sprav[$girl->marital_status]->name; ?></span></td>
                                        <td><p><?php echo __('education'); ?></p><span><?php echo $sprav[$girl->education]->name; ?></span></td>
                                        <td><p><?php echo __('place_of_work'); ?></p><span><?php echo $girl->place_work; ?></span></td>
                                </tr>

                        </table><!-- .ladiesParams -->
                        <?php if (sizeof($photos)>0): ?>
                        <div class="contentBlock">
                                <div class="contentBlock_title"><?php echo __('my_gallery'); ?></div>
                                <div class="sliderMyPhoto">
                                        <ul>
                                                <?php foreach ($photos as $photo): ?>
                                                    <?php if (HTML::isset_img('upload/photos/small/'.$photo->photo)): ?>
                                                        <li>
                                                                <a href="<?php echo HTML::isset_img('upload/photos/big/'.$photo->photo) ?>" class="fresco" data-fresco-group="myPhoto">
                                                                        <img src="<?php echo HTML::isset_img('upload/photos/small/'.$photo->photo) ?>" alt="">
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
                                        <p><?php echo $girl->about; ?></p>
                                </div><!-- .contentBlock -->
                                <div class="contentBlock">
                                        <div class="contentBlock_title"><?php echo __('hobbies'); ?></div>
                                        <p><?php echo $girl->hobbies; ?></p>
                                </div><!-- .contentBlock -->
                                <div class="contentBlock">
                                        <div class="contentBlock_title"><?php echo __('perfect_relationships'); ?></div>
                                        <p><?php echo $girl->relationships; ?></p>
                                </div><!-- .contentBlock -->
                        </div><!-- .contentLeft -->
                </div>
        </div>
</div><!-- .rightSIDE -->