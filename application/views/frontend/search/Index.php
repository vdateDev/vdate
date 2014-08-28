<form action="">
<?php echo $ById; ?>
<hr>
<?php echo $Simple; ?>
<hr>
<?php echo $Advanced; ?>
<input type="button" class="searchButtonForm" value="search">
</form>
<script>
    $('.searchButtonForm').click(function(){
        
        var url = window.location.href.split('?');
        
        var id  = $("input[name$='id']").val();
        
        if(id != '') {
            window.location.href = url[0] + '?id=' + id;
        } else {
            
            var inp = [];
            
            $('.fSearch').each(function(){
                if($(this).val() != '') {
                    inp.push($(this).attr('name') + '=' + $(this).val());
                }
            });
            
            inp.sort();
            
            window.location.href = url[0] + '?' + inp.join('&');
        }
    });
</script>

<hr>
<h2>Result</h2>
<?php if(count($Result) > 0):?>
    <?php foreach($Result as $item):?>
        <?php echo $item->firstname.'-'.$item->age; ?><br>
    <?php endforeach;?>
<?php else: ?>
    No results!
<?php endif; ?>
<hr>