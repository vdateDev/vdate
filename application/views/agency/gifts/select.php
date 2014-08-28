<?php foreach ($groups as $group): ?>
<?php if (Model_GiftGroups::count_by_parent($group->id)==0): ?>
    <option value="<?php echo $group->id; ?>" <?php if ($group->id==$cur_parent) echo "selected"; ?>><?php echo $group->name; ?></option>
<?php else: ?>
    <optgroup label="<?php echo $group->name; ?>">
        <?php echo 1; ?>
        <?php echo Model_GiftGroups::get_tree_backend($group->id,'agency/gifts/select',$cur_parent); ?>
    </optgroup>
<?php endif; ?>
<?php endforeach; ?>



