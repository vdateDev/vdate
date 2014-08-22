<div class="conteiner">
    <h1>Men &rAarr; Men management</h1>
    
    <div class="filter_wrap">
        <div class="textcenter">
            <form method="get" id="submitGetForm">
                <div class="filter_item">
                    <label class="middle"><strong>First name:</strong></label>
                    <input class="middle" name="firstname" value="<?php echo $firstname; ?>">
                </div>  
                <div class="filter_item">
                    <label class="middle"><strong>Last name:</strong></label>
                    <input class="middle" name="lastname" value="<?php echo $lastname; ?>">
                </div>  
                <div class="filter_item">
                    <label class="middle"><strong>Login:</strong></label>
                    <input class="middle" name="login" value="<?php echo $login; ?>">
                </div>  
                <div class="filter_item">
                    <label class="middle"><strong>Status:</strong></label>
                    <select class="middle" name="status">
                        <option value="3" <?php echo $status == 3 ? 'selected' : ''; ?>>All</option>
                        <option value="1" <?php echo $status == 1 ? 'selected' : ''; ?>>Published</option>
                        <option value="0" <?php echo $status == 0 ? 'selected' : ''; ?>>Unpublished</option>
                        <option value="2" <?php echo $status == 2 ? 'selected' : ''; ?>>Blocked</option>
                    </select>
                </div>  
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Date of registration</span>
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Men</div>
        </div>
        <?php if (sizeof($men) > 0): ?>
        <ul class="tree">
            <?php foreach ($men AS $item):?>
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
                                <span class="ps_coll active" >Published</span>
                              <?php elseif ($item->status==2):?>
                                <span class="ps_coll">Blocked</span>
                              <?php else:?>
                                <span class="ps_coll">Unpublished</span>
                              <?php endif;?>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'men', 'action' => 'edit', 'id' => $item->user_id))); ?>">Edit</a>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll" href="<?php echo strtolower(Route::url('backend', array('controller' => 'adminletters', 'action' => 'new', 'id' => $item->user_id))); ?>">Write letter</a>
                            ]
                        </span>
                        <span class="coll_item">
                            [
                            <a class="ps_coll delete_this" href="<?php echo strtolower(Route::url('backend', array('controller' => 'men', 'action' => 'delete', 'id' => $item->user_id))); ?>">Delete</a>
                            ]
                        </span>
                    </span>
                    <span class="name">
                        <?php echo $item->firstname;?> <?php echo $item->lastname; ?>
                        <br/>
                        <strong>Login:</strong> <strong class="red"><?php echo $item->username; ?></strong>
                    </span>
                </span>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <div>There is no men!</div>
        <?php endif; ?>
    </div>
</div>

<?php echo $pagination; ?>

<script type="text/javascript">page_men();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete man!">
    <h2 align="center">Are you sure?</h2>
</div>