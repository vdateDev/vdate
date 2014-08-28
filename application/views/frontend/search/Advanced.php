<div style="width:30%;display: inline-block;">
        <div>
            Eye color<br>
            <select style="width:35%;" name="eyes" class="fSearch">
                <option></option>
                <?php foreach($spr['eyes'] as $eyes):?>
                <option value="<?php echo $eyes->name; ?>" <?php if(isset($data['eyes']) AND $data['eyes'] == $eyes->name) echo 'selected';?>><?php echo $eyes->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <br>
        <div>
            Keywords<br>
            <input type="text" style="width:35%;" name="keywords" value="<?php echo isset($data['keywords']) ? $data['keywords'] : NULL?>" class="fSearch">
        </div>
       
    </div>
<div style="width:30%;display: inline-block;">
        <div>
            Region<br>
            <select style="width:35%;" name="regions" class="fSearch">
                <option></option>
                <?php foreach ($spr['regions'] as $region):?>
                <option value="<?php echo $region; ?>" <?php if(isset($data['regions']) AND $data['regions'] == $region) echo 'selected';?>><?php echo $region; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        
    </div>
<div style="width:30%;display: inline-block;">
        <div>
            Drinking<br>
            <select style="width:35%;" name="drinking" class="fSearch">
                <option></option>
                <?php foreach($spr['drinking'] as $drink):?>
                <option value="<?php echo $drink->name; ?>" <?php if(isset($data['drinking']) AND $data['drinking'] == $drink->name) echo 'selected';?>><?php echo $drink->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div>
            Religion<br>
            <select style="width:35%;" name="religions" class="fSearch">
                <option></option>
                <?php foreach($spr['religions'] as $religion):?>
                <option value="<?php echo $religion->name; ?>" <?php if(isset($data['religions']) AND $data['religions'] == $religion->name) echo 'selected';?>><?php echo $religion->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
<!--
<br><br>
<div>
    <div style="width:20%;display: inline-block;text-align: right;">
        <div>
            Capricorn <input type="checkbox">
        </div>
        <div>
            Taurus <input type="checkbox">
        </div>
        <div>
            Virgo <input type="checkbox">
        </div>
    </div>
    <div style="width:20%;display: inline-block;text-align: right;">
        <div>
            Aquarius <input type="checkbox">
        </div>
        <div>
            Gemini <input type="checkbox">
        </div>
        <div>
            Libra <input type="checkbox">
        </div>
    </div>
    <div style="width:20%;display: inline-block;text-align: right;">
        <div>
            Pisces <input type="checkbox">
        </div>
        <div>
            Cancer <input type="checkbox">
        </div>
        <div>
            Scorpio <input type="checkbox">
        </div>
    </div>
    <div style="width:20%;display: inline-block;text-align: right;">
        <div>
            Aries <input type="checkbox">
        </div>
        <div>
            Leo <input type="checkbox">
        </div>
        <div>
            Sagottarius <input type="checkbox">
        </div>
    </div>
<div>-->
</div>