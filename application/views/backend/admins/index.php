<div class="conteiner">
    <h1>Administrators &rAarr; Administrators management</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">                
                <span class="coll_item">Activity</span>                
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Name</div>
        </div>
        <?php if (sizeof($admins) > 0): ?>
            <ul class="tree">
                <?php foreach ($admins AS $item):?>
                    <li id="listItem_<?php echo $item->id;?>">                    
                    <span class="p_wr">
                        <span class="control_link">         
                            <span class="coll_item">
                                <?php if (!empty($item->last_login)): ?>
                                    <?php echo date('d.m.Y', $item->last_login); ?>
                                <?php endif; ?>
                            </span>                            
                            <span class="coll_item">
                                [
                                    <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'admins', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                                ]
                            </span>
                            <span class="coll_item">
                                <?php if ($item->id != 5): ?>
                                [
                                    <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'admins', 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
                                ]
                                <?php endif; ?>
                            </span>
                        </span>
                        <span class="name">                            
                            <strong class="red">Loign:</strong> <?php echo $item->username; ?>
                            <br />                        
                            <strong class="red">Email:</strong> <?php echo $item->email; ?>
                        </span>
                    </span>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <div>There is no users!</div>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">admins();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete record">
    <h2 align="center">Are you sure?</h2>
</div>