<div class="conteiner">
    <h1>Orders of virtual gifts and flowers</h1>
    
    <div class="filter_wrap">
        <div class="textcenter">
            <form method="get" id="submitGetForm">
                <div class="filter_item">
                    <label class="middle"><strong>Status:</strong></label>
                    <select class="middle" name="status">
                        <option value="5">All</option>
                        <?php foreach ($arr_status as $key=>$val): ?>
                            <option value="<?php echo $key; ?>" <?php if ($status==$key) echo 'selected'; ?>><?php echo $val; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>  
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Date of order</span>
                <span class="coll_item">Date of depature</span>
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Orders</div>
        </div>
        <?php if (sizeof($orders) > 0): ?>
        <ul class="tree">
            <?php foreach ($orders AS $item):?>
                <li>
                <span class="p_wr">
                    <span class="control_link">
                        <span class="coll_item">
                            [
                            <span class="ps_coll"><?php echo date('d.m.Y',$item->created_at); ?></span>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <span class="ps_coll"><?php if ($item->date_depature) echo date('d.m.Y',$item->date_depature); ?></span>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                                <span class="ps_coll" ><?php echo $arr_status[$item->status]; ?></span>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'ordergifts', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                            ]
                        </span>
                        <span class="coll_item" > 
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'ordergifts', 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        Order # <?php echo $item->id; ?>
                        <br/>
                        <strong>From:</strong> <?php echo $item->man_firstname.'(ID-'.$item->id_from.')'; ?>
                        <strong>To:</strong> <?php echo $item->girl_firstname.'(ID-'.$item->id_to.')'; ?>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no orders!</div>
        <?php endif; ?>
    </div>
</div>

<?php echo $pagination; ?>

<script type="text/javascript">page_orders();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete order!">
    <h2 align="center">Are you sure?</h2>
</div>