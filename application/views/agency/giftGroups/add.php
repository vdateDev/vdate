<script type="text/javascript" src="/media/agency/js/tiny/mce/tiny_mce_src.js"></script>
<script type='text/javascript' src="/media/agency/js/tiny/mce/tiny_mce.php"></script>

<div class="conteiner">
    <h1>Add new category of gifts</h1>

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
                        <label class="title_1">Parent category:</label>                        
                        <select name='group_id'>
                            <option value="0" ></option>
                            <?php  foreach ($groups as $group): ?>
                            <option value="<?php echo $group->id; ?>" <?php echo $group->id == $data['group_id'] ? 'selected' : ''; ?>><?php echo $group->name; ?></option>
                            <?php endforeach; ?>
                        </select>
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
                                    <label class="block title_1">Category name <span class="red">*</span>:</label>                           
                                    <input name="<?php echo $lang->key; ?>[name]" type="text" class="input_1" value="<?php echo $data[$lang->key]['name']; ?>" <?php echo $lang->default == 1 ? 'id="name"' : ''; ?>>
                                </div>
                             </div>
	
                        </div>
                    <?php endforeach; ?>
                </div>
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">
                <input class="b middle blue" type="submit" name="save_and_add" value="Save and add new">
                <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">         
            </div>	
        </form>	
    </div>
</div>
