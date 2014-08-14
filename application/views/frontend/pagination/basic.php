<link rel="stylesheet" type="text/css" href="/media/frontend/css/paginator3000.css" />
<script type="text/javascript" src="/media/frontend/js/paginator3000.js"></script>
<div class="paginator" id="paginator1"></div>
<div class="paginator_pages">Страниц: <?php echo $total_pages; ?></div>
<script type="text/javascript">
$(function(){
    $(window).load(function(){
            pag1 = new Paginator('paginator1', <?php echo $total_pages; ?>, 5, <?php echo $current_page; ?>, '<?php echo $page->get_url(); ?>', '<?php echo $page->get_url_params(); ?>');
    })
})
</script>