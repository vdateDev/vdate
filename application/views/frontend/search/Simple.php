    <div style="width:30%;display: inline-block;">
        <div>
            Her age<br>
            from <input type="text" style="width:35%;" name="ageFrom" value="<?php echo isset($data['ageFrom']) ? $data['ageFrom'] : NULL?>" class="fSearch"> 
            to   <input type="text" style="width:35%;" name="ageTo" value="<?php echo isset($data['ageTo']) ? $data['ageTo'] : NULL?>" class="fSearch">
        </div>
        <br>
        <div>
            Height<br>
            from 
                <select style="width:35%;" name="heightFrom" class="fSearch">
                    <option></option>
                    <?php foreach($spr['height'] as $height):?>
                    <option value="<?php echo $height->zna; ?>" <?php if(isset($data['heightFrom']) AND $data['heightFrom'] = $height->zna) echo 'selected';?>><?php echo $height->zna; ?></option>
                    <?php endforeach;?>
                </select>
            to 
                <select style="width:35%;" name="heightTo" class="fSearch">
                    <option></option>
                    <?php foreach($spr['height'] as $height):?>
                    <option value="<?php echo $height->zna; ?>" <?php if(isset($data['heightTo']) AND $data['heightTo'] == $height->zna) echo 'selected';?>><?php echo $height->zna; ?></option>
                    <?php endforeach;?>
                </select>
        </div>
        <br>
        <div>
            Weigth<br>
            from 
                <select style="width:35%;" name="weigthFrom" class="fSearch">
                    <option></option>
                    <?php foreach($spr['weigth'] as $weigth):?>
                    <option value="<?php echo $weigth->zna; ?>" <?php if(isset($data['weigthFrom']) AND $data['weigthFrom'] = $weigth->zna) echo 'selected';?>><?php echo $weigth->zna; ?></option>
                    <?php endforeach;?>
                </select> 
            to 
                <select style="width:35%;" name="weigthTo" class="fSearch">
                    <option></option>
                    <?php foreach($spr['weigth'] as $weigth):?>
                    <option value="<?php echo $weigth->zna; ?>" <?php if(isset($data['weigthTo']) AND $data['weigthTo'] == $weigth->zna) echo 'selected';?>><?php echo $weigth->zna; ?></option>
                    <?php endforeach;?>
                </select>
        </div>
    </div>
    <div style="width:30%;display: inline-block;">
        <div>
            Country<br>
                <select name="country" class="fSearch">
                    <option></option>
                    <?php foreach ($spr['country'] as $key => $val):?>
                    <option value="<?php echo $val; ?>" <?php if(isset($data['country']) AND $data['country'] == $val) echo 'selected';?>><?php echo $val; ?></option>
                    <?php endforeach;?>
                </select>
        </div>
        <br>
        <div>
            Children<br>
                <select name="children" class="fSearch">
                    <option></option>
                    <?php foreach($spr['children'] as $val):?>
                    <option value="<?php echo $val; ?>" <?php if(isset($data['children']) AND $data['children'] == $val) echo 'selected';?>><?php echo $val; ?></option>
                    <?php endforeach;?>
                </select>
        </div>
        <br>
        <div>
            Hair Color<br>
                <select style="width:35%;" name="hair" class="fSearch">
                    <option></option>
                    <?php foreach($spr['hair'] as $hair):?>
                    <option value="<?php echo $hair->name; ?>" <?php if(isset($data['hair']) AND $data['hair'] == $hair->name) echo 'selected';?>><?php echo $hair->name; ?></option>
                    <?php endforeach;?>
                </select>
        </div>
    </div>
    <div style="width:30%;display: inline-block;">
        <div>
            Smoking<br>
                <select name="smoking" class="fSearch">
                    <option></option>
                    <?php foreach($spr['smoking'] as $smoking):?>
                    <option value="<?php echo $smoking->name; ?>" <?php if(isset($data['smoking']) AND $data['smoking'] == $smoking->name) echo 'selected';?>><?php echo $smoking->name; ?></option>
                    <?php endforeach;?>
                </select>
        </div>
        <br>
        <div>
            English<br>
                <select name="english" class="fSearch">
                    <option></option>
                    <?php foreach ($spr['english'] as $val):?>
                    <option value="<?php echo $val; ?>" <?php if(isset($data['english']) AND $data['english'] == $val) echo 'selected';?>><?php echo $val; ?></option>
                    <?php endforeach;?>
                </select>
        </div>
        <br>
        <div>
            Your Age<br>
                <input class="fSearch" type="text" name="youeAge" value="<?php echo isset($data['youeAge']) ? $data['youeAge'] : NULL?>">
        </div>
    </div>