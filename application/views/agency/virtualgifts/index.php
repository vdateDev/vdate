<div class="conteiner">
    <h1>Virtual gifts &rAarr; Virtual gifts management</h1>
    
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
                    <label class="middle"><strong>Sort:</strong></label>
                    <select class="middle" name="sort">
                        <option value="0">Default</option>
                        <option value="1" <?php echo $sort == 1 ? 'selected' : ''; ?>>From A to Z</option>
                        <option value="2" <?php echo $sort == 2 ? 'selected' : ''; ?>>From Z to A</option>
                    </select>
                </div>  
                <div class="filter_item">
                    <label class="middle"><strong>Date of publication: From</strong></label>
                    <input type="text" name="created_at_start" value="<?php if ($created_at_start!="") echo $created_at_start; ?>" class="datepicker">
                    <label class="middle"><strong>To</strong></label>
                    <input type="text" name="created_at_end" value="<?php if  ($created_at_end!="") echo $created_at_end; ?>" class="datepicker">
                   
                </div>  
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Date of publication</span>
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Gift name</div>
        </div>
        <?php if (sizeof($gifts) > 0): ?>
        <ul class="tree" id="sortable">
            <?php foreach ($gifts AS $item):?>
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
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('agency', array('controller' => 'virtualgifts', 'action' => 'edit', 'id' => $item->id))); ?>">Edit</a>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('agency', array('controller' => 'virtualgifts', 'action' => 'delete', 'id' => $item->id))); ?>">Delete</a>
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
            <div>There is no gifts!</div>
        <?php endif; ?>
    </div>
</div>

<?php echo $pagination; ?>

<script type="text/javascript">page_virtualgifts();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete gift!">
    <h2 align="center">Are you sure?</h2>
</div>

<script type="text/javascript">
$(document).ready(function() {    
    $.datepicker.setDefaults( $.extend($.datepicker.regional["ru"]) );
    $(".datepicker").datepicker();
});
</script>