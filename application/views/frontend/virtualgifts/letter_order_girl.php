<table>
    <tr>
        <td><?php echo __('name_of_virtualgift'); ?></td>
    </tr>
    <?php foreach ($gifts as $item): ?>
    <tr>
        <td><?php echo $item->name; ?></td>
    </tr>
    <?php endforeach; ?>
</table>