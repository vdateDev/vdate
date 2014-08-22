<div class="conteiner">
    <h1>Slideshow &rAarr; Slideshow management</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">                
                <span class="coll_item">status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Name of the slide</div>
        </div>
        <?php if (sizeof($slides) > 0): ?>
            <ul class="tree" id="sortable">
                <?php foreach ($slides AS $item):?>
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
                                <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'slideshow', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                                ]
                            </span>
                            <span class="coll_item">
                                [
                                <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'slideshow', 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
                                ]
                            </span>
                        </span>
                        <span class="name">
                            <?php echo $item->name;?>
                            <br />                        
                        </span>
                    </span>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <div>There is no slides!</div>
        <?php endif; ?>
    </div>
</div>

<?php echo $pagination; ?>

<script type="text/javascript">page_slideshow();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete record">
    <h2 align="center">Are you sure?</h2>
</div>