<div class="conteiner">
    <h1>Pages &rAarr; Page managmenet</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
               <!-- <span class="coll_item">Status</span>-->
                <span class="coll_item">Actions</span>                
            </div>
            <div class="name_page">Page name</div>
        </div>
        <?php if (sizeof($pages) > 0): ?>
        <ul class="tree" id="sortable">
            <?php foreach ($pages AS $item):?>
                <li id="listItem_<?php echo $item->id;?>">
                <span class="p_wr">
                    <span class="control_link">
                     <!--   <span class="coll_item">
                            [
                              <?php if ($item->status==1):?>
                                <a class="ps_coll is_visible active" href="#" id="<?php echo $item->id;?>">Published</a>
                              <?php else:?>
                                <a class="ps_coll is_visible" href="#" id="<?php echo $item->id;?>">Unpublished</a>
                              <?php endif;?>
                            ]
                        </span>-->
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'pages', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                            ]
                        </span>
                        <!--<span class="coll_item">
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'pages', 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
                            ]
                        </span>-->
                    </span>
                    <span class="name">
                        <?php echo $item->name;?>
                        <br />
                        <strong>
                            URL 
                        </strong>
                        :
                        <strong class="red">
                            <?php echo $item->url; ?>
                        </strong>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no pages!</div>
        <?php endif; ?>
    </div>
</div>

<script type="text/javascript">content_pages();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete record">
    <h2 align="center">Are you sure?</h2>
</div>