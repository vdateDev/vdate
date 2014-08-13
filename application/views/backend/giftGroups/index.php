<div class="conteiner">
    <h1>Gift categories &rAarr; Categories management</h1>
    <div>
        <div class="ps_table_title">
            <div class="coll_title">
                <span class="coll_item">Status</span>
                <span class="coll_item2">Actions</span>                
            </div>
            <div class="name_page">Category name</div>
        </div>
        <?php if (sizeof($groups) > 0): ?>
        <ul class="tree" id="sortable">
              <?php echo  $groups; ?>
        </ul>
        <?php else: ?>
            <div>There is no categories!</div>
        <?php endif; ?>
    </div>
</div>


<script type="text/javascript">gift_groups_list();</script>
<div id="dialog" style="display:none;"></div>
<div id="message_to_delete" style="display:none;" title="Delete category!">
    <h2 align="center">Are you sure?</h2>
</div>