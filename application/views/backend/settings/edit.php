<div class="conteiner">
    <h1>Site Settings</h1>
    <form class="form_add" id="commentForm" name="form_add" method="post" action="">
        <div class="textright contorl_edit">
            <input class="b middle green" type="submit" name="save" value="Save" style="width:200px;">
        </div>
        <?php foreach($settings AS $key => $value): ?>
            <div class="items_wrap">
                <div class="item_f_wrap">
                    <div class="item_1">
                        <label class="block title_1"><?php echo __($key); ?></label>                
                        <input name="CONFIG[<?php echo $key; ?>]" type="text" class="s_name input_1" value="<?php echo $value; ?>">
                    </div>               
                </div>
            </div>
        <?php endforeach; ?>
        <div class="textright contorl_edit">
            <input class="b middle green" type="submit" name="save" value="Save" style="width:200px;">
        </div>
    </form>    
</div>