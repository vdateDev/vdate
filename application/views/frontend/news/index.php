<?php if (sizeof($news) > 0): ?>
    <div class="actualList">
        <ul>        
            <?php foreach ($news AS $item): ?>
                <li>
                    <?php if (HTML::isset_img('upload/news/medium_'.$item->image)): ?>
                        <a href="<?php echo strtolower(Route::url('news_show', array('language' => $language, 'url' => $item->url))); ?>" class="actPic">
                            <img src="<?php echo HTML::isset_img('upload/news/medium_'.$item->image); ?>" alt="<?php echo $item->name; ?>">
                        </a>
                    <?php endif; ?>
                    <div class="act_inf">
                        <a href="<?php echo strtolower(Route::url('news_show', array('language' => $language, 'url' => $item->url))); ?>"><?php echo $item->name; ?></a>
                            <time datetime="<?php echo date('d.m.Y', $item->date_news); ?>"><?php echo date('d.m.Y', $item->date_news); ?></time>
                            <p><?php echo $item->announcement; ?></p>
                    </div><!-- .act_inf -->
                    <div class="details"><a href="<?php echo strtolower(Route::url('news_show', array('language' => $language, 'url' => $item->url))); ?>"><?php echo __('details'); ?></a></div>
                   <?php if ($item->reviews->count_by_news($item->id)>0): ?> <div class="details"><?php echo __('count_reviews'); ?> <?php echo $item->reviews->count_by_news($item->id); ?></div><?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div><!-- .actualList -->
<?php endif; ?>
<!-- pagination -->
<?php echo $pagination; ?>
<!-- .pagination -->
