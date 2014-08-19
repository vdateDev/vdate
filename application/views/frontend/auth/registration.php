<div class="pb20"><?php echo $content; ?></div>
<div class="regBlock clearFix">
        <div class="flr w40">
                <p class="invt">Thousand of Ladies Online, waiting for you! Sign up &amp; enjoy!</p>
                <div class="sliderRegister">
                        <div class="beforeUlRegister">
                                <ul>
                                        <li>
                                                <img src="pic/images/photo01.jpg" alt="">
                                                <div class="sliInf">
                                                        <div class="favOneOpt">
                                                                <a href="#" class="oneChat"></a>
                                                                <a href="#" class="oneMess"></a>
                                                                <a href="#" class="oneFav"></a>
                                                                <a href="#" class="oneDate"></a>
                                                                <a href="#" class="oneFlirt"></a>
                                                        </div>
                                                        <a href="#" class="sliName">Antonina</a>
                                                        <span class="sliAdr">Nikolaev, Ukraine</span>
                                                        <span class="sliID"><span>ID:</span> 0099887</span>
                                                        <span class="sliAge"><span>Age:</span> 35</span>
                                                        <a href="#" class="sliChat"><span>Live </span>Chat</a>
                                                </div>
                                        </li>
                                        <li>
                                                <img src="pic/images/photo01.jpg" alt="">
                                                <div class="sliInf">
                                                        <div class="favOneOpt">
                                                                <a href="#" class="oneChat"></a>
                                                                <a href="#" class="oneMess"></a>
                                                                <a href="#" class="oneFav"></a>
                                                                <a href="#" class="oneDate"></a>
                                                                <a href="#" class="oneFlirt"></a>
                                                        </div>
                                                        <a href="#" class="sliName">Vicrtoria</a>
                                                        <span class="sliAdr">Nikolaev, Ukraine</span>
                                                        <span class="sliID"><span>ID:</span> 0099887</span>
                                                        <span class="sliAge"><span>Age:</span> 35</span>
                                                        <a href="#" class="sliChat"><span>Live </span>Chat</a>
                                                </div>
                                        </li>
                                        <li>
                                                <img src="pic/images/photo01.jpg" alt="">
                                                <div class="sliInf">
                                                        <div class="favOneOpt">
                                                                <a href="#" class="oneChat"></a>
                                                                <a href="#" class="oneMess"></a>
                                                                <a href="#" class="oneFav"></a>
                                                                <a href="#" class="oneDate"></a>
                                                                <a href="#" class="oneFlirt"></a>
                                                        </div>
                                                        <a href="#" class="sliName">Zlata</a>
                                                        <span class="sliAdr">Nikolaev, Ukraine</span>
                                                        <span class="sliID"><span>ID:</span> 0099887</span>
                                                        <span class="sliAge"><span>Age:</span> 35</span>
                                                        <a href="#" class="sliChat"><span>Live </span>Chat</a>
                                                </div>
                                        </li>
                                </ul>
                                <div class="sliderRegister_Prev slid_prev"></div>
                                <div class="sliderRegister_Next slid_next"></div>
                        </div>
                </div>
        </div>
        <div class="fll w60">
                <form class="form_settings registerform" method="post">
                        <div class="contentBlock_title tac"><?php echo __('join_the_secure_and_easy_way'); ?></div>
                        <div class="tac">
                                <a href="#" class="registerFromFacebook"><span><?php echo __('sign_in_fast_with_facebook'); ?></a>
                                <p><?php echo __('or_create_an_account'); ?></p>
                        </div>
                        <div class="settRow">
                                <div class="fll">
                                        <span><?php echo __('your_name'); ?>:</span>
                                </div>
                                <div class="flr">
                                        <input type="text" name="firstname" value="<?php echo $data['firstname']; ?>">
                                        <?php echo isset($errors['firstname']) ? $errors['firstname'] : ''; ?>
                                </div>
                        </div>
                        <div class="settRow">
                                <div class="fll">
                                        <span><?php echo __('your_last_name'); ?>:</span>
                                </div>
                                <div class="flr">
                                        <input type="text" name="lastname" value="<?php echo $data['lastname']; ?>">
                                        <?php echo isset($errors['phone']) ? $errors['phone'] : ''; ?>
                                        <?php echo isset($errors['lastname']) ? $errors['lastname'] : ''; ?>
                                </div>
                        </div>
                        <div class="settRow">
                                <div class="fll">
                                        <span><?php echo __('your_birthday'); ?>:</span>
                                </div>
                                <div class="flr">
                                        <select class="sbi sbi50" name="day">
                                                <?php for ($i=1;$i<=31; $i++): ?>
                                                     <?php if ($i<10) $day='0'.$i; else $day=$i; ?>
                                                     <option value="<?php echo $day; ?>" <?php if ($data['day']==$day) echo 'selected'; ?>><?php echo $day; ?></option>
                                                <?php endfor; ?>

                                        </select>
                                        <select class="sbi  sbi50" name="month">
                                                <?php for ($i=1;$i<=12; $i++): ?>
                                                     <?php if ($i<10) $month='0'.$i; else $month=$i; ?>
                                                     <option value="<?php echo $month; ?>" <?php if ($data['month']==$month) echo 'selected'; ?>><?php echo $month; ?></option>
                                                <?php endfor; ?>
                                        </select>
                                        <select class="sbi" name="year">
                                            <?php for ($year=1940;$year<=1996; $year++): ?>
                                                 <option value="<?php echo $year; ?>" <?php if ($data['year']==$year) echo 'selected'; ?>><?php echo $year; ?></option>
                                            <?php endfor; ?>
                                        </select>
                                </div>
                        </div>
                        <div class="settRow">
                                <div class="fll">
                                        <span>Email:</span>
                                </div>
                                <div class="flr">
                                        <input type="text" name="email" value="<?php echo $data['email']; ?>">
                                        <?php echo isset($errors['email']) ? $errors['email'] : ''; ?>
                                </div>
                        </div>
                        <div class="settRow">
                                <div class="fll">
                                        <span><?php echo __('your_login'); ?></span>
                                </div>
                                <div class="flr">
                                        <input type="text" name="username" value="<?php echo $data['username']; ?>">
                                        <?php echo isset($errors['username']) ? $errors['username'] : ''; ?>
                                </div>
                        </div>
                        <div class="settRow">
                                <div class="fll">
                                        <span><?php echo __('enter_a_password'); ?></span>
                                </div>
                                <div class="flr">
                                        <input type="password" name="password">
                                </div>
                        </div>
                        <div class="settRow">
                                <div class="fll">
                                        <span><?php echo __('confirm_password'); ?></span>
                                </div>
                                <div class="flr">
                                        <input type="password" name="password_confirm">
                                </div>
                        </div>
                        <div class="settRow">
                                <div class="fll">
                                        <span><?php echo __('control_code'); ?></span>
                                </div>
                                <div class="flr">
                                        <?php echo $captcha; ?>
                                        <input type="text" autocomplete="off" class="captchaField" name="captcha" maxlength="4" size="4" />
                                        <?php echo isset($errors['captcha']) ? $errors['captcha'] : ''; ?>
                                </div>
                        </div>
                        <div class="terms_and_conditions">
                                <p><?php echo __('by_clicking_sign_up_you_agree_with_the'); ?> 
                                    <a href="<?php echo strtolower(Route::url('pages', array('language' => $language, 'url' => 'terms-conditions'))); ?>"><?php echo __('terms_and_conditions'); ?></a> 
                                    <?php echo __('and'); ?> <a href="<?php echo strtolower(Route::url('pages', array('language' => $language, 'url' => 'privacy'))); ?>"><?php echo __('privacy_policy'); ?></a>.
                                </p>
                        </div>
                        <div class="settRow tac">
                                <input type="submit" value="Sign Up">
                                <p><?php echo __('already_have_a_personal_id'); ?> <a href="<?php echo strtolower(Route::url('auth', array('language' => $language, 'action' => 'login'))); ?>"><?php echo __('log_in'); ?></a></p>
                                <p><?php echo __('if_you_can_not_register_please'); ?> <a href="<?php echo strtolower(Route::url('contact', array('language' => $language, 'action' => 'contact'))); ?>"><?php echo __('contact_us'); ?></a></p>
                        </div>
                </form>
        </div>
</div>