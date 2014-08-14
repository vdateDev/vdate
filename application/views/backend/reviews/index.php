<div class="conteiner">
    <h1>Reviews &rAarr; Reviews management</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item2">Date</span>
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Text</div>
        </div>
        <?php if (sizeof($reviews) > 0): ?>
        <ul class="tree">
            
            <?php foreach ($reviews AS $item): ?>

                <li id="listItem_<?php echo $item->id;?>">
                <span class="p_wr">
                    <span class="control_link">
                        <span class="coll_item">
                            [
                                <?php echo date('d.m.Y', $item->created_at); ?>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                              <?php if ($item->status==1):?>
                                <a class="ps_coll is_visible active" href="#" pid="<?php echo $item->id;?>">Published</a>
                              <?php else:?>
                                <a class="ps_coll is_visible" href="#" pid="<?php echo $item->id;?>">Unpublished</a>
                              <?php endif;?>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'reviews', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'reviews', 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        <?php echo $item->comment; ?>
                        <br />
                        <strong>
                            News 
                        </strong>
                        :
                        <strong class="red">
                            <a href="<?php echo strtolower(Route::url('backend', array('controller' => 'news', 'action' => 'edit', 'id' => $item->news_id))); ?>" target="_blank"><?php echo $item->news_name; ?></a>
                        </strong>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no reviews!</div>
        <?php endif; ?>
    </div>
</div>

<?php echo $pagination; ?>

<script type="text/javascript">page_reviews();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete review!">
    <h2 align="center">Are you sure?</h2>
</div>