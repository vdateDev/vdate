<div class="conteiner">
    <h1>SEO &rAarr; Seo tags management</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Actions</span>
            </div>
            <div class="name_page">Name</div>
        </div>
        <?php if (sizeof($seo) > 0): ?>
        <ul class="tree">
            <?php foreach ($seo AS $item):?>
                <li id="listItem_<?php echo $item->id;?>">
                <span class="p_wr">
                    <span class="control_link">
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'seo', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        <?php echo $item->name;?>
                        <br />
                        <strong>
                            Page 
                        </strong>
                        :
                        <strong class="red">
                            <?php echo $item->controller; ?> &rArr; <?php echo $item->action; ?>
                        </strong>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no seo tags!</div>
        <?php endif; ?>
    </div>
</div>

<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete record!">
    <h2 align="center">Are you sure?</h2>
</div>