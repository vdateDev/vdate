<div class="conteiner">
    <h1>Orders &rAarr; Order # <?php echo $order->id; ?></h1>

        <form class="form_add" id="commentForm" name="form_add" method="post" action="" enctype="multipart/form-data">
            <div class="textright contorl_edit">
                <input class="b middle" type="submit" name="deny" value="Deny">
                <input class="b middle" type="submit" name="confirm" value="Confrim">
                <input class="b middle" type="submit" name="save" value="Save">
                <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">                                
            </div>
            <div class="items_wrap">                
                <div class="item_f_wrap">
                    <div class="item_col">
                        <label class="title_1">Form:</label>                        
                        <input type="text" value="<?php echo $order->man_firstname; ?>(ID-<?php echo $order->id_from; ?>)" class="input_1" style="width:350px;" disabled />
                    </div>            
                    <div class="item_col">
                        <label class="title_1">To:</label>                        
                        <input type="text" value="<?php echo $order->girl_firstname; ?>(ID-<?php echo $order->id_to; ?>)" class="input_1" style="width:350px;" disabled />
                    </div>   
                    <div class="item_col">
                        <label class="title_1">Status:</label>                          
                        <select name="status" disabled>
                            <?php foreach($arr_status AS $key=>$val): ?>
                                <option value="<?php echo $key; ?>" <?php echo $key == $order->status ? 'selected' : ''; ?>><?php echo $val; ?></option>
                            <?php endforeach; ?>
                        </select>             
                    </div>
                </div>
        
                <div class="item_f_wrap">                    
                    <table class="table1">
                        <label class="title_1">List of gifts and flowers:</label>   
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Cost</th>
                        </tr>
                        <?php foreach ($gifts as $item): ?>
                        <tr>
                            <td><?php echo $item->gift_id; ?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->cost; ?> Credits</td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="2">Delivery</td>
                            <td><?php echo $order->delivery; ?> Credits</td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"><strong>Total</strong></td>
                            <td><?php echo $total_cost;?> Credits</td>
                        </tr>
                    </table>
                               <h2>Delivery</h2>           
                <div class="item_f_wrap">
                    <div class="item_1">
                        <label class="block title_1">Photo with girl:</label>   
                        <?php if (empty($order->photo_with_girl1)): ?>
                            <input name="photo1" type="file" class="s_name input_1" value="">
                        <?php else: ?>
                            <div class="contorl_edit">
                                <?php if (HTML::isset_img('upload/ordergifts/'.$order->photo_with_girl1)): ?>
                                    <img src="<?php echo HTML::isset_img('upload/ordergifts/'.$order->photo_with_girl1); ?>">
                                <?php endif; ?>
                                <input class="b middle red" type="submit" name="delete_image1" value="Delete image" style="vertical-align: middle;">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="item_f_wrap">
                    <div class="item_1">
                        <label class="block title_1">Photo with girl:</label>                           
                        <?php if (empty($order->photo_with_girl2)): ?>
                            <input name="photo2" type="file" class="s_name input_1" value="">
                        <?php else: ?>
                            <div class="contorl_edit">
                                <?php if (HTML::isset_img('upload/ordergifts/'.$order->photo_with_girl2)): ?>
                                    <img src="<?php echo HTML::isset_img('upload/ordergifts/'.$order->photo_with_girl2); ?>">
                                <?php endif; ?>
                                <input class="b middle red" type="submit" name="delete_image2" value="Delete image" style="vertical-align: middle;">
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
                
                <div class="item_f_wrap">
                    <div class="item_1">
                        <label class="block title_1">Girl comments:</label>                           
                        <textarea name="girl_comments" class="text_1" rows="10"><?php echo $order->girl_comments; ?></textarea>
                    </div>
                </div>

                
                <div class="textright contorl_edit">
                    <input class="b middle" type="submit" name="deny" value="Deny">
                    <input class="b middle" type="submit" name="confirm" value="Confrim">
                    <input class="b middle" type="submit" name="save" value="Save">
                    <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">         
                </div>	
            </div>
        </form>	    
</div>