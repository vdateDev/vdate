<script type="text/javascript" src="/media/backend/js/tiny/mce/tiny_mce_src.js"></script>
<script type='text/javascript' src="/media/backend/js/tiny/mce/tiny_mce.php"></script>

<div class="conteiner">
    <h1>Letter tamplates &rAarr; Edit template &rAarr; <?php echo $data['name']; ?></h1>

        <form class="form_add" id="commentForm" name="form_add" method="post" action="" enctype="multipart/form-data">
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">
                <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">                                
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
                        <label class="title_1">Name:</label>                        
                        <input type="text" value="<?php echo $data['name']; ?>" class="input_1" style="width:350px;" name="name" />
                    </div>
                    <div class="item_col" style="width:450px">
                        <label class="title_1">key:</label>                        
                        <input type="text" value="<?php echo $data['key']; ?>" class="input_1" style="width:350px;" name="key" disabled />
                    </div>
                </div>
                
                <div class="item_f_wrap">
                    <div class="item_1">
                        <label class="block title_1">Field keys: <span class="red">*</span></label>        
                        <div style="padding: 10px; background-color: white; font-weight: bold;">
                            <?php echo nl2br($data['fields_list']); ?>                        
                        </div>
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
                                    <label class="title_1">Title (<?php echo $lang->name; ?>):</label>                        
                                    <input type="text" value="<?php echo $data[$lang->key]['subject']; ?>" class="input_1" name="<?php echo $lang->key; ?>[subject]" />
                                </div>
                                <div class="item_1">
                                    <label class="block title_1">Message: <span class="red">*</span></label>                           
                                    <textarea style="width: 100%; height: 500px;" rows="7" class="text_1 tiny" name="<?php echo $lang->key; ?>[text]"><?php echo $data[$lang->key]['text']; ?></textarea>
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

