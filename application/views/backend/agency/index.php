<div class="conteiner">
    <h1>Agencies &rAarr; Agencies management</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Agency</div>
        </div>
        <?php if (sizeof($agency) > 0): ?>
        <ul class="tree">
            <?php foreach ($agency AS $item):?>
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
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'agency', 'action' => 'edit', 'id' => $item->user_id))); ?>">Edit</a>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'agency', 'action' => 'delete', 'id' => $item->user_id))); ?>">Delete</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        <?php echo $item->name;?>
                        <br />
                        <strong>
                            Director 
                        </strong>
                        :
                        <strong class="red">
                            <?php echo $item->director; ?>
                        </strong>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no agencies!</div>
        <?php endif; ?>
    </div>
</div>

<?php echo $pagination; ?>

<script type="text/javascript">page_agency();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete news!">
    <h2 align="center">Are you sure?</h2>
</div>