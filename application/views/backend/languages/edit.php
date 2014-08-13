<div class="conteiner">
    <h1>Edit language &rAarr; <?php echo $object->name; ?></h1>    

        <form class="form_add" id="commentForm" name="form_add" method="post" action="">
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">               
                <input class="b middle blue" type="submit" name="save_and_add" value="Save and add new">
                <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">                                
            </div>
            <div class="items_wrap">
                <div class="item_f_wrap">
                    <div class="item_col">
                        <label class="title_1">Status:</label>                        
                        <select name='status'>
                            <option value="0" <?php echo $object->status == 0 ? 'selected' : ''; ?>>Unpublished</option>
                            <option value="1" <?php echo $object->status == 1 ? 'selected' : ''; ?>>Published</option>
                        </select>
                    </div>                                
                    <div class="item_col">
                        <label class="title_1">Default:</label>                        
                        <select name='default'>
                            <option value="0" <?php echo $object->default == 0 ? 'selected' : ''; ?>>No</option>
                            <option value="1" <?php echo $object->default == 1 ? 'selected' : ''; ?>>Yes</option>
                        </select>
                    </div>   
                </div>
            </div>
                
            <div class="item_f_wrap">
                <div class="item_1">
                    <label class="block title_1">Language <span class="red">*</span>:</label>                           
                    <input name="name" type="text" class="s_name input_1" value="<?php echo $object->name; ?>" />
                </div>
                <div class="item_1">
                    <label class="block title_1">Key <span class="red">*</span>:</label>                           
                    <input name="key" type="text" class="s_name input_1" value="<?php echo $object->key; ?>" />
                </div>                
             </div>

            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">              
                <input class="b middle blue" type="submit" name="save_and_add" value="Save and add new">
                <input class="b middle" type="submit" name="save_and_back" value="save and back to the list">         
            </div>	
        </form>	
    </div>
</div>