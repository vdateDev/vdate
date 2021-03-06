<script type="text/javascript" src="/media/backend/js/tiny/mce/tiny_mce_src.js"></script>
<script type='text/javascript' src="/media/backend/js/tiny/mce/tiny_mce.php"></script>

<div class="conteiner">
    <h1>Add new girl</h1>

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
                            <option value="2" <?php echo $data['status'] == 2 ? 'selected' : ''; ?>>Blocked</option>
                        </select>
                    </div>            
                </div>
               
                <div class="langBox active" >
                <ul class="tabs lang_wrap">
                    <li><a class="current" href="#">Geenral</a></li>
                    <li><a href="#">Passport Information</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>

                <div class="box">
                    <div class="item_f_wrap">
                        <div class="item_1">
                            <label class="block title_1">First name<span class="red">*</span>:</label>                           
                            <input name="firstname" type="text" class="s_name input_1" value="<?php echo $data['firstname']; ?>">
                            <span class="red"><?php if (isset($errors['firstname'])) echo $errors['firstname']; ?></span>
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Last name<span class="red">*</span>:</label>                           
                            <input name="lastname" type="text" class="s_name input_1" value="<?php echo $data['lastname']; ?>">
                            <span class="red"><?php if (isset($errors['lastname'])) echo $errors['lastname']; ?></span>
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Email<span class="red">*</span>:</label>                           
                            <input name="email" type="text" class="s_name input_1" value="<?php echo $data['email']; ?>">
                            <span class="red"><?php if (isset($errors['email'])) echo $errors['email']; ?></span>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Agency<span class="red">*</span>:</label>    
                            <select name="agency_id">
                                <option></option>
                                <?php foreach ($agency as $list): ?>
                                <option value="<?php echo $list->user_id; ?>" <?php if ($data['agency_id']==$list->user_id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Login<span class="red">*</span>:</label>                           
                            <input name="username" type="text" class="s_name input_1" value="<?php echo $data['username']; ?>">
                            <span class="red"><?php if (isset($errors['username'])) echo $errors['username']; ?></span>
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Password<span class="red">*</span>:</label>                           
                            <input name="password" type="password" class="s_name input_1" value="<?php echo $data['password']; ?>">
                            <span class="red"><?php if (isset($errors['password'])) echo $errors['password']; ?></span>
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Confirm password<span class="red">*</span>:</label>                           
                            <input name="password_confirm" type="password" class="s_name input_1" value="<?php echo $data['password_confirm']; ?>">
                            <span class="red"><?php if (isset($errors['password_confirm'])) echo $errors['password_confirm']; ?></span>
                        </div>
                     </div>
                </div>
                <div class="box">
                    <div class="item_f_wrap">
                        
                        <div class="item_1">
                            <label class="block title_1">Serie of passport :</label>                           
                            <input name="serie_passport" type="text" class="s_name input_1" value="<?php echo $data['serie_passport']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Number of passport:</label>                           
                            <input name="number_passport" type="text" class="s_name input_1" value="<?php echo $data['number_passport']; ?>">
                        </div>
                        
                        <div class="item_f_wrap">                    
                            <div class="item_1">
                               <label class="block title_1">Photo of the first page :</label>                          
                               <input name="passport" type="file" class="s_name input_1" value="" id="preview">                         
                            </div>
                        </div>
                        <div class="item_f_wrap">                    
                            <div class="item_1">
                               <label class="block title_1">Photo of girl who take passport near with face :</label>                          
                               <input name="girl_passport" type="file" class="s_name input_1" value="" id="preview">                         
                            </div>
                        </div>

                    </div>
                </div>
                <div class="box">
                    <div class="item_f_wrap">  
                        <div class="item_1">
                            <label class="block title_1">Date of birth:</label>                           
                            <input name="birthday" type="text" class="s_name input_1 datepicker" value="<?php echo $data['birthday']; ?>" style="width:200px;">
                        </div>

                        <div class="item_1">
                            <label class="block title_1">Country:</label>    
                            <select name="country">
                                <option></option>
                                <?php foreach ($country as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['country']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Region:</label>    
                            <select name="region">
                                <option></option>
                                <?php foreach ($region as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['region']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">City:</label>                           
                            <input name="city" type="text" class="s_name input_1" value="<?php echo $data['city']; ?>">
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Home address:</label>                           
                            <input name="address" type="text" class="s_name input_1" value="<?php echo $data['address']; ?>">
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Height:</label>    
                            <select name="height">
                                <option></option>
                                <?php foreach ($height as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['height']==$list->id)echo 'selected'; ?>><?php echo $list->zna; ?> cm</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Weight:</label>    
                            <select name="weight">
                                <option></option>
                                <?php foreach ($weight as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['weight']==$list->id)echo 'selected'; ?>><?php echo $list->zna; ?> kg</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Eyes:</label>    
                            <select name="eyes">
                                <option></option>
                                <?php foreach ($eyes as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['eyes']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Hair:</label>    
                            <select name="hair">
                                <option></option>
                                <?php foreach ($hair as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['hair']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Place of work:</label>                           
                            <input name="place_work" type="text" class="s_name input_1" value="<?php echo $data['place_work']; ?>">
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Education:</label>    
                            <select name="education">
                                <option></option>
                                <?php foreach ($education as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['education']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Religion:</label>    
                            <select name="religion">
                                <option></option>
                                <?php foreach ($religion as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['religion']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Marital status:</label>    
                            <select name="marital_status">
                                <option></option>
                                <?php foreach ($marital_status as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['marital_status']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Smoking:</label>    
                            <select name="smoking">
                                <option></option>
                                <?php foreach ($smoking as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['smoking']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Drinking:</label>    
                            <select name="drinking">
                                <option></option>
                                <?php foreach ($drinking as $list): ?>
                                <option value="<?php echo $list->id; ?>" <?php if ($data['drinking']==$list->id)echo 'selected'; ?>><?php echo $list->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Number of children:</label>                           
                            <input name="children" type="text" class="s_name input_1" value="<?php echo $data['children']; ?>">
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Phone number:</label>                           
                            <input name="phone" type="text" class="s_name input_1" value="<?php echo $data['phone']; ?>">
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Video:</label>      
                            <textarea class="text_1" name="video" style="width: 100%;"><?php echo $data['video']; ?></textarea>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Hobbies:</label>      
                            <textarea class="text_1 tiny" name="hobbies" style="width: 100%;"><?php echo $data['hobbies']; ?></textarea>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">About me:</label>      
                            <textarea class="text_1 tiny" name="about" style="width: 100%;"><?php echo $data['about']; ?></textarea>
                        </div>
                        
                        <div class="item_1">
                            <label class="block title_1">Perfect relationships:</label>      
                            <textarea class="text_1 tiny" name="relationships" style="width: 100%;"><?php echo $data['relationships']; ?></textarea>
                        </div>
                        

                    </div>
                </div>
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

<script type="text/javascript">
$(document).ready(function() {    
    $.datepicker.setDefaults( $.extend($.datepicker.regional["en"]) );
    $(".datepicker").datepicker();
});
</script>