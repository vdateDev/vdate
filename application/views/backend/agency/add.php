<script type="text/javascript" src="/media/backend/js/tiny/mce/tiny_mce_src.js"></script>
<script type='text/javascript' src="/media/backend/js/tiny/mce/tiny_mce.php"></script>

<div class="conteiner">
    <h1>Add new agency</h1>

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
                </div>
               
                <div class="langBox active" >
                <ul class="tabs lang_wrap">
                    <li><a class="current" href="#">General</a></li>
                    <li><a href="#">Banking Information</a></li>
                    <li><a href="#">Login Information</a></li>
                </ul>

                <div class="box">
                    <div class="item_f_wrap">
                        <div class="item_1">
                            <label class="block title_1">Agency name<span class="red">*</span>:</label>                           
                            <input name="name" type="text" class="s_name input_1" value="<?php echo $data['name']; ?>">
                            <span class="red"><?php if (isset($errors['name'])) echo $errors['name']; ?></span>
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Agency director<span class="red">*</span>:</label>                           
                            <input name="director" type="text" class="s_name input_1" value="<?php echo $data['director']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Agency contact person<span class="red">*</span>:</label>                           
                            <input name="contact_person" type="text" class="s_name input_1" value="<?php echo $data['contact_person']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Address<span class="red">*</span>:</label>                           
                            <input name="address" type="text" class="s_name input_1" value="<?php echo $data['address']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Agency contact phone<span class="red">*</span>:</label>                           
                            <input name="contact_phone" type="text" class="s_name input_1" value="<?php echo $data['contact_phone']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Agency e-mail<span class="red">*</span>:</label>                           
                            <input name="email" type="text" class="s_name input_1" value="<?php echo $data['email']; ?>">
                            <span class="red"><?php if (isset($errors['email'])) echo $errors['email']; ?></span>
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Agency skype<span class="red">*</span>:</label>                           
                            <input name="skype" type="text" class="s_name input_1" value="<?php echo $data['skype']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Agency working time<span class="red">*</span>:</label>                           
                            <input name="working_time" type="text" class="s_name input_1" value="<?php echo $data['working_time']; ?>">
                        </div>
                        <div class="item_f_wrap">                    
                            <div class="item_1">
                               <label class="block title_1">Signed contract :</label>                          
                               <input name="contract" type="file" class="s_name input_1" value="" id="preview">                         
                            </div>
                        </div>
                        <div class="item_f_wrap">                    
                            <div class="item_1">
                               <label class="block title_1">Certificate of private entrepreneur :</label>                          
                               <input name="certificate" type="file" class="s_name input_1" value="" id="preview">                         
                            </div>
                        </div>
                        <div class="item_f_wrap">                    
                            <div class="item_1">
                               <label class="block title_1">Passport copy:</label>                          
                               <input name="passport" type="file" class="s_name input_1" value="" id="preview">                         
                            </div>
                        </div>
                        <div class="item_f_wrap">  
                            <div class="item_1">
                                <label class="block title_1">Comments:</label>                           
                                <textarea name="comments" class="text_1"><?php echo $data['comments']; ?></textarea>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="box">
                    <div class="item_f_wrap">
                        <div class="item_1">
                            <label class="block title_1">Beneficiary name:</label>                           
                            <input name="beneficiary_name" type="text" class="s_name input_1" value="<?php echo $data['beneficiary_name']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary account or IBAN:</label>                           
                            <input name="beneficiary_account" type="text" class="s_name input_1" value="<?php echo $data['beneficiary_account']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary address:</label>                           
                            <input name="beneficiary_address" type="text" class="s_name input_1" value="<?php echo $data['beneficiary_address']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary phone:</label>                           
                            <input name="beneficiary_phone" type="text" class="s_name input_1" value="<?php echo $data['beneficiary_phone']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary bank name:</label>                           
                            <input name="beneficiary_bank_name" type="text" class="s_name input_1" value="<?php echo $data['beneficiary_bank_name']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">ABA # or SWIFT or National ID:</label>                           
                            <input name="aba_swift_national_id" type="text" class="s_name input_1" value="<?php echo $data['aba_swift_national_id']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary bank address:</label>                           
                            <input name="beneficiary_bank_address" type="text" class="s_name input_1" value="<?php echo $data['beneficiary_bank_address']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Country:</label>                           
                            <input name="country" type="text" class="s_name input_1" value="<?php echo $data['country']; ?>">
                        </div>

                        <div class="item_1">
                            <label class="block title_1">Beneficiary Correspondent Bank Name :</label>                           
                            <input name="bank_name" type="text" class="s_name input_1" value="<?php echo $data['bank_name']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary Correspondent Bank Address :</label>                           
                            <input name="bank_address" type="text" class="s_name input_1" value="<?php echo $data['bank_address']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary Correspondent Bank City :</label>                           
                            <input name="bank_city" type="text" class="s_name input_1" value="<?php echo $data['bank_city']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary Correspondent Bank Country :</label>                           
                            <input name="bank_country" type="text" class="s_name input_1" value="<?php echo $data['bank_country']; ?>">
                        </div>
                        <div class="item_1">
                            <label class="block title_1">Beneficiary Correspondent Bank SWIFT code :</label>                           
                            <input name="bank_swift_code" type="text" class="s_name input_1" value="<?php echo $data['bank_swift_code']; ?>">
                        </div>
                    </div>
                    </div>
                    <div class="box">
                        <div class="item_f_wrap">  
                            <div class="item_1">
                                <label class="block title_1">Login<span class="red">*</span>:</label>                           
                                <input name="username" type="text" class="s_name input_1" value="<?php echo $data['username']; ?>">
                                <span class="red"><?php if (isset($errors['username'])) echo $errors['username']; ?></span>
                            </div>

                            <div class="item_1">
                                <label class="block title_1">Password<span class="red">*</span>:</label>                           
                                <input name="password" type="text" class="s_name input_1" value="<?php echo $data['password']; ?>">
                                <span class="red"><?php if (isset($errors['password'])) echo $errors['password']; ?></span>
                            </div>

                            <div class="item_1">
                                <label class="block title_1">Confirm password<span class="red">*</span>:</label>                           
                                <input name="password_confirm" type="text" class="s_name input_1" value="<?php echo $data['password_confirm']; ?>">
                                <span class="red"><?php if (isset($errors['password_confirm'])) echo $errors['password_confirm']; ?></span>
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