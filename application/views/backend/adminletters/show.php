<div class="conteiner">
    <h1>User &rAarr; <?php echo $letter->firstname.' '.$letter->lastname; ?></h1>
    <form class="form_add" id="commentForm" name="form_add" method="post" action="">
        <div class="items_wrap">
            <div class="item_f_wrap">                    
                <div class="item_1">
                    <label class="block title_1">Subject:</label>                          
                    <input name="subject" style="width: 500px;" type="text" class="s_name input_1" value="<?php echo $letter->subject ?>" />
                </div>                    
                <div class="item_1">
                    <label class="block title_1">Message:</label>                          
                    <textarea name="text" style="width: 500px; height: 200px;"><?php echo $letter->text; ?></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
