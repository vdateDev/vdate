<div class="conteiner">
    <h1>Administrators &rAarr; Add administrator</h1>

        <form class="form_add" id="commentForm" name="form_add" method="post" action="">
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">
                <input class="b middle blue" type="submit" name="save_and_add" value="Save and add new">
                <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">                                
            </div>
            <div class="items_wrap">                
                <div class="item_f_wrap">                    
                    <div class="item_1">
                       <label class="block title_1">Login <span class="red">*</span>:</label>                          
                       <input name="username" type="text" class="s_name input_1" value="<?php echo $data['username']; ?>" />                         
                    </div>
                </div>
                <div class="item_f_wrap">                    
                    <div class="item_1">
                       <label class="block title_1">Email <span class="red">*</span>:</label>                          
                       <input name="email" type="text" class="s_name input_1" value="<?php echo $data['email']; ?>" />                         
                    </div>
                </div>        
                <?php if ($data['id'] != 5): ?>
                <div class="item_f_wrap">                    
                    <div class="item_1">
                        <label class="block title_1">Role <span class="red">*</span>:</label>                          
                        <select name="role">
                            <?php foreach($roles AS $role): ?>
                                <option value="<?php echo $role->id; ?>" <?php echo $role->id == $data['role'] ? 'selected' : ''; ?>><?php echo $role->role_name; ?></option>
                            <?php endforeach; ?>
                        </select>             
                    </div>
                </div>
                <?php endif; ?>
                <div class="item_f_wrap">                    
                    <div class="item_1">
                       <label class="block title_1">Password <span class="red">*</span>:</label>                          
                       <input name="password" type="text" class="s_name input_1" value="" />                         
                    </div>
                </div>  
                <div class="item_f_wrap">                    
                    <div class="item_1">
                       <label class="block title_1">Confirm password<span class="red">*</span>:</label>                          
                       <input name="password_confirm" type="text" class="s_name input_1" value="" />                         
                    </div>
                </div>  
                
                <div class="textright contorl_edit">
                    <input class="b middle green" type="submit" name="save" value="Save">
                    <input class="b middle blue" type="submit" name="save_and_add" value="Save and add new">
                    <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">         
                </div>	
            </div>
        </form>	    
</div>