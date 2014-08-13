<div class="conteiner">
    <h1>SEO &rAarr; Edit &rAarr; <?php echo $data['name']; ?></h1>

        <form class="form_add" id="commentForm" name="form_add" method="post" action="" enctype="multipart/form-data">
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">
                
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
                    <div class="item_col" style="width:450px">
                        <label class="title_1">Name:</label>                        
                        <input type="text" value="<?php echo $data['name']; ?>" class="input_1" style="width:350px;" name="name" />
                    </div>
                    <div class="item_col" style="width:450px">
                        <label class="title_1">Controller:</label>                        
                        <input type="text" value="<?php echo $data['controller']; ?>" class="input_1" style="width:350px;" name="controller" />
                    </div>
                    <div class="item_col" style="width:350px">
                        <label class="title_1">Action:</label>                        
                        <input type="text" value="<?php echo $data['action']; ?>" class="input_1" style="width:200px;" name="action" />
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
                                    <label class="block title_1">page Title (<strong><?php echo $lang->name; ?></strong>): <span class="red">*</span></label>                           
                                    <input type="text" name="<?php echo $lang->key; ?>[page_title]" class="input_1" value="<?php echo $data[$lang->key]['page_title']; ?>" />
                                </div>
                                <div class="item_1">
                                    <label class="block title_1">Page H1 <span class="red">*</span>:</label>                            
                                    <input name="<?php echo $lang->key; ?>[page_h1]" type="text" class="s_name input_1" value="<?php echo $data[$lang->key]['page_h1']; ?>" />
                                </div>
                                <div class="item_1">
                                    <label class="block title_1">Page Description: <span class="red">*</span></label>                           
                                    <textarea rows="7" class="text_1" name="<?php echo $lang->key; ?>[page_description]"><?php echo $data[$lang->key]['page_description']; ?></textarea>
                                </div>
                                <div class="item_1">
                                    <label class="block title_1">Page Keywords: <span class="red">*</span></label>                            
                                    <textarea name="<?php echo $lang->key; ?>[page_keywords]" rows="7" class="text_1"><?php echo $data[$lang->key]['page_keywords']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>                
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">
                
                <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">         
            </div>	
        </form>	
    </div>
</div>