<table>
    <tr>
        <td><?php echo __('name_of_virtualgift'); ?></td>
        <td><?php echo __('cost'); ?></td>
    </tr>
    <?php foreach ($gifts as $item): ?>
    <tr>
        <td><?php echo $item->name; ?></td>
        <td><?php echo $item->cost; ?> <?php echo __('credits'); ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td><?php echo __('total_cost'); ?></td>
        <td><?php echo $total_cost; ?> <?php echo __('credits'); ?></td>
    </tr>
</table>