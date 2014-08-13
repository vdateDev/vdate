<script type="text/javascript" src="/media/backend/js/tiny/mce/tiny_mce_src.js"></script>
<script type='text/javascript' src="/media/backend/js/tiny/mce/tiny_mce.php"></script>

<div class="conteiner">
    <h1>Edit agency</h1>

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
                               <label class="block title_1">Signed contract:</label>                          
                               <?php if (empty($data['signed_contract'])): ?>
                                <input name="contract" type="file" class="s_name input_1" value="">
                                <?php else: ?>
                                    <div class="contorl_edit">
                                        <?php if (HTML::isset_img('upload/agency/contract/'.$data['signed_contract'])): ?>
                                            <img src="<?php echo HTML::isset_img('upload/agency/contract/'.$data['signed_contract']); ?>">
                                        <?php endif; ?>
                                        <br>
                                        <input class="b middle red" type="submit" name="delete_image_contract" value="Delete image" style="vertical-align: middle;">
                                    </div>
                                <?php endif; ?>                   
                            </div>
                        </div>
                        <div class="item_f_wrap">                    
                            <div class="item_1">
                               <label class="block title_1">Certificate of private entrepreneur:</label>                          
                                <?php if (empty($data['certificate'])): ?>
                                <input name="certificate" type="file" class="s_name input_1" value="">
                                <?php else: ?>
                                    <div class="contorl_edit">
                                        <?php if (HTML::isset_img('upload/agency/certificate/'.$data['certificate'])): ?>
                                            <img src="<?php echo HTML::isset_img('upload/agency/certificate/'.$data['certificate']); ?>">
                                        <?php endif; ?>
                                        <br>
                                        <input class="b middle red" type="submit" name="delete_image_certificate" value="Delete image" style="vertical-align: middle;">
                                    </div>
                                <?php endif; ?>                         
                            </div>
                        </div>
                        <div class="item_f_wrap">                    
                            <div class="item_1">
                               <label class="block title_1">Passport copy:</label>                          
                                <?php if (empty($data['passport'])): ?>
                                <input name="passport" type="file" class="s_name input_1" value="">
                                <?php else: ?>
                                    <div class="contorl_edit">
                                        <?php if (HTML::isset_img('upload/agency/passport/'.$data['passport'])): ?>
                                            <img src="<?php echo HTML::isset_img('upload/agency/passport/'.$data['passport']); ?>">
                                        <?php endif; ?>
                                        <br>
                                        <input class="b middle red" type="submit" name="delete_image_passport" value="Delete image" style="vertical-align: middle;">
                                    </div>
                                <?php endif; ?>                          
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
                                <input name="username" type="text" class="s_name input_1" value="<?php echo $user->username; ?>">
                            </div>

                            <div class="item_1">
                                <label class="block title_1">Password<span class="red">*</span>:</label>                           
                                <input name="password" type="text" class="s_name input_1" value="">
                            </div>

                            <div class="item_1">
                                <label class="block title_1">Confirm password<span class="red">*</span>:</label>                           
                                <input name="password_confirm" type="text" class="s_name input_1" value="">
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