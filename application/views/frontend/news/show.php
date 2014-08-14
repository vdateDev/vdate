<div class="content">
    <?php if (HTML::isset_img('upload/news/big_'.$news->image)): ?>
        <div class="content-image-block">
            <img src="<?php echo HTML::isset_img('upload/news/big_'.$news->image); ?>" alt="">
        </div>
    <?php endif; ?>
    <?php echo $news->text; ?>
</div>

<div class="clear"></div>
<div class="back-arrow-content">
    <a href="<?php echo Route::url('news', array('language' => $language)); ?>"><?php echo __('back_to_news'); ?></a>
</div>

<div class="clear"></div>

<?php if ($reviews): ?>
    <?php foreach ($reviews as $review): ?>
        <p> <?php echo $review->comment; ?> <?php echo date('d.m.Y',$review->created_at); ?> </p>
    <?php endforeach; ?>
<?php endif; ?>
<?php echo print_r($errors); ?>
<form method="post">
    Name <input type="text" name="name" value="<?php echo $data['name']; ?>"><br/>
    E-mail <input type="text" name="email" <?php echo $data['email']; ?>><br/>
    Comment <textarea name="comment"><?php echo $data['comment']; ?></textarea><br/>
    <input type="submit" value="Send">
</form>