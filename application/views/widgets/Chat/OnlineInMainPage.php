<?php if (count($girls)>0): ?>
<div class="indexMod01">
        <div class="indexModule">
                <div class="imTTL imT_chat"><?php echo __('chat_with_online_girls_free'); ?></div>
                <div class="slidersList">
                    <?php $n=$cnt_in_slider; $i=0; ?>
                    <?php if ($i<$cnt_all): ?>
                        <div class="sliList">
                                <div class="sliList_ini">
                                        <ul>   
                                                <?php for($i=0; $i<$n; $i++):  ?>
                                                    <?php if ($i<$cnt_all):?>
                                                        <?php echo $i; ?>
                                                        <li>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_img isOnline">
                                                                        <?php if (HTML::isset_img('upload/photos/small/'.$girls[$i]->photo)): ?>
                                                                            <img src="<?php echo HTML::isset_img('upload/photos/small/'.$girls[$i]->photo); ?>" height="104" width="87" alt="">
                                                                        <?php endif; ?>
                                                                </a>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_name"><?php echo $girls[$i]->firstname; ?></a>
                                                                <a href="#" class="chatNow"></a>
                                                                <p><?php echo __('age'); ?>: <span><?php echo $girls[$i]->get_age(); ?></span></p>
                                                                <p><?php echo __('city'); ?>: <span><?php echo $girls[$i]->city; ?></span></p>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                        </ul>
                                        <div class="sliList_Prev0 slid_prev"></div>
                                        <div class="sliList_Next0 slid_next"></div>
                                </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php $n=$n+$cnt_in_slider; $j=$i; ?>
                    <?php if ($i<$cnt_all): ?>
                   
                        <div class="sliList">
                                <div class="sliList_ini">
                                        <ul>   
                                                <?php for($i=$j; $i<$n; $i++):  ?>
                                                    <?php if ($i<$cnt_all):?>
                                                        <li>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_img isOnline">
                                                                        <?php if (HTML::isset_img('upload/photos/small/'.$girls[$i]->photo)): ?>
                                                                            <img src="<?php echo HTML::isset_img('upload/photos/small/'.$girls[$i]->photo); ?>" height="104" width="87" alt="">
                                                                        <?php endif; ?>
                                                                </a>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_name"><?php echo $girls[$i]->firstname; ?></a>
                                                                <a href="#" class="chatNow"></a>
                                                                <p><?php echo __('age'); ?>: <span><?php echo $girls[$i]->get_age(); ?></span></p>
                                                                <p><?php echo __('city'); ?>: <span><?php echo $girls[$i]->city; ?></span></p>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                        </ul>
                                        <div class="sliList_Prev1 slid_prev"></div>
                                        <div class="sliList_Next1 slid_next"></div>
                                </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php $n=$n+$cnt_in_slider; $j=$i; ?>
                    <?php if ($i<$cnt_all): ?>
                   
                        <div class="sliList">
                                <div class="sliList_ini">
                                        <ul>   
                                                <?php for($i=$j; $i<$n; $i++):  ?>
                                                    <?php if ($i<$cnt_all):?>
                                                        <li>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_img isOnline">
                                                                        <?php if (HTML::isset_img('upload/photos/small/'.$girls[$i]->photo)): ?>
                                                                            <img src="<?php echo HTML::isset_img('upload/photos/small/'.$girls[$i]->photo); ?>" height="104" width="87" alt="">
                                                                        <?php endif; ?>
                                                                </a>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_name"><?php echo $girls[$i]->firstname; ?></a>
                                                                <a href="#" class="chatNow"></a>
                                                                <p><?php echo __('age'); ?>: <span><?php echo $girls[$i]->get_age(); ?></span></p>
                                                                <p><?php echo __('city'); ?>: <span><?php echo $girls[$i]->city; ?></span></p>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                        </ul>
                                        <div class="sliList_Prev2 slid_prev"></div>
                                        <div class="sliList_Next2 slid_next"></div>
                                </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php $n=$n+$cnt_in_slider; $j=$i; ?>
                    <?php if ($i<$cnt_all): ?>
                   
                        <div class="sliList">
                                <div class="sliList_ini">
                                        <ul>   
                                                <?php for($i=$j; $i<$n; $i++):  ?>
                                                    <?php if ($i<$cnt_all):?>
                                                        <li>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_img isOnline">
                                                                        <?php if (HTML::isset_img('upload/photos/small/'.$girls[$i]->photo)): ?>
                                                                            <img src="<?php echo HTML::isset_img('upload/photos/small/'.$girls[$i]->photo); ?>" height="104" width="87" alt="">
                                                                        <?php endif; ?>
                                                                </a>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_name"><?php echo $girls[$i]->firstname; ?></a>
                                                                <a href="#" class="chatNow"></a>
                                                                <p><?php echo __('age'); ?>: <span><?php echo $girls[$i]->get_age(); ?></span></p>
                                                                <p><?php echo __('city'); ?>: <span><?php echo $girls[$i]->city; ?></span></p>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                        </ul>
                                        <div class="sliList_Prev3 slid_prev"></div>
                                        <div class="sliList_Next3 slid_next"></div>
                                </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php $n=$n+$cnt_in_slider; $j=$i; ?>
                    <?php if ($i<$cnt_all): ?>
                   
                        <div class="sliList">
                                <div class="sliList_ini">
                                        <ul>   
                                                <?php for($i=$j; $i<$n; $i++):  ?>
                                                    <?php if ($i<$cnt_all):?>
                                                        <li>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_img isOnline">
                                                                        <?php if (HTML::isset_img('upload/photos/small/'.$girls[$i]->photo)): ?>
                                                                            <img src="<?php echo HTML::isset_img('upload/photos/small/'.$girls[$i]->photo); ?>" height="104" width="87" alt="">
                                                                        <?php endif; ?>
                                                                </a>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_name"><?php echo $girls[$i]->firstname; ?></a>
                                                                <a href="#" class="chatNow"></a>
                                                                <p><?php echo __('age'); ?>: <span><?php echo $girls[$i]->get_age(); ?></span></p>
                                                                <p><?php echo __('city'); ?>: <span><?php echo $girls[$i]->city; ?></span></p>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                        </ul>
                                        <div class="sliList_Prev4 slid_prev"></div>
                                        <div class="sliList_Next4 slid_next"></div>
                                </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php $n=$n+$cnt_in_slider; $j=$i; ?>
                    <?php if ($i<$cnt_all): ?>
                   
                        <div class="sliList">
                                <div class="sliList_ini">
                                        <ul>   
                                                <?php for($i=$j; $i<$n; $i++):  ?>
                                                    <?php if ($i<$cnt_all):?>
                                                        <li>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_img isOnline">
                                                                        <?php if (HTML::isset_img('upload/photos/small/'.$girls[$i]->photo)): ?>
                                                                            <img src="<?php echo HTML::isset_img('upload/photos/small/'.$girls[$i]->photo); ?>" height="104" width="87" alt="">
                                                                        <?php endif; ?>
                                                                </a>
                                                                <a href="<?php echo strtolower(Route::url('default',array('controller'=>'profile', 'action'=>'girl', 'id'=>$girls[$i]->id))); ?>" class="sliL_name"><?php echo $girls[$i]->firstname; ?></a>
                                                                <a href="#" class="chatNow"></a>
                                                                <p><?php echo __('age'); ?>: <span><?php echo $girls[$i]->get_age(); ?></span></p>
                                                                <p><?php echo __('city'); ?>: <span><?php echo $girls[$i]->city; ?></span></p>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                        </ul>
                                        <div class="sliList_Prev5 slid_prev"></div>
                                        <div class="sliList_Next5 slid_next"></div>
                                </div>
                        </div>
                    <?php endif; ?>
                    
                </div>
        </div>
</div>
<?php endif; ?>