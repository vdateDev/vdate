<div class="conteiner">
    <h1>Orders &rAarr; Order # <?php echo $order->id; ?></h1>

        <form class="form_add" id="commentForm" name="form_add" method="post" action="">
            <div class="textright contorl_edit">
                <input class="b middle green" type="submit" name="save" value="Save">
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
                        <select name="status">
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
                </div>

                
                <div class="textright contorl_edit">
                    <input class="b middle green" type="submit" name="save" value="Save">
                    <input class="b middle" type="submit" name="save_and_back" value="Save and back to the list">         
                </div>	
            </div>
        </form>	    
</div>