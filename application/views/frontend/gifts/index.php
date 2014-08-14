<div class="contentBlock">
        <?php foreach ($groups as $group): ?>
        <div class="contentBlock_title titleBiger titleOpener"><?php echo $group->name; ?></div>
        <ul class="presentCatList">
                <?php echo  Model_GiftGroups::get_groups_with_gifts($lang, $group->id,'frontend/gifts/groups'); ?>
        </ul>
        <?php endforeach; ?>
       
</div>
<form class="myCart">
        <div class="contentBlock">
                <div class="contentBlock_title2 titleBiger"><?php echo __('postcard'); ?></div>
                <textarea placeholder="<?php echo __('text_postcard'); ?>"></textarea>
        </div>
        <div class="contentBlock">
                <div class="contentBlock_title2 titleBiger"><?php echo __('my_cart'); ?></div>
                        <div class="clearCart"><?php echo __('clear_list'); ?></div>
                <div class="myCartBlock">
                        <ul>
                        </ul>
                        <div class="deliveryTime">
                                <span class="delivPrice"><span>50</span> <?php echo __('credits'); ?></span>
                                <p><?php echo __('delivery_gifts'); ?></p>
                        </div>
                        <div id="myCartTotal" class="myCartTotal">
                                <span class="cartPriceTotal"><span>0</span> <?php echo __('credits'); ?></span>
                                <p><?php echo __('total'); ?></p>
                        </div>
                </div>
        </div>
        <div class="contentBlock myCartFooter">
                <p><?php echo __('your_order_a _gift_for'); ?> <a href="#">Olga</a> (ID:<span>1744028</span>) <?php echo __('for'); ?> <b class="cpt">484</b> <?php echo __('credits'); ?>, <?php echo __('wich_will_be_delivered_in_3_days'); ?></p>
                <input type="submit" class="isSubmit" value="<?php echo __('order'); ?>">
        </div>
</form>