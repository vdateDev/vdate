<div class="conteiner">
    <h1>Send letter to user &rAarr; <?php echo $user->firstname.' '.$user->lastname; ?></h1>
    <form class="form_add" id="commentForm" name="form_add" method="post" action="">
        <div class="textright contorl_edit">
            <input class="b middle green" type="submit" name="send" value="Send">
        </div>
        <div class="items_wrap">
            <div class="item_f_wrap">                    
                <div class="item_1">
                    <label class="block title_1">Subject:</label>                          
                    <input name="subject" style="width: 500px;" type="text" class="s_name input_1" value="<?php echo $data['subject']; ?>" />
                </div>                    
                <div class="item_1">
                    <label class="block title_1">message:</label>                          
                    <textarea name="text" style="width: 500px; height: 200px;"><?php echo $data['text']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="textright contorl_edit">
            <input class="b middle green" type="submit" name="send" value="Send">                
        </div>	
    </form>
</div>
