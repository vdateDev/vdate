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
    var language = $('#site-language').text();
    
    $('.delete_this').click(function(e) {
        _div = $('#message_to_delete');
        _this = $(this);
        $('#dialog').attr('title',_div.attr('title')).html(_div.html());

        $("#dialog").dialog({
            width:700,
            buttons: {
                'Yes' : function () {
                    document.location=_this.attr('href');;
                    $(this).dialog( "close" ).dialog("destroy");
                },
                'Cancel': function() {
                    $(this).dialog( "close" ).dialog("destroy");
                }
            }
        });
        return false;
    });
    
    
    /* add user to favorites */
    
    $('.add_to_fav').on('click', function() {
        $.post('/request/'+language+'/profile/addtofavorite',
        {
                id: $(this).attr('data-id')

        },
        function(data){
                if (data.success)
                {
                    window.location.href = data.href;
                } else {
                    message({
                        text: data.message['text'],
                        type: data.message['type'],
                        timeout: data.message['time'],
                        callback: { 
                            onClose: function() {
                            }
                        }
                    });
                }
        });
        return false; 
    })
    
    /*favorites group deleting */
        $('.favSortDel').on('click', function(event) {
            event.preventDefault();
            if ($('.favOneChk').length) {
                
                    _div = $('#message_to_delete');
                    _this = $(this);
                    $('#dialog').attr('title',_div.attr('title')).html(_div.html());

                    $("#dialog").dialog({
                        width:700,
                        buttons: {
                            'Yes' : function () {
                                delForm.submit();
                                $(this).dialog( "close" ).dialog("destroy");
                            },
                            'Cancel': function() {
                                $(this).dialog( "close" ).dialog("destroy");
                            }
                        }
                    });
                    return false;
                
               
            }
        });
        
    /*gifts and flowers, virtual gifts */
            /*add input to form*/
            $('.contentBlock').on('click', '.presADD', function(event) {
               var str ='<input type="hidden" name="items[]" value="'+$(this).attr('data-id')+'">';
               $('.order_gifts').append(str);
            });
            
            $('.contentBlock').on('click', '.clearCart', function(event) {
                $('.order_gifts').html('');
            });
    

});

