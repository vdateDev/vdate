<?php if (sizeof($photos)>0): ?>
    <?php foreach($photos as $item): ?>
        <?php if (HTML::isset_img('upload/photos/small/'.$item->photo)): ?>
            <div class="catalog-image" data-image="<?php echo $item->id; ?>">
                <div class="preview-image">
                    <a href="<?php echo HTML::isset_img('upload/photos/big/'.$item->photo); ?>" class="colorbox" rel="uploaded-img">
                        <img src="<?php echo HTML::isset_img('upload/photos/small/'.$item->photo); ?>" />
                    </a>               
                    <div class="delete-catalog-image" data-id="<?php echo $item->id; ?>"></div>                    
                </div>
                <div class="default-image">         
                    <label for="def-img-<?php echo $item->id; ?>">Cover</label>
                    <input id="def-img-<?php echo $item->id; ?>" type="radio" <?php if ($item->default_image == 1) echo 'checked'; ?> name="default_image" value="<?php echo $item->id; ?>" />
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
<?php else: ?>
    <div style="font-size: 16px; color: red;">There is no images!</div>
<?php endif; ?>

