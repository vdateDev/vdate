<?php if (count($girls)>0): ?>
<form name="sortForm">
    <div class="favSortBlock">

            <span class="sortBy"><?php echo __('sort_result_by'); ?>:&nbsp;</span>
                <select class="sbi" name="sort" onchange="sortForm.submit();">
                    <option value="activity" <?php if ($sort=='activity') echo 'selected'; ?>><?php echo __('last_activity'); ?></option>
                    <option value="age" <?php if ($sort=='age') echo 'selected'; ?>><?php echo __('age'); ?></option>
                    <option value="city" <?php if ($sort=='city') echo 'selected'; ?>><?php echo __('city'); ?></option>
                    <option value="name" <?php if ($sort=='name') echo 'selected'; ?>><?php echo __('name'); ?></option>
            </select>

            <?php echo $pagination; ?>
    </div>
</form>
<div class="favBlock favMale">
    <?php foreach ($girls as $item): ?>
        <div class="favOne favOnline">
                <div class="favOneImg">
                    <?php if (HTML::isset_img('upload/photos/medium/'.$item->photo)): ?>
                        <img src="<?php echo HTML::isset_img('upload/photos/medium/'.$item->photo); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="favOneOpt">
                        <a href="#" class="oneChat"></a>
                        <a href="#" class="oneMess"></a>
                        <a href="#" class="oneFav add_to_fav" data-id="<?php echo $item->id; ?>"></a>
                        <a href="#" class="oneDate"></a>
                        <a href="#" class="oneFlirt"></a>
                </div>
                <div class="favOneInf">
                        <a href="<?php echo strtolower(Route::url('default',array('language'=>$language, 'controller'=>'profile', 'action'=>'girl','id'=>$item->id))); ?>" class="favName color1"><?php echo $item->firstname; ?></a>
                        <span class="favAdr"><?php echo $item->country; ?></span>
                        <a href="#" class="favStatus"></a>
                        <span class="favID"><span class="color1">ID: </span><?php echo $item->id; ?></span>
                        <span class="favAge"><span class="color1"><?php echo __('age'); ?>: </span><?php echo $item->get_age(); ?></span>
                        <span class="favWt"><span class="color1"><?php echo __('weight'); ?>: </span><?php echo $item->get_weight(); ?></span>
                        <span class="favHt"><span class="color1"><?php echo __('height'); ?>: </span><?php echo $item->get_height(); ?></span>
                </div>
                <div class="favOneIni">
                    <div class="favWrapp">
                            <div class="favLChat">
                                    <a href="#">
                                            <span>L</span><span>i</span><span>v</span><span>e</span>&nbsp;<span>C</span><span>h</span><span>a</span><span>t	</span>
                                    </a>
                            </div>
                            <a href="#" class="but1"><?php echo __('send_letter'); ?></a>
                    </div>
                </div>
                <div class="favOneDate"></div>
        </div>
    <?php endforeach; ?>
</div>
<div class="favSortBlock">
    <?php echo $pagination; ?>
</div>
<?php else: ?>
<p><?php echo __('there_is_no_women_online'); ?></p>
<?php endif; ?>
