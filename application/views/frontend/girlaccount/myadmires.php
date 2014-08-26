<p class="par1"><?php echo __('men_admire_list'); ?> (<span><?php echo $count; ?></span> <?php echo __('men'); ?>)</p>
<div class="filter_bar">
</div>

<?php if (count($men)>0): ?>
<form name="sortForm">
    <div class="favSortBlock">
            <span class="sortBy"><?php echo __('sort_result_by'); ?>:&nbsp;</span>
                <select class="sbi" name="sort" onchange="sortForm.submit();">
                    <option value="last"></option>
                    <option value="activity" <?php if ($sort=='activity') echo 'selected'; ?>><?php echo __('last_activity'); ?></option>
                    <option value="age" <?php if ($sort=='age') echo 'selected'; ?>><?php echo __('age'); ?></option>
                    <option value="city" <?php if ($sort=='city') echo 'selected'; ?>><?php echo __('city'); ?></option>
                    <option value="name" <?php if ($sort=='name') echo 'selected'; ?>><?php echo __('name'); ?></option>
            </select>

            <?php echo $pagination; ?>
    </div>
</form>
<from name="delForm" id="delForm" method="post">
<div class="favBlock favMale">
    <?php foreach ($men as $item): ?>
        <div class="favOne <?php if ($item->is_online()) echo 'favOnline'; ?>">
                <div class="favOneImg">
                    <?php if (HTML::isset_img('upload/photos/medium/'.$item->photo)): ?>
                        <img src="<?php echo HTML::isset_img('upload/photos/medium/'.$item->photo); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="favOneOpt">
                        <a href="#" class="oneChat"></a>
                        <a href="#" class="oneMess"></a>
                        <a href="#" class="oneFav add_to_fav" data-id="<?php echo $item->id; ?>"></a>
                        <a href="#" class="oneFlirt"></a>
                </div>
                <div class="favOneInf">
                        <a href="<?php echo strtolower(Route::url('default',array('language'=>$language, 'controller'=>'profile', 'action'=>'man','id'=>$item->id))); ?>" class="favName color1"><?php echo $item->firstname; ?></a>
                        <span class="favAdr"><?php echo $item->country; ?></span>
                        <a href="#" class="favStatus"></a>
                        <span class="favID"><span class="color1">ID: </span><?php echo $item->id; ?></span>
                        <span class="favAge"><span class="color1"><?php echo __('age'); ?>: </span><?php echo $item->get_age(); ?></span>
                        <span class="favWt"><span class="color1"><?php echo __('weight'); ?>: </span><?php echo $item->get_weight(); ?></span>
                        <span class="favHt"><span class="color1"><?php echo __('height'); ?>: </span><?php echo $item->get_height(); ?></span>
                </div>
                <div class="favOneIni">
                        <div class="favWrapp isFamale">
                                <a class="butt2 isHover"><?php echo __('email_me'); ?></a>
                                <a href="#" class="but1"><?php echo __('mail_history'); ?></a>
                        </div>
                </div>
                <div class="favOneDate"></div>
        </div>
    <?php endforeach; ?>
</div>
</form>
<div class="favSortBlock">
    <?php echo $pagination; ?>
</div>
<?php else: ?>
<p><?php echo __('there_is_no_men_in_favorites'); ?></p>
<?php endif; ?>


<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="<?php echo __('delete_favorite'); ?>">
    <h2 align="center"><?php echo __('are_you_sure'); ?></h2>
</div>