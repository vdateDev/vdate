<script type="text/javascript" src="/media/backend/js/tiny/mce/tiny_mce_src.js"></script>
<script type='text/javascript' src="/media/backend/js/tiny/mce/tiny_mce.php"></script>

<div class="conteiner">
    <h1>Pages management &rAarr; Add new page</h1>

        <form class="form_add" id="commentForm" name="form_add" method="post" action="" enctype="multipart/form-data">
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Сохранить">
                <input class="b middle blue" type="submit" name="save_and_add" value="Сохранить и добавить новую">
                <input class="b middle" type="submit" name="save_and_back" value="Сохранить и вернуться к списку">                                
            </div>
            <div class="items_wrap">
                <div class="item_f_wrap">
                    <div class="item_col">
                        <label class="title_1">Status:</label>                        
                        <select name="status">
                            <option value="0" <?php echo $data['status'] == 0 ? 'selected' : ''; ?>>Unpublished</option>
                            <option value="1" <?php echo $data['status'] == 1 ? 'selected' : ''; ?>>Published</option>
                        </select>
                    </div>            
                    <div class="item_col" style="width:450px">
                        <label class="title_1">URL:</label>                        
                        <input type="text" value="<?php echo $data['url']; ?>" class="input_1" style="width:350px;" name="url" id="url"/>
                    </div>
                    <div class="item_col" style="width:450px">
                        <label class="title_1">Show in footer:</label>        
                          <select name="show_footer">
                            <option value="0" <?php echo $data['show_footer'] == 0 ? 'selected' : ''; ?>>No</option>
                            <option value="1" <?php echo $data['show_footer'] == 1 ? 'selected' : ''; ?>>Yes</option>
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
                                    <label class="block title_1">Page name <span class="red">*</span>:</label>                           
                                    <input name="<?php echo $lang->key; ?>[name]" type="text" class="s_name input_1" value="<?php echo $data[$lang->key]['name']; ?>" <?php echo $lang->default == 1 ? 'id="name"' : ''; ?>>
                                </div>
                                <div class="item_1">
                                    <label class="block title_1">Content of the page:</label>                           
                                    <textarea name="<?php echo $lang->key; ?>[text]" rows="30" style="width: 100%; height: 567px;" class="text_1 tiny"><?php echo $data[$lang->key]['text']; ?></textarea>
                                </div>                            
                             </div>
                            <div class="item_f_wrap">
                                <div class="item_1">
                                    <label class="block title_1">Page title: <span class="red">*</span></label>                           
                                    <input type="text" name="<?php echo $lang->key; ?>[page_title]" class="input_1" value="<?php echo $data[$lang->key]['page_title']; ?>" />
                                </div>
                                <div class="item_1">
                                    <label class="block title_1">Page H1<span class="red">*</span>:</label>                            
                                    <input name="<?php echo $lang->key; ?>[page_h1]" type="text" class="s_name input_1" value="<?php echo $data[$lang->key]['page_h1']; ?>" />
                                </div>
                                <div class="item_1">
                                    <label class="block title_1">Page keywords: <span class="red">*</span></label>                            
                                    <textarea name="<?php echo $lang->key; ?>[page_keywords]" rows="7" class="text_1"><?php echo $data[$lang->key]['page_keywords']; ?></textarea>
                                </div>
                                <div class="item_1">
                                    <label class="block title_1">Page description: <span class="red">*</span></label>                           
                                    <textarea rows="7" class="text_1" name="<?php echo $lang->key; ?>[page_description]"><?php echo $data[$lang->key]['page_description']; ?></textarea>
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

<script type="text/javascript">
$(document).ready(function() {    
    $('#name').syncTranslit({ 
        destination: 'url', 
        urlSeparator: '-' 
    });

    $.datepicker.setDefaults( $.extend($.datepicker.regional["ru"]) );
    $("#datepicker").datepicker();
});
</script>