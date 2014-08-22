function message(options) {
    
    var text = options.text;
    var type = options.type || 'alert';
    var timeout = options.timeout || false;
    var layout = options.layout || 'topRight';
    var callback = options.callback;
    
    var n = noty({
        text: text,
        type: type,
        layout: layout,
        timeout: timeout,
        callback: callback,
        theme: 'defaultTheme',
    });
}

function checkForMessage(container) {
    
    if (container.text() != '') {
        message({
            text: container.text(),
            type: container.data('type'),
            timeout: container.data('time'),
            callback: { 
                onClose: function() {
                    container.empty();
                }
            }
        });
    }
}

$(document).ready(function() {
    
    checkForMessage($('#site-message'));
    
    $('.add_to_fav').on('click', function() {
        $.post('/ajax/en/profile/addtofavorite',
        {
                id: $(this).attr('data-id'),

        },
        function(data){
                if (data)
                {

                }
        });
        return false; 
    })

});

