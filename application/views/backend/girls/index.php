<div class="conteiner">
    <h1>Girls &rAarr; Grils management</h1>
    
    <div class="filter_wrap">
        <div class="textcenter">
            <form method="get" id="submitGetForm">
                <div class="filter_item">
                    <label class="middle"><strong>Status:</strong></label>
                    <select class="middle" name="status">
                        <option value="2" <?php echo $status == 2 ? 'selected' : ''; ?>>All</option>
                        <option value="1" <?php echo $status == 1 ? 'selected' : ''; ?>>Published</option>
                        <option value="0" <?php echo $status == 0 ? 'selected' : ''; ?>>Unpublished</option>
                    </select>
                </div>  
                
                <div class="filter_item">
                    <label class="middle"><strong>Agency:</strong></label>
                    <select class="middle" name="agency_id">
                        <option value="0">All</option>
                        <?php foreach ($agency as $list): ?>
                        <option value="<?php echo $list->id; ?>" <?php if ($list->id==$agency_id) echo 'selected'; ?>><?php echo $list->name; ?></option>
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
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Girl</div>
        </div>
        <?php if (sizeof($girls) > 0): ?>
        <ul class="tree">
            <?php foreach ($girls AS $item):?>
                <li id="listItem_<?php echo $item->id;?>">
                <span class="p_wr">
                    <span class="control_link">
                        <span class="coll_item">
                            [
                              <?php if ($item->status==1):?>
                                <span class="ps_coll active" >Published</span>
                              <?php else:?>
                                <span class="ps_coll">Unpublished</span>
                              <?php endif;?>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'girls', 'action' => 'edit', 'id' => $item->user_id))); ?>">Edit</a>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'girls', 'action' => 'delete', 'id' => $item->user_id))); ?>">Delete</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        <?php echo $item->firstname;?> <?php echo $item->lastname; ?>
                        <br />
                        <strong>
                            Agency 
                        </strong>
                        :
                        <strong class="red">
                            <?php echo $item->agency_name; ?>
                        </strong>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no girls!</div>
        <?php endif; ?>
    </div>
</div>

<?php echo $pagination; ?>

<script type="text/javascript">page_girls();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete girl!">
    <h2 align="center">Are you sure?</h2>
</div>