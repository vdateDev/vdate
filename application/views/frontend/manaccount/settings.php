<form class="form_settings mysettings" method="post">
        <div class="contentBlock">
                <div class="contentBlock_title"><?php echo __('profile'); ?></div>
                <hr>
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('your_name'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="firstname" value="<?php echo $man->firstname; ?>">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('your_last_name'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="lastname" value="<?php echo $man->lastname; ?>">
                        </div>
                </div>
                
                                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('your_last_name'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="lastname" value="<?php echo $man->lastname; ?>">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('your_email'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="email" value="<?php echo $user->email; ?>">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('login'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="username" value="<?php echo $user->username; ?>">
                        </div>
                </div>
            
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('date_of_birth'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="birthday" value="<?php echo date('Y-m-d',$man->birthday); ?>" clas="datepicker">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('country'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="country" class="sbi">
                                <option></option>
                                <?php foreach ($country as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->country==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('region'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="region" class="sbi">
                                <option></option>
                                <?php foreach ($region as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->region==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('city'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="city" value="<?php echo $man->city; ?>">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('height'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="height" class="sbi">
                                <option></option>
                                <?php foreach ($height as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->height==$item->id) echo 'selected';?>><?php echo $item->zna; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('weight'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="weight" class="sbi">
                                <option></option>
                                <?php foreach ($weight as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->weight==$item->id) echo 'selected';?>><?php echo $item->zna; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('eyes'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="eyes" class="sbi">
                                <option></option>
                                <?php foreach ($eyes as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->eyes==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('hair'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="hair" class="sbi">
                                <option> </option>
                                <?php foreach ($hair as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->hair==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('place_of_work'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="place_work" value="<?php echo $man->place_work; ?>">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('phone_number'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="phone" value="<?php echo $man->phone; ?>">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('education'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="education" class="sbi">
                                <option> </option>
                                <?php foreach ($education as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->education==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('religion'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="religion" class="sbi">
                                <option> </option>
                                <?php foreach ($religion as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->religion==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('marital_status'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="marital_status" class="sbi">
                                <option> </option>
                                <?php foreach ($marital_status as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->marital_status==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('smoking'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="smoking" class="sbi">
                                <option> </option>
                                <?php foreach ($smoking as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->smoking==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('drinking'); ?>:</span>
                        </div>
                        <div class="flr">
                            <select name="drinking" class="sbi">
                                <option> </option>
                                <?php foreach ($drinking as $item): ?>
                                    <option value="<?php echo $item->id; ?>" <?php if ($man->drinking==$item->id) echo 'selected';?>><?php echo $item->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('number_of_children'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="text" name="children" value="<?php echo $man->children; ?>">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('hobbies'); ?>:</span>
                        </div>
                        <div class="flr">
                                <textarea name="hobbies" roes="5"><?php echo $man->hobbies; ?></textarea>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('about_me'); ?>:</span>
                        </div>
                        <div class="flr">
                                <textarea name="about" roes="5"><?php echo $man->about; ?></textarea>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('perfect_relationships'); ?>:</span>
                        </div>
                        <div class="flr">
                                <textarea name="relationships" roes="5"><?php echo $man->relationships; ?></textarea>
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                        </div>
                        <div class="flr">
                                <input type="submit" name="profile" value="<?php echo __('save'); ?>">
                        </div>
                </div>

            
                <div class="contentBlock_title"><?php echo __('password'); ?></div>
                <hr>
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('your_current_password'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="password" name="old_password">
                                <p class="settInf">Enter a new password below then Save</p>
                        </div>
                </div>
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('change_your_password'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="password" name="password">
                        </div>
                </div>
                
                <div class="settRow">
                        <div class="fll">
                                <span><?php echo __('confirm_new_password'); ?>:</span>
                        </div>
                        <div class="flr">
                                <input type="password" name="password_confirm">
                        </div>
                </div>
                <div class="settRow">
                        <div class="fll">
                        </div>
                        <div class="flr">
                                <input type="submit" name="pass" value="<?php echo __('save'); ?>">
                        </div>
                </div>
        </div><!-- .contentBlock -->
</form>

