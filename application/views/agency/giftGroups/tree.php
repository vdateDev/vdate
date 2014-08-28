<?php if (count($groups)>0): ?>
    <?php foreach ($groups as $item):?>
    <li id="listItem_<?php echo $item->id;?>">
        <span class="p_wr">
            <span class="control_link">

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
                    <a class="ps_coll" href="<?php echo strtolower(Route::url('agency', array('controller' => 'giftgroups', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                    ]
                </span>
                <span class="coll_item">
                       <?php if(Model_GiftGroups::count_by_parent($item->id)==0): ?>
                        [
                        <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('agency', array('controller' => 'giftgroups', 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
                        ]
                        <?php endif; ?>
                </span>
            </span>
            <span class="name">
                <?php echo $item->name;?>
            </span>
        </span>
         <?php if(Model_GiftGroups::count_by_parent($item->id)>0): ?>
            <ul>
            <?php echo Model_GiftGroups::get_tree_backend($item->id,'agency/giftGroups/tree'); ?>
            </ul>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
<?php endif; ?>

