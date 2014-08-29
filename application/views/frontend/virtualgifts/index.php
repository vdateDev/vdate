<div class="contentBlock">
    <div class="contentBlock_title titleBiger titleOpener">Select a Gift</div>
    <ul class="presentCatList virtualGift">
        <li>
             <ul class="presentList">
                     <?php foreach ($gifts as $gift): ?>
                     <li>
                             <p><span><?php echo $gift->name; ?></span></p>
                             <div class="presImg">
                                 <?php if (HTML::isset_img('upload/virtualgifts/'.$gift->image)): ?>
                                 <img src="<?php echo HTML::isset_img('upload/virtualgifts/'.$gift->image); ?>" alt="<?php echo $gift->name; ?>">
                                 <?php endif; ?>
                             </div>
                             <span class="presPrc"><span><?php echo $gift->cost; ?></span> <?php echo __('credits'); ?></span>
                             <a href="#" class="presADD" data-id="<?php echo $gift->id; ?>"><?php echo __('add'); ?></a>
                     </li>
                     
                     <?php endforeach; ?>
             </ul>
        </li>
    </ul>
</div>
<?php if ($girl): ?>
<form class="myCart" method="post" action="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'virtualgifts','action'=>'order'))); ?>">
        <div class="contentBlock">
                <div class="contentBlock_title2 titleBiger"><?php echo __('postcard'); ?></div>
                <textarea placeholder="<?php echo __('text_postcard'); ?>" name="text"></textarea>
        </div>
        <div class="contentBlock">
                <div class="contentBlock_title2 titleBiger"><?php echo __('my_cart'); ?></div>
                        <div class="clearCart"><?php echo __('clear_list'); ?></div>
                <div class="myCartBlock">
                        <ul>
                        </ul>
                        <div id="myCartTotal" class="myCartTotal">
                                <span class="cartPriceTotal"><span>0</span> <?php echo __('credits'); ?></span>
                                <p><?php echo __('total'); ?></p>
                        </div>
                </div>
        </div>
        <div class="order">
            <input type="hidden" name="girl" value="<?php echo $girl->user_id; ?>">
            <div class="order_gifts">
            </div>
        </div>
        <div class="contentBlock myCartFooter">
                <p><?php echo __('your_order_a _gift_for'); ?> <a href="<?php echo strtolower(Route::url('default',array('language'=>$language,'controller'=>'profile','action'=>'girl','id'=>$girl->user_id))); ?>"><?php echo $girl->firstname; ?></a> (ID:<span><?php echo $girl->user_id; ?></span>) <?php echo __('for'); ?> <b class="cpt">484</b> <?php echo __('credits'); ?>.</p>
                <input type="submit" class="isSubmit" value="<?php echo __('order'); ?>">
        </div>
</form>
<?php endif; ?>