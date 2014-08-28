<div class="conteiner">
    <h1>Letter templates &rAarr; Templates management</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Actions</span>                
            </div>
            <div class="name_page">Name</div>
        </div>
        <?php if (sizeof($letters) > 0): ?>
        <ul class="tree" id="sortable">
            <?php foreach ($letters AS $item):?>
                <li id="listItem_<?php echo $item->id;?>">
                <span class="p_wr">
                    <span class="control_link">

                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'letters', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        <?php echo $item->name;?>
                        <br />
                        <strong>
                            Key 
                        </strong>
                        :
                        <strong class="red">
                            <?php echo $item->key; ?>
                        </strong>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no templates!</div>
        <?php endif; ?>
    </div>
</div>
