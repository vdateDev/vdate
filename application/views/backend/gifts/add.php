<script type="text/javascript" src="/media/backend/js/tiny/mce/tiny_mce_src.js"></script>
<script type='text/javascript' src="/media/backend/js/tiny/mce/tiny_mce.php"></script>

<div class="conteiner">
    <h1>Add new gift</h1>

        <form class="form_add" id="commentForm" name="form_add" method="post" action="" enctype="multipart/form-data">
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
                            <option value="0" <?php echo $data['status'] == 0 ? 'selected' : ''; ?>>Unpublished</option>
                            <option value="1" <?php echo $data['status'] == 1 ? 'selected' : ''; ?>>Published</option>
                        </select>
                    </div>   
                    <div class="item_col">
                        <label class="title_1">Category:</label>                        
                        <select name='group_id'>
                            <option value=""></option>
                             <?php echo $categories; ?>
                        </select>
                    </div> 
                    <div class="item_col">
                        <label class="title_1">Count credits:</label>                        
                        <input type="text" name="cost" value="<?php echo $data['cost']; ?>" class="input_1" style="width:150px;" />
                    </div>
                </div>
                
                <?php if (sizeof($languages) > 0): ?>
                    <ul class="langTabs">
                        <?php foreach($languages AS $lang): ?>                            
                            <li data-key="<?php echo $lang->key; ?>" <?php echo $lang->default == 1 ? 'class="active"' : ''; ?>><?php echo $lang->name; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="langsContentContainer">
                    <?php foreach($languages AS $lang): ?>
                        <div class="langBox <?php echo $lang->default == 1 ? 'active' : ''; ?>" id="lang-<?php echo $lang->key; ?>">
                            <div class="item_f_wrap">
                                <div class="item_1">
                                    <label class="block title_1">Gift name <span class="red">*</span>:</label>                           
                                    <input name="<?php echo $lang->key; ?>[name]" type="text" class="s_name input_1" value="<?php echo $data[$lang->key]['name']; ?>" <?php echo $lang->default == 1 ? 'id="name"' : ''; ?>>
                                </div>
                             </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="item_f_wrap">                    
                    <div class="item_1">
                       <label class="block title_1">Image <span class="red">*</span>:</label>                          
                       <input name="image" type="file" class="s_name input_1" value="" id="preview">                         
                    </div>
                </div>
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">
                <input class="b middle blue" type="submit" name="save_and_add" value="Save and add new">
                <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">         
            </div>	
        </form>	
    </div>
</div>

