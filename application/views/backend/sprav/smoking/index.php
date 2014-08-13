<div class="conteiner">
    <h1>Smoking</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Text</div>
        </div>
        <?php if (sizeof($data) > 0): ?>
        <ul class="tree" id="sortable">
            <?php foreach ($data as $item): ?>
                <li id="listItem_<?php echo $item->id;?>">
                <span class="p_wr">
                    <span class="control_link">
                        <span class="coll_item">
                            [
                              <?php if ($item->status==1):?>
                                <a class="ps_coll is_visible active" href="#" id="<?php echo $item->id;?>">Published</a>
                              <?php else:?>
                                <a class="ps_coll is_visible" href="#" id="<?php echo $item->id;?>">Unpublished</a>
                              <?php endif;?>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav', 'category'=>$category, 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend_sprav', array('controller' => 'sprav', 'category'=>$category, 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        <?php echo $item->name;?>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no records!</div>
        <?php endif; ?>
    </div>
</div>


<script type="text/javascript">sprav_page();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete record!">
    <h2 align="center">Are you sure?</h2>
</div>