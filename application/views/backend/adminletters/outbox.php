<div class="conteiner">
    <h1>Admin Letters &rAarr; Outbox</h1>
    
    <div class="filter_wrap">
        <div class="textcenter">
            <form method="get" id="submitGetForm">
                <div class="filter_item">
                    <label class="middle"><strong>Status:</strong></label>
                    <select class="middle" name="status">
                        <option value="2" <?php echo $status == 2 ? 'selected' : ''; ?>>All</option>
                        <option value="1" <?php echo $status == 1 ? 'selected' : ''; ?>>Read</option>
                        <option value="0" <?php echo $status == 0 ? 'selected' : ''; ?>>New</option>
                    </select>
                </div>  
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Date</span>
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Letters</div>
        </div>
        <?php if (sizeof($letters) > 0): ?>
        <ul class="tree">
            <?php foreach ($letters AS $item):?>
                <li id="listItem_<?php echo $item->id;?>">
                <span class="p_wr">
                    <span class="control_link">
                        <span class="coll_item">
                            [
                            <span class="ps_coll"><?php echo date('d.m.Y',$item->created_at); ?></span>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                              <?php if ($item->status==1):?>
                                <span class="ps_coll active" >Read</span>
                              <?php else:?>
                                <span class="ps_coll">New</span>
                              <?php endif;?>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'adminletters', 'action' => 'show', 'id' => $item->id))); ?>">Show</a>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'adminletters', 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        <?php echo $item->firstname;?> <?php echo $item->lastname; ?>
                        <br/>
                        <strong>Subject:</strong> <?php echo $item->subject; ?>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no letters!</div>
        <?php endif; ?>
    </div>
</div>

<?php echo $pagination; ?>

<script type="text/javascript">page_adminletters();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete letter!">
    <h2 align="center">Are you sure?</h2>
</div>