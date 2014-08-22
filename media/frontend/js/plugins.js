// ==================================================================================   main.js

$(document).ready(function() {

    if (!Modernizr.generatedcontent) {
        $('html').addClass('no-generatedcontent');
    } else {
        $('html').addClass('generatedcontent');
    }

    //start gall
    $('.g_list').each(function() {
        var gList = $(this);
        var gItem = $('.g_item', gList);
        $('.g_pic', gList).each(function() {
            var gPic = $(this);
            gClone1 = gPic.clone().removeClass('g_pic').addClass('g_clone1').addClass('g_clone').css({
                left: '-5px',
                top: '-6px',
                position: 'absolute'
            });
            gClone2 = gPic.clone().removeClass('g_pic').addClass('g_clone2').addClass('g_clone').css({
                left: '2px',
                top: '6px',
                position: 'absolute'
            });
            gClone3 = gPic.clone().removeClass('g_pic').addClass('g_clone3').addClass('g_clone').css({
                left: '5px',
                top: '-2px',
                position: 'absolute'
            });
            gPic
                .before(gClone1)
                .before(gClone2)
                .before(gClone3);
        });

        gItem.bind('mouseenter', function() {
            $('.g_clone1', $(this)).stop().animate({
                left: '-15px',
                top: '-11px'
            }, 100);
            $('.g_clone2', $(this)).stop().animate({
                left: '7px',
                top: '15px'
            }, 100);
            $('.g_clone3', $(this)).stop().animate({
                left: '15px',
                top: '-14px'
            }, 100);
        }).bind('mouseleave', function() {
            $('.g_clone1', $(this)).stop().animate({
                left: '-5px',
                top: '-6px'
            }, 100);
            $('.g_clone2', $(this)).stop().animate({
                left: '2px',
                top: '6px'
            }, 100);
            $('.g_clone3', $(this)).stop().animate({
                left: '5px',
                top: '-2px'
            }, 100);
        });
    });
    //end gall

    //start file
    $('.file').each(function() {
        var f = $(this);
        var fileItem = f.closest('.file_item');
        var fakeBut = $('.fakebut', fileItem);
        var rightPos = fileItem.width() - (fakeBut.position().left + fakeBut.outerWidth());
        f.css({
            right: rightPos
        });
    });
    $(document).on('change', '.file', function() {

        var item_wrap = $(this).closest('.row');
        var file = $(this).val();
        var reWin = /.*\\(.*)/;
        var fileTitle = file.replace(reWin, "$1"); //w*s
        var reUnix = /.*\/(.*)/;
        var fileTitle = fileTitle.replace(reUnix, "$1"); //*nix

        $('.fakefile input', item_wrap).val(fileTitle);
    });
    //end file	

    //sart placeholder
    if (!Modernizr.input.placeholder) {
        $('input[placeholder]').each(function() {
            var el = $(this);
            var ph = el.attr('placeholder');
            if (el.val() === '') {
                el.val(ph);
            }
            el.focus(function() {
                if (el.val() === ph) {
                    el.val('');
                }
            }).blur(function() {
                if (el.val() === '') {
                    el.val(ph);
                }
            });
        });
    }
    //end placeholder

    //start submit
    $('a.submit').bind('click', function() {
        $(this).closest('form').submit();
        return false;
    });
    //end submit

    //start vertical middle
    $('.middle_inner').each(function() {
        $('<span>').addClass('helper').appendTo($(this).parent());
    });
    //end vertical middle

    //start navigator
    $('.navigator a').each(function() {
        var nav_el = $(this);
        nav_el.after('<span>&nbsp;/&nbsp;</span>').css({
            padding: '0'
        });
    });
    //end navigator

    //start form_style
    $('.form_style').each(function() {
        var label_w = $('label', $(this)).outerWidth();
        $('.sdvig', $(this)).css({
            marginLeft: label_w + 10
        });
    });
    //end form_style

    //start gallery
    $('.gallery_list').each(function() {
        var g_list = $(this);
        $('.thumbnail', g_list).each(function() {
            var th_item = $(this);
            var th_link = $('.img_link', th_item);
            var th_img = $('img', th_item);
            var th_clone = th_img.clone().addClass('th_clone_top').css({
                opacity: '0.2'
            });
            var th_clone2 = th_img.clone().addClass('th_clone_bot').css({
                opacity: '0.2'
            });
            th_clone.prependTo(th_link);
            th_clone2.prependTo(th_link);
            th_img.css({
                position: 'relative',
                zIndex: '50'
            });

        });
    });
    $('.thumbnails').each(function() {
        var g_wrap = $(this);
        g_wrap.bind('mouseenter', function() {
            $('.thumbnail', g_wrap).stop().animate({
                opacity: '0.7'
            }, 1000).bind('mouseenter', function() {
                $(this).stop().animate({
                    opacity: '1'
                }, 300);
            }).bind('mouseleave', function() {
                $(this).stop().animate({
                    opacity: '0.7'
                }, 300);
            });
        }).bind('mouseleave', function() {
            $('.thumbnail', g_wrap).stop().animate({
                opacity: '1'
            }, 1000);
        });
    });

    $('.footer_right a').on('mouseenter', function() {
        $(this).addClass('anim');
    }).on('mouseleave', function() {
        $(this).on('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function() {
            $(this).removeClass('anim');
        });
    });
    //end gallery

    //start content pic
    $('.content>img,.content>p>img').each(function() {
        var float = $(this).attr('style');
        var align = $(this).attr('align');
        if (float == 'float: left;' || float == 'float: left' || float == 'float:left;' || float == 'float:left' || align == 'left') {
            $(this).addClass('imgLeft');
        }
        if (float == 'float: right;' || float == 'float: right' || float == 'float:right;' || float == 'float:right' || align == 'right') {
            $(this).addClass('imgRight');
        }
    });
    //end content pic

    /*-----------------------*/
    $(window).load(function() {
        //start img style
        if ($('img.cone').length) {
            $('img.cone').each(function() {
                var elStyle = $(this).attr('style');
                if (!elStyle) {
                    elStyle = '';
                }

                var
                    topLeft = $(this).css('border-top-left-radius'),
                    topRight = $(this).css('border-top-right-radius'),
                    botLeft = $(this).css('border-bottom-left-radius'),
                    botRight = $(this).css('border-bottom-right-radius'),
                    imgWrap = $('<span>').attr('class', $(this).attr('class')).attr('style', elStyle).addClass('img-cone').css({
                        width: $(this).width(),
                        height: $(this).height(),
                        background: 'url(' + $(this).attr('src') + ') 50% 50% no-repeat',
                        'border-radius': topLeft + ' ' + topRight + ' ' + botRight + ' ' + botLeft
                    });
                $(this).wrap(imgWrap).hide();
            });
        }
        //end img style

        //quotes min
        jQuery.fn.liQuotes = function(options) {
            var o = jQuery.extend({}, options);
            return this.each(function() {
                htmlreplace($(this));

                function htmlreplace(element) {
                    if (!element) element = document.body;
                    var nodes = $(element).contents().each(function() {
                        if (this.nodeType == Node.TEXT_NODE) {
                            $(this).wrap('<span class="node_t"/>');
                        } else {
                            htmlreplace(this);
                        }
                    });
                }
                $('.node_t').each(function() {
                    var el = $(this),
                        str = el.html(),
                        raquo_one = /'\s/g,
                        laquo_one = /\s'/g,
                        raquo_two = /"\s/g,
                        laquo_two = /\s"/g,
                        raquo_brack_one = /'\)/g,
                        laquo_brack_one = /\('/g,
                        raquo_brack_two = /"\)/g,
                        laquo_brack_two = /\("/g,
                        raquo_tag_one = /'$/g,
                        laquo_tag_one = /^'/g,
                        raquo_tag_two = /"$/g,
                        laquo_tag_two = /^"/g,
                        raquo_one_coma = /'\,/g,
                        raquo_one_dot = /'\./g,
                        raquo_two_coma = /"\,/g,
                        raquo_two_dot = /"\./g,
                        raquo_one_colon = /'\:/g,
                        raquo_two_colon = /"\:/g,
                        quest_one_colon = /'\?/g,
                        quest_two_colon = /"\?/g,
                        exclam_one_colon = /'\!/g,
                        exclam_two_colon = /"\!/g,
                        semic_one_colon = /'\;/g,
                        semic_two_colon = /"\;/g;
                    var result = str.replace(laquo_one, " &laquo;").replace(raquo_one, "&raquo; ").replace(laquo_two, " &laquo;").replace(raquo_two, "&raquo; ").replace(raquo_one_coma, "&raquo;,").replace(raquo_one_dot, "&raquo;.").replace(raquo_two_coma, "&raquo;,").replace(raquo_two_dot, "&raquo;.").replace(raquo_one_colon, "&raquo;:").replace(raquo_two_colon, "&raquo;:").replace(quest_one_colon, "&raquo;?").replace(quest_two_colon, "&raquo;?").replace(exclam_one_colon, "&raquo;!").replace(exclam_two_colon, "&raquo;!").replace(laquo_brack_one, "(&laquo;").replace(raquo_brack_one, "&raquo;)").replace(laquo_brack_two, "(&laquo;").replace(raquo_brack_two, "&raquo;)").replace(laquo_tag_one, "&laquo;").replace(raquo_tag_one, "&raquo;").replace(laquo_tag_two, "&laquo;").replace(raquo_tag_two, "&raquo;").replace(semic_one_colon, "&raquo;;").replace(semic_two_colon, "&raquo;;");
                    el.html(result);
                });
                $('.node_t').each(function() {
                    var html = $(this).html();
                    $(this).after(html).remove();
                });
            });
        };
        $('.q').liQuotes();
    });
});


//add more link @version 1.2
jQuery.fn.addtocopy = function(usercopytxt) {
    var options = {
        htmlcopytxt: '<br>More: <a href="' + window.location.href + '">' + window.location.href + '</a><br>',
        minlen: 25,
        addcopyfirst: false
    };
    $.extend(options, usercopytxt);
    var copy_sp = document.createElement('span');
    copy_sp.id = 'ctrlcopy';
    copy_sp.innerHTML = options.htmlcopytxt;
    return this.each(function() {
        $(this).mousedown(function() {
            $('#ctrlcopy').remove();
        });
        $(this).mouseup(function() {
            if (window.getSelection) {
                var slcted = window.getSelection();
                var seltxt = slcted.toString();
                if (!seltxt || seltxt.length < options.minlen) return;
                var nslct = slcted.getRangeAt(0);
                seltxt = nslct.cloneRange();
                seltxt.collapse(options.addcopyfirst);
                seltxt.insertNode(copy_sp);
                if (!options.addcopyfirst) nslct.setEndAfter(copy_sp);
                slcted.removeAllRanges();
                slcted.addRange(nslct);
            } else if (document.selection) {
                var slcted = document.selection;
                var nslct = slcted.createRange();
                var seltxt = nslct.text;
                if (!seltxt || seltxt.length < options.minlen) return;
                seltxt = nslct.duplicate();
                seltxt.collapse(options.addcopyfirst);
                seltxt.pasteHTML(copy_sp.outerHTML);
                if (!options.addcopyfirst) {
                    nslct.setEndPoint("EndToEnd", seltxt);
                    nslct.select();
                }
            }
        });
    });
};

//debug()
var debug = function(f) {
    if (window.console !== undefined) {
        console.log(f);
    }
};




// ==================================================================================   liActualSize.js


(function($) {
    $.fn.actual = function() {
        if (arguments.length && typeof arguments[0] == 'string') {
            var dim = arguments[0];
            if (this.is(':visible')) return this[dim]();
            var clone = $(this).clone().css({
                position: 'absolute',
                top: '-9999px',
                visibility: 'hidden'
            }).appendTo('body');
            var s = clone[dim]();
            clone.remove();

            return s;
        };
        return undefined;
    };
}(jQuery));






// ==================================================================================   liValidForm.js


jQuery.fn.liValidForm = function(options) {
    console.log(12345);
    // настройки по умолчанию
    var o = jQuery.extend({
        valid: 'valid', //valid element selector 
        r: 'r', //mandatory element selector 
        row: 'row', //form str selector 
        noValid: 'noValid', //noValid element selector 
        captcha: false, //'slider', 'code' or false
        capLabel: '',
        capError: ''
    }, options);

    return this.each(function() {

        var form = $(this);
        var but = $('.submit', form);
        var butWrap = but.closest('.row');
        var capLabel;
        var capError;

        var createCpatcha = function() {
            if (o.captcha == 'code') {

                capLabel = 'Введите код';
                capError = 'Неправильно введен проверочный код'
                if (o.capLabel) {
                    capLabel = o.capLabel
                }
                if (o.capError) {
                    capError = o.capError
                }
                captchaHtml =
                    '<div class="row">' +
                    '<label class="label">' + capLabel + '</label>' +
                    '<div class="controls">' +
                    '<input class="captchaInput valid" data-error="' + capError + '" type="text" name="hislo" maxlength="4" size="4"/>' +
                    '<img class="captchaPic" src="pic/securimage_show.png" id="image" />' +
                    '<a class="refreshCptcha" title="Обновить изображение" href="#">update image</a>' +
                    '</div>' +
                    '</div>'
            }
            if (o.captcha == 'slider') {

                capLabel = 'Передвиньте ползунок в правый край';
                capError = 'Позиция ползунка неправильна'
                if (o.capLabel) {
                    capLabel = o.capLabel
                }
                if (o.capError) {
                    capError = o.capError
                }
                captchaHtml =
                    '<div class="row">' +
                    '<label class="label">' + capLabel + '</label>' +
                    '<div class="controls">' +
                    '<input type="hidden" class="amount" />' +
                    '<input type="text"  class="valid captchaView" data-error="' + capError + '">' +
                    '<div class="slWrap">' +
                    '<div class="slider"></div>' +
                    '</div>' +
                    '</div>' +
                    '</div>	'
            }
            butWrap.before(captchaHtml)
        }
        if (!$('.costumCaptcha', form).length) {
            //createCpatcha()
        }



        var captchaView = $('.captchaView', form).val('');
        var amount = $('.amount', form);
        var capSlider = $('.slider', form);
        var slWrap = $('.slWrap', form).css({
            width: (captchaView.width() - 29) + 'px'
        });
        var fLabel = $('.label', form);
        var valid_form = $('.' + o.valid, form);
        var mand_el = valid_form.length; //Кол-во обязательных эл-тов



        var butTop = 0;
        if (but.css('top') != 'auto') {
            butTop = but.css('top');
        }

        //Создаем щит для кнопки
        var bw = but.actual('outerWidth');
        var bh = but.actual('outerHeight');

        var psevdo_but = $('<div>').css({
            width: bw,
            height: bh,
            left: 0,
            top: butTop,
            position: 'absolute',
            zIndex: '100',
            marginLeft: but.css('marginLeft'),
            marginTop: but.css('marginTop'),
            opacity: '0.1'
        }).addClass('psevdo_but');






        var servCaptcha = 9668; //offline test value
        var data = 1;
        var captchaHtml = '';

        var addErrorFunc = function(elError) {
            if (!elError.closest('.controls').find('.errorBox').length) {
                if (elError.is('[data-error]')) {
                    var errorText = 'Неправильно заполнено поле!';
                    if (elError.data('error') != '') {
                        errorText = elError.data('error')
                    }
                    var errorBox = $('<div>').addClass('errorBox').hide().html(errorText).appendTo(elError.closest('.controls'));
                    errorBox.slideDown()
                }
            }
        };
        var removeErrorFunc = function(elError) {
            elError.closest('.controls').find('.errorBox').slideUp(function() {
                $(this).remove();
            });
        }

        //email
        function ValidEmail(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        }

        //url
        function ValidUrl(urlAddress) {
            var pattern = new RegExp(/^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i);
            return pattern.test(urlAddress);
        }

        //digits
        function ValidDigits(dig) {
            var pattern = new RegExp(/^\d+$/);
            return pattern.test(dig);
        }

        //radio
        function ValidRadio(el_r) {
            var el_name = el_r.attr('name')
            var check = el_r.closest("form").find('[name=' + el_name + ']').filter(':checked').length
            if (check > 0) {
                check_el = true
            } else {
                check_el = false
            }
            return check_el
        }


        var add_w = function(el_f) {
            el_f.addClass('wrong');
        }
        var remove_w = function(el_f) {
            el_f.removeClass('wrong');
        }
        var add_c = function(el_f) {
            el_f.addClass('indicator');
            addErrorFunc(el_f);
        }
        var remove_c = function(el_f) {
            el_f.removeClass('indicator');
            removeErrorFunc(el_f);
        }


        var wrong = function() {
            var wrong_el = $('.wrong', form).length //Кол-во незаполненых эл-тов

            if (wrong_el > 0) {
                but.addClass('disabled').css({
                    opacity: '0.5'
                });
                if (!$('.psevdo_but', form).length)
                    but.after(psevdo_but)
            } else {
                but.removeClass('disabled').css({
                    opacity: '1'
                });
                $('.psevdo_but', form).remove()
            }
        }

        var valider = function(z_el_form, z_el_val) {

            var z_el_val = $.trim(z_el_form.val());

            if (z_el_val != '') {

                if (z_el_form.is(':not(".email")') && z_el_form.is(':not(".url")') && z_el_form.is(':not(".digits")') && z_el_form.is(':not("[name=hislo]")') && z_el_form.is(':not("[type=radio]")') && z_el_form.is(':not("[type=checkbox]")') && z_el_form.is(':not("select")')) {

                    if (z_el_form.next('.fakefile').length) {
                        remove_w(z_el_form.next('.fakefile').find('input'));
                        remove_c(z_el_form.next('.fakefile').find('input'));
                    } else {
                        remove_w(z_el_form);
                        remove_c(z_el_form);
                    }
                } else {
                    //if select
                    if (z_el_form.is('select')) {
                        if (!z_el_form.find('option:selected').is('.placeholder')) {
                            remove_w(z_el_form);
                            remove_c(z_el_form);
                        } else {
                            add_w(z_el_form);
                            add_c(z_el_form);
                        }
                    }

                    //if email
                    if (z_el_form.is('.email')) {
                        if (ValidEmail(z_el_val)) {

                            remove_w(z_el_form);
                            remove_c(z_el_form);
                        } else {
                            add_w(z_el_form);
                            add_c(z_el_form);
                        }
                    }
                    //if url
                    if (z_el_form.is('.url')) {
                        if (ValidUrl(z_el_val)) {
                            remove_w(z_el_form);
                            remove_c(z_el_form);
                        } else {
                            add_w(z_el_form);
                            add_c(z_el_form);
                        }
                    }
                    //if digits
                    if (z_el_form.is('.digits')) {
                        if (ValidDigits(z_el_val)) {
                            remove_w(z_el_form);
                            remove_c(z_el_form);
                        } else {
                            add_w(z_el_form);
                            add_c(z_el_form);
                        }
                    }

                    //if radio
                    if (z_el_form.is('[type=radio]') || z_el_form.is('[type=checkbox]')) {
                        if (ValidRadio(z_el_form)) {
                            $('[name=' + z_el_form.attr('name') + ']', form).each(function() {
                                $(this).removeClass('wrong').removeClass('indicator');
                                removeErrorFunc($(this));
                            })
                        } else {
                            $('[name=' + z_el_form.attr('name') + ']', form).each(function() {
                                $(this).addClass('wrong').addClass('indicator');
                                addErrorFunc($(this));
                            })

                        }
                    }


                    //if captcha
                    if (z_el_form.is('.captchaInput')) {
                        if (o.captcha) {

                            if (o.captcha == 'code' && z_el_val.length == 4) {

                                /*
									$.get("/ajax/check_captcha.php?num="+z_el_val, function(data){
									*/

                                if (data == 1) {
                                    z_el_form.removeClass('wrong');
                                    z_el_form.removeClass('indicator');
                                    removeErrorFunc(z_el_form);
                                } else {
                                    z_el_form.addClass('wrong');
                                    z_el_form.addClass('indicator');
                                    addErrorFunc(z_el_form);
                                }
                                wrong()
                                /*
									});	
									*/
                            } else {
                                add_w(z_el_form);
                                add_c(z_el_form);
                            }

                        }
                    }


                }
            } else {
                if (z_el_form.next('.fakefile').length) {
                    add_w(z_el_form.next('.fakefile').find('input'));
                    add_c(z_el_form.next('.fakefile').find('input'));
                } else {
                    add_w(z_el_form);
                    add_c(z_el_form);
                }
            }
            wrong()
        }

        var validMain = function() {

            fLabel.each(function() {
                $('<span>').addClass(o.r).html('&nbsp;').appendTo($(this));
            })
            $('.' + o.noValid).each(function() {
                $(this).closest('.' + o.row).find('.' + o.r).html('&nbsp;').removeClass('mand');
            })


            valid_form.not('.' + o.noValid).blur(function() {
                valider($(this), $(this).val())
            })
            valid_form.not('.' + o.noValid).keyup(function() {
                valider($(this), $(this).val())
            })
            valid_form.not('.' + o.noValid).change(function() {
                valider($(this), $(this).val())
            })

            psevdo_but.click(function() {
                valid_form.not('.' + o.noValid).each(function() {
                    valider($(this), $(this).val())
                })
                return false;
            })

            var mySubmit = function() {
                valid_form.not('.' + o.noValid).each(function() {
                    valider($(this), $(this).val());
                });
                if (form.find('.valid.wrong').size() == 0) {
                    form.trigger('submit');
                }
            };

            $('*', form).on('keydown', function(e) {

                if (e.keyCode == 13 && !$(e.target).is('textarea')) {
                    return false;
                }

            });

            but.on('click', function() {
                mySubmit();
                return false;
            });

            valid_form.not('.' + o.noValid).each(function() {
                $(this).closest('.' + o.row).find('.r').html('*').addClass('mand');
                var el_form = $(this);
                var el_val = $.trim(el_form.val());
                if (el_val != '') {
                    if (el_form.is(':not(".email")') && el_form.is(':not(".url")') && el_form.is(':not(".digits")') && el_form.is(':not("[name=hislo]")') && el_form.is(':not("[type=radio]")') && el_form.is(':not("[type=checkbox]")') && el_form.is(':not("select")')) {
                        if (el_form.next('.fakefile').length) {
                            remove_w(el_form.next('.fakefile').find('input'));
                        } else {
                            remove_w(el_form);
                        }
                    } else {
                        //if select
                        if (el_form.is('select')) {
                            if (!el_form.find('option:selected').is('.placeholder')) {
                                remove_w(el_form);
                            } else {
                                add_w(el_form);
                            }
                        }

                        //if email
                        if (el_form.is('.email')) {
                            if (ValidEmail(el_val)) {
                                remove_w(el_form);
                            } else {
                                add_w(el_form);
                            }
                        }
                        //if url
                        if (el_form.is('.url')) {
                            if (ValidUrl(el_val)) {
                                remove_w(el_form);
                            } else {
                                add_w(el_form);
                            }
                        }
                        //if digits
                        if (el_form.is('.date')) {
                            if (ValidDate(el_val)) {
                                remove_w(el_form);
                            } else {
                                add_w(el_form);
                            }
                        }

                        //if radio
                        if (el_form.is('[type=radio]') || el_form.is('[type=checkbox]')) {
                            if (ValidRadio(el_form)) {
                                $('[name=' + el_form.attr('name') + ']', form).each(function() {
                                    $(this).removeClass('wrong');
                                })
                            } else {
                                $('[name=' + el_form.attr('name') + ']', form).each(function() {
                                    $(this).addClass('wrong');
                                })
                            }
                        }

                        if (el_form.is('.captchaInput')) {
                            if (o.captcha) {


                                if (o.captcha == 'code' && el_val.length == 4) {

                                    /*
									$.get("/ajax/check_captcha.php?num="+el_val, function(data){
									*/

                                    if (data == 1) {
                                        remove_w(el_form);
                                    } else {
                                        add_w(el_form);
                                    }

                                    /*	
									});	
									*/

                                } else {
                                    add_w(el_form);
                                }
                            }
                        }


                    }
                } else {
                    if (el_form.next('.fakefile').length) {
                        el_form.next('.fakefile').find('input').addClass('wrong');
                    } else {
                        el_form.addClass('wrong');
                    }
                }
            })




            wrong()


        }

        var captchaTest = function(ui) {
            var uiHandleLeft = $(ui.handle).attr('style').split('%')[0].split(' ')[1];
            var hideVal = amount.val()
            if (uiHandleLeft == 100 && hideVal == servCaptcha) {
                remove_w(captchaView);
                remove_c(captchaView);
                captchaView.val('Вы прошли проверку');
                valider(captchaView, captchaView.val());
            } else {
                add_w(captchaView);
                add_c(captchaView);
                captchaView.val('');
                valider(captchaView, captchaView.val());
            }
        }
        var sliderIni = function() {
            capSlider.slider({
                value: 0,
                min: 0,
                max: servCaptcha,
                step: 0.1,
                slide: function(event, ui) {
                    amount.val(ui.value);
                },
                stop: function(event, ui) {
                    captchaTest(ui);
                }
            });
            amount.val(capSlider.slider('value'));
        }
        if (o.captcha) {
            if (o.captcha == 'slider') {
                /*
				$.ajax({
					url: "testCaptcha.html", //Здесь надо генерировать число от 1000 до 9999 и передавать его обратно
					cache: false,
					success: function(data){
						servCaptcha = data;
				*/
                sliderIni()
                validMain()
                /*		
					}
				})
				*/
            }
            if (o.captcha == 'code') {
                validMain()
            }
        } else {
            validMain()
        }
    });
};



// ==================================================================================   FRED.MIN

(function($) {
    function sc_setScroll(a, b, c) {
        return "transition" == c.transition && "swing" == b && (b = "ease"), {
            anims: [],
            duration: a,
            orgDuration: a,
            easing: b,
            startTime: getTime()
        }
    }

    function sc_startScroll(a, b) {
        for (var c = 0, d = a.anims.length; d > c; c++) {
            var e = a.anims[c];
            e && e[0][b.transition](e[1], a.duration, a.easing, e[2])
        }
    }

    function sc_stopScroll(a, b) {
        is_boolean(b) || (b = !0), is_object(a.pre) && sc_stopScroll(a.pre, b);
        for (var c = 0, d = a.anims.length; d > c; c++) {
            var e = a.anims[c];
            e[0].stop(!0), b && (e[0].css(e[1]), is_function(e[2]) && e[2]())
        }
        is_object(a.post) && sc_stopScroll(a.post, b)
    }

    function sc_afterScroll(a, b, c) {
        switch (b && b.remove(), c.fx) {
            case "fade":
            case "crossfade":
            case "cover-fade":
            case "uncover-fade":
                a.css("opacity", 1), a.css("filter", "")
        }
    }

    function sc_fireCallbacks(a, b, c, d, e) {
        if (b[c] && b[c].call(a, d), e[c].length)
            for (var f = 0, g = e[c].length; g > f; f++) e[c][f].call(a, d);
        return []
    }

    function sc_fireQueue(a, b, c) {
        return b.length && (a.trigger(cf_e(b[0][0], c), b[0][1]), b.shift()), b
    }

    function sc_hideHiddenItems(a) {
        a.each(function() {
            var a = $(this);
            a.data("_cfs_isHidden", a.is(":hidden")).hide()
        })
    }

    function sc_showHiddenItems(a) {
        a && a.each(function() {
            var a = $(this);
            a.data("_cfs_isHidden") || a.show()
        })
    }

    function sc_clearTimers(a) {
        return a.auto && clearTimeout(a.auto), a.progress && clearInterval(a.progress), a
    }

    function sc_mapCallbackArguments(a, b, c, d, e, f, g) {
        return {
            width: g.width,
            height: g.height,
            items: {
                old: a,
                skipped: b,
                visible: c
            },
            scroll: {
                items: d,
                direction: e,
                duration: f
            }
        }
    }

    function sc_getDuration(a, b, c, d) {
        var e = a.duration;
        return "none" == a.fx ? 0 : ("auto" == e ? e = b.scroll.duration / b.scroll.items * c : 10 > e && (e = d / e), 1 > e ? 0 : ("fade" == a.fx && (e /= 2), Math.round(e)))
    }

    function nv_showNavi(a, b, c) {
        var d = is_number(a.items.minimum) ? a.items.minimum : a.items.visible + 1;
        if ("show" == b || "hide" == b) var e = b;
        else if (d > b) {
            debug(c, "Not enough items (" + b + " total, " + d + " needed): Hiding navigation.");
            var e = "hide"
        } else var e = "show";
        var f = "show" == e ? "removeClass" : "addClass",
            g = cf_c("hidden", c);
        a.auto.button && a.auto.button[e]()[f](g), a.prev.button && a.prev.button[e]()[f](g), a.next.button && a.next.button[e]()[f](g), a.pagination.container && a.pagination.container[e]()[f](g)
    }

    function nv_enableNavi(a, b, c) {
        if (!a.circular && !a.infinite) {
            var d = "removeClass" == b || "addClass" == b ? b : !1,
                e = cf_c("disabled", c);
            if (a.auto.button && d && a.auto.button[d](e), a.prev.button) {
                var f = d || 0 == b ? "addClass" : "removeClass";
                a.prev.button[f](e)
            }
            if (a.next.button) {
                var f = d || b == a.items.visible ? "addClass" : "removeClass";
                a.next.button[f](e)
            }
        }
    }

    function go_getObject(a, b) {
        return is_function(b) ? b = b.call(a) : is_undefined(b) && (b = {}), b
    }

    function go_getItemsObject(a, b) {
        return b = go_getObject(a, b), is_number(b) ? b = {
            visible: b
        } : "variable" == b ? b = {
            visible: b,
            width: b,
            height: b
        } : is_object(b) || (b = {}), b
    }

    function go_getScrollObject(a, b) {
        return b = go_getObject(a, b), is_number(b) ? b = 50 >= b ? {
            items: b
        } : {
            duration: b
        } : is_string(b) ? b = {
            easing: b
        } : is_object(b) || (b = {}), b
    }

    function go_getNaviObject(a, b) {
        if (b = go_getObject(a, b), is_string(b)) {
            var c = cf_getKeyCode(b);
            b = -1 == c ? $(b) : c
        }
        return b
    }

    function go_getAutoObject(a, b) {
        return b = go_getNaviObject(a, b), is_jquery(b) ? b = {
            button: b
        } : is_boolean(b) ? b = {
            play: b
        } : is_number(b) && (b = {
            timeoutDuration: b
        }), b.progress && (is_string(b.progress) || is_jquery(b.progress)) && (b.progress = {
            bar: b.progress
        }), b
    }

    function go_complementAutoObject(a, b) {
        return is_function(b.button) && (b.button = b.button.call(a)), is_string(b.button) && (b.button = $(b.button)), is_boolean(b.play) || (b.play = !0), is_number(b.delay) || (b.delay = 0), is_undefined(b.pauseOnEvent) && (b.pauseOnEvent = !0), is_boolean(b.pauseOnResize) || (b.pauseOnResize = !0), is_number(b.timeoutDuration) || (b.timeoutDuration = 10 > b.duration ? 2500 : 5 * b.duration), b.progress && (is_function(b.progress.bar) && (b.progress.bar = b.progress.bar.call(a)), is_string(b.progress.bar) && (b.progress.bar = $(b.progress.bar)), b.progress.bar ? (is_function(b.progress.updater) || (b.progress.updater = $.fn.carouFredSel.progressbarUpdater), is_number(b.progress.interval) || (b.progress.interval = 50)) : b.progress = !1), b
    }

    function go_getPrevNextObject(a, b) {
        return b = go_getNaviObject(a, b), is_jquery(b) ? b = {
            button: b
        } : is_number(b) && (b = {
            key: b
        }), b
    }

    function go_complementPrevNextObject(a, b) {
        return is_function(b.button) && (b.button = b.button.call(a)), is_string(b.button) && (b.button = $(b.button)), is_string(b.key) && (b.key = cf_getKeyCode(b.key)), b
    }

    function go_getPaginationObject(a, b) {
        return b = go_getNaviObject(a, b), is_jquery(b) ? b = {
            container: b
        } : is_boolean(b) && (b = {
            keys: b
        }), b
    }

    function go_complementPaginationObject(a, b) {
        return is_function(b.container) && (b.container = b.container.call(a)), is_string(b.container) && (b.container = $(b.container)), is_number(b.items) || (b.items = !1), is_boolean(b.keys) || (b.keys = !1), is_function(b.anchorBuilder) || is_false(b.anchorBuilder) || (b.anchorBuilder = $.fn.carouFredSel.pageAnchorBuilder), is_number(b.deviation) || (b.deviation = 0), b
    }

    function go_getSwipeObject(a, b) {
        return is_function(b) && (b = b.call(a)), is_undefined(b) && (b = {
            onTouch: !1
        }), is_true(b) ? b = {
            onTouch: b
        } : is_number(b) && (b = {
            items: b
        }), b
    }

    function go_complementSwipeObject(a, b) {
        return is_boolean(b.onTouch) || (b.onTouch = !0), is_boolean(b.onMouse) || (b.onMouse = !1), is_object(b.options) || (b.options = {}), is_boolean(b.options.triggerOnTouchEnd) || (b.options.triggerOnTouchEnd = !1), b
    }

    function go_getMousewheelObject(a, b) {
        return is_function(b) && (b = b.call(a)), is_true(b) ? b = {} : is_number(b) ? b = {
            items: b
        } : is_undefined(b) && (b = !1), b
    }

    function go_complementMousewheelObject(a, b) {
        return b
    }

    function gn_getItemIndex(a, b, c, d, e) {
        if (is_string(a) && (a = $(a, e)), is_object(a) && (a = $(a, e)), is_jquery(a) ? (a = e.children().index(a), is_boolean(c) || (c = !1)) : is_boolean(c) || (c = !0), is_number(a) || (a = 0), is_number(b) || (b = 0), c && (a += d.first), a += b, d.total > 0) {
            for (; a >= d.total;) a -= d.total;
            for (; 0 > a;) a += d.total
        }
        return a
    }

    function gn_getVisibleItemsPrev(a, b, c) {
        for (var d = 0, e = 0, f = c; f >= 0; f--) {
            var g = a.eq(f);
            if (d += g.is(":visible") ? g[b.d.outerWidth](!0) : 0, d > b.maxDimension) return e;
            0 == f && (f = a.length), e++
        }
    }

    function gn_getVisibleItemsPrevFilter(a, b, c) {
        return gn_getItemsPrevFilter(a, b.items.filter, b.items.visibleConf.org, c)
    }

    function gn_getScrollItemsPrevFilter(a, b, c, d) {
        return gn_getItemsPrevFilter(a, b.items.filter, d, c)
    }

    function gn_getItemsPrevFilter(a, b, c, d) {
        for (var e = 0, f = 0, g = d, h = a.length; g >= 0; g--) {
            if (f++, f == h) return f;
            var i = a.eq(g);
            if (i.is(b) && (e++, e == c)) return f;
            0 == g && (g = h)
        }
    }

    function gn_getVisibleOrg(a, b) {
        return b.items.visibleConf.org || a.children().slice(0, b.items.visible).filter(b.items.filter).length
    }

    function gn_getVisibleItemsNext(a, b, c) {
        for (var d = 0, e = 0, f = c, g = a.length - 1; g >= f; f++) {
            var h = a.eq(f);
            if (d += h.is(":visible") ? h[b.d.outerWidth](!0) : 0, d > b.maxDimension) return e;
            if (e++, e == g + 1) return e;
            f == g && (f = -1)
        }
    }

    function gn_getVisibleItemsNextTestCircular(a, b, c, d) {
        var e = gn_getVisibleItemsNext(a, b, c);
        return b.circular || c + e > d && (e = d - c), e
    }

    function gn_getVisibleItemsNextFilter(a, b, c) {
        return gn_getItemsNextFilter(a, b.items.filter, b.items.visibleConf.org, c, b.circular)
    }

    function gn_getScrollItemsNextFilter(a, b, c, d) {
        return gn_getItemsNextFilter(a, b.items.filter, d + 1, c, b.circular) - 1
    }

    function gn_getItemsNextFilter(a, b, c, d) {
        for (var f = 0, g = 0, h = d, i = a.length - 1; i >= h; h++) {
            if (g++, g >= i) return g;
            var j = a.eq(h);
            if (j.is(b) && (f++, f == c)) return g;
            h == i && (h = -1)
        }
    }

    function gi_getCurrentItems(a, b) {
        return a.slice(0, b.items.visible)
    }

    function gi_getOldItemsPrev(a, b, c) {
        return a.slice(c, b.items.visibleConf.old + c)
    }

    function gi_getNewItemsPrev(a, b) {
        return a.slice(0, b.items.visible)
    }

    function gi_getOldItemsNext(a, b) {
        return a.slice(0, b.items.visibleConf.old)
    }

    function gi_getNewItemsNext(a, b, c) {
        return a.slice(c, b.items.visible + c)
    }

    function sz_storeMargin(a, b, c) {
        b.usePadding && (is_string(c) || (c = "_cfs_origCssMargin"), a.each(function() {
            var a = $(this),
                d = parseInt(a.css(b.d.marginRight), 10);
            is_number(d) || (d = 0), a.data(c, d)
        }))
    }

    function sz_resetMargin(a, b, c) {
        if (b.usePadding) {
            var d = is_boolean(c) ? c : !1;
            is_number(c) || (c = 0), sz_storeMargin(a, b, "_cfs_tempCssMargin"), a.each(function() {
                var a = $(this);
                a.css(b.d.marginRight, d ? a.data("_cfs_tempCssMargin") : c + a.data("_cfs_origCssMargin"))
            })
        }
    }

    function sz_storeOrigCss(a) {
        a.each(function() {
            var a = $(this);
            a.data("_cfs_origCss", a.attr("style") || "")
        })
    }

    function sz_restoreOrigCss(a) {
        a.each(function() {
            var a = $(this);
            a.attr("style", a.data("_cfs_origCss") || "")
        })
    }

    function sz_setResponsiveSizes(a, b) {
        var d = (a.items.visible, a.items[a.d.width]),
            e = a[a.d.height],
            f = is_percentage(e);
        b.each(function() {
            var b = $(this),
                c = d - ms_getPaddingBorderMargin(b, a, "Width");
            b[a.d.width](c), f && b[a.d.height](ms_getPercentage(c, e))
        })
    }

    function sz_setSizes(a, b) {
        var c = a.parent(),
            d = a.children(),
            e = gi_getCurrentItems(d, b),
            f = cf_mapWrapperSizes(ms_getSizes(e, b, !0), b, !1);
        if (c.css(f), b.usePadding) {
            var g = b.padding,
                h = g[b.d[1]];
            b.align && 0 > h && (h = 0);
            var i = e.last();
            i.css(b.d.marginRight, i.data("_cfs_origCssMargin") + h), a.css(b.d.top, g[b.d[0]]), a.css(b.d.left, g[b.d[3]])
        }
        return a.css(b.d.width, f[b.d.width] + 2 * ms_getTotalSize(d, b, "width")), a.css(b.d.height, ms_getLargestSize(d, b, "height")), f
    }

    function ms_getSizes(a, b, c) {
        return [ms_getTotalSize(a, b, "width", c), ms_getLargestSize(a, b, "height", c)]
    }

    function ms_getLargestSize(a, b, c, d) {
        return is_boolean(d) || (d = !1), is_number(b[b.d[c]]) && d ? b[b.d[c]] : is_number(b.items[b.d[c]]) ? b.items[b.d[c]] : (c = c.toLowerCase().indexOf("width") > -1 ? "outerWidth" : "outerHeight", ms_getTrueLargestSize(a, b, c))
    }

    function ms_getTrueLargestSize(a, b, c) {
        for (var d = 0, e = 0, f = a.length; f > e; e++) {
            var g = a.eq(e),
                h = g.is(":visible") ? g[b.d[c]](!0) : 0;
            h > d && (d = h)
        }
        return d
    }

    function ms_getTotalSize(a, b, c, d) {
        if (is_boolean(d) || (d = !1), is_number(b[b.d[c]]) && d) return b[b.d[c]];
        if (is_number(b.items[b.d[c]])) return b.items[b.d[c]] * a.length;
        for (var e = c.toLowerCase().indexOf("width") > -1 ? "outerWidth" : "outerHeight", f = 0, g = 0, h = a.length; h > g; g++) {
            var i = a.eq(g);
            f += i.is(":visible") ? i[b.d[e]](!0) : 0
        }
        return f
    }

    function ms_getParentSize(a, b, c) {
        var d = a.is(":visible");
        d && a.hide();
        var e = a.parent()[b.d[c]]();
        return d && a.show(), e
    }

    function ms_getMaxDimension(a, b) {
        return is_number(a[a.d.width]) ? a[a.d.width] : b
    }

    function ms_hasVariableSizes(a, b, c) {
        for (var d = !1, e = !1, f = 0, g = a.length; g > f; f++) {
            var h = a.eq(f),
                i = h.is(":visible") ? h[b.d[c]](!0) : 0;
            d === !1 ? d = i : d != i && (e = !0), 0 == d && (e = !0)
        }
        return e
    }

    function ms_getPaddingBorderMargin(a, b, c) {
        return a[b.d["outer" + c]](!0) - a[b.d[c.toLowerCase()]]()
    }

    function ms_getPercentage(a, b) {
        if (is_percentage(b)) {
            if (b = parseInt(b.slice(0, -1), 10), !is_number(b)) return a;
            a *= b / 100
        }
        return a
    }

    function cf_e(a, b, c, d, e) {
        return is_boolean(c) || (c = !0), is_boolean(d) || (d = !0), is_boolean(e) || (e = !1), c && (a = b.events.prefix + a), d && (a = a + "." + b.events.namespace), d && e && (a += b.serialNumber), a
    }

    function cf_c(a, b) {
        return is_string(b.classnames[a]) ? b.classnames[a] : a
    }

    function cf_mapWrapperSizes(a, b, c) {
        is_boolean(c) || (c = !0);
        var d = b.usePadding && c ? b.padding : [0, 0, 0, 0],
            e = {};
        return e[b.d.width] = a[0] + d[1] + d[3], e[b.d.height] = a[1] + d[0] + d[2], e
    }

    function cf_sortParams(a, b) {
        for (var c = [], d = 0, e = a.length; e > d; d++)
            for (var f = 0, g = b.length; g > f; f++)
                if (b[f].indexOf(typeof a[d]) > -1 && is_undefined(c[f])) {
                    c[f] = a[d];
                    break
                }
        return c
    }

    function cf_getPadding(a) {
        if (is_undefined(a)) return [0, 0, 0, 0];
        if (is_number(a)) return [a, a, a, a];
        if (is_string(a) && (a = a.split("px").join("").split("em").join("").split(" ")), !is_array(a)) return [0, 0, 0, 0];
        for (var b = 0; 4 > b; b++) a[b] = parseInt(a[b], 10);
        switch (a.length) {
            case 0:
                return [0, 0, 0, 0];
            case 1:
                return [a[0], a[0], a[0], a[0]];
            case 2:
                return [a[0], a[1], a[0], a[1]];
            case 3:
                return [a[0], a[1], a[2], a[1]];
            default:
                return [a[0], a[1], a[2], a[3]]
        }
    }

    function cf_getAlignPadding(a, b) {
        var c = is_number(b[b.d.width]) ? Math.ceil(b[b.d.width] - ms_getTotalSize(a, b, "width")) : 0;
        switch (b.align) {
            case "left":
                return [0, c];
            case "right":
                return [c, 0];
            case "center":
            default:
                return [Math.ceil(c / 2), Math.floor(c / 2)]
        }
    }

    function cf_getDimensions(a) {
        for (var b = [
            ["width", "innerWidth", "outerWidth", "height", "innerHeight", "outerHeight", "left", "top", "marginRight", 0, 1, 2, 3],
            ["height", "innerHeight", "outerHeight", "width", "innerWidth", "outerWidth", "top", "left", "marginBottom", 3, 2, 1, 0]
        ], c = b[0].length, d = "right" == a.direction || "left" == a.direction ? 0 : 1, e = {}, f = 0; c > f; f++) e[b[0][f]] = b[d][f];
        return e
    }

    function cf_getAdjust(a, b, c, d) {
        var e = a;
        if (is_function(c)) e = c.call(d, e);
        else if (is_string(c)) {
            var f = c.split("+"),
                g = c.split("-");
            if (g.length > f.length) var h = !0,
                i = g[0],
                j = g[1];
            else var h = !1,
                i = f[0],
                j = f[1];
            switch (i) {
                case "even":
                    e = 1 == a % 2 ? a - 1 : a;
                    break;
                case "odd":
                    e = 0 == a % 2 ? a - 1 : a;
                    break;
                default:
                    e = a
            }
            j = parseInt(j, 10), is_number(j) && (h && (j = -j), e += j)
        }
        return (!is_number(e) || 1 > e) && (e = 1), e
    }

    function cf_getItemsAdjust(a, b, c, d) {
        return cf_getItemAdjustMinMax(cf_getAdjust(a, b, c, d), b.items.visibleConf)
    }

    function cf_getItemAdjustMinMax(a, b) {
        return is_number(b.min) && b.min > a && (a = b.min), is_number(b.max) && a > b.max && (a = b.max), 1 > a && (a = 1), a
    }

    function cf_getSynchArr(a) {
        is_array(a) || (a = [
            [a]
        ]), is_array(a[0]) || (a = [a]);
        for (var b = 0, c = a.length; c > b; b++) is_string(a[b][0]) && (a[b][0] = $(a[b][0])), is_boolean(a[b][1]) || (a[b][1] = !0), is_boolean(a[b][2]) || (a[b][2] = !0), is_number(a[b][3]) || (a[b][3] = 0);
        return a
    }

    function cf_getKeyCode(a) {
        return "right" == a ? 39 : "left" == a ? 37 : "up" == a ? 38 : "down" == a ? 40 : -1
    }

    function cf_setCookie(a, b, c) {
        if (a) {
            var d = b.triggerHandler(cf_e("currentPosition", c));
            $.fn.carouFredSel.cookie.set(a, d)
        }
    }

    function cf_getCookie(a) {
        var b = $.fn.carouFredSel.cookie.get(a);
        return "" == b ? 0 : b
    }

    function in_mapCss(a, b) {
        for (var c = {}, d = 0, e = b.length; e > d; d++) c[b[d]] = a.css(b[d]);
        return c
    }

    function in_complementItems(a, b, c, d) {
        return is_object(a.visibleConf) || (a.visibleConf = {}), is_object(a.sizesConf) || (a.sizesConf = {}), 0 == a.start && is_number(d) && (a.start = d), is_object(a.visible) ? (a.visibleConf.min = a.visible.min, a.visibleConf.max = a.visible.max, a.visible = !1) : is_string(a.visible) ? ("variable" == a.visible ? a.visibleConf.variable = !0 : a.visibleConf.adjust = a.visible, a.visible = !1) : is_function(a.visible) && (a.visibleConf.adjust = a.visible, a.visible = !1), is_string(a.filter) || (a.filter = c.filter(":hidden").length > 0 ? ":visible" : "*"), a[b.d.width] || (b.responsive ? (debug(!0, "Set a " + b.d.width + " for the items!"), a[b.d.width] = ms_getTrueLargestSize(c, b, "outerWidth")) : a[b.d.width] = ms_hasVariableSizes(c, b, "outerWidth") ? "variable" : c[b.d.outerWidth](!0)), a[b.d.height] || (a[b.d.height] = ms_hasVariableSizes(c, b, "outerHeight") ? "variable" : c[b.d.outerHeight](!0)), a.sizesConf.width = a.width, a.sizesConf.height = a.height, a
    }

    function in_complementVisibleItems(a, b) {
        return "variable" == a.items[a.d.width] && (a.items.visibleConf.variable = !0), a.items.visibleConf.variable || (is_number(a[a.d.width]) ? a.items.visible = Math.floor(a[a.d.width] / a.items[a.d.width]) : (a.items.visible = Math.floor(b / a.items[a.d.width]), a[a.d.width] = a.items.visible * a.items[a.d.width], a.items.visibleConf.adjust || (a.align = !1)), ("Infinity" == a.items.visible || 1 > a.items.visible) && (debug(!0, 'Not a valid number of visible items: Set to "variable".'), a.items.visibleConf.variable = !0)), a
    }

    function in_complementPrimarySize(a, b, c) {
        return "auto" == a && (a = ms_getTrueLargestSize(c, b, "outerWidth")), a
    }

    function in_complementSecondarySize(a, b, c) {
        return "auto" == a && (a = ms_getTrueLargestSize(c, b, "outerHeight")), a || (a = b.items[b.d.height]), a
    }

    function in_getAlignPadding(a, b) {
        var c = cf_getAlignPadding(gi_getCurrentItems(b, a), a);
        return a.padding[a.d[1]] = c[1], a.padding[a.d[3]] = c[0], a
    }

    function in_getResponsiveValues(a, b) {
        var d = cf_getItemAdjustMinMax(Math.ceil(a[a.d.width] / a.items[a.d.width]), a.items.visibleConf);
        d > b.length && (d = b.length);
        var e = Math.floor(a[a.d.width] / d);
        return a.items.visible = d, a.items[a.d.width] = e, a[a.d.width] = d * e, a
    }

    function bt_pauseOnHoverConfig(a) {
        if (is_string(a)) var b = a.indexOf("immediate") > -1 ? !0 : !1,
            c = a.indexOf("resume") > -1 ? !0 : !1;
        else var b = c = !1;
        return [b, c]
    }

    function bt_mousesheelNumber(a) {
        return is_number(a) ? a : null
    }

    function is_null(a) {
        return null === a
    }

    function is_undefined(a) {
        return is_null(a) || a === void 0 || "" === a || "undefined" === a
    }

    function is_array(a) {
        return a instanceof Array
    }

    function is_jquery(a) {
        return a instanceof jQuery
    }

    function is_object(a) {
        return (a instanceof Object || "object" == typeof a) && !is_null(a) && !is_jquery(a) && !is_array(a) && !is_function(a)
    }

    function is_number(a) {
        return (a instanceof Number || "number" == typeof a) && !isNaN(a)
    }

    function is_string(a) {
        return (a instanceof String || "string" == typeof a) && !is_undefined(a) && !is_true(a) && !is_false(a)
    }

    function is_function(a) {
        return a instanceof Function || "function" == typeof a
    }

    function is_boolean(a) {
        return a instanceof Boolean || "boolean" == typeof a || is_true(a) || is_false(a)
    }

    function is_true(a) {
        return a === !0 || "true" === a
    }

    function is_false(a) {
        return a === !1 || "false" === a
    }

    function is_percentage(a) {
        return is_string(a) && "%" == a.slice(-1)
    }

    function getTime() {
        return (new Date).getTime()
    }

    function deprecated(a, b) {
        debug(!0, a + " is DEPRECATED, support for it will be removed. Use " + b + " instead.")
    }

    function debug(a, b) {
        if (!is_undefined(window.console) && !is_undefined(window.console.log)) {
            if (is_object(a)) {
                var c = " (" + a.selector + ")";
                a = a.debug
            } else var c = ""; if (!a) return !1;
            b = is_string(b) ? "carouFredSel" + c + ": " + b : ["carouFredSel" + c + ":", b], window.console.log(b)
        }
        return !1
    }
    $.fn.carouFredSel || ($.fn.caroufredsel = $.fn.carouFredSel = function(options, configs) {
        if (0 == this.length) return debug(!0, 'No element found for "' + this.selector + '".'), this;
        if (this.length > 1) return this.each(function() {
            $(this).carouFredSel(options, configs)
        });
        var $cfs = this,
            $tt0 = this[0],
            starting_position = !1;
        $cfs.data("_cfs_isCarousel") && (starting_position = $cfs.triggerHandler("_cfs_triggerEvent", "currentPosition"), $cfs.trigger("_cfs_triggerEvent", ["destroy", !0]));
        var FN = {};
        FN._init = function(a, b, c) {
            a = go_getObject($tt0, a), a.items = go_getItemsObject($tt0, a.items), a.scroll = go_getScrollObject($tt0, a.scroll), a.auto = go_getAutoObject($tt0, a.auto), a.prev = go_getPrevNextObject($tt0, a.prev), a.next = go_getPrevNextObject($tt0, a.next), a.pagination = go_getPaginationObject($tt0, a.pagination), a.swipe = go_getSwipeObject($tt0, a.swipe), a.mousewheel = go_getMousewheelObject($tt0, a.mousewheel), b && (opts_orig = $.extend(!0, {}, $.fn.carouFredSel.defaults, a)), opts = $.extend(!0, {}, $.fn.carouFredSel.defaults, a), opts.d = cf_getDimensions(opts), crsl.direction = "up" == opts.direction || "left" == opts.direction ? "next" : "prev";
            var d = $cfs.children(),
                e = ms_getParentSize($wrp, opts, "width");
            if (is_true(opts.cookie) && (opts.cookie = "caroufredsel_cookie_" + conf.serialNumber), opts.maxDimension = ms_getMaxDimension(opts, e), opts.items = in_complementItems(opts.items, opts, d, c), opts[opts.d.width] = in_complementPrimarySize(opts[opts.d.width], opts, d), opts[opts.d.height] = in_complementSecondarySize(opts[opts.d.height], opts, d), opts.responsive && (is_percentage(opts[opts.d.width]) || (opts[opts.d.width] = "100%")), is_percentage(opts[opts.d.width]) && (crsl.upDateOnWindowResize = !0, crsl.primarySizePercentage = opts[opts.d.width], opts[opts.d.width] = ms_getPercentage(e, crsl.primarySizePercentage), opts.items.visible || (opts.items.visibleConf.variable = !0)), opts.responsive ? (opts.usePadding = !1, opts.padding = [0, 0, 0, 0], opts.align = !1, opts.items.visibleConf.variable = !1) : (opts.items.visible || (opts = in_complementVisibleItems(opts, e)), opts[opts.d.width] || (!opts.items.visibleConf.variable && is_number(opts.items[opts.d.width]) && "*" == opts.items.filter ? (opts[opts.d.width] = opts.items.visible * opts.items[opts.d.width], opts.align = !1) : opts[opts.d.width] = "variable"), is_undefined(opts.align) && (opts.align = is_number(opts[opts.d.width]) ? "center" : !1), opts.items.visibleConf.variable && (opts.items.visible = gn_getVisibleItemsNext(d, opts, 0))), "*" == opts.items.filter || opts.items.visibleConf.variable || (opts.items.visibleConf.org = opts.items.visible, opts.items.visible = gn_getVisibleItemsNextFilter(d, opts, 0)), opts.items.visible = cf_getItemsAdjust(opts.items.visible, opts, opts.items.visibleConf.adjust, $tt0), opts.items.visibleConf.old = opts.items.visible, opts.responsive) opts.items.visibleConf.min || (opts.items.visibleConf.min = opts.items.visible), opts.items.visibleConf.max || (opts.items.visibleConf.max = opts.items.visible), opts = in_getResponsiveValues(opts, d, e);
            else switch (opts.padding = cf_getPadding(opts.padding), "top" == opts.align ? opts.align = "left" : "bottom" == opts.align && (opts.align = "right"), opts.align) {
                case "center":
                case "left":
                case "right":
                    "variable" != opts[opts.d.width] && (opts = in_getAlignPadding(opts, d), opts.usePadding = !0);
                    break;
                default:
                    opts.align = !1, opts.usePadding = 0 == opts.padding[0] && 0 == opts.padding[1] && 0 == opts.padding[2] && 0 == opts.padding[3] ? !1 : !0
            }
            is_number(opts.scroll.duration) || (opts.scroll.duration = 500), is_undefined(opts.scroll.items) && (opts.scroll.items = opts.responsive || opts.items.visibleConf.variable || "*" != opts.items.filter ? "visible" : opts.items.visible), opts.auto = $.extend(!0, {}, opts.scroll, opts.auto), opts.prev = $.extend(!0, {}, opts.scroll, opts.prev), opts.next = $.extend(!0, {}, opts.scroll, opts.next), opts.pagination = $.extend(!0, {}, opts.scroll, opts.pagination), opts.auto = go_complementAutoObject($tt0, opts.auto), opts.prev = go_complementPrevNextObject($tt0, opts.prev), opts.next = go_complementPrevNextObject($tt0, opts.next), opts.pagination = go_complementPaginationObject($tt0, opts.pagination), opts.swipe = go_complementSwipeObject($tt0, opts.swipe), opts.mousewheel = go_complementMousewheelObject($tt0, opts.mousewheel), opts.synchronise && (opts.synchronise = cf_getSynchArr(opts.synchronise)), opts.auto.onPauseStart && (opts.auto.onTimeoutStart = opts.auto.onPauseStart, deprecated("auto.onPauseStart", "auto.onTimeoutStart")), opts.auto.onPausePause && (opts.auto.onTimeoutPause = opts.auto.onPausePause, deprecated("auto.onPausePause", "auto.onTimeoutPause")), opts.auto.onPauseEnd && (opts.auto.onTimeoutEnd = opts.auto.onPauseEnd, deprecated("auto.onPauseEnd", "auto.onTimeoutEnd")), opts.auto.pauseDuration && (opts.auto.timeoutDuration = opts.auto.pauseDuration, deprecated("auto.pauseDuration", "auto.timeoutDuration"))
        }, FN._build = function() {
            $cfs.data("_cfs_isCarousel", !0);
            var a = $cfs.children(),
                b = in_mapCss($cfs, ["textAlign", "float", "position", "top", "right", "bottom", "left", "zIndex", "width", "height", "marginTop", "marginRight", "marginBottom", "marginLeft"]),
                c = "relative";
            switch (b.position) {
                case "absolute":
                case "fixed":
                    c = b.position
            }
            "parent" == conf.wrapper ? sz_storeOrigCss($wrp) : $wrp.css(b), $wrp.css({
                overflow: "hidden",
                position: c
            }), sz_storeOrigCss($cfs), $cfs.data("_cfs_origCssZindex", b.zIndex), $cfs.css({
                textAlign: "left",
                "float": "none",
                position: "absolute",
                top: 0,
                right: "auto",
                bottom: "auto",
                left: 0,
                marginTop: 0,
                marginRight: 0,
                marginBottom: 0,
                marginLeft: 0
            }), sz_storeMargin(a, opts), sz_storeOrigCss(a), opts.responsive && sz_setResponsiveSizes(opts, a)
        }, FN._bind_events = function() {
            FN._unbind_events(), $cfs.bind(cf_e("stop", conf), function(a, b) {
                return a.stopPropagation(), crsl.isStopped || opts.auto.button && opts.auto.button.addClass(cf_c("stopped", conf)), crsl.isStopped = !0, opts.auto.play && (opts.auto.play = !1, $cfs.trigger(cf_e("pause", conf), b)), !0
            }), $cfs.bind(cf_e("finish", conf), function(a) {
                return a.stopPropagation(), crsl.isScrolling && sc_stopScroll(scrl), !0
            }), $cfs.bind(cf_e("pause", conf), function(a, b, c) {
                if (a.stopPropagation(), tmrs = sc_clearTimers(tmrs), b && crsl.isScrolling) {
                    scrl.isStopped = !0;
                    var d = getTime() - scrl.startTime;
                    scrl.duration -= d, scrl.pre && (scrl.pre.duration -= d), scrl.post && (scrl.post.duration -= d), sc_stopScroll(scrl, !1)
                }
                if (crsl.isPaused || crsl.isScrolling || c && (tmrs.timePassed += getTime() - tmrs.startTime), crsl.isPaused || opts.auto.button && opts.auto.button.addClass(cf_c("paused", conf)), crsl.isPaused = !0, opts.auto.onTimeoutPause) {
                    var e = opts.auto.timeoutDuration - tmrs.timePassed,
                        f = 100 - Math.ceil(100 * e / opts.auto.timeoutDuration);
                    opts.auto.onTimeoutPause.call($tt0, f, e)
                }
                return !0
            }), $cfs.bind(cf_e("play", conf), function(a, b, c, d) {
                a.stopPropagation(), tmrs = sc_clearTimers(tmrs);
                var e = [b, c, d],
                    f = ["string", "number", "boolean"],
                    g = cf_sortParams(e, f);
                if (b = g[0], c = g[1], d = g[2], "prev" != b && "next" != b && (b = crsl.direction), is_number(c) || (c = 0), is_boolean(d) || (d = !1), d && (crsl.isStopped = !1, opts.auto.play = !0), !opts.auto.play) return a.stopImmediatePropagation(), debug(conf, "Carousel stopped: Not scrolling.");
                crsl.isPaused && opts.auto.button && (opts.auto.button.removeClass(cf_c("stopped", conf)), opts.auto.button.removeClass(cf_c("paused", conf))), crsl.isPaused = !1, tmrs.startTime = getTime();
                var h = opts.auto.timeoutDuration + c;
                return dur2 = h - tmrs.timePassed, perc = 100 - Math.ceil(100 * dur2 / h), opts.auto.progress && (tmrs.progress = setInterval(function() {
                    var a = getTime() - tmrs.startTime + tmrs.timePassed,
                        b = Math.ceil(100 * a / h);
                    opts.auto.progress.updater.call(opts.auto.progress.bar[0], b)
                }, opts.auto.progress.interval)), tmrs.auto = setTimeout(function() {
                    opts.auto.progress && opts.auto.progress.updater.call(opts.auto.progress.bar[0], 100), opts.auto.onTimeoutEnd && opts.auto.onTimeoutEnd.call($tt0, perc, dur2), crsl.isScrolling ? $cfs.trigger(cf_e("play", conf), b) : $cfs.trigger(cf_e(b, conf), opts.auto)
                }, dur2), opts.auto.onTimeoutStart && opts.auto.onTimeoutStart.call($tt0, perc, dur2), !0
            }), $cfs.bind(cf_e("resume", conf), function(a) {
                return a.stopPropagation(), scrl.isStopped ? (scrl.isStopped = !1, crsl.isPaused = !1, crsl.isScrolling = !0, scrl.startTime = getTime(), sc_startScroll(scrl, conf)) : $cfs.trigger(cf_e("play", conf)), !0
            }), $cfs.bind(cf_e("prev", conf) + " " + cf_e("next", conf), function(a, b, c, d, e) {
                if (a.stopPropagation(), crsl.isStopped || $cfs.is(":hidden")) return a.stopImmediatePropagation(), debug(conf, "Carousel stopped or hidden: Not scrolling.");
                var f = is_number(opts.items.minimum) ? opts.items.minimum : opts.items.visible + 1;
                if (f > itms.total) return a.stopImmediatePropagation(), debug(conf, "Not enough items (" + itms.total + " total, " + f + " needed): Not scrolling.");
                var g = [b, c, d, e],
                    h = ["object", "number/string", "function", "boolean"],
                    i = cf_sortParams(g, h);
                b = i[0], c = i[1], d = i[2], e = i[3];
                var j = a.type.slice(conf.events.prefix.length);
                if (is_object(b) || (b = {}), is_function(d) && (b.onAfter = d), is_boolean(e) && (b.queue = e), b = $.extend(!0, {}, opts[j], b), b.conditions && !b.conditions.call($tt0, j)) return a.stopImmediatePropagation(), debug(conf, 'Callback "conditions" returned false.');
                if (!is_number(c)) {
                    if ("*" != opts.items.filter) c = "visible";
                    else
                        for (var k = [c, b.items, opts[j].items], i = 0, l = k.length; l > i; i++)
                            if (is_number(k[i]) || "page" == k[i] || "visible" == k[i]) {
                                c = k[i];
                                break
                            } switch (c) {
                        case "page":
                            return a.stopImmediatePropagation(), $cfs.triggerHandler(cf_e(j + "Page", conf), [b, d]);
                        case "visible":
                            opts.items.visibleConf.variable || "*" != opts.items.filter || (c = opts.items.visible)
                    }
                }
                if (scrl.isStopped) return $cfs.trigger(cf_e("resume", conf)), $cfs.trigger(cf_e("queue", conf), [j, [b, c, d]]), a.stopImmediatePropagation(), debug(conf, "Carousel resumed scrolling.");
                if (b.duration > 0 && crsl.isScrolling) return b.queue && ("last" == b.queue && (queu = []), ("first" != b.queue || 0 == queu.length) && $cfs.trigger(cf_e("queue", conf), [j, [b, c, d]])), a.stopImmediatePropagation(), debug(conf, "Carousel currently scrolling.");
                if (tmrs.timePassed = 0, $cfs.trigger(cf_e("slide_" + j, conf), [b, c]), opts.synchronise)
                    for (var m = opts.synchronise, n = [b, c], o = 0, l = m.length; l > o; o++) {
                        var p = j;
                        m[o][2] || (p = "prev" == p ? "next" : "prev"), m[o][1] || (n[0] = m[o][0].triggerHandler("_cfs_triggerEvent", ["configuration", p])), n[1] = c + m[o][3], m[o][0].trigger("_cfs_triggerEvent", ["slide_" + p, n])
                    }
                return !0
            }), $cfs.bind(cf_e("slide_prev", conf), function(a, b, c) {
                a.stopPropagation();
                var d = $cfs.children();
                if (!opts.circular && 0 == itms.first) return opts.infinite && $cfs.trigger(cf_e("next", conf), itms.total - 1), a.stopImmediatePropagation();
                if (sz_resetMargin(d, opts), !is_number(c)) {
                    if (opts.items.visibleConf.variable) c = gn_getVisibleItemsPrev(d, opts, itms.total - 1);
                    else if ("*" != opts.items.filter) {
                        var e = is_number(b.items) ? b.items : gn_getVisibleOrg($cfs, opts);
                        c = gn_getScrollItemsPrevFilter(d, opts, itms.total - 1, e)
                    } else c = opts.items.visible;
                    c = cf_getAdjust(c, opts, b.items, $tt0)
                }
                if (opts.circular || itms.total - c < itms.first && (c = itms.total - itms.first), opts.items.visibleConf.old = opts.items.visible, opts.items.visibleConf.variable) {
                    var f = cf_getItemsAdjust(gn_getVisibleItemsNext(d, opts, itms.total - c), opts, opts.items.visibleConf.adjust, $tt0);
                    f >= opts.items.visible + c && itms.total > c && (c++, f = cf_getItemsAdjust(gn_getVisibleItemsNext(d, opts, itms.total - c), opts, opts.items.visibleConf.adjust, $tt0)), opts.items.visible = f
                } else if ("*" != opts.items.filter) {
                    var f = gn_getVisibleItemsNextFilter(d, opts, itms.total - c);
                    opts.items.visible = cf_getItemsAdjust(f, opts, opts.items.visibleConf.adjust, $tt0)
                }
                if (sz_resetMargin(d, opts, !0), 0 == c) return a.stopImmediatePropagation(), debug(conf, "0 items to scroll: Not scrolling.");
                for (debug(conf, "Scrolling " + c + " items backward."), itms.first += c; itms.first >= itms.total;) itms.first -= itms.total;
                opts.circular || (0 == itms.first && b.onEnd && b.onEnd.call($tt0, "prev"), opts.infinite || nv_enableNavi(opts, itms.first, conf)), $cfs.children().slice(itms.total - c, itms.total).prependTo($cfs), itms.total < opts.items.visible + c && $cfs.children().slice(0, opts.items.visible + c - itms.total).clone(!0).appendTo($cfs);
                var d = $cfs.children(),
                    g = gi_getOldItemsPrev(d, opts, c),
                    h = gi_getNewItemsPrev(d, opts),
                    i = d.eq(c - 1),
                    j = g.last(),
                    k = h.last();
                sz_resetMargin(d, opts);
                var l = 0,
                    m = 0;
                if (opts.align) {
                    var n = cf_getAlignPadding(h, opts);
                    l = n[0], m = n[1]
                }
                var o = 0 > l ? opts.padding[opts.d[3]] : 0,
                    p = !1,
                    q = $();
                if (c > opts.items.visible && (q = d.slice(opts.items.visibleConf.old, c), "directscroll" == b.fx)) {
                    var r = opts.items[opts.d.width];
                    p = q, i = k, sc_hideHiddenItems(p), opts.items[opts.d.width] = "variable"
                }
                var s = !1,
                    t = ms_getTotalSize(d.slice(0, c), opts, "width"),
                    u = cf_mapWrapperSizes(ms_getSizes(h, opts, !0), opts, !opts.usePadding),
                    v = 0,
                    w = {},
                    x = {},
                    y = {},
                    z = {},
                    A = {},
                    B = {},
                    C = {},
                    D = sc_getDuration(b, opts, c, t);
                switch (b.fx) {
                    case "cover":
                    case "cover-fade":
                        v = ms_getTotalSize(d.slice(0, opts.items.visible), opts, "width")
                }
                p && (opts.items[opts.d.width] = r), sz_resetMargin(d, opts, !0), m >= 0 && sz_resetMargin(j, opts, opts.padding[opts.d[1]]), l >= 0 && sz_resetMargin(i, opts, opts.padding[opts.d[3]]), opts.align && (opts.padding[opts.d[1]] = m, opts.padding[opts.d[3]] = l), B[opts.d.left] = -(t - o), C[opts.d.left] = -(v - o), x[opts.d.left] = u[opts.d.width];
                var E = function() {},
                    F = function() {},
                    G = function() {},
                    H = function() {},
                    I = function() {},
                    J = function() {},
                    K = function() {},
                    L = function() {},
                    M = function() {},
                    N = function() {},
                    O = function() {};
                switch (b.fx) {
                    case "crossfade":
                    case "cover":
                    case "cover-fade":
                    case "uncover":
                    case "uncover-fade":
                        s = $cfs.clone(!0).appendTo($wrp)
                }
                switch (b.fx) {
                    case "crossfade":
                    case "uncover":
                    case "uncover-fade":
                        s.children().slice(0, c).remove(), s.children().slice(opts.items.visibleConf.old).remove();
                        break;
                    case "cover":
                    case "cover-fade":
                        s.children().slice(opts.items.visible).remove(), s.css(C)
                }
                if ($cfs.css(B), scrl = sc_setScroll(D, b.easing, conf), w[opts.d.left] = opts.usePadding ? opts.padding[opts.d[3]] : 0, ("variable" == opts[opts.d.width] || "variable" == opts[opts.d.height]) && (E = function() {
                    $wrp.css(u)
                }, F = function() {
                    scrl.anims.push([$wrp, u])
                }), opts.usePadding) {
                    switch (k.not(i).length && (y[opts.d.marginRight] = i.data("_cfs_origCssMargin"), 0 > l ? i.css(y) : (K = function() {
                        i.css(y)
                    }, L = function() {
                        scrl.anims.push([i, y])
                    })), b.fx) {
                        case "cover":
                        case "cover-fade":
                            s.children().eq(c - 1).css(y)
                    }
                    k.not(j).length && (z[opts.d.marginRight] = j.data("_cfs_origCssMargin"), G = function() {
                        j.css(z)
                    }, H = function() {
                        scrl.anims.push([j, z])
                    }), m >= 0 && (A[opts.d.marginRight] = k.data("_cfs_origCssMargin") + opts.padding[opts.d[1]], I = function() {
                        k.css(A)
                    }, J = function() {
                        scrl.anims.push([k, A])
                    })
                }
                O = function() {
                    $cfs.css(w)
                };
                var P = opts.items.visible + c - itms.total;
                N = function() {
                    if (P > 0 && ($cfs.children().slice(itms.total).remove(), g = $($cfs.children().slice(itms.total - (opts.items.visible - P)).get().concat($cfs.children().slice(0, P).get()))), sc_showHiddenItems(p), opts.usePadding) {
                        var a = $cfs.children().eq(opts.items.visible + c - 1);
                        a.css(opts.d.marginRight, a.data("_cfs_origCssMargin"))
                    }
                };
                var Q = sc_mapCallbackArguments(g, q, h, c, "prev", D, u);
                switch (M = function() {
                    sc_afterScroll($cfs, s, b), crsl.isScrolling = !1, clbk.onAfter = sc_fireCallbacks($tt0, b, "onAfter", Q, clbk), queu = sc_fireQueue($cfs, queu, conf), crsl.isPaused || $cfs.trigger(cf_e("play", conf))
                }, crsl.isScrolling = !0, tmrs = sc_clearTimers(tmrs), clbk.onBefore = sc_fireCallbacks($tt0, b, "onBefore", Q, clbk), b.fx) {
                    case "none":
                        $cfs.css(w), E(), G(), I(), K(), O(), N(), M();
                        break;
                    case "fade":
                        scrl.anims.push([$cfs, {
                                opacity: 0
                            },
                            function() {
                                E(), G(), I(), K(), O(), N(), scrl = sc_setScroll(D, b.easing, conf), scrl.anims.push([$cfs, {
                                        opacity: 1
                                    },
                                    M
                                ]), sc_startScroll(scrl, conf)
                            }
                        ]);
                        break;
                    case "crossfade":
                        $cfs.css({
                            opacity: 0
                        }), scrl.anims.push([s, {
                            opacity: 0
                        }]), scrl.anims.push([$cfs, {
                                opacity: 1
                            },
                            M
                        ]), F(), G(), I(), K(), O(), N();
                        break;
                    case "cover":
                        scrl.anims.push([s, w,
                            function() {
                                G(), I(), K(), O(), N(), M()
                            }
                        ]), F();
                        break;
                    case "cover-fade":
                        scrl.anims.push([$cfs, {
                            opacity: 0
                        }]), scrl.anims.push([s, w,
                            function() {
                                G(), I(), K(), O(), N(), M()
                            }
                        ]), F();
                        break;
                    case "uncover":
                        scrl.anims.push([s, x, M]), F(), G(), I(), K(), O(), N();
                        break;
                    case "uncover-fade":
                        $cfs.css({
                            opacity: 0
                        }), scrl.anims.push([$cfs, {
                            opacity: 1
                        }]), scrl.anims.push([s, x, M]), F(), G(), I(), K(), O(), N();
                        break;
                    default:
                        scrl.anims.push([$cfs, w,
                            function() {
                                N(), M()
                            }
                        ]), F(), H(), J(), L()
                }
                return sc_startScroll(scrl, conf), cf_setCookie(opts.cookie, $cfs, conf), $cfs.trigger(cf_e("updatePageStatus", conf), [!1, u]), !0
            }), $cfs.bind(cf_e("slide_next", conf), function(a, b, c) {
                a.stopPropagation();
                var d = $cfs.children();
                if (!opts.circular && itms.first == opts.items.visible) return opts.infinite && $cfs.trigger(cf_e("prev", conf), itms.total - 1), a.stopImmediatePropagation();
                if (sz_resetMargin(d, opts), !is_number(c)) {
                    if ("*" != opts.items.filter) {
                        var e = is_number(b.items) ? b.items : gn_getVisibleOrg($cfs, opts);
                        c = gn_getScrollItemsNextFilter(d, opts, 0, e)
                    } else c = opts.items.visible;
                    c = cf_getAdjust(c, opts, b.items, $tt0)
                }
                var f = 0 == itms.first ? itms.total : itms.first;
                if (!opts.circular) {
                    if (opts.items.visibleConf.variable) var g = gn_getVisibleItemsNext(d, opts, c),
                        e = gn_getVisibleItemsPrev(d, opts, f - 1);
                    else var g = opts.items.visible,
                        e = opts.items.visible;
                    c + g > f && (c = f - e)
                }
                if (opts.items.visibleConf.old = opts.items.visible, opts.items.visibleConf.variable) {
                    for (var g = cf_getItemsAdjust(gn_getVisibleItemsNextTestCircular(d, opts, c, f), opts, opts.items.visibleConf.adjust, $tt0); opts.items.visible - c >= g && itms.total > c;) c++, g = cf_getItemsAdjust(gn_getVisibleItemsNextTestCircular(d, opts, c, f), opts, opts.items.visibleConf.adjust, $tt0);
                    opts.items.visible = g
                } else if ("*" != opts.items.filter) {
                    var g = gn_getVisibleItemsNextFilter(d, opts, c);
                    opts.items.visible = cf_getItemsAdjust(g, opts, opts.items.visibleConf.adjust, $tt0)
                }
                if (sz_resetMargin(d, opts, !0), 0 == c) return a.stopImmediatePropagation(), debug(conf, "0 items to scroll: Not scrolling.");
                for (debug(conf, "Scrolling " + c + " items forward."), itms.first -= c; 0 > itms.first;) itms.first += itms.total;
                opts.circular || (itms.first == opts.items.visible && b.onEnd && b.onEnd.call($tt0, "next"), opts.infinite || nv_enableNavi(opts, itms.first, conf)), itms.total < opts.items.visible + c && $cfs.children().slice(0, opts.items.visible + c - itms.total).clone(!0).appendTo($cfs);
                var d = $cfs.children(),
                    h = gi_getOldItemsNext(d, opts),
                    i = gi_getNewItemsNext(d, opts, c),
                    j = d.eq(c - 1),
                    k = h.last(),
                    l = i.last();
                sz_resetMargin(d, opts);
                var m = 0,
                    n = 0;
                if (opts.align) {
                    var o = cf_getAlignPadding(i, opts);
                    m = o[0], n = o[1]
                }
                var p = !1,
                    q = $();
                if (c > opts.items.visibleConf.old && (q = d.slice(opts.items.visibleConf.old, c), "directscroll" == b.fx)) {
                    var r = opts.items[opts.d.width];
                    p = q, j = k, sc_hideHiddenItems(p), opts.items[opts.d.width] = "variable"
                }
                var s = !1,
                    t = ms_getTotalSize(d.slice(0, c), opts, "width"),
                    u = cf_mapWrapperSizes(ms_getSizes(i, opts, !0), opts, !opts.usePadding),
                    v = 0,
                    w = {},
                    x = {},
                    y = {},
                    z = {},
                    A = {},
                    B = sc_getDuration(b, opts, c, t);
                switch (b.fx) {
                    case "uncover":
                    case "uncover-fade":
                        v = ms_getTotalSize(d.slice(0, opts.items.visibleConf.old), opts, "width")
                }
                p && (opts.items[opts.d.width] = r), opts.align && 0 > opts.padding[opts.d[1]] && (opts.padding[opts.d[1]] = 0), sz_resetMargin(d, opts, !0), sz_resetMargin(k, opts, opts.padding[opts.d[1]]), opts.align && (opts.padding[opts.d[1]] = n, opts.padding[opts.d[3]] = m), A[opts.d.left] = opts.usePadding ? opts.padding[opts.d[3]] : 0;
                var C = function() {},
                    D = function() {},
                    E = function() {},
                    F = function() {},
                    G = function() {},
                    H = function() {},
                    I = function() {},
                    J = function() {},
                    K = function() {};
                switch (b.fx) {
                    case "crossfade":
                    case "cover":
                    case "cover-fade":
                    case "uncover":
                    case "uncover-fade":
                        s = $cfs.clone(!0).appendTo($wrp), s.children().slice(opts.items.visibleConf.old).remove()
                }
                switch (b.fx) {
                    case "crossfade":
                    case "cover":
                    case "cover-fade":
                        $cfs.css("zIndex", 1), s.css("zIndex", 0)
                }
                if (scrl = sc_setScroll(B, b.easing, conf), w[opts.d.left] = -t, x[opts.d.left] = -v, 0 > m && (w[opts.d.left] += m), ("variable" == opts[opts.d.width] || "variable" == opts[opts.d.height]) && (C = function() {
                    $wrp.css(u)
                }, D = function() {
                    scrl.anims.push([$wrp, u])
                }), opts.usePadding) {
                    var L = l.data("_cfs_origCssMargin");
                    n >= 0 && (L += opts.padding[opts.d[1]]), l.css(opts.d.marginRight, L), j.not(k).length && (z[opts.d.marginRight] = k.data("_cfs_origCssMargin")), E = function() {
                        k.css(z)
                    }, F = function() {
                        scrl.anims.push([k, z])
                    };
                    var M = j.data("_cfs_origCssMargin");
                    m > 0 && (M += opts.padding[opts.d[3]]), y[opts.d.marginRight] = M, G = function() {
                        j.css(y)
                    }, H = function() {
                        scrl.anims.push([j, y])
                    }
                }
                K = function() {
                    $cfs.css(A)
                };
                var N = opts.items.visible + c - itms.total;
                J = function() {
                    N > 0 && $cfs.children().slice(itms.total).remove();
                    var a = $cfs.children().slice(0, c).appendTo($cfs).last();
                    if (N > 0 && (i = gi_getCurrentItems(d, opts)), sc_showHiddenItems(p), opts.usePadding) {
                        if (itms.total < opts.items.visible + c) {
                            var b = $cfs.children().eq(opts.items.visible - 1);
                            b.css(opts.d.marginRight, b.data("_cfs_origCssMargin") + opts.padding[opts.d[1]])
                        }
                        a.css(opts.d.marginRight, a.data("_cfs_origCssMargin"))
                    }
                };
                var O = sc_mapCallbackArguments(h, q, i, c, "next", B, u);
                switch (I = function() {
                    $cfs.css("zIndex", $cfs.data("_cfs_origCssZindex")), sc_afterScroll($cfs, s, b), crsl.isScrolling = !1, clbk.onAfter = sc_fireCallbacks($tt0, b, "onAfter", O, clbk), queu = sc_fireQueue($cfs, queu, conf), crsl.isPaused || $cfs.trigger(cf_e("play", conf))
                }, crsl.isScrolling = !0, tmrs = sc_clearTimers(tmrs), clbk.onBefore = sc_fireCallbacks($tt0, b, "onBefore", O, clbk), b.fx) {
                    case "none":
                        $cfs.css(w), C(), E(), G(), K(), J(), I();
                        break;
                    case "fade":
                        scrl.anims.push([$cfs, {
                                opacity: 0
                            },
                            function() {
                                C(), E(), G(), K(), J(), scrl = sc_setScroll(B, b.easing, conf), scrl.anims.push([$cfs, {
                                        opacity: 1
                                    },
                                    I
                                ]), sc_startScroll(scrl, conf)
                            }
                        ]);
                        break;
                    case "crossfade":
                        $cfs.css({
                            opacity: 0
                        }), scrl.anims.push([s, {
                            opacity: 0
                        }]), scrl.anims.push([$cfs, {
                                opacity: 1
                            },
                            I
                        ]), D(), E(), G(), K(), J();
                        break;
                    case "cover":
                        $cfs.css(opts.d.left, $wrp[opts.d.width]()), scrl.anims.push([$cfs, A, I]), D(), E(), G(), J();
                        break;
                    case "cover-fade":
                        $cfs.css(opts.d.left, $wrp[opts.d.width]()), scrl.anims.push([s, {
                            opacity: 0
                        }]), scrl.anims.push([$cfs, A, I]), D(), E(), G(), J();
                        break;
                    case "uncover":
                        scrl.anims.push([s, x, I]), D(), E(), G(), K(), J();
                        break;
                    case "uncover-fade":
                        $cfs.css({
                            opacity: 0
                        }), scrl.anims.push([$cfs, {
                            opacity: 1
                        }]), scrl.anims.push([s, x, I]), D(), E(), G(), K(), J();
                        break;
                    default:
                        scrl.anims.push([$cfs, w,
                            function() {
                                K(), J(), I()
                            }
                        ]), D(), F(), H()
                }
                return sc_startScroll(scrl, conf), cf_setCookie(opts.cookie, $cfs, conf), $cfs.trigger(cf_e("updatePageStatus", conf), [!1, u]), !0
            }), $cfs.bind(cf_e("slideTo", conf), function(a, b, c, d, e, f, g) {
                a.stopPropagation();
                var h = [b, c, d, e, f, g],
                    i = ["string/number/object", "number", "boolean", "object", "string", "function"],
                    j = cf_sortParams(h, i);
                return e = j[3], f = j[4], g = j[5], b = gn_getItemIndex(j[0], j[1], j[2], itms, $cfs), 0 == b ? !1 : (is_object(e) || (e = !1), "prev" != f && "next" != f && (f = opts.circular ? itms.total / 2 >= b ? "next" : "prev" : 0 == itms.first || itms.first > b ? "next" : "prev"), "prev" == f && (b = itms.total - b), $cfs.trigger(cf_e(f, conf), [e, b, g]), !0)
            }), $cfs.bind(cf_e("prevPage", conf), function(a, b, c) {
                a.stopPropagation();
                var d = $cfs.triggerHandler(cf_e("currentPage", conf));
                return $cfs.triggerHandler(cf_e("slideToPage", conf), [d - 1, b, "prev", c])
            }), $cfs.bind(cf_e("nextPage", conf), function(a, b, c) {
                a.stopPropagation();
                var d = $cfs.triggerHandler(cf_e("currentPage", conf));
                return $cfs.triggerHandler(cf_e("slideToPage", conf), [d + 1, b, "next", c])
            }), $cfs.bind(cf_e("slideToPage", conf), function(a, b, c, d, e) {
                a.stopPropagation(), is_number(b) || (b = $cfs.triggerHandler(cf_e("currentPage", conf)));
                var f = opts.pagination.items || opts.items.visible,
                    g = Math.ceil(itms.total / f) - 1;
                return 0 > b && (b = g), b > g && (b = 0), $cfs.triggerHandler(cf_e("slideTo", conf), [b * f, 0, !0, c, d, e])
            }), $cfs.bind(cf_e("jumpToStart", conf), function(a, b) {
                if (a.stopPropagation(), b = b ? gn_getItemIndex(b, 0, !0, itms, $cfs) : 0, b += itms.first, 0 != b) {
                    if (itms.total > 0)
                        for (; b > itms.total;) b -= itms.total;
                    $cfs.prepend($cfs.children().slice(b, itms.total))
                }
                return !0
            }), $cfs.bind(cf_e("synchronise", conf), function(a, b) {
                if (a.stopPropagation(), b) b = cf_getSynchArr(b);
                else {
                    if (!opts.synchronise) return debug(conf, "No carousel to synchronise.");
                    b = opts.synchronise
                }
                for (var c = $cfs.triggerHandler(cf_e("currentPosition", conf)), d = !0, e = 0, f = b.length; f > e; e++) b[e][0].triggerHandler(cf_e("slideTo", conf), [c, b[e][3], !0]) || (d = !1);
                return d
            }), $cfs.bind(cf_e("queue", conf), function(a, b, c) {
                return a.stopPropagation(), is_function(b) ? b.call($tt0, queu) : is_array(b) ? queu = b : is_undefined(b) || queu.push([b, c]), queu
            }), $cfs.bind(cf_e("insertItem", conf), function(a, b, c, d, e) {
                a.stopPropagation();
                var f = [b, c, d, e],
                    g = ["string/object", "string/number/object", "boolean", "number"],
                    h = cf_sortParams(f, g);
                if (b = h[0], c = h[1], d = h[2], e = h[3], is_object(b) && !is_jquery(b) ? b = $(b) : is_string(b) && (b = $(b)), !is_jquery(b) || 0 == b.length) return debug(conf, "Not a valid object.");
                is_undefined(c) && (c = "end"), sz_storeMargin(b, opts), sz_storeOrigCss(b);
                var i = c,
                    j = "before";
                "end" == c ? d ? (0 == itms.first ? (c = itms.total - 1, j = "after") : (c = itms.first, itms.first += b.length), 0 > c && (c = 0)) : (c = itms.total - 1, j = "after") : c = gn_getItemIndex(c, e, d, itms, $cfs);
                var k = $cfs.children().eq(c);
                return k.length ? k[j](b) : (debug(conf, "Correct insert-position not found! Appending item to the end."), $cfs.append(b)), "end" == i || d || itms.first > c && (itms.first += b.length), itms.total = $cfs.children().length, itms.first >= itms.total && (itms.first -= itms.total), $cfs.trigger(cf_e("updateSizes", conf)), $cfs.trigger(cf_e("linkAnchors", conf)), !0
            }), $cfs.bind(cf_e("removeItem", conf), function(a, b, c, d) {
                a.stopPropagation();
                var e = [b, c, d],
                    f = ["string/number/object", "boolean", "number"],
                    g = cf_sortParams(e, f);
                if (b = g[0], c = g[1], d = g[2], b instanceof $ && b.length > 1) return i = $(), b.each(function() {
                    var e = $cfs.trigger(cf_e("removeItem", conf), [$(this), c, d]);
                    e && (i = i.add(e))
                }), i;
                if (is_undefined(b) || "end" == b) i = $cfs.children().last();
                else {
                    b = gn_getItemIndex(b, d, c, itms, $cfs);
                    var i = $cfs.children().eq(b);
                    i.length && itms.first > b && (itms.first -= i.length)
                }
                return i && i.length && (i.detach(), itms.total = $cfs.children().length, $cfs.trigger(cf_e("updateSizes", conf))), i
            }), $cfs.bind(cf_e("onBefore", conf) + " " + cf_e("onAfter", conf), function(a, b) {
                a.stopPropagation();
                var c = a.type.slice(conf.events.prefix.length);
                return is_array(b) && (clbk[c] = b), is_function(b) && clbk[c].push(b), clbk[c]
            }), $cfs.bind(cf_e("currentPosition", conf), function(a, b) {
                if (a.stopPropagation(), 0 == itms.first) var c = 0;
                else var c = itms.total - itms.first;
                return is_function(b) && b.call($tt0, c), c
            }), $cfs.bind(cf_e("currentPage", conf), function(a, b) {
                a.stopPropagation();
                var e, c = opts.pagination.items || opts.items.visible,
                    d = Math.ceil(itms.total / c - 1);
                return e = 0 == itms.first ? 0 : itms.first < itms.total % c ? 0 : itms.first != c || opts.circular ? Math.round((itms.total - itms.first) / c) : d, 0 > e && (e = 0), e > d && (e = d), is_function(b) && b.call($tt0, e), e
            }), $cfs.bind(cf_e("currentVisible", conf), function(a, b) {
                a.stopPropagation();
                var c = gi_getCurrentItems($cfs.children(), opts);
                return is_function(b) && b.call($tt0, c), c
            }), $cfs.bind(cf_e("slice", conf), function(a, b, c, d) {
                if (a.stopPropagation(), 0 == itms.total) return !1;
                var e = [b, c, d],
                    f = ["number", "number", "function"],
                    g = cf_sortParams(e, f);
                if (b = is_number(g[0]) ? g[0] : 0, c = is_number(g[1]) ? g[1] : itms.total, d = g[2], b += itms.first, c += itms.first, items.total > 0) {
                    for (; b > itms.total;) b -= itms.total;
                    for (; c > itms.total;) c -= itms.total;
                    for (; 0 > b;) b += itms.total;
                    for (; 0 > c;) c += itms.total
                }
                var i, h = $cfs.children();
                return i = c > b ? h.slice(b, c) : $(h.slice(b, itms.total).get().concat(h.slice(0, c).get())), is_function(d) && d.call($tt0, i), i
            }), $cfs.bind(cf_e("isPaused", conf) + " " + cf_e("isStopped", conf) + " " + cf_e("isScrolling", conf), function(a, b) {
                a.stopPropagation();
                var c = a.type.slice(conf.events.prefix.length),
                    d = crsl[c];
                return is_function(b) && b.call($tt0, d), d
            }), $cfs.bind(cf_e("configuration", conf), function(e, a, b, c) {
                e.stopPropagation();
                var reInit = !1;
                if (is_function(a)) a.call($tt0, opts);
                else if (is_object(a)) opts_orig = $.extend(!0, {}, opts_orig, a), b !== !1 ? reInit = !0 : opts = $.extend(!0, {}, opts, a);
                else if (!is_undefined(a))
                    if (is_function(b)) {
                        var val = eval("opts." + a);
                        is_undefined(val) && (val = ""), b.call($tt0, val)
                    } else {
                        if (is_undefined(b)) return eval("opts." + a);
                        "boolean" != typeof c && (c = !0), eval("opts_orig." + a + " = b"), c !== !1 ? reInit = !0 : eval("opts." + a + " = b")
                    }
                if (reInit) {
                    sz_resetMargin($cfs.children(), opts), FN._init(opts_orig), FN._bind_buttons();
                    var sz = sz_setSizes($cfs, opts);
                    $cfs.trigger(cf_e("updatePageStatus", conf), [!0, sz])
                }
                return opts
            }), $cfs.bind(cf_e("linkAnchors", conf), function(a, b, c) {
                return a.stopPropagation(), is_undefined(b) ? b = $("body") : is_string(b) && (b = $(b)), is_jquery(b) && 0 != b.length ? (is_string(c) || (c = "a.caroufredsel"), b.find(c).each(function() {
                    var a = this.hash || "";
                    a.length > 0 && -1 != $cfs.children().index($(a)) && $(this).unbind("click").click(function(b) {
                        b.preventDefault(), $cfs.trigger(cf_e("slideTo", conf), a)
                    })
                }), !0) : debug(conf, "Not a valid object.")
            }), $cfs.bind(cf_e("updatePageStatus", conf), function(a, b) {
                if (a.stopPropagation(), opts.pagination.container) {
                    var d = opts.pagination.items || opts.items.visible,
                        e = Math.ceil(itms.total / d);
                    b && (opts.pagination.anchorBuilder && (opts.pagination.container.children().remove(), opts.pagination.container.each(function() {
                        for (var a = 0; e > a; a++) {
                            var b = $cfs.children().eq(gn_getItemIndex(a * d, 0, !0, itms, $cfs));
                            $(this).append(opts.pagination.anchorBuilder.call(b[0], a + 1))
                        }
                    })), opts.pagination.container.each(function() {
                        $(this).children().unbind(opts.pagination.event).each(function(a) {
                            $(this).bind(opts.pagination.event, function(b) {
                                b.preventDefault(), $cfs.trigger(cf_e("slideTo", conf), [a * d, -opts.pagination.deviation, !0, opts.pagination])
                            })
                        })
                    }));
                    var f = $cfs.triggerHandler(cf_e("currentPage", conf)) + opts.pagination.deviation;
                    return f >= e && (f = 0), 0 > f && (f = e - 1), opts.pagination.container.each(function() {
                        $(this).children().removeClass(cf_c("selected", conf)).eq(f).addClass(cf_c("selected", conf))
                    }), !0
                }
            }), $cfs.bind(cf_e("updateSizes", conf), function() {
                var b = opts.items.visible,
                    c = $cfs.children(),
                    d = ms_getParentSize($wrp, opts, "width");
                if (itms.total = c.length, crsl.primarySizePercentage ? (opts.maxDimension = d, opts[opts.d.width] = ms_getPercentage(d, crsl.primarySizePercentage)) : opts.maxDimension = ms_getMaxDimension(opts, d), opts.responsive ? (opts.items.width = opts.items.sizesConf.width, opts.items.height = opts.items.sizesConf.height, opts = in_getResponsiveValues(opts, c, d), b = opts.items.visible, sz_setResponsiveSizes(opts, c)) : opts.items.visibleConf.variable ? b = gn_getVisibleItemsNext(c, opts, 0) : "*" != opts.items.filter && (b = gn_getVisibleItemsNextFilter(c, opts, 0)), !opts.circular && 0 != itms.first && b > itms.first) {
                    if (opts.items.visibleConf.variable) var e = gn_getVisibleItemsPrev(c, opts, itms.first) - itms.first;
                    else if ("*" != opts.items.filter) var e = gn_getVisibleItemsPrevFilter(c, opts, itms.first) - itms.first;
                    else var e = opts.items.visible - itms.first;
                    debug(conf, "Preventing non-circular: sliding " + e + " items backward."), $cfs.trigger(cf_e("prev", conf), e)
                }
                opts.items.visible = cf_getItemsAdjust(b, opts, opts.items.visibleConf.adjust, $tt0), opts.items.visibleConf.old = opts.items.visible, opts = in_getAlignPadding(opts, c);
                var f = sz_setSizes($cfs, opts);
                return $cfs.trigger(cf_e("updatePageStatus", conf), [!0, f]), nv_showNavi(opts, itms.total, conf), nv_enableNavi(opts, itms.first, conf), f
            }), $cfs.bind(cf_e("destroy", conf), function(a, b) {
                return a.stopPropagation(), tmrs = sc_clearTimers(tmrs), $cfs.data("_cfs_isCarousel", !1), $cfs.trigger(cf_e("finish", conf)), b && $cfs.trigger(cf_e("jumpToStart", conf)), sz_restoreOrigCss($cfs.children()), sz_restoreOrigCss($cfs), FN._unbind_events(), FN._unbind_buttons(), "parent" == conf.wrapper ? sz_restoreOrigCss($wrp) : $wrp.replaceWith($cfs), !0
            }), $cfs.bind(cf_e("debug", conf), function() {
                return debug(conf, "Carousel width: " + opts.width), debug(conf, "Carousel height: " + opts.height), debug(conf, "Item widths: " + opts.items.width), debug(conf, "Item heights: " + opts.items.height), debug(conf, "Number of items visible: " + opts.items.visible), opts.auto.play && debug(conf, "Number of items scrolled automatically: " + opts.auto.items), opts.prev.button && debug(conf, "Number of items scrolled backward: " + opts.prev.items), opts.next.button && debug(conf, "Number of items scrolled forward: " + opts.next.items), conf.debug
            }), $cfs.bind("_cfs_triggerEvent", function(a, b, c) {
                return a.stopPropagation(), $cfs.triggerHandler(cf_e(b, conf), c)
            })
        }, FN._unbind_events = function() {
            $cfs.unbind(cf_e("", conf)), $cfs.unbind(cf_e("", conf, !1)), $cfs.unbind("_cfs_triggerEvent")
        }, FN._bind_buttons = function() {
            if (FN._unbind_buttons(), nv_showNavi(opts, itms.total, conf), nv_enableNavi(opts, itms.first, conf), opts.auto.pauseOnHover) {
                var a = bt_pauseOnHoverConfig(opts.auto.pauseOnHover);
                $wrp.bind(cf_e("mouseenter", conf, !1), function() {
                    $cfs.trigger(cf_e("pause", conf), a)
                }).bind(cf_e("mouseleave", conf, !1), function() {
                    $cfs.trigger(cf_e("resume", conf))
                })
            }
            if (opts.auto.button && opts.auto.button.bind(cf_e(opts.auto.event, conf, !1), function(a) {
                a.preventDefault();
                var b = !1,
                    c = null;
                crsl.isPaused ? b = "play" : opts.auto.pauseOnEvent && (b = "pause", c = bt_pauseOnHoverConfig(opts.auto.pauseOnEvent)), b && $cfs.trigger(cf_e(b, conf), c)
            }), opts.prev.button && (opts.prev.button.bind(cf_e(opts.prev.event, conf, !1), function(a) {
                a.preventDefault(), $cfs.trigger(cf_e("prev", conf))
            }), opts.prev.pauseOnHover)) {
                var a = bt_pauseOnHoverConfig(opts.prev.pauseOnHover);
                opts.prev.button.bind(cf_e("mouseenter", conf, !1), function() {
                    $cfs.trigger(cf_e("pause", conf), a)
                }).bind(cf_e("mouseleave", conf, !1), function() {
                    $cfs.trigger(cf_e("resume", conf))
                })
            }
            if (opts.next.button && (opts.next.button.bind(cf_e(opts.next.event, conf, !1), function(a) {
                a.preventDefault(), $cfs.trigger(cf_e("next", conf))
            }), opts.next.pauseOnHover)) {
                var a = bt_pauseOnHoverConfig(opts.next.pauseOnHover);
                opts.next.button.bind(cf_e("mouseenter", conf, !1), function() {
                    $cfs.trigger(cf_e("pause", conf), a)
                }).bind(cf_e("mouseleave", conf, !1), function() {
                    $cfs.trigger(cf_e("resume", conf))
                })
            }
            if (opts.pagination.container && opts.pagination.pauseOnHover) {
                var a = bt_pauseOnHoverConfig(opts.pagination.pauseOnHover);
                opts.pagination.container.bind(cf_e("mouseenter", conf, !1), function() {
                    $cfs.trigger(cf_e("pause", conf), a)
                }).bind(cf_e("mouseleave", conf, !1), function() {
                    $cfs.trigger(cf_e("resume", conf))
                })
            }
            if ((opts.prev.key || opts.next.key) && $(document).bind(cf_e("keyup", conf, !1, !0, !0), function(a) {
                var b = a.keyCode;
                b == opts.next.key && (a.preventDefault(), $cfs.trigger(cf_e("next", conf))), b == opts.prev.key && (a.preventDefault(), $cfs.trigger(cf_e("prev", conf)))
            }), opts.pagination.keys && $(document).bind(cf_e("keyup", conf, !1, !0, !0), function(a) {
                var b = a.keyCode;
                b >= 49 && 58 > b && (b = (b - 49) * opts.items.visible, itms.total >= b && (a.preventDefault(), $cfs.trigger(cf_e("slideTo", conf), [b, 0, !0, opts.pagination])))
            }), $.fn.swipe) {
                var b = "ontouchstart" in window;
                if (b && opts.swipe.onTouch || !b && opts.swipe.onMouse) {
                    var c = $.extend(!0, {}, opts.prev, opts.swipe),
                        d = $.extend(!0, {}, opts.next, opts.swipe),
                        e = function() {
                            $cfs.trigger(cf_e("prev", conf), [c])
                        },
                        f = function() {
                            $cfs.trigger(cf_e("next", conf), [d])
                        };
                    switch (opts.direction) {
                        case "up":
                        case "down":
                            opts.swipe.options.swipeUp = f, opts.swipe.options.swipeDown = e;
                            break;
                        default:
                            opts.swipe.options.swipeLeft = f, opts.swipe.options.swipeRight = e
                    }
                    crsl.swipe && $cfs.swipe("destroy"), $wrp.swipe(opts.swipe.options), $wrp.css("cursor", "move"), crsl.swipe = !0
                }
            }
            if ($.fn.mousewheel && opts.mousewheel) {
                var g = $.extend(!0, {}, opts.prev, opts.mousewheel),
                    h = $.extend(!0, {}, opts.next, opts.mousewheel);
                crsl.mousewheel && $wrp.unbind(cf_e("mousewheel", conf, !1)), $wrp.bind(cf_e("mousewheel", conf, !1), function(a, b) {
                    a.preventDefault(), b > 0 ? $cfs.trigger(cf_e("prev", conf), [g]) : $cfs.trigger(cf_e("next", conf), [h])
                }), crsl.mousewheel = !0
            }
            if (opts.auto.play && $cfs.trigger(cf_e("play", conf), opts.auto.delay), crsl.upDateOnWindowResize) {
                var i = function() {
                        $cfs.trigger(cf_e("finish", conf)), opts.auto.pauseOnResize && !crsl.isPaused && $cfs.trigger(cf_e("play", conf)), sz_resetMargin($cfs.children(), opts), $cfs.trigger(cf_e("updateSizes", conf))
                    },
                    j = $(window),
                    k = null;
                if ($.debounce && "debounce" == conf.onWindowResize) k = $.debounce(200, i);
                else if ($.throttle && "throttle" == conf.onWindowResize) k = $.throttle(300, i);
                else {
                    var l = 0,
                        m = 0;
                    k = function() {
                        var a = j.width(),
                            b = j.height();
                        (a != l || b != m) && (i(), l = a, m = b)
                    }
                }
                j.bind(cf_e("resize", conf, !1, !0, !0), k)
            }
        }, FN._unbind_buttons = function() {
            var b = (cf_e("", conf), cf_e("", conf, !1));
            ns3 = cf_e("", conf, !1, !0, !0), $(document).unbind(ns3), $(window).unbind(ns3), $wrp.unbind(b), opts.auto.button && opts.auto.button.unbind(b), opts.prev.button && opts.prev.button.unbind(b), opts.next.button && opts.next.button.unbind(b), opts.pagination.container && (opts.pagination.container.unbind(b), opts.pagination.anchorBuilder && opts.pagination.container.children().remove()), crsl.swipe && ($cfs.swipe("destroy"), $wrp.css("cursor", "default"), crsl.swipe = !1), crsl.mousewheel && (crsl.mousewheel = !1), nv_showNavi(opts, "hide", conf), nv_enableNavi(opts, "removeClass", conf)
        }, is_boolean(configs) && (configs = {
            debug: configs
        });
        var crsl = {
                direction: "next",
                isPaused: !0,
                isScrolling: !1,
                isStopped: !1,
                mousewheel: !1,
                swipe: !1
            },
            itms = {
                total: $cfs.children().length,
                first: 0
            },
            tmrs = {
                auto: null,
                progress: null,
                startTime: getTime(),
                timePassed: 0
            },
            scrl = {
                isStopped: !1,
                duration: 0,
                startTime: 0,
                easing: "",
                anims: []
            },
            clbk = {
                onBefore: [],
                onAfter: []
            },
            queu = [],
            conf = $.extend(!0, {}, $.fn.carouFredSel.configs, configs),
            opts = {},
            opts_orig = $.extend(!0, {}, options),
            $wrp = "parent" == conf.wrapper ? $cfs.parent() : $cfs.wrap("<" + conf.wrapper.element + ' class="' + conf.wrapper.classname + '" />').parent();
        if (conf.selector = $cfs.selector, conf.serialNumber = $.fn.carouFredSel.serialNumber++, conf.transition = conf.transition && $.fn.transition ? "transition" : "animate", FN._init(opts_orig, !0, starting_position), FN._build(), FN._bind_events(), FN._bind_buttons(), is_array(opts.items.start)) var start_arr = opts.items.start;
        else {
            var start_arr = [];
            0 != opts.items.start && start_arr.push(opts.items.start)
        } if (opts.cookie && start_arr.unshift(parseInt(cf_getCookie(opts.cookie), 10)), start_arr.length > 0)
            for (var a = 0, l = start_arr.length; l > a; a++) {
                var s = start_arr[a];
                if (0 != s) {
                    if (s === !0) {
                        if (s = window.location.hash, 1 > s.length) continue
                    } else "random" === s && (s = Math.floor(Math.random() * itms.total)); if ($cfs.triggerHandler(cf_e("slideTo", conf), [s, 0, !0, {
                        fx: "none"
                    }])) break
                }
            }
        var siz = sz_setSizes($cfs, opts),
            itm = gi_getCurrentItems($cfs.children(), opts);
        return opts.onCreate && opts.onCreate.call($tt0, {
            width: siz.width,
            height: siz.height,
            items: itm
        }), $cfs.trigger(cf_e("updatePageStatus", conf), [!0, siz]), $cfs.trigger(cf_e("linkAnchors", conf)), conf.debug && $cfs.trigger(cf_e("debug", conf)), $cfs
    }, $.fn.carouFredSel.serialNumber = 1, $.fn.carouFredSel.defaults = {
        synchronise: !1,
        infinite: !0,
        circular: !0,
        responsive: !1,
        direction: "left",
        items: {
            start: 0
        },
        scroll: {
            easing: "swing",
            duration: 500,
            pauseOnHover: !1,
            event: "click",
            queue: !1
        }
    }, $.fn.carouFredSel.configs = {
        debug: !1,
        transition: !1,
        onWindowResize: "throttle",
        events: {
            prefix: "",
            namespace: "cfs"
        },
        wrapper: {
            element: "div",
            classname: "caroufredsel_wrapper"
        },
        classnames: {}
    }, $.fn.carouFredSel.pageAnchorBuilder = function(a) {
        return '<a href="#"><span>' + a + "</span></a>"
    }, $.fn.carouFredSel.progressbarUpdater = function(a) {
        $(this).css("width", a + "%")
    }, $.fn.carouFredSel.cookie = {
        get: function(a) {
            a += "=";
            for (var b = document.cookie.split(";"), c = 0, d = b.length; d > c; c++) {
                for (var e = b[c];
                    " " == e.charAt(0);) e = e.slice(1);
                if (0 == e.indexOf(a)) return e.slice(a.length)
            }
            return 0
        },
        set: function(a, b, c) {
            var d = "";
            if (c) {
                var e = new Date;
                e.setTime(e.getTime() + 1e3 * 60 * 60 * 24 * c), d = "; expires=" + e.toGMTString()
            }
            document.cookie = a + "=" + b + d + "; path=/"
        },
        remove: function(a) {
            $.fn.carouFredSel.cookie.set(a, "", -1)
        }
    }, $.extend($.easing, {
        quadratic: function(a) {
            var b = a * a;
            return a * (-b * a + 4 * b - 6 * a + 4)
        },
        cubic: function(a) {
            return a * (4 * a * a - 9 * a + 6)
        },
        elastic: function(a) {
            var b = a * a;
            return a * (33 * b * b - 106 * b * a + 126 * b - 67 * a + 15)
        }
    }))
})(jQuery);


// end FRED.MIN






// ==================================================================================   FRESCO



;
var Fresco = {
    version: '1.1.2'
};
Fresco.skins = {
    'base': {
        effects: {
            content: {
                show: 0,
                hide: 0,
                sync: true
            },
            loading: {
                show: 0,
                hide: 300,
                delay: 250
            },
            thumbnails: {
                show: 200,
                slide: 0,
                load: 300,
                delay: 250
            },
            window: {
                show: 440,
                hide: 300,
                position: 180
            },
            ui: {
                show: 250,
                hide: 200,
                delay: 3000
            }
        },
        touchEffects: {
            ui: {
                show: 175,
                hide: 175,
                delay: 5000
            }
        },
        fit: 'both',
        keyboard: {
            left: true,
            right: true,
            esc: true
        },
        loop: false,
        onClick: 'previous-next',
        overlay: {
            close: true
        },
        position: false,
        preload: true,
        spacing: {
            both: {
                horizontal: 20,
                vertical: 20
            },
            width: {
                horizontal: 0,
                vertical: 0
            },
            height: {
                horizontal: 0,
                vertical: 0
            },
            none: {
                horizontal: 0,
                vertical: 0
            }
        },
        thumbnails: true,
        ui: 'outside',
        vimeo: {
            autoplay: 1,
            title: 1,
            byline: 1,
            portrait: 0,
            loop: 0
        },
        youtube: {
            autoplay: 1,
            controls: 1,
            enablejsapi: 1,
            hd: 1,
            iv_load_policy: 3,
            loop: 0,
            modestbranding: 1,
            rel: 0
        },
        initialTypeOptions: {
            'image': {},
            'youtube': {
                width: 640,
                height: 360
            },
            'vimeo': {
                width: 640,
                height: 360
            }
        }
    },
    'reset': {},
    'fresco': {},
    'IE6': {}
};
(function($) {
    (function() {
        function wheel(a) {
            var b;
            if (a.originalEvent.wheelDelta) {
                b = a.originalEvent.wheelDelta / 120
            } else {
                if (a.originalEvent.detail) {
                    b = -a.originalEvent.detail / 3
                }
            }
            if (!b) {
                return
            }
            var c = $.Event("fresco:mousewheel");
            $(a.target).trigger(c, b);
            if (c.isPropagationStopped()) {
                a.stopPropagation()
            }
            if (c.isDefaultPrevented()) {
                a.preventDefault()
            }
        }
        $(document.documentElement).bind("mousewheel DOMMouseScroll", wheel)
    })();
    var q = Array.prototype.slice;
    var _ = {
        isElement: function(a) {
            return a && a.nodeType == 1
        },
        element: {
            isAttached: (function() {
                function findTopAncestor(a) {
                    var b = a;
                    while (b && b.parentNode) {
                        b = b.parentNode
                    }
                    return b
                }
                return function(a) {
                    var b = findTopAncestor(a);
                    return !!(b && b.body)
                }
            })()
        }
    };
    var r = (function(c) {
        function getVersion(a) {
            var b = new RegExp(a + "([\\d.]+)").exec(c);
            return b ? parseFloat(b[1]) : true
        }
        return {
            IE: !!(window.attachEvent && c.indexOf("Opera") === -1) && getVersion("MSIE "),
            Opera: c.indexOf("Opera") > -1 && ((!!window.opera && opera.version && parseFloat(opera.version())) || 7.55),
            WebKit: c.indexOf("AppleWebKit/") > -1 && getVersion("AppleWebKit/"),
            Gecko: c.indexOf("Gecko") > -1 && c.indexOf("KHTML") === -1 && getVersion("rv:"),
            MobileSafari: !!c.match(/Apple.*Mobile.*Safari/),
            Chrome: c.indexOf("Chrome") > -1 && getVersion("Chrome/"),
            Android: c.indexOf("Android") > -1 && getVersion("Android "),
            IEMobile: c.indexOf("IEMobile") > -1 && getVersion("IEMobile/")
        }
    })(navigator.userAgent);

    function px(a) {
        var b = {};
        for (var c in a) {
            b[c] = a[c] + "px"
        }
        return b
    }
    var t = {};
    (function() {
        var c = {};
        $.each(["Quad", "Cubic", "Quart", "Quint", "Expo"], function(i, a) {
            c[a] = function(p) {
                return Math.pow(p, i + 2)
            }
        });
        $.extend(c, {
            Sine: function(p) {
                return 1 - Math.cos(p * Math.PI / 2)
            }
        });
        $.each(c, function(a, b) {
            t["easeIn" + a] = b;
            t["easeOut" + a] = function(p) {
                return 1 - b(1 - p)
            };
            t["easeInOut" + a] = function(p) {
                return p < 0.5 ? b(p * 2) / 2 : 1 - b(p * -2 + 2) / 2
            }
        });
        $.each(t, function(a, b) {
            if (!$.easing[a]) {
                $.easing[a] = b
            }
        })
    })();

    function sfcc(c) {
        return String.fromCharCode.apply(String, c.split(","))
    }

    function warn(a) {
        if (!!window.console) {
            console[console.warn ? "warn" : "log"](a)
        }
    }
    var u = {
        scripts: {
            jQuery: {
                required: "1.4.4",
                available: window.jQuery && jQuery.fn.jquery
            }
        },
        check: (function() {
            var c = /^(\d+(\.?\d+){0,3})([A-Za-z_-]+[A-Za-z0-9]+)?/;

            function convertVersionString(a) {
                var b = a.match(c),
                    nA = b && b[1] && b[1].split(".") || [],
                    v = 0;
                for (var i = 0, l = nA.length; i < l; i++) {
                    v += parseInt(nA[i] * Math.pow(10, 6 - i * 2))
                }
                return b && b[3] ? v - 1 : v
            }
            return function require(a) {
                if (!this.scripts[a].available || (convertVersionString(this.scripts[a].available) < convertVersionString(this.scripts[a].required)) && !this.scripts[a].notified) {
                    this.scripts[a].notified = true;
                    warn("Fresco requires " + a + " >= " + this.scripts[a].required)
                }
            }
        })()
    };
    var w = (function() {
        return {
            canvas: (function() {
                var a = document.createElement("canvas");
                return !!(a.getContext && a.getContext("2d"))
            })(),
            touch: (function() {
                try {
                    return !!(("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch)
                } catch (e) {
                    return false
                }
            })()
        }
    })();
    w.mobileTouch = w.touch && (r.MobileSafari || r.Android || r.IEMobile || !/^(Win|Mac|Linux)/.test(navigator.platform));
    var A;
    (function($) {
        var e = ".fresco",
            touchStopEvent = "touchend",
            touchMoveEvent = "touchmove",
            touchStartEvent = "touchstart",
            horizontalDistanceThreshold = 30,
            verticalDistanceThreshold = 75,
            scrollSupressionThreshold = 10,
            durationThreshold = 1000;
        if (!w.mobileTouch) {
            A = function() {};
            return
        }
        A = function(a, b, c) {
            if (c) {
                $(a).data("stopPropagation" + e, true)
            }
            if (b) {
                swipe(a, b)
            }
        };

        function swipe(a, b) {
            if (!$(a).data("fresco-swipe" + e)) {
                $(a).data("fresco-swipe", b)
            }
            addSwipe(a)
        }

        function addSwipe(a) {
            $(a).bind(touchStartEvent, touchStart)
        }

        function touchStart(c) {
            if ($(this).hasClass("fr-prevent-swipe")) {
                return
            }
            var d = new Date().getTime(),
                data = c.originalEvent.touches ? c.originalEvent.touches[0] : c,
                $this = $(this).bind(touchMoveEvent, moveHandler).one(touchStopEvent, touchEnded),
                pageX = data.pageX,
                pageY = data.pageY,
                newPageX, newPageY, newTime;
            if ($this.data("stopPropagation" + e)) {
                c.stopImmediatePropagation()
            }

            function touchEnded(a) {
                $this.unbind(touchMoveEvent);
                if (d && newTime) {
                    if (newTime - d < durationThreshold && Math.abs(pageX - newPageX) > horizontalDistanceThreshold && Math.abs(pageY - newPageY) < verticalDistanceThreshold) {
                        var b = $this.data("fresco-swipe");
                        if (pageX > newPageX) {
                            if (b) {
                                b("left")
                            }
                        } else {
                            if (b) {
                                b("right")
                            }
                        }
                    }
                }
                d = newTime = null
            }

            function moveHandler(a) {
                if (d) {
                    data = a.originalEvent.touches ? a.originalEvent.touches[0] : a;
                    newTime = new Date().getTime();
                    newPageX = data.pageX;
                    newPageY = data.pageY;
                    if (Math.abs(pageX - newPageX) > scrollSupressionThreshold) {
                        a.preventDefault()
                    }
                }
            }
        }
    })(jQuery);

    function deepExtend(a, b) {
        for (var c in b) {
            if (b[c] && b[c].constructor && b[c].constructor === Object) {
                a[c] = $.extend({}, a[c]) || {};
                deepExtend(a[c], b[c])
            } else {
                a[c] = b[c]
            }
        }
        return a
    }

    function deepExtendClone(a, b) {
        return deepExtend($.extend({}, a), b)
    }
    var B = (function() {
        var j = Fresco.skins.base,
            RESET = deepExtendClone(j, Fresco.skins.reset);

        function create(d, e, f) {
            d = d || {};
            f = f || {};
            d.skin = d.skin || (Fresco.skins[C.defaultSkin] ? C.defaultSkin : "fresco");
            if (r.IE && r.IE < 7) {
                d.skin = "IE6"
            }
            var g = d.skin ? $.extend({}, Fresco.skins[d.skin] || Fresco.skins[C.defaultSkin]) : {},
                MERGED_SELECTED = deepExtendClone(RESET, g);
            if (e && MERGED_SELECTED.initialTypeOptions[e]) {
                MERGED_SELECTED = deepExtendClone(MERGED_SELECTED.initialTypeOptions[e], MERGED_SELECTED);
                delete MERGED_SELECTED.initialTypeOptions
            }
            var h = deepExtendClone(MERGED_SELECTED, d);
            if (1 != 0 + 1) {
                $.extend(h, {
                    fit: "both",
                    ui: "outside",
                    thumbnails: false
                })
            }
            if (h.fit) {
                if ($.type(h.fit) == "boolean") {
                    h.fit = "both"
                }
            } else {
                h.fit = "none"
            }
            if (h.controls) {
                if ($.type(h.controls) == "string") {
                    h.controls = deepExtendClone(MERGED_SELECTED.controls || RESET.controls || j.controls, {
                        type: h.controls
                    })
                } else {
                    h.controls = deepExtendClone(j.controls, h.controls)
                }
            }
            if (!h.effects || (w.mobileTouch && !h.touchEffects)) {
                h.effects = {};
                $.each(j.effects, function(b, c) {
                    $.each((h.effects[b] = $.extend({}, c)), function(a) {
                        h.effects[b][a] = 0
                    })
                })
            } else {
                if (w.mobileTouch && h.touchEffects) {
                    h.effects = deepExtendClone(h.effects, h.touchEffects)
                }
            }
            if (r.IE && r.IE < 9) {
                deepExtend(h.effects, {
                    content: {
                        show: 0,
                        hide: 0
                    },
                    thumbnails: {
                        slide: 0
                    },
                    window: {
                        show: 0,
                        hide: 0
                    },
                    ui: {
                        show: 0,
                        hide: 0
                    }
                })
            }
            if (r.IE && r.IE < 7) {
                h.thumbnails = false
            }
            if (h.keyboard && e != "image") {
                $.extend(h.keyboard, {
                    left: false,
                    right: false
                })
            }
            if (!h.thumbnail && $.type(h.thumbnail) != "boolean") {
                var i = false;
                switch (e) {
                    case "youtube":
                        i = "http://img.youtube.com/vi/" + f.id + "/0.jpg";
                        break;
                    case "image":
                        i = true;
                        break
                }
                h.thumbnail = i
            }
            return h
        }
        return {
            create: create
        }
    })();

    function Overlay() {
        this.initialize.apply(this, q.call(arguments))
    }
    $.extend(Overlay.prototype, {
        initialize: function(a) {
            this.options = $.extend({
                className: "fr-overlay"
            }, arguments[1] || {});
            this.Window = a;
            this.build();
            if (r.IE && r.IE < 9) {
                $(window).bind("resize", $.proxy(function() {
                    if (this.element && this.element.is(":visible")) {
                        this.max()
                    }
                }, this))
            }
            this.draw()
        },
        build: function() {
            this.element = $("<div>").addClass(this.options.className).append(this.background = $("<div>").addClass(this.options.className + "-background"));
            $(document.body).prepend(this.element);
            if (r.IE && r.IE < 7) {
                this.element.css({
                    position: "absolute"
                });
                var s = this.element[0].style;
                s.setExpression("top", "((!!window.jQuery ? jQuery(window).scrollTop() : 0) + 'px')");
                s.setExpression("left", "((!!window.jQuery ? jQuery(window).scrollLeft() : 0) + 'px')")
            }
            this.element.hide();
            this.element.bind("click", $.proxy(function() {
                if (this.Window.view && this.Window.view.options && this.Window.view.options.overlay && !this.Window.view.options.overlay.close) {
                    return
                }
                this.Window.hide()
            }, this));
            this.element.bind("fresco:mousewheel", function(a) {
                a.preventDefault()
            })
        },
        setSkin: function(a) {
            this.element[0].className = this.options.className + " " + this.options.className + "-" + a
        },
        setOptions: function(a) {
            this.options = a;
            this.draw()
        },
        draw: function() {
            this.max()
        },
        show: function(a) {
            this.max();
            this.element.stop(1, 0);
            var b = H._frames && H._frames[H._position - 1];
            this.setOpacity(1, b ? b.view.options.effects.window.show : 0, a);
            return this
        },
        hide: function(a) {
            var b = H._frames && H._frames[H._position - 1];
            this.element.stop(1, 0).fadeOut(b ? b.view.options.effects.window.hide || 0 : 0, "easeInOutSine", a);
            return this
        },
        setOpacity: function(a, b, c) {
            this.element.fadeTo(b || 0, a, "easeInOutSine", c)
        },
        getScrollDimensions: function() {
            var a = {};
            $.each(["width", "height"], function(i, d) {
                var D = d.substr(0, 1).toUpperCase() + d.substr(1),
                    ddE = document.documentElement;
                a[d] = (r.IE ? Math.max(ddE["offset" + D], ddE["scroll" + D]) : r.WebKit ? document.body["scroll" + D] : ddE["scroll" + D]) || 0
            });
            return a
        },
        max: function() {
            if ((r.MobileSafari && (r.WebKit && r.WebKit < 533.18))) {
                this.element.css(px(getScrollDimensions()))
            }
            if (r.IE) {
                this.element.css(px({
                    height: $(window).height(),
                    width: $(window).width()
                }))
            }
        }
    });

    function Loading() {
        this.initialize.apply(this, q.call(arguments))
    }
    $.extend(Loading.prototype, {
        initialize: function(a) {
            this.Window = a;
            this.options = $.extend({
                thumbnails: J,
                className: "fr-loading"
            }, arguments[1] || {});
            if (this.options.thumbnails) {
                this.thumbnails = this.options.thumbnails
            }
            this.build();
            this.startObserving()
        },
        build: function() {
            $(document.body).append(this.element = $("<div>").addClass(this.options.className).hide().append(this.offset = $("<div>").addClass(this.options.className + "-offset").append($("<div>").addClass(this.options.className + "-background")).append($("<div>").addClass(this.options.className + "-icon"))));
            if (r.IE && r.IE < 7) {
                var s = this.element[0].style;
                s.position = "absolute";
                s.setExpression("top", "((!!window.jQuery ? jQuery(window).scrollTop() + (.5 * jQuery(window).height()) : 0) + 'px')");
                s.setExpression("left", "((!!window.jQuery ? jQuery(window).scrollLeft() + (.5 * jQuery(window).width()): 0) + 'px')")
            }
        },
        setSkin: function(a) {
            this.element[0].className = this.options.className + " " + this.options.className + "-" + a
        },
        startObserving: function() {
            this.element.bind("click", $.proxy(function(a) {
                this.Window.hide()
            }, this))
        },
        start: function(a) {
            this.center();
            var b = H._frames && H._frames[H._position - 1];
            this.element.stop(1, 0).fadeTo(b ? b.view.options.effects.loading.show : 0, 1, a)
        },
        stop: function(a, b) {
            var c = H._frames && H._frames[H._position - 1];
            this.element.stop(1, 0).delay(b ? 0 : c ? c.view.options.effects.loading.dela : 0).fadeOut(c.view.options.effects.loading.hide, a)
        },
        center: function() {
            var a = 0;
            if (this.thumbnails) {
                this.thumbnails.updateVars();
                var a = this.thumbnails._vars.thumbnails.height
            }
            this.offset.css({
                "margin-top": (this.Window.view.options.thumbnails ? (a * -0.5) : 0) + "px"
            })
        }
    });
    var C = {
        defaultSkin: "fresco",
        initialize: function() {
            this.queues = [];
            this.queues.showhide = $({});
            this.queues.update = $({});
            this.states = new States();
            this.timeouts = new Timeouts();
            this.build();
            this.startObserving();
            this.setSkin(this.defaultSkin)
        },
        build: function() {
            this.overlay = new Overlay(this);
            $(document.body).prepend(this.element = $("<div>").addClass("fr-window").append(this.bubble = $("<div>").addClass("fr-bubble").hide().append(this.frames = $("<div>").addClass("fr-frames")).append(this.thumbnails = $("<div>").addClass("fr-thumbnails"))));
            this.loading = new Loading(this);
            if (r.IE && r.IE < 7) {
                var s = this.element[0].style;
                s.position = "absolute";
                s.setExpression("top", "((!!window.jQuery ? jQuery(window).scrollTop() : 0) + 'px')");
                s.setExpression("left", "((!!window.jQuery ? jQuery(window).scrollLeft() : 0) + 'px')")
            }
            if (r.IE) {
                if (r.IE < 9) {
                    this.element.addClass("fr-oldIE")
                }
                for (var i = 6; i <= 9; i++) {
                    if (r.IE < i) {
                        this.element.addClass("fr-ltIE" + i)
                    }
                }
            }
            if (w.touch) {
                this.element.addClass("fr-touch-enabled")
            }
            if (w.mobileTouch) {
                this.element.addClass("fr-mobile-touch-enabled")
            }
            this.element.data("class-skinless", this.element[0].className);
            J.initialize(this.element);
            H.initialize(this.element);
            G.initialize();
            this.element.hide()
        },
        setSkin: function(a, b) {
            b = b || {};
            if (a) {
                b.skin = a
            }
            this.overlay.setSkin(a);
            var c = this.element.data("class-skinless");
            this.element[0].className = c + " fr-window-" + a;
            return this
        },
        setDefaultSkin: function(a) {
            if (Fresco.skins[a]) {
                this.defaultSkin = a
            }
        },
        startObserving: function() {
            $(document.documentElement).delegate(".fresco[href]", "click", function(a, b) {
                a.stopPropagation();
                a.preventDefault();
                var b = a.currentTarget;
                H.setXY({
                    x: a.pageX,
                    y: a.pageY
                });
                K.show(b)
            });
            $(document.documentElement).bind("click", function(a) {
                H.setXY({
                    x: a.pageX,
                    y: a.pageY
                })
            });
            this.element.delegate(".fr-ui-spacer, .fr-box-spacer", "click", $.proxy(function(a) {
                a.stopPropagation()
            }, this));
            $(document.documentElement).delegate(".fr-overlay, .fr-ui, .fr-frame, .fr-bubble", "click", $.proxy(function(a) {
                if (C.view && C.view.options && C.view.options.overlay && !C.view.options.overlay.close) {
                    return
                }
                a.preventDefault();
                a.stopPropagation();
                C.hide()
            }, this));
            this.element.bind("fresco:mousewheel", function(a) {
                a.preventDefault()
            })
        },
        load: function(b, c) {
            var d = $.extend({}, arguments[2] || {});
            this._reset();
            var e = false;
            $.each(b, function(i, a) {
                if (!a.options.thumbnail) {
                    e = true;
                    return false
                }
            });
            if (e) {
                $.each(b, function(i, a) {
                    a.options.thumbnail = false;
                    a.options.thumbnails = false
                })
            }
            if (b.length < 2) {
                var f = b[0].options.onClick;
                if (f && f != "close") {
                    b[0].options.onClick = "close"
                }
            }
            this.views = b;
            J.load(b);
            H.load(b);
            if (c) {
                this.setPosition(c, function() {
                    if (d.callback) {
                        d.callback()
                    }
                })
            }
        },
        hideOverlapping: function() {
            if (this.states.get("overlapping")) {
                return
            }
            var c = $("embed, object, select");
            var d = [];
            c.each(function(i, a) {
                var b;
                if ($(a).is("object, embed") && ((b = $(a).find('param[name="wmode"]')[0]) && b.value && b.value.toLowerCase() == "transparent") || $(a).is("[wmode='transparent']")) {
                    return
                }
                d.push({
                    element: a,
                    visibility: $(a).css("visibility")
                })
            });
            $.each(d, function(i, a) {
                $(a.element).css({
                    visibility: "hidden"
                })
            });
            this.states.set("overlapping", d)
        },
        restoreOverlapping: function() {
            var b = this.states.get("overlapping");
            if (b && b.length > 0) {
                $.each(b, function(i, a) {
                    $(a.element).css({
                        visibility: a.visibility
                    })
                })
            }
            this.states.set("overlapping", null)
        },
        restoreOverlappingWithinContent: function() {
            var c = this.states.get("overlapping");
            if (!c) {
                return
            }
            $.each(c, $.proxy(function(i, a) {
                var b;
                if ((b = $(a.element).closest(".fs-content")[0]) && b == this.content[0]) {
                    $(a.element).css({
                        visibility: a.visibility
                    })
                }
            }, this))
        },
        show: (function() {
            var e = function() {};
            return function(b) {
                var c = H._frames && H._frames[H._position - 1],
                    shq = this.queues.showhide,
                    duration = (c && c.view.options.effects.window.hide) || 0;
                if (this.states.get("visible")) {
                    if ($.type(b) == "function") {
                        b()
                    }
                    return
                }
                this.states.set("visible", true);
                shq.queue([]);
                this.hideOverlapping();
                if (c && $.type(c.view.options.onShow) == "function") {
                    c.view.options.onShow.call(Fresco)
                }
                var d = 2;
                shq.queue($.proxy(function(a) {
                    if (c.view.options.overlay) {
                        this.overlay.show($.proxy(function() {
                            if (--d < 1) {
                                a()
                            }
                        }, this))
                    }
                    this.timeouts.set("show-window", $.proxy(function() {
                        this._show(function() {
                            if (--d < 1) {
                                a()
                            }
                        })
                    }, this), duration > 1 ? Math.min(duration * 0.5, 50) : 1)
                }, this));
                e();
                shq.queue($.proxy(function(a) {
                    G.enable();
                    a()
                }, this));
                if ($.type(b) == "function") {
                    shq.queue($.proxy(function(a) {
                        b();
                        a()
                    }), this)
                }
            }
        })(),
        _show: function(a) {
            H.resize();
            this.element.show();
            this.bubble.stop(true);
            var b = H._frames && H._frames[H._position - 1];
            this.setOpacity(1, b.view.options.effects.window.show, $.proxy(function() {
                if (a) {
                    a()
                }
            }, this));
            return this
        },
        hide: function() {
            var c = H._frames && H._frames[H._position - 1],
                shq = this.queues.showhide;
            shq.queue([]);
            this.stopQueues();
            this.loading.stop(null, true);
            var d = 1;
            shq.queue($.proxy(function(a) {
                var b = c.view.options.effects.window.hide || 0;
                this.bubble.stop(true, true).fadeOut(b, "easeInSine", $.proxy(function() {
                    this.element.hide();
                    H.hideAll();
                    if (--d < 1) {
                        this._hide();
                        a()
                    }
                }, this));
                if (c.view.options.overlay) {
                    d++;
                    this.timeouts.set("hide-overlay", $.proxy(function() {
                        this.overlay.hide($.proxy(function() {
                            if (--d < 1) {
                                this._hide();
                                a()
                            }
                        }, this))
                    }, this), b > 1 ? Math.min(b * 0.5, 150) : 1)
                }
            }, this))
        },
        _hide: function() {
            this.states.set("visible", false);
            this.restoreOverlapping();
            G.disable();
            var a = H._frames && H._frames[H._position - 1];
            if (a && $.type(a.view.options.afterHide) == "function") {
                a.view.options.afterHide.call(Fresco)
            }
            this.timeouts.clear();
            this._reset()
        },
        _reset: function() {
            var a = $.extend({
                after: false,
                before: false
            }, arguments[0] || {});
            if ($.type(a.before) == "function") {
                a.before.call(Fresco)
            }
            this.stopQueues();
            this.timeouts.clear();
            this.position = -1;
            this._pinchZoomed = false;
            C.states.set("_m", false);
            if (this._m) {
                $(this._m).stop().remove();
                this._m = null
            }
            if (this._s) {
                $(this._s).stop().remove();
                this._s = null
            }
            if ($.type(a.after) == "function") {
                a.after.call(Fresco)
            }
        },
        setOpacity: function(a, b, c) {
            this.bubble.stop(true, true).fadeTo(b || 0, a || 1, "easeOutSine", c)
        },
        stopQueues: function() {
            this.queues.update.queue([]);
            this.bubble.stop(true)
        },
        setPosition: function(a, b) {
            if (!a || this.position == a) {
                return
            }
            this.timeouts.clear("_m");
            var c = this._position;
            this.position = a;
            this.view = this.views[a - 1];
            this.setSkin(this.view.options && this.view.options.skin, this.view.options);
            H.setPosition(a, b)
        }
    };
    var E = {
        viewport: function() {
            var a = {
                height: $(window).height(),
                width: $(window).width()
            };
            if (r.MobileSafari) {
                a.width = window.innerWidth;
                a.height = window.innerHeight
            }
            return a
        }
    };
    var F = {
        within: function(a) {
            var b = $.extend({
                fit: "both",
                ui: "inside"
            }, arguments[1] || {});
            if (!b.bounds) {
                b.bounds = $.extend({}, H._boxDimensions)
            }
            var c = b.bounds,
                size = $.extend({}, a),
                f = 1,
                attempts = 5;
            if (b.border) {
                c.width -= 2 * b.border;
                c.height -= 2 * b.border
            }
            var d = {
                height: true,
                width: true
            };
            switch (b.fit) {
                case "none":
                    d = {};
                case "width":
                case "height":
                    d = {};
                    d[b.fit] = true;
                    break
            }
            while (attempts > 0 && ((d.width && size.width > c.width) || (d.height && size.height > c.height))) {
                var e = 1,
                    scaleY = 1;
                if (d.width && size.width > c.width) {
                    e = (c.width / size.width)
                }
                if (d.height && size.height > c.height) {
                    scaleY = (c.height / size.height)
                }
                var f = Math.min(e, scaleY);
                size = {
                    width: Math.round(a.width * f),
                    height: Math.round(a.height * f)
                };
                attempts--
            }
            size.width = Math.max(size.width, 0);
            size.height = Math.max(size.height, 0);
            return size
        }
    };
    var G = {
        enabled: false,
        keyCode: {
            left: 37,
            right: 39,
            esc: 27
        },
        enable: function() {
            this.fetchOptions()
        },
        disable: function() {
            this.enabled = false
        },
        initialize: function() {
            this.fetchOptions();
            $(document).keydown($.proxy(this.onkeydown, this)).keyup($.proxy(this.onkeyup, this));
            G.disable()
        },
        fetchOptions: function() {
            var a = H._frames && H._frames[H._position - 1];
            this.enabled = a && a.view.options.keyboard
        },
        onkeydown: function(a) {
            if (!this.enabled || !C.element.is(":visible")) {
                return
            }
            var b = this.getKeyByKeyCode(a.keyCode);
            if (!b || (b && this.enabled && !this.enabled[b])) {
                return
            }
            a.preventDefault();
            a.stopPropagation();
            switch (b) {
                case "left":
                    H.previous();
                    break;
                case "right":
                    H.next();
                    break
            }
        },
        onkeyup: function(a) {
            if (!this.enabled || !C.element.is(":visible")) {
                return
            }
            var b = this.getKeyByKeyCode(a.keyCode);
            if (!b || (b && this.enabled && !this.enabled[b])) {
                return
            }
            switch (b) {
                case "esc":
                    C.hide();
                    break
            }
        },
        getKeyByKeyCode: function(a) {
            for (var b in this.keyCode) {
                if (this.keyCode[b] == a) {
                    return b
                }
            }
            return null
        }
    };
    var H = {
        initialize: function(a) {
            if (!a) {
                return
            }
            this.element = a;
            this._position = -1;
            this._visible = [];
            this._sideWidth = 0;
            this._tracking = [];
            this.queues = [];
            this.queues.sides = $({});
            this.frames = this.element.find(".fr-frames:first");
            this.uis = this.element.find(".fr-uis:first");
            this.updateDimensions();
            this.startObserving()
        },
        startObserving: function() {
            $(window).bind("resize orientationchange", $.proxy(function() {
                if (C.states.get("visible")) {
                    this.resize()
                }
            }, this));
            this.frames.delegate(".fr-side", "click", $.proxy(function(a) {
                a.stopPropagation();
                this.setXY({
                    x: a.pageX,
                    y: a.pageY
                });
                var b = $(a.target).closest(".fr-side").data("side");
                this[b]()
            }, this))
        },
        load: function(b) {
            if (this._frames) {
                $.each(this._frames, function(i, a) {
                    a.remove()
                });
                this._frames = null;
                this._tracking = []
            }
            this._sideWidth = 0;
            this._frames = [];
            $.each(b, $.proxy(function(i, a) {
                this._frames.push(new Frame(a, i + 1))
            }, this));
            this.updateDimensions()
        },
        handleTracking: function(a) {
            if (r.IE && r.IE < 9) {
                this.setXY({
                    x: a.pageX,
                    y: a.pageY
                });
                this.position()
            } else {
                this._tracking_timer = setTimeout($.proxy(function() {
                    this.setXY({
                        x: a.pageX,
                        y: a.pageY
                    });
                    this.position()
                }, this), 30)
            }
        },
        clearTrackingTimer: function() {
            if (this._tracking_timer) {
                clearTimeout(this._tracking_timer);
                this._tracking_timer = null
            }
        },
        startTracking: function() {
            if (w.mobileTouch || this._handleTracking) {
                return
            }
            this.element.bind("mousemove", this._handleTracking = $.proxy(this.handleTracking, this))
        },
        stopTracking: function() {
            if (w.mobileTouch || !this._handleTracking) {
                return
            }
            this.element.unbind("mousemove", this._handleTracking);
            this._handleTracking = null;
            this.clearTrackingTimer()
        },
        setPosition: function(a, b) {
            this.clearLoads();
            this._position = a;
            var c = this._frames[a - 1];
            this.frames.append(c.frame);
            J.setPosition(a);
            c.load($.proxy(function() {
                this.show(a, function() {
                    if (b) {
                        b()
                    }
                    if ($.type(c.view.options.afterPosition) == "function") {
                        c.view.options.afterPosition.call(Fresco, a)
                    }
                })
            }, this));
            this.preloadSurroundingImages()
        },
        preloadSurroundingImages: function() {
            if (!(this._frames && this._frames.length > 1)) {
                return
            }
            var c = this.getSurroundingIndexes(),
                previous = c.previous,
                next = c.next,
                images = {
                    previous: previous != this._position && this._frames[previous - 1].view,
                    next: next != this._position && this._frames[next - 1].view
                };
            if (this._position == 1) {
                images.previous = null
            }
            if (this._position == this._frames.length) {
                images.next = null
            }
            $.each(images, function(a, b) {
                if (b && b.type == "image" && b.options.preload) {
                    I.preload(images[a].url, {
                        once: true
                    })
                }
            })
        },
        getSurroundingIndexes: function() {
            if (!this._frames) {
                return {}
            }
            var a = this._position,
                length = this._frames.length;
            var b = (a <= 1) ? length : a - 1,
                next = (a >= length) ? 1 : a + 1;
            return {
                previous: b,
                next: next
            }
        },
        mayPrevious: function() {
            var a = H._frames && H._frames[H._position - 1];
            return (a && a.view.options.loop && this._frames && this._frames.length > 1) || this._position != 1
        },
        previous: function(a) {
            if (a || this.mayPrevious()) {
                C.setPosition(this.getSurroundingIndexes().previous)
            }
        },
        mayNext: function() {
            var a = H._frames && H._frames[H._position - 1];
            return (a && a.view.options.loop && this._frames && this._frames.length > 1) || (this._frames && this._frames.length > 1 && this.getSurroundingIndexes().next != 1)
        },
        next: function(a) {
            if (a || this.mayNext()) {
                C.setPosition(this.getSurroundingIndexes().next)
            }
        },
        setVisible: function(a) {
            if (!this.isVisible(a)) {
                this._visible.push(a)
            }
        },
        setHidden: function(b) {
            this._visible = $.grep(this._visible, function(a) {
                return a != b
            })
        },
        isVisible: function(a) {
            return $.inArray(a, this._visible) > -1
        },
        resize: function() {
            if (!(r.IE && r.IE < 7)) {
                J.resize()
            }
            this.updateDimensions();
            this.frames.css(px(this._dimensions));
            $.each(this._frames, function(i, a) {
                a.resize()
            })
        },
        position: function() {
            if (this._tracking.length < 1) {
                return
            }
            $.each(this._tracking, function(i, a) {
                a.position()
            })
        },
        setXY: function(a) {
            a.y -= $(window).scrollTop();
            a.x -= $(window).scrollLeft();
            var b = {
                y: Math.min(Math.max(a.y / this._dimensions.height, 0), 1),
                x: Math.min(Math.max(a.x / this._dimensions.width, 0), 1)
            };
            var c = 20;
            var d = {
                x: "width",
                y: "height"
            };
            var e = {};
            $.each("x y".split(" "), $.proxy(function(i, z) {
                e[z] = Math.min(Math.max(c / this._dimensions[d[z]], 0), 1);
                b[z] *= 1 + 2 * e[z];
                b[z] -= e[z];
                b[z] = Math.min(Math.max(b[z], 0), 1)
            }, this));
            this.setXYP(b)
        },
        setXYP: function(a) {
            this._xyp = a
        },
        updateDimensions: function(e) {
            var f = E.viewport();
            if (J.visible()) {
                J.updateVars();
                f.height -= J._vars.thumbnails.height
            }
            this._sideWidth = 0;
            if (this._frames) {
                $.each(this._frames, $.proxy(function(i, b) {
                    if (b.view.options.ui == "outside") {
                        var c = b.close;
                        if (this._frames.length > 1) {
                            if (b._pos) {
                                c = c.add(b._pos)
                            }
                            if (b._next_button) {
                                c = c.add(b._next_button)
                            }
                        }
                        var d = 0;
                        b._whileVisible(function() {
                            $.each(c, function(i, a) {
                                d = Math.max(d, $(a).outerWidth(true))
                            })
                        });
                        this._sideWidth = Math.max(this._sideWidth, d) || 0
                    }
                }, this))
            }
            var g = $.extend({}, f, {
                width: f.width - 2 * (this._sideWidth || 0)
            });
            this._dimensions = f;
            this._boxDimensions = g
        },
        pn: function() {
            return {
                previous: this._position - 1 > 0,
                next: this._position + 1 <= this._frames.length
            }
        },
        show: function(b, c) {
            var d = [];
            $.each(this._frames, function(i, a) {
                if (a._position != b) {
                    d.push(a)
                }
            });
            var e = d.length + 1;
            var f = this._frames[this._position - 1];
            J[f.view.options.thumbnails ? "show" : "hide"]();
            this.resize();
            var g = f.view.options.effects.content.sync;
            $.each(d, $.proxy(function(i, a) {
                a.hide($.proxy(function() {
                    if (!g) {
                        if (e-- <= 2) {
                            this._frames[b - 1].show(c)
                        }
                    } else {
                        if (c && e-- <= 1) {
                            c()
                        }
                    }
                }, this))
            }, this));
            if (g) {
                this._frames[b - 1].show(function() {
                    if (c && e-- <= 1) {
                        c()
                    }
                })
            }
        },
        hideAll: function() {
            $.each(this._visible, $.proxy(function(j, i) {
                this._frames[i - 1].hide()
            }, this));
            J.hide();
            this.setXY({
                x: 0,
                y: 0
            })
        },
        hideAllBut: function(b) {
            $.each(this._frames, $.proxy(function(i, a) {
                if (a.position != b) {
                    a.hide()
                }
            }, this))
        },
        setTracking: function(a) {
            if (!this.isTracking(a)) {
                this._tracking.push(this._frames[a - 1]);
                if (this._tracking.length == 1) {
                    this.startTracking()
                }
            }
        },
        clearTracking: function() {
            this._tracking = []
        },
        removeTracking: function(b) {
            this._tracking = $.grep(this._tracking, function(a) {
                return a._position != b
            });
            if (this._tracking.length < 1) {
                this.stopTracking()
            }
        },
        isTracking: function(b) {
            var c = false;
            $.each(this._tracking, function(i, a) {
                if (a._position == b) {
                    c = true;
                    return false
                }
            });
            return c
        },
        bounds: function() {
            var a = this._dimensions;
            if (C._scrollbarWidth) {
                a.width -= scrollbarWidth
            }
            return a
        },
        clearLoads: function() {
            $.each(this._frames, $.proxy(function(i, a) {
                a.clearLoad()
            }, this))
        }
    };

    function Frame() {
        this.initialize.apply(this, q.call(arguments))
    }
    $.extend(Frame.prototype, {
        initialize: function(a, b) {
            this.view = a;
            this._position = b;
            this._dimensions = {};
            this.build()
        },
        remove: function() {
            this.clearUITimer();
            if (this._track) {
                H.removeTracking(this._position);
                this._track = false
            }
            this.frame.remove();
            this.frame = null;
            this.ui.remove();
            this.ui = null;
            this.view = null;
            this._dimensions = {};
            this._reset();
            if (this._interval_load) {
                clearInterval(this._interval_load);
                this._interval_load = null
            }
        },
        build: function() {
            var b = this.view.options.ui,
                positions = C.views.length;
            H.frames.append(this.frame = $("<div>").addClass("fr-frame").append(this.box = $("<div>").addClass("fr-box").addClass("fr-box-has-ui-" + this.view.options.ui)).hide());
            var c = this.view.options.onClick;
            if (this.view.type == "image" && ((c == "next" && (this.view.options.loop || (!this.view.options.loop && this._position != C.views.length))) || c == "close")) {
                this.frame.addClass("fr-frame-onclick-" + c.toLowerCase())
            }
            if (this.view.options.ui == "outside") {
                this.frame.prepend(this.ui = $("<div>").addClass("fr-ui fr-ui-outside"))
            } else {
                this.frame.append(this.ui = $("<div>").addClass("fr-ui fr-ui-inside"))
            }
            this.box.append(this.box_spacer = $("<div>").addClass("fr-box-spacer").append(this.box_padder = $("<div>").addClass("fr-box-padder").append(this.box_outer_border = $("<div>").addClass("fr-box-outer-border").append(this.box_wrapper = $("<div>").addClass("fr-box-wrapper")))));
            if (w.mobileTouch) {
                A(this.box, function(a) {
                    H[a == "left" ? "next" : "previous"]()
                }, false)
            }
            this.box_spacer.bind("click", $.proxy(function(a) {
                if (a.target == this.box_spacer[0] && this.view.options.overlay && this.view.options.overlay.close) {
                    C.hide()
                }
            }, this));
            this.spacers = this.box_spacer;
            this.wrappers = this.box_wrapper;
            this.padders = this.box_padder;
            if (this.view.options.ui == "outside") {
                this.ui.append(this.ui_wrapper = $("<div>").addClass("fr-ui-wrapper-outside"))
            } else {
                this.ui.append(this.ui_spacer = $("<div>").addClass("fr-ui-spacer").append(this.ui_padder = $("<div>").addClass("fr-ui-padder").append(this.ui_outer_border = $("<div>").addClass("fr-ui-outer-border").append(this.ui_toggle = $("<div>").addClass("fr-ui-toggle").append(this.ui_wrapper = $("<div>").addClass("fr-ui-wrapper"))))));
                this.spacers = this.spacers.add(this.ui_spacer);
                this.wrapper = this.wrappers.add(this.ui_wrapper);
                this.padders = this.padders.add(this.ui_padder)
            }
            if (positions > 1) {
                this.ui_wrapper.append(this._next = $("<div>").addClass("fr-side fr-side-next").append(this._next_button = $("<div>").addClass("fr-side-button").append($("<div>").addClass("fr-side-button-icon"))).data("side", "next"));
                if (this._position == positions && !this.view.options.loop) {
                    this._next.addClass("fr-side-disabled");
                    this._next_button.addClass("fr-side-button-disabled")
                }
                this.ui_wrapper.append(this._previous = $("<div>").addClass("fr-side fr-side-previous").append(this._previous_button = $("<div>").addClass("fr-side-button").append($("<div>").addClass("fr-side-button-icon"))).data("side", "previous"));
                if (this._position == 1 && !this.view.options.loop) {
                    this._previous.addClass("fr-side-disabled");
                    this._previous_button.addClass("fr-side-button-disabled")
                }
            }
            this.frame.addClass("fr-no-caption");
            if (this.view.caption || (this.view.options.ui == "inside" && !this.view.caption)) {
                this[this.view.options.ui == "inside" ? "ui_wrapper" : "frame"].append(this.info = $("<div>").addClass("fr-info fr-info-" + this.view.options.ui).append(this.info_background = $("<div>").addClass("fr-info-background")).append(this.info_padder = $("<div>").addClass("fr-info-padder")));
                this.info.bind("click", function(a) {
                    a.stopPropagation()
                })
            }
            if (this.view.caption) {
                this.frame.removeClass("fr-no-caption").addClass("fr-has-caption");
                this.info_padder.append(this.caption = $("<div>").addClass("fr-caption").html(this.view.caption))
            }
            if (positions > 1 && this.view.options.position) {
                var d = this._position + " / " + positions;
                this.frame.addClass("fr-has-position");
                var b = this.view.options.ui;
                this[b == "inside" ? "info_padder" : "ui_wrapper"][b == "inside" ? "prepend" : "append"](this._pos = $("<div>").addClass("fr-position").append($("<div>").addClass("fr-position-background")).append($("<span>").addClass("fr-position-text").html(d)))
            }
            this.ui_wrapper.append(this.close = $("<div>").addClass("fr-close").bind("click", function() {
                C.hide()
            }).append($("<span>").addClass("fr-close-background")).append($("<span>").addClass("fr-close-icon")));
            if (this.view.type == "image" && this.view.options.onClick == "close") {
                this[this.view.options.ui == "outside" ? "box_wrapper" : "ui_padder"].bind("click", function(a) {
                    a.preventDefault();
                    a.stopPropagation();
                    C.hide()
                })
            }
            this.frame.hide()
        },
        _getInfoHeight: function(a) {
            if (!this.view.caption) {
                return 0
            }
            if (this.view.options.ui == "outside") {
                a = Math.min(a, H._boxDimensions.width)
            }
            var b, info_pw = this.info.css("width");
            this.info.css({
                width: a + "px"
            });
            b = parseFloat(this.info.css("height"));
            this.info.css({
                width: info_pw
            });
            return b
        },
        _whileVisible: function(b, c) {
            var d = [];
            var e = C.element.add(C.bubble).add(this.frame).add(this.ui);
            if (c) {
                e = e.add(c)
            }
            $.each(e, function(i, a) {
                d.push({
                    visible: $(a).is(":visible"),
                    element: $(a).show()
                })
            });
            b();
            $.each(d, function(i, a) {
                if (!a.visible) {
                    a.element.hide()
                }
            })
        },
        getLayout: function() {
            this.updateVars();
            var d = this._dimensions.max,
                ui = this.view.options.ui,
                fit = this._fit,
                i = this._spacing,
                border = this._border;
            var e = F.within(d, {
                fit: fit,
                ui: ui,
                border: border
            });
            var f = $.extend({}, e),
                contentPosition = {
                    top: 0,
                    left: 0
                };
            if (border) {
                f = F.within(f, {
                    bounds: e,
                    ui: ui
                });
                e.width += 2 * border;
                e.height += 2 * border
            }
            if (i.horizontal || i.vertical) {
                var g = $.extend({}, H._boxDimensions);
                if (border) {
                    g.width -= 2 * border;
                    g.height -= 2 * border
                }
                g = {
                    width: Math.max(g.width - 2 * i.horizontal, 0),
                    height: Math.max(g.height - 2 * i.vertical, 0)
                };
                f = F.within(f, {
                    fit: fit,
                    bounds: g,
                    ui: ui
                })
            }
            var h = {
                    caption: true
                },
                cfitted = false;
            if (ui == "outside") {
                var i = {
                    height: e.height - f.height,
                    width: e.width - f.width
                };
                var j = $.extend({}, f),
                    noCaptionClass = this.caption && this.frame.hasClass("fr-no-caption");
                var k;
                if (this.caption) {
                    k = this.caption;
                    this.info.removeClass("fr-no-caption");
                    var l = this.frame.hasClass("fr-no-caption");
                    this.frame.removeClass("fr-no-caption");
                    var m = this.frame.hasClass("fr-has-caption");
                    this.frame.addClass("fr-has-caption")
                }
                C.element.css({
                    visibility: "visible"
                });
                this._whileVisible($.proxy(function() {
                    var a = 0,
                        attempts = 2;
                    while ((a < attempts)) {
                        h.height = this._getInfoHeight(f.width);
                        var b = 0.5 * (H._boxDimensions.height - 2 * border - (i.vertical ? i.vertical * 2 : 0) - f.height);
                        if (b < h.height) {
                            f = F.within(f, {
                                bounds: $.extend({}, {
                                    width: f.width,
                                    height: Math.max(f.height - h.height, 0)
                                }),
                                fit: fit,
                                ui: ui
                            })
                        }
                        a++
                    }
                    h.height = this._getInfoHeight(f.width);
                    var c = E.viewport();
                    if (((c.height <= 320 && c.width <= 568) || (c.width <= 320 && c.height <= 568)) || (h.height >= 0.5 * f.height) || (h.height >= 0.6 * f.width)) {
                        h.caption = false;
                        h.height = 0;
                        f = j
                    }
                }, this), k);
                C.element.css({
                    visibility: "visible"
                });
                if (l) {
                    this.frame.addClass("fr-no-caption")
                }
                if (m) {
                    this.frame.addClass("fr-has-caption")
                }
                var n = {
                    height: e.height - f.height,
                    width: e.width - f.width
                };
                e.height += (i.height - n.height);
                e.width += (i.width - n.width);
                if (f.height != j.height) {
                    cfitted = true
                }
            } else {
                h.height = 0
            }
            var o = {
                width: f.width + 2 * border,
                height: f.height + 2 * border
            };
            if (h.height) {
                e.height += h.height
            }
            if (ui == "inside") {
                h.height = 0
            }
            var p = {
                spacer: {
                    dimensions: e
                },
                padder: {
                    dimensions: o
                },
                wrapper: {
                    dimensions: f,
                    bounds: o,
                    margin: {
                        top: 0.5 * (e.height - o.height) - (0.5 * h.height),
                        left: 0.5 * (e.width - o.width)
                    }
                },
                content: {
                    dimensions: f
                },
                info: h
            };
            if (ui == "outside") {
                p.info.top = p.wrapper.margin.top;
                h.width = Math.min(f.width, H._boxDimensions.width)
            }
            var g = $.extend({}, H._boxDimensions);
            if (ui == "outside") {
                p.box = {
                    dimensions: {
                        width: H._boxDimensions.width
                    },
                    position: {
                        left: 0.5 * (H._dimensions.width - H._boxDimensions.width)
                    }
                }
            }
            p.ui = {
                spacer: {
                    dimensions: {
                        width: Math.min(e.width, g.width),
                        height: Math.min(e.height, g.height)
                    }
                },
                padder: {
                    dimensions: o
                },
                wrapper: {
                    dimensions: {
                        width: Math.min(p.wrapper.dimensions.width, g.width - 2 * border),
                        height: Math.min(p.wrapper.dimensions.height, g.height - 2 * border)
                    },
                    margin: {
                        top: p.wrapper.margin.top + border,
                        left: p.wrapper.margin.left + border
                    }
                }
            };
            return p
        },
        updateVars: function() {
            var a = $.extend({}, this._dimensions.max);
            var b = parseInt(this.box_outer_border.css("border-top-width"));
            this._border = b;
            if (b) {
                a.width -= 2 * b;
                a.height -= 2 * b
            }
            var c = this.view.options.fit;
            if (c == "smart") {
                if (a.width > a.height) {
                    c = "height"
                } else {
                    if (a.height > a.width) {
                        c = "width"
                    } else {
                        c = "none"
                    }
                }
            } else {
                if (!c) {
                    c = "none"
                }
            }
            this._fit = c;
            var d = this.view.options.spacing[this._fit];
            this._spacing = d
        },
        clearLoadTimer: function() {
            if (this._loadTimer) {
                clearTimeout(this._loadTimer);
                this._loadTimer = null
            }
        },
        clearLoad: function() {
            if (this._loadTimer && this._loading && !this._loaded) {
                this.clearLoadTimer();
                this._loading = false
            }
        },
        load: function(i) {
            if (this._loaded || this._loading) {
                if (this._loaded) {
                    this.afterLoad(i)
                }
                return
            }
            if (!(I.cache.get(this.view.url) || I.preloaded.getDimensions(this.view.url))) {
                C.loading.start()
            }
            this._loading = true;
            this._loadTimer = setTimeout($.proxy(function() {
                this.clearLoadTimer();
                switch (this.view.type) {
                    case "image":
                        I.get(this.view.url, $.proxy(function(c, d) {
                            this._dimensions._max = c;
                            this._dimensions.max = c;
                            this._loaded = true;
                            this._loading = false;
                            this.updateVars();
                            var e = this.getLayout();
                            this._dimensions.spacer = e.spacer.dimensions;
                            this._dimensions.content = e.content.dimensions;
                            this.content = $("<img>").attr({
                                src: this.view.url
                            });
                            this.box_wrapper.append(this.content.addClass("fr-content fr-content-image"));
                            this.box_wrapper.append($("<div>").addClass("fr-content-image-overlay "));
                            var f;
                            if (this.view.options.ui == "outside" && ((f = this.view.options.onClick) && f == "next" || f == "previous-next")) {
                                if (!this.view.options.loop && this._position != H._frames.length) {
                                    this.box_wrapper.append($("<div>").addClass("fr-onclick-side fr-onclick-next").data("side", "next"))
                                }
                                if (f == "previous-next" && (!this.view.options.loop && this._position != 1)) {
                                    this.box_wrapper.append($("<div>").addClass("fr-onclick-side fr-onclick-previous").data("side", "previous"))
                                }
                                this.frame.delegate(".fr-onclick-side", "click", $.proxy(function(a) {
                                    var b = $(a.target).data("side");
                                    H[b]()
                                }, this));
                                this.frame.delegate(".fr-onclick-side", "mouseenter", $.proxy(function(a) {
                                    var b = $(a.target).data("side"),
                                        button = b && this["_" + b + "_button"];
                                    if (!button) {
                                        return
                                    }
                                    this["_" + b + "_button"].addClass("fr-side-button-active")
                                }, this));
                                this.frame.delegate(".fr-onclick-side", "mouseleave", $.proxy(function(a) {
                                    var b = $(a.target).data("side"),
                                        button = b && this["_" + b + "_button"];
                                    if (!button) {
                                        return
                                    }
                                    this["_" + b + "_button"].removeClass("fr-side-button-active")
                                }, this))
                            }
                            this.afterLoad(i)
                        }, this));
                        break;
                    case "youtube":
                    case "vimeo":
                        var g = {
                            width: this.view.options.width,
                            height: this.view.options.height
                        };
                        if (this.view.type == "youtube" && this.view.options.youtube && this.view.options.youtube.hd) {
                            this.view._data.quality = (g.width > 720) ? "hd1080" : "hd720"
                        }
                        this._dimensions._max = g;
                        this._dimensions.max = g;
                        this._loaded = true;
                        this._loading = false;
                        this.updateVars();
                        var h = this.getLayout();
                        this._dimensions.spacer = h.spacer.dimensions;
                        this._dimensions.content = h.content.dimensions;
                        this.box_wrapper.append(this.content = $("<div>").addClass("fr-content fr-content-" + this.view.type));
                        this.afterLoad(i);
                        break
                }
            }, this), 10)
        },
        afterLoad: function(a) {
            this.resize();
            if (this.view.options.ui == "inside") {
                this.ui_outer_border.bind("mouseenter", $.proxy(this.showUI, this)).bind("mouseleave", $.proxy(this.hideUI, this))
            }
            if (!w.mobileTouch) {
                this.ui.delegate(".fr-ui-padder", "mousemove", $.proxy(function() {
                    if (!this.ui_wrapper.is(":visible")) {
                        this.showUI()
                    }
                    this.startUITimer()
                }, this))
            } else {
                this.box.bind("click", $.proxy(function() {
                    if (!this.ui_wrapper.is(":visible")) {
                        this.showUI()
                    }
                    this.startUITimer()
                }, this))
            }
            var b;
            if (H._frames && (b = H._frames[H._position - 1]) && b.view.url == this.view.url) {
                C.loading.stop()
            }
            if (a) {
                a()
            }
        },
        resize: function() {
            if (this.content) {
                var a = this.getLayout();
                this._dimensions.spacer = a.spacer.dimensions;
                this._dimensions.content = a.content.dimensions;
                this.box_spacer.css(px(a.spacer.dimensions));
                if (this.view.options.ui == "inside") {
                    this.ui_spacer.css(px(a.ui.spacer.dimensions))
                }
                this.box_wrapper.add(this.box_outer_border).css(px(a.wrapper.dimensions));
                var b = 0;
                if (this.view.options.ui == "outside" && a.info.caption) {
                    b = a.info.height
                }
                this.box_outer_border.css({
                    "padding-bottom": b + "px"
                });
                this.box_padder.css(px({
                    width: a.padder.dimensions.width,
                    height: a.padder.dimensions.height + b
                }));
                if (a.spacer.dimensions.width > (this.view.options.ui == "outside" ? a.box.dimensions.width : E.viewport().width)) {
                    this.box.addClass("fr-prevent-swipe")
                } else {
                    this.box.removeClass("fr-prevent-swipe")
                }
                if (this.view.options.ui == "outside") {
                    if (this.caption) {
                        this.info.css(px({
                            width: a.info.width
                        }))
                    }
                } else {
                    this.ui_wrapper.add(this.ui_outer_border).add(this.ui_toggle).css(px(a.ui.wrapper.dimensions));
                    this.ui_padder.css(px(a.ui.padder.dimensions));
                    var c = 0;
                    if (this.caption) {
                        var d = this.frame.hasClass("fr-no-caption"),
                            has_hascap = this.frame.hasClass("fr-has-caption");
                        this.frame.removeClass("fr-no-caption");
                        this.frame.addClass("fr-has-caption");
                        var c = 0;
                        this._whileVisible($.proxy(function() {
                            c = this.info.outerHeight()
                        }, this), this.ui_wrapper.add(this.caption));
                        var e = E.viewport();
                        if (c >= 0.45 * a.wrapper.dimensions.height || ((e.height <= 320 && e.width <= 568) || (e.width <= 320 && e.height <= 568))) {
                            a.info.caption = false
                        }
                        if (d) {
                            this.frame.addClass("fr-no-caption")
                        }
                        if (!has_hascap) {
                            this.frame.removeClass("fr-has-caption")
                        }
                    }
                }
                if (this.caption) {
                    var f = a.info.caption;
                    this.caption[f ? "show" : "hide"]();
                    this.frame[(!f ? "add" : "remove") + "Class"]("fr-no-caption");
                    this.frame[(!f ? "remove" : "add") + "Class"]("fr-has-caption")
                }
                this.box_padder.add(this.ui_padder).css(px(a.wrapper.margin));
                var g = H._boxDimensions,
                    spacer_dimensions = this._dimensions.spacer;
                this.overlap = {
                    y: spacer_dimensions.height - g.height,
                    x: spacer_dimensions.width - g.width
                };
                this._track = this.overlap.x > 0 || this.overlap.y > 0;
                H[(this._track ? "set" : "remove") + "Tracking"](this._position);
                if (r.IE && r.IE < 8 && this.view.type == "image") {
                    this.content.css(px(a.wrapper.dimensions))
                }
                if (/^(vimeo|youtube)$/.test(this.view.type)) {
                    var h = a.wrapper.dimensions;
                    if (this.player) {
                        this.player.setSize(h.width, h.height)
                    } else {
                        if (this.player_iframe) {
                            this.player_iframe.attr(h)
                        }
                    }
                }
            }
            this.position()
        },
        position: function() {
            if (!this.content) {
                return
            }
            var a = H._xyp;
            var b = H._boxDimensions,
                spacer_dimensions = this._dimensions.spacer;
            var c = {
                top: 0,
                left: 0
            };
            var d = this.overlap;
            this.frame.removeClass("fr-frame-touch");
            if (d.x || d.y) {
                if (w.scroll) {
                    this.frame.addClass("fr-frame-touch")
                }
            }
            if (d.y > 0) {
                c.top = 0 - a.y * d.y
            } else {
                c.top = b.height * 0.5 - spacer_dimensions.height * 0.5
            }
            if (d.x > 0) {
                c.left = 0 - a.x * d.x
            } else {
                c.left = b.width * 0.5 - spacer_dimensions.width * 0.5
            }
            if (w.mobileTouch) {
                if (d.y > 0) {
                    c.top = 0
                }
                if (d.x > 0) {
                    c.left = 0
                }
                this.box_spacer.css({
                    position: "relative"
                })
            }
            this._style = c;
            this.box_spacer.css({
                top: c.top + "px",
                left: c.left + "px"
            });
            var e = $.extend({}, c);
            if (e.top < 0) {
                e.top = 0
            }
            if (e.left < 0) {
                e.left = 0
            }
            if (this.view.options.ui == "outside") {
                var f = this.getLayout();
                this.box.css(px(f.box.dimensions)).css(px(f.box.position));
                if (this.view.caption) {
                    var g = c.top + f.wrapper.margin.top + f.wrapper.dimensions.height + this._border;
                    if (g > H._boxDimensions.height - f.info.height) {
                        g = H._boxDimensions.height - f.info.height
                    }
                    var h = H._sideWidth + c.left + f.wrapper.margin.left + this._border;
                    if (h < H._sideWidth) {
                        h = H._sideWidth
                    }
                    if (h + f.info.width > H._sideWidth + f.box.dimensions.width) {
                        h = H._sideWidth
                    }
                    this.info.css({
                        top: g + "px",
                        left: h + "px"
                    })
                }
            } else {
                this.ui_spacer.css({
                    left: e.left + "px",
                    top: e.top + "px"
                })
            }
        },
        setDimensions: function(a) {
            this.dimensions = a
        },
        _preShow: function() {
            switch (this.view.type) {
                case "youtube":
                    var b = r.IE && r.IE < 8,
                        d = this.getLayout(),
                        lwd = d.wrapper.dimensions;
                    if (!!window.YT) {
                        var p;
                        this.content.append(this.player_div = $("<div>").append(p = $("<div>")[0]));
                        this.player = new YT.Player(p, {
                            height: lwd.height,
                            width: lwd.width,
                            videoId: this.view._data.id,
                            playerVars: this.view.options.youtube,
                            events: b ? {} : {
                                onReady: $.proxy(function(a) {
                                    if (this.view.options.youtube.hd) {
                                        try {
                                            a.target.setPlaybackQuality(this.view._data.quality)
                                        } catch (e) {}
                                    }
                                    this.resize()
                                }, this)
                            }
                        })
                    } else {
                        var c = $.param(this.view.options.youtube || {});
                        this.content.append(this.player_iframe = $("<iframe webkitAllowFullScreen mozallowfullscreen allowFullScreen>").attr({
                            src: "http://www.youtube.com/embed/" + this.view._data.id + "?" + c,
                            height: lwd.height,
                            width: lwd.width,
                            frameborder: 0
                        }))
                    }
                    break;
                case "vimeo":
                    var d = this.getLayout(),
                        lwd = d.wrapper.dimensions;
                    var c = $.param(this.view.options.vimeo || {});
                    this.content.append(this.player_iframe = $("<iframe webkitAllowFullScreen mozallowfullscreen allowFullScreen>").attr({
                        src: "http://player.vimeo.com/video/" + this.view._data.id + "?" + c,
                        height: lwd.height,
                        width: lwd.width,
                        frameborder: 0
                    }));
                    break
            }
        },
        show: function(a) {
            var b = r.IE && r.IE < 8;
            this._preShow();
            H.setVisible(this._position);
            this.frame.stop(1, 0);
            this.ui.stop(1, 0);
            this.showUI(null, true);
            if (this._track) {
                H.setTracking(this._position)
            }
            this.setOpacity(1, Math.max(this.view.options.effects.content.show, r.IE && r.IE < 9 ? 0 : 10), $.proxy(function() {
                if (a) {
                    a()
                }
            }, this))
        },
        _postHide: function() {
            if (this.player_iframe) {
                this.player_iframe.remove();
                this.player_iframe = null
            }
            if (this.player) {
                this.player.destroy();
                this.player = null
            }
            if (this.player_div) {
                this.player_div.remove();
                this.player_div = null
            }
        },
        _reset: function() {
            H.removeTracking(this._position);
            H.setHidden(this._position);
            this._postHide()
        },
        hide: function(a) {
            var b = Math.max(this.view.options.effects.content.hide || 0, r.IE && r.IE < 9 ? 0 : 10);
            var c = this.view.options.effects.content.sync ? "easeInQuad" : "easeOutSine";
            this.frame.stop(1, 0).fadeOut(b, c, $.proxy(function() {
                this._reset();
                if (a) {
                    a()
                }
            }, this))
        },
        setOpacity: function(a, b, c) {
            var d = this.view.options.effects.content.sync ? "easeOutQuart" : "easeInSine";
            this.frame.stop(1, 0).fadeTo(b || 0, a, d, c)
        },
        showUI: function(a, b) {
            if (!b) {
                this.ui_wrapper.stop(1, 0).fadeTo(b ? 0 : this.view.options.effects.ui.show, 1, "easeInSine", $.proxy(function() {
                    this.startUITimer();
                    if ($.type(a) == "function") {
                        a()
                    }
                }, this))
            } else {
                this.ui_wrapper.show();
                this.startUITimer();
                if ($.type(a) == "function") {
                    a()
                }
            }
        },
        hideUI: function(a, b) {
            if (this.view.options.ui == "outside") {
                return
            }
            if (!b) {
                this.ui_wrapper.stop(1, 0).fadeOut(b ? 0 : this.view.options.effects.ui.hide, "easeOutSine", function() {
                    if ($.type(a) == "function") {
                        a()
                    }
                })
            } else {
                this.ui_wrapper.hide();
                if ($.type(a) == "function") {
                    a()
                }
            }
        },
        clearUITimer: function() {
            if (this._ui_timer) {
                clearTimeout(this._ui_timer);
                this._ui_timer = null
            }
        },
        startUITimer: function() {
            this.clearUITimer();
            this._ui_timer = setTimeout($.proxy(function() {
                this.hideUI()
            }, this), this.view.options.effects.ui.delay)
        },
        hideUIDelayed: function() {
            this.clearUITimer();
            this._ui_timer = setTimeout($.proxy(function() {
                this.hideUI()
            }, this), this.view.options.effects.ui.delay)
        }
    });

    function Timeouts() {
        this.initialize.apply(this, q.call(arguments))
    }
    $.extend(Timeouts.prototype, {
        initialize: function() {
            this._timeouts = {};
            this._count = 0
        },
        set: function(a, b, c) {
            if ($.type(a) == "string") {
                this.clear(a)
            }
            if ($.type(a) == "function") {
                c = b;
                b = a;
                while (this._timeouts["timeout_" + this._count]) {
                    this._count++
                }
                a = "timeout_" + this._count
            }
            this._timeouts[a] = window.setTimeout($.proxy(function() {
                if (b) {
                    b()
                }
                this._timeouts[a] = null;
                delete this._timeouts[a]
            }, this), c)
        },
        get: function(a) {
            return this._timeouts[a]
        },
        clear: function(b) {
            if (!b) {
                $.each(this._timeouts, $.proxy(function(i, a) {
                    window.clearTimeout(a);
                    this._timeouts[i] = null;
                    delete this._timeouts[i]
                }, this));
                this._timeouts = {}
            }
            if (this._timeouts[b]) {
                window.clearTimeout(this._timeouts[b]);
                this._timeouts[b] = null;
                delete this._timeouts[b]
            }
        }
    });

    function States() {
        this.initialize.apply(this, q.call(arguments))
    }
    $.extend(States.prototype, {
        initialize: function() {
            this._states = {}
        },
        set: function(a, b) {
            this._states[a] = b
        },
        get: function(a) {
            return this._states[a] || false
        }
    });

    function View() {
        this.initialize.apply(this, q.call(arguments))
    }
    $.extend(View.prototype, {
        initialize: function(a) {
            var b = arguments[1] || {};
            var c = {};
            if ($.type(a) == "string") {
                a = {
                    url: a
                }
            } else {
                if (a && a.nodeType == 1) {
                    var d = $(a);
                    a = {
                        element: d[0],
                        url: d.attr("href"),
                        caption: d.data("fresco-caption"),
                        group: d.data("fresco-group"),
                        extension: d.data("fresco-extension"),
                        type: d.data("fresco-type"),
                        options: (d.data("fresco-options") && eval("({" + d.data("fresco-options") + "})")) || {}
                    }
                }
            }
            if (a) {
                if (!a.extension) {
                    a.extension = detectExtension(a.url)
                }
                if (!a.type) {
                    var c = getURIData(a.url);
                    a._data = c;
                    a.type = c.type
                }
            }
            if (!a._data) {
                a._data = getURIData(a.url)
            }
            if (a && a.options) {
                a.options = $.extend(true, $.extend({}, b), $.extend({}, a.options))
            } else {
                a.options = $.extend({}, b)
            }
            a.options = B.create(a.options, a.type, a._data);
            $.extend(this, a);
            return this
        }
    });
    var I = {
        get: function(a, b, c) {
            if ($.type(b) == "function") {
                c = b;
                b = {}
            }
            b = $.extend({
                track: true,
                type: false,
                lifetime: 1000 * 60 * 5
            }, b || {});
            var d = I.cache.get(a),
                type = b.type || getURIData(a).type,
                data = {
                    type: type,
                    callback: c
                };
            if (!d && type == "image") {
                var e;
                if ((e = I.preloaded.get(a)) && e.dimensions) {
                    d = e;
                    I.cache.set(a, e.dimensions, e.data)
                }
            }
            if (!d) {
                if (b.track) {
                    I.loading.clear(a)
                }
                switch (type) {
                    case "image":
                        var f = new Image();
                        f.onload = function() {
                            f.onload = function() {};
                            d = {
                                dimensions: {
                                    width: f.width,
                                    height: f.height
                                }
                            };
                            data.image = f;
                            I.cache.set(a, d.dimensions, data);
                            if (b.track) {
                                I.loading.clear(a)
                            }
                            if (c) {
                                c(d.dimensions, data)
                            }
                        };
                        f.src = a;
                        if (b.track) {
                            I.loading.set(a, {
                                image: f,
                                type: type
                            })
                        }
                        break
                }
            } else {
                if (c) {
                    c($.extend({}, d.dimensions), d.data)
                }
            }
        }
    };
    I.Cache = function() {
        return this.initialize.apply(this, q.call(arguments))
    };
    $.extend(I.Cache.prototype, {
        initialize: function() {
            this.cache = []
        },
        get: function(a) {
            var b = null;
            for (var i = 0; i < this.cache.length; i++) {
                if (this.cache[i] && this.cache[i].url == a) {
                    b = this.cache[i]
                }
            }
            return b
        },
        set: function(a, b, c) {
            this.remove(a);
            this.cache.push({
                url: a,
                dimensions: b,
                data: c
            })
        },
        remove: function(a) {
            for (var i = 0; i < this.cache.length; i++) {
                if (this.cache[i] && this.cache[i].url == a) {
                    delete this.cache[i]
                }
            }
        },
        inject: function(a) {
            var b = get(a.url);
            if (b) {
                $.extend(b, a)
            } else {
                this.cache.push(a)
            }
        }
    });
    I.cache = new I.Cache();
    I.Loading = function() {
        return this.initialize.apply(this, q.call(arguments))
    };
    $.extend(I.Loading.prototype, {
        initialize: function() {
            this.cache = []
        },
        set: function(a, b) {
            this.clear(a);
            this.cache.push({
                url: a,
                data: b
            })
        },
        get: function(a) {
            var b = null;
            for (var i = 0; i < this.cache.length; i++) {
                if (this.cache[i] && this.cache[i].url == a) {
                    b = this.cache[i]
                }
            }
            return b
        },
        clear: function(a) {
            var b = this.cache;
            for (var i = 0; i < b.length; i++) {
                if (b[i] && b[i].url == a && b[i].data) {
                    var c = b[i].data;
                    switch (c.type) {
                        case "image":
                            if (c.image && c.image.onload) {
                                c.image.onload = function() {}
                            }
                            break
                    }
                    delete b[i]
                }
            }
        }
    });
    I.loading = new I.Loading();
    I.preload = function(a, b, c) {
        if ($.type(b) == "function") {
            c = b;
            b = {}
        }
        b = $.extend({
            once: false
        }, b || {});
        if (b.once && I.preloaded.get(a)) {
            return
        }
        var d;
        if ((d = I.preloaded.get(a)) && d.dimensions) {
            if ($.type(c) == "function") {
                c($.extend({}, d.dimensions), d.data)
            }
            return
        }
        var e = {
                url: a,
                data: {
                    type: "image"
                }
            },
            image = new Image();
        e.data.image = image;
        image.onload = function() {
            image.onload = function() {};
            e.dimensions = {
                width: image.width,
                height: image.height
            };
            if ($.type(c) == "function") {
                c(e.dimensions, e.data)
            }
        };
        I.preloaded.cache.add(e);
        image.src = a
    };
    I.preloaded = {
        get: function(a) {
            return I.preloaded.cache.get(a)
        },
        getDimensions: function(a) {
            var b = this.get(a);
            return b && b.dimensions
        }
    };
    I.preloaded.cache = (function() {
        var c = [];

        function get(a) {
            var b = null;
            for (var i = 0, l = c.length; i < l; i++) {
                if (c[i] && c[i].url && c[i].url == a) {
                    b = c[i]
                }
            }
            return b
        }

        function add(a) {
            c.push(a)
        }
        return {
            get: get,
            add: add
        }
    })();
    var J = {
        initialize: function(a) {
            this.element = a;
            this._thumbnails = [];
            this._vars = {
                thumbnail: {
                    height: 0,
                    outerWidth: 0
                },
                thumbnails: {
                    height: 0

                }
            };
            this.thumbnails = this.element.find(".fr-thumbnails:first");
            this.build();
            this.hide();
            this.startObserving()
        },
        build: function() {
            this.thumbnails.append(this.wrapper = $("<div>").addClass("fr-thumbnails-wrapper").append(this.slider = $("<div>").addClass("fr-thumbnails-slider").append(this._previous = $("<div>").addClass("fr-thumbnails-side fr-thumbnails-side-previous").append(this._previous_button = $("<div>").addClass("fr-thumbnails-side-button").append($("<div>").addClass("fr-thumbnails-side-button-background")).append($("<div>").addClass("fr-thumbnails-side-button-icon")))).append(this._thumbs = $("<div>").addClass("fr-thumbnails-thumbs").append(this.slide = $("<div>").addClass("fr-thumbnails-slide"))).append(this._next = $("<div>").addClass("fr-thumbnails-side fr-thumbnails-side-next").append(this._next_button = $("<div>").addClass("fr-thumbnails-side-button").append($("<div>").addClass("fr-thumbnails-side-button-background")).append($("<div>").addClass("fr-thumbnails-side-button-icon"))))));
            this.resize()
        },
        startObserving: function() {
            this.slider.delegate(".fr-thumbnail", "click", $.proxy(function(b) {
                b.stopPropagation();
                var c = $(b.target).closest(".fr-thumbnail")[0];
                var d = -1;
                this.slider.find(".fr-thumbnail").each(function(i, a) {
                    if (a == c) {
                        d = i + 1
                    }
                });
                if (d) {
                    this.setActive(d);
                    C.setPosition(d)
                }
            }, this));
            this.slider.bind("click", function(a) {
                a.stopPropagation()
            });
            this._previous.bind("click", $.proxy(this.previousPage, this));
            this._next.bind("click", $.proxy(this.nextPage, this));
            if (w.mobileTouch) {
                A(this.wrapper, $.proxy(function(a) {
                    this[(a == "left" ? "next" : "previous") + "Page"]()
                }, this), false)
            }
        },
        load: function(b) {
            this.clear();
            this._thumbnails = [];
            $.each(b, $.proxy(function(i, a) {
                this._thumbnails.push(new Thumbnail(this.slide, a, i + 1))
            }, this));
            if (!(r.IE && r.IE < 7)) {
                this.resize()
            }
        },
        clear: function() {
            $.each(this._thumbnails, function(i, a) {
                a.remove()
            });
            this._thumbnails = [];
            this._position = -1;
            this._page = -1
        },
        updateVars: function() {
            var a = C.element,
                bubble = C.bubble,
                vars = this._vars;
            var b = a.is(":visible");
            if (!b) {
                a.show()
            }
            var c = bubble.is(":visible");
            if (!c) {
                bubble.show()
            }
            var d = this.thumbnails.innerHeight() - (parseInt(this.thumbnails.css("padding-top")) || 0) - (parseInt(this.thumbnails.css("padding-bottom")) || 0);
            vars.thumbnail.height = d;
            var e = this.slide.find(".fr-thumbnail:first"),
                hasThumbnail = !!e[0],
                margin = 0;
            if (!hasThumbnail) {
                this._thumbs.append(e = $("<div>").addClass("fr-thumbnail").append($("<div>").addClass("fr-thumbnail-wrapper")))
            }
            margin = parseInt(e.css("margin-left"));
            if (!hasThumbnail) {
                e.remove()
            }
            vars.thumbnail.outerWidth = d + (margin * 2);
            vars.thumbnails.height = this.thumbnails.innerHeight();
            vars.sides = {
                previous: this._previous.outerWidth(true),
                next: this._next.outerWidth(true)
            };
            var f = E.viewport().width,
                tw = vars.thumbnail.outerWidth,
                thumbs = this._thumbnails.length;
            vars.sides.enabled = (thumbs * tw) / f > 1;
            var g = f,
                sides_width = vars.sides.previous + vars.sides.next;
            if (vars.sides.enabled) {
                g -= sides_width
            }
            g = Math.floor(g / tw) * tw;
            var h = thumbs * tw;
            if (h < g) {
                g = h
            }
            var i = g + (vars.sides.enabled ? sides_width : 0);
            vars.ipp = g / tw;
            this._mode = "page";
            if (vars.ipp <= 1) {
                g = f;
                i = f;
                vars.sides.enabled = false;
                this._mode = "center"
            }
            vars.pages = Math.ceil((thumbs * tw) / g);
            vars.thumbnails.width = g;
            vars.wrapper = {
                width: i
            };
            if (!c) {
                bubble.hide()
            }
            if (!b) {
                a.hide()
            }
        },
        disable: function() {
            this._disabled = true
        },
        enable: function() {
            this._disabled = false
        },
        enabled: function() {
            return !this._disabled
        },
        show: function() {
            if (this._thumbnails.length < 2) {
                return
            }
            this.enable();
            this.thumbnails.show();
            this._visible = true
        },
        hide: function() {
            this.disable();
            this.thumbnails.hide();
            this._visible = false
        },
        visible: function() {
            return !!this._visible
        },
        resize: function() {
            this.updateVars();
            var b = this._vars;
            $.each(this._thumbnails, function(i, a) {
                a.resize()
            });
            this._previous[b.sides.enabled ? "show" : "hide"]();
            this._next[b.sides.enabled ? "show" : "hide"]();
            var c = b.thumbnails.width;
            if (r.IE && r.IE < 9) {
                C.timeouts.clear("ie-resizing-thumbnails");
                C.timeouts.set("ie-resizing-thumbnails", $.proxy(function() {
                    this.updateVars();
                    var a = b.thumbnails.width;
                    this._thumbs.css({
                        width: a + "px"
                    });
                    this.slide.css({
                        width: ((this._thumbnails.length * b.thumbnail.outerWidth) + 1) + "px"
                    })
                }, this), 500)
            }
            this._thumbs.css({
                width: c + "px"
            });
            this.slide.css({
                width: ((this._thumbnails.length * b.thumbnail.outerWidth) + 1) + "px"
            });
            var d = b.wrapper.width + 1;
            this.wrapper.css({
                width: d + "px",
                "margin-left": -0.5 * d + "px"
            });
            this._previous.add(this._next).css({
                height: b.thumbnail.height + "px"
            });
            if (this._position) {
                this.moveTo(this._position, true)
            }
            if (r.IE && r.IE < 9) {
                var e = C.element,
                    bubble = C.bubble;
                var f = e.is(":visible");
                if (!f) {
                    e.show()
                }
                var g = bubble.is(":visible");
                if (!g) {
                    bubble.show()
                }
                this._thumbs.height("100%");
                this._thumbs.css({
                    height: this._thumbs.innerHeight() + "px"
                });
                this.thumbnails.find(".fr-thumbnail-overlay-border").hide();
                if (!g) {
                    bubble.hide()
                }
                if (!f) {
                    e.hide()
                }
            }
        },
        moveToPage: function(a) {
            if (a < 1 || a > this._vars.pages || a == this._page) {
                return
            }
            var b = this._vars.ipp * (a - 1) + 1;
            this.moveTo(b)
        },
        previousPage: function() {
            this.moveToPage(this._page - 1)
        },
        nextPage: function() {
            this.moveToPage(this._page + 1)
        },
        adjustToViewport: function() {
            var a = E.viewport();
            return a
        },
        setPosition: function(a) {
            if (r.IE && r.IE < 7) {
                return
            }
            var b = this._position < 0;
            if (a < 1) {
                a = 1
            }
            var c = this._thumbnails.length;
            if (a > c) {
                a = c
            }
            this._position = a;
            this.setActive(a);
            if (this._mode == "page" && this._page == Math.ceil(a / this._vars.ipp)) {
                return
            }
            this.moveTo(a, b)
        },
        moveTo: function(a, b) {
            this.updateVars();
            var c;
            var d = E.viewport().width,
                vp_center = d * 0.5,
                t_width = this._vars.thumbnail.outerWidth;
            if (this._mode == "page") {
                var e = Math.ceil(a / this._vars.ipp);
                this._page = e;
                c = -1 * (t_width * (this._page - 1) * this._vars.ipp);
                var f = "fr-thumbnails-side-button-disabled";
                this._previous_button[(e < 2 ? "add" : "remove") + "Class"](f);
                this._next_button[(e >= this._vars.pages ? "add" : "remove") + "Class"](f)
            } else {
                c = vp_center + (-1 * (t_width * (a - 1) + t_width * 0.5))
            }
            var g = H._frames && H._frames[H._position - 1];
            this.slide.stop(1, 0).animate({
                left: c + "px"
            }, b ? 0 : (g ? g.view.options.effects.thumbnails.slide : 0), $.proxy(function() {
                this.loadCurrentPage()
            }, this))
        },
        loadCurrentPage: function() {
            var a, max;
            if (!this._position || !this._vars.thumbnail.outerWidth || this._thumbnails.length < 1) {
                return
            }
            if (this._mode == "page") {
                if (this._page < 1) {
                    return
                }
                a = (this._page - 1) * this._vars.ipp + 1;
                max = Math.min((a - 1) + this._vars.ipp, this._thumbnails.length)
            } else {
                var b = Math.ceil(E.viewport().width / this._vars.thumbnail.outerWidth);
                a = Math.max(Math.floor(Math.max(this._position - b * 0.5, 0)), 1);
                max = Math.ceil(Math.min(this._position + b * 0.5));
                if (this._thumbnails.length < max) {
                    max = this._thumbnails.length
                }
            }
            for (var i = a; i <= max; i++) {
                this._thumbnails[i - 1].load()
            }
        },
        setActive: function(b) {
            $.each(this._thumbnails, function(i, a) {
                a.deactivate()
            });
            var c = b && this._thumbnails[b - 1];
            if (c) {
                c.activate()
            }
        },
        refresh: function() {
            if (this._position) {
                this.setPosition(this._position)
            }
        }
    };

    function Thumbnail() {
        this.initialize.apply(this, q.call(arguments))
    }
    $.extend(Thumbnail.prototype, {
        initialize: function(a, b, c) {
            this.element = a;
            this.view = b;
            this._dimension = {};
            this._position = c;
            this.build()
        },
        build: function() {
            var a = this.view.options;
            this.element.append(this.thumbnail = $("<div>").addClass("fr-thumbnail").append(this.thumbnail_wrapper = $("<div>").addClass("fr-thumbnail-wrapper")));
            if (this.view.type == "image") {
                this.thumbnail.addClass("fr-load-thumbnail").data("thumbnail", {
                    view: this.view,
                    src: a.thumbnail || this.view.url
                })
            }
            var b = a.thumbnail && a.thumbnail.icon;
            if (b) {
                this.thumbnail.append($("<div>").addClass("fr-thumbnail-icon fr-thumbnail-icon-" + b))
            }
            var c;
            this.thumbnail.append(c = $("<div>").addClass("fr-thumbnail-overlay").append($("<div>").addClass("fr-thumbnail-overlay-background")).append(this.loading = $("<div>").addClass("fr-thumbnail-loading").append($("<div>").addClass("fr-thumbnail-loading-background")).append($("<div>").addClass("fr-thumbnail-loading-icon"))).append($("<div>").addClass("fr-thumbnail-overlay-border")));
            this.thumbnail.append($("<div>").addClass("fr-thumbnail-state"))
        },
        remove: function() {
            this.thumbnail.remove();
            this.thumbnail = null;
            this.thumbnail_image = null
        },
        load: function() {
            if (this._loaded || this._loading || !J.visible()) {
                return
            }
            this._loading = true;
            var b = this.view.options.thumbnail;
            var c = (b && $.type(b) == "boolean") ? this.view.url : b || this.view.url;
            this._url = c;
            if (c) {
                if (this.view.type == "vimeo") {
                    $.getJSON("http://vimeo.com/api/v2/video/" + this.view._data.id + ".json?callback=?", $.proxy(function(a) {
                        if (a && a[0] && a[0].thumbnail_medium) {
                            this._url = a[0].thumbnail_medium;
                            I.preload(this._url, {
                                type: "image"
                            }, $.proxy(this._afterLoad, this))
                        } else {
                            this._loaded = true;
                            this._loading = false;
                            this.loading.stop(1, 0).delay(this.view.options.effects.thumbnails.delay).fadeTo(this.view.options.effects.thumbnails.load, 0)
                        }
                    }, this))
                } else {
                    I.preload(this._url, {
                        type: "image"
                    }, $.proxy(this._afterLoad, this))
                }
            }
        },
        _afterLoad: function(a, b) {
            if (!this.thumbnail) {
                return
            }
            this._loaded = true;
            this._loading = false;
            this._dimensions = a;
            this.image = $("<img>").attr({
                src: this._url
            });
            this.thumbnail_wrapper.prepend(this.image);
            this.resize();
            this.loading.stop(1, 0).delay(this.view.options.effects.thumbnails.delay).fadeTo(this.view.options.effects.thumbnails.load, 0)
        },
        resize: function() {
            var a = J._vars.thumbnail.height;
            this.thumbnail.css({
                width: a + "px",
                height: a + "px"
            });
            if (!this.image) {
                return
            }
            var b = {
                width: a,
                height: a
            };
            var c = Math.max(b.width, b.height);
            var d;
            var e = $.extend({}, this._dimensions);
            if (e.width > b.width && e.height > b.height) {
                d = F.within(e, {
                    bounds: b
                });
                var f = 1,
                    scaleY = 1;
                if (d.width < b.width) {
                    f = b.width / d.width
                }
                if (d.height < b.height) {
                    scaleY = b.height / d.height
                }
                var g = Math.max(f, scaleY);
                if (g > 1) {
                    d.width *= g;
                    d.height *= g
                }
                $.each("width height".split(" "), function(i, z) {
                    d[z] = Math.round(d[z])
                })
            } else {
                d = F.within((e.width < b.width || e.height < b.height) ? {
                    width: c,
                    height: c
                } : b, {
                    bounds: this._dimensions
                })
            }
            var x = Math.round(b.width * 0.5 - d.width * 0.5),
                y = Math.round(b.height * 0.5 - d.height * 0.5);
            this.image.css(px(d)).css(px({
                top: y,
                left: x
            }))
        },
        activate: function() {
            this.thumbnail.addClass("fr-thumbnail-active")
        },
        deactivate: function() {
            this.thumbnail.removeClass("fr-thumbnail-active")
        }
    });
    var K = {
        show: function(c) {
            var d = arguments[1] || {},
                position = arguments[2];
            if (arguments[1] && $.type(arguments[1]) == "number") {
                position = arguments[1];
                d = B.create({})
            }
            var e = [],
                object_type;
            switch ((object_type = $.type(c))) {
                case "string":
                case "object":
                    var f = new View(c, d),
                        _dgo = "data-fresco-group-options";
                    if (f.group) {
                        if (_.isElement(c)) {
                            var g = $('.fresco[data-fresco-group="' + $(c).data("fresco-group") + '"]');
                            var h = {};
                            g.filter("[" + _dgo + "]").each(function(i, a) {
                                $.extend(h, eval("({" + ($(a).attr(_dgo) || "") + "})"))
                            });
                            g.each(function(i, a) {
                                if (!position && a == c) {
                                    position = i + 1
                                }
                                e.push(new View(a, $.extend({}, h, d)))
                            })
                        }
                    } else {
                        var h = {};
                        if (_.isElement(c) && $(c).is("[" + _dgo + "]")) {
                            $.extend(h, eval("({" + ($(c).attr(_dgo) || "") + "})"));
                            f = new View(c, $.extend({}, h, d))
                        }
                        e.push(f)
                    }
                    break;
                case "array":
                    $.each(c, function(i, a) {
                        var b = new View(a, d);
                        e.push(b)
                    });
                    break
            }
            if (!position || position < 1) {
                position = 1
            }
            if (position > e.length) {
                position = e.length
            }
            if (!H._xyp) {
                H.setXY({
                    x: 0,
                    y: 0
                })
            }
            C.load(e, position, {
                callback: function() {
                    C.show(function() {})
                }
            })
        }
    };
    $.extend(Fresco, {
        initialize: function() {
            u.check("jQuery");
            C.initialize()
        },
        show: function(a) {
            K.show.apply(K, q.call(arguments))
        },
        hide: function() {
            C.hide()
        },
        setDefaultSkin: function(a) {
            C.setDefaultSkin(a)
        }
    });


    /*
    var L = document.domain,
        _t_dreg = ")moc.\\grubnekatskcin|moc.\\sjocserf(".split("").reverse().join("");
        
        console.log(_t_dreg)
        console.log($.type(L))
        console.log(new RegExp(_t_dreg).test(L))
        
    if ($.type(L) == "string" && !new RegExp(_t_dreg).test(L)) {

        $.each("initialize show hide load".split(" "), function (i, m) {
            C[m] = K[m] = function () {
                return this
            }
        })
    }

    */

    function getURIData(c) {
        var d = {
            type: "image"
        };
        $.each(M, function(i, a) {
            var b = a.data(c);
            if (b) {
                d = b;
                d.type = i;
                d.url = c
            }
        });
        return d
    }

    function detectExtension(a) {
        var b = (a || "").replace(/\?.*/g, "").match(/\.([^.]{3,4})$/);
        return b ? b[1].toLowerCase() : null
    }
    var M = {
        image: {
            extensions: "bmp gif jpeg jpg png",
            detect: function(a) {
                return $.inArray(detectExtension(a), this.extensions.split(" ")) > -1
            },
            data: function(a) {
                if (!this.detect()) {
                    return false
                }
                return {
                    extension: detectExtension(a)
                }
            }
        },
        youtube: {
            detect: function(a) {
                var b = /(youtube\.com|youtu\.be)\/watch\?(?=.*vi?=([a-zA-Z0-9-_]+))(?:\S+)?$/.exec(a);
                if (b && b[2]) {
                    return b[2]
                }
                b = /(youtube\.com|youtu\.be)\/(vi?\/|u\/|embed\/)?([a-zA-Z0-9-_]+)(?:\S+)?$/i.exec(a);
                if (b && b[3]) {
                    return b[3]
                }
                return false
            },
            data: function(a) {
                var b = this.detect(a);
                if (!b) {
                    return false
                }
                return {
                    id: b
                }
            }
        },
        vimeo: {
            detect: function(a) {
                var b = /(vimeo\.com)\/([a-zA-Z0-9-_]+)(?:\S+)?$/i.exec(a);
                if (b && b[2]) {
                    return b[2]
                }
                return false
            },
            data: function(a) {
                var b = this.detect(a);
                if (!b) {
                    return false
                }
                return {
                    id: b
                }
            }
        }
    };
    if (r.Android && r.Android < 3) {
        $.each(C, function(a, b) {
            if ($.type(b) == "function") {
                C[a] = function() {
                    return this
                }
            }
        });
        Fresco.show = (function() {
            function getUrl(a) {
                var b, type = $.type(a);
                if (type == "string") {
                    b = a
                } else {
                    if (type == "array" && a[0]) {
                        b = getUrl(a[0])
                    } else {
                        if (_.isElement(a) && $(a).attr("href")) {
                            var b = $(a).attr("href")
                        } else {
                            if (a.url) {
                                b = a.url
                            } else {
                                b = false
                            }
                        }
                    }
                }
                return b
            }
            return function(a) {
                var b = getUrl(a);
                if (b) {
                    window.location.href = b
                }
            }
        })()
    }
    window.Fresco = Fresco;
    $(document).ready(function() {
        Fresco.initialize()
    })
})(jQuery);;


// end FRESCO




// ==================================================================================   TOUCHSWIPE


/*
 * touchSwipe - jQuery Plugin
 * https://github.com/mattbryson/TouchSwipe-Jquery-Plugin
 * http://labs.skinkers.com/touchSwipe/
 * http://plugins.jquery.com/project/touchSwipe
 *
 * Copyright (c) 2010 Matt Bryson (www.skinkers.com)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * $version: 1.3.3
 */

(function(g) {
    function P(c) {
        if (c && void 0 === c.allowPageScroll && (void 0 !== c.swipe || void 0 !== c.swipeStatus)) c.allowPageScroll = G;
        c || (c = {});
        c = g.extend({}, g.fn.swipe.defaults, c);
        return this.each(function() {
            var b = g(this),
                f = b.data(w);
            f || (f = new W(this, c), b.data(w, f))
        })
    }

    function W(c, b) {
        var f, p, r, s;

        function H(a) {
            var a = a.originalEvent,
                c, Q = n ? a.touches[0] : a;
            d = R;
            n ? h = a.touches.length : a.preventDefault();
            i = 0;
            j = null;
            k = 0;
            !n || h === b.fingers || b.fingers === x ? (r = f = Q.pageX, s = p = Q.pageY, y = (new Date).getTime(), b.swipeStatus && (c = l(a, d))) : t(a);
            if (!1 === c) return d = m, l(a, d), c;
            e.bind(I, J);
            e.bind(K, L)
        }

        function J(a) {
            a = a.originalEvent;
            if (!(d === q || d === m)) {
                var c, e = n ? a.touches[0] : a;
                f = e.pageX;
                p = e.pageY;
                u = (new Date).getTime();
                j = S();
                n && (h = a.touches.length);
                d = z;
                var e = a,
                    g = j;
                if (b.allowPageScroll === G) e.preventDefault();
                else {
                    var o = b.allowPageScroll === T;
                    switch (g) {
                        case v:
                            (b.swipeLeft && o || !o && b.allowPageScroll != M) && e.preventDefault();
                            break;
                        case A:
                            (b.swipeRight && o || !o && b.allowPageScroll != M) && e.preventDefault();
                            break;
                        case B:
                            (b.swipeUp && o || !o && b.allowPageScroll != N) && e.preventDefault();
                            break;
                        case C:
                            (b.swipeDown && o || !o && b.allowPageScroll != N) && e.preventDefault()
                    }
                }
                h === b.fingers || b.fingers === x || !n ? (i = U(), k = u - y, b.swipeStatus && (c = l(a, d, j, i, k)), b.triggerOnTouchEnd || (e = !(b.maxTimeThreshold ? !(k >= b.maxTimeThreshold) : 1), !0 === D() ? (d = q, c = l(a, d)) : e && (d = m, l(a, d)))) : (d = m, l(a, d));
                !1 === c && (d = m, l(a, d))
            }
        }

        function L(a) {
            a = a.originalEvent;
            a.preventDefault();
            u = (new Date).getTime();
            i = U();
            j = S();
            k = u - y;
            if (b.triggerOnTouchEnd || !1 === b.triggerOnTouchEnd && d === z)
                if (d = q, (h === b.fingers || b.fingers === x || !n) && 0 !== f) {
                    var c = !(b.maxTimeThreshold ? !(k >= b.maxTimeThreshold) : 1);
                    if ((!0 === D() || null === D()) && !c) l(a, d);
                    else if (c || !1 === D()) d = m, l(a, d)
                } else d = m, l(a, d);
            else d === z && (d = m, l(a, d));
            e.unbind(I, J, !1);
            e.unbind(K, L, !1)
        }

        function t() {
            y = u = p = f = s = r = h = 0
        }

        function l(a, c) {
            var d = void 0;
            b.swipeStatus && (d = b.swipeStatus.call(e, a, c, j || null, i || 0, k || 0, h));
            if (c === m && b.click && (1 === h || !n) && (isNaN(i) || 0 === i)) d = b.click.call(e, a, a.target);
            if (c == q) switch (b.swipe && (d = b.swipe.call(e, a, j, i, k, h)), j) {
                case v:
                    b.swipeLeft && (d = b.swipeLeft.call(e, a, j, i, k, h));
                    break;
                case A:
                    b.swipeRight && (d = b.swipeRight.call(e, a, j, i, k, h));
                    break;
                case B:
                    b.swipeUp && (d = b.swipeUp.call(e, a, j, i, k, h));
                    break;
                case C:
                    b.swipeDown && (d = b.swipeDown.call(e, a, j, i, k, h))
            }(c === m || c === q) && t(a);
            return d
        }

        function D() {
            return null !== b.threshold ? i >= b.threshold : null
        }

        function U() {
            return Math.round(Math.sqrt(Math.pow(f - r, 2) + Math.pow(p - s, 2)))
        }

        function S() {
            var a;
            a = Math.atan2(p - s, r - f);
            a = Math.round(180 * a / Math.PI);
            0 > a && (a = 360 - Math.abs(a));
            return 45 >= a && 0 <= a ? v : 360 >= a && 315 <= a ? v : 135 <= a && 225 >= a ? A : 45 < a && 135 > a ? C : B
        }

        function V() {
            e.unbind(E, H);
            e.unbind(F, t);
            e.unbind(I, J);
            e.unbind(K, L)
        }
        var O = n || !b.fallbackToMouseEvents,
            E = O ? "touchstart" : "mousedown",
            I = O ? "touchmove" : "mousemove",
            K = O ? "touchend" : "mouseup",
            F = "touchcancel",
            i = 0,
            j = null,
            k = 0,
            e = g(c),
            d = "start",
            h = 0,
            y = p = f = s = r = 0,
            u = 0;
        try {
            e.bind(E, H), e.bind(F, t)
        } catch (P) {
            g.error("events not supported " + E + "," + F + " on jQuery.swipe")
        }
        this.enable = function() {
            e.bind(E, H);
            e.bind(F, t);
            return e
        };
        this.disable = function() {
            V();
            return e
        };
        this.destroy = function() {
            V();
            e.data(w, null);
            return e
        }
    }
    var v = "left",
        A = "right",
        B = "up",
        C = "down",
        G = "none",
        T = "auto",
        M = "horizontal",
        N = "vertical",
        x = "all",
        R = "start",
        z = "move",
        q = "end",
        m = "cancel",
        n = "ontouchstart" in window,
        w = "TouchSwipe";
    g.fn.swipe = function(c) {
        var b = g(this),
            f = b.data(w);
        if (f && "string" === typeof c) {
            if (f[c]) return f[c].apply(this, Array.prototype.slice.call(arguments, 1));
            g.error("Method " + c + " does not exist on jQuery.swipe")
        } else if (!f && ("object" === typeof c || !c)) return P.apply(this, arguments);
        return b
    };
    g.fn.swipe.defaults = {
        fingers: 1,
        threshold: 75,
        maxTimeThreshold: null,
        swipe: null,
        swipeLeft: null,
        swipeRight: null,
        swipeUp: null,
        swipeDown: null,
        swipeStatus: null,
        click: null,
        triggerOnTouchEnd: !0,
        allowPageScroll: "auto",
        fallbackToMouseEvents: !0
    };
    g.fn.swipe.phases = {
        PHASE_START: R,
        PHASE_MOVE: z,
        PHASE_END: q,
        PHASE_CANCEL: m
    };
    g.fn.swipe.directions = {
        LEFT: v,
        RIGHT: A,
        UP: B,
        DOWN: C
    };
    g.fn.swipe.pageScroll = {
        NONE: G,
        HORIZONTAL: M,
        VERTICAL: N,
        AUTO: T
    };
    g.fn.swipe.fingers = {
        ONE: 1,
        TWO: 2,
        THREE: 3,
        ALL: x
    }
})(jQuery);


// end TOUCHSWIPE






// ==================================================================================   SELECTBOX


/*
 * jQuery selectBox - A cosmetic, styleable replacement for SELECT elements
 *
 * Licensed under the MIT license: http://opensource.org/licenses/MIT
 *
 * v1.2.0
 *
 * https://github.com/marcj/jquery-selectBox
 */
;
(function($) {

    /**
     * SelectBox class.
     *
     * @param {HTMLElement|jQuery} select If it's a jQuery object, we use the first element.
     * @param {Object}             options
     * @constructor
     */
    var SelectBox = this.SelectBox = function(select, options) {
        if (select instanceof jQuery) {
            if (select.length > 0) {
                select = select[0];
            } else {
                return;
            }
        }

        this.typeTimer = null;
        this.typeSearch = '';
        this.isMac = navigator.platform.match(/mac/i);
        options = 'object' === typeof options ? options : {};
        this.selectElement = select;

        // Disable for iOS devices (their native controls are more suitable for a touch device)
        if (!options.mobile && navigator.userAgent.match(/iPad|iPhone|Android|IEMobile|BlackBerry/i)) {
            return false;
        }

        // Element must be a select control
        if ('select' !== select.tagName.toLowerCase()) {
            return false;
        }

        this.init(options);
    };

    /**
     * @type {String}
     */
    SelectBox.prototype.version = '1.2.0';

    /**
     * @param {Object} options
     *
     * @returns {Boolean}
     */
    SelectBox.prototype.init = function(options) {
        var select = $(this.selectElement);
        if (select.data('selectBox-control')) {
            return false;
        }

        var control = $('<a class="selectBox" />'),
            inline = select.attr('multiple') || parseInt(select.attr('size')) > 1,
            settings = options || {},
            tabIndex = parseInt(select.prop('tabindex')) || 0,
            self = this;

        control
            .width(select.outerWidth())
            .addClass(select.attr('class'))
            .attr('title', select.attr('title') || '')
            .attr('tabindex', tabIndex)
            .css('display', 'inline-block')
            .bind('focus.selectBox', function() {
                if (this !== document.activeElement && document.body !== document.activeElement) {
                    $(document.activeElement).blur();
                }
                if (control.hasClass('selectBox-active')) {
                    return;
                }
                control.addClass('selectBox-active');
                select.trigger('focus');
            })
            .bind('blur.selectBox', function() {
                if (!control.hasClass('selectBox-active')) {
                    return;
                }
                control.removeClass('selectBox-active');
                select.trigger('blur');
            });

        if (!$(window).data('selectBox-bindings')) {
            $(window)
                .data('selectBox-bindings', true)
                .bind('scroll.selectBox', (settings.hideOnWindowScroll) ? this.hideMenus : $.noop)
                .bind('resize.selectBox', this.hideMenus);
        }

        if (select.attr('disabled')) {
            control.addClass('selectBox-disabled');
        }

        // Focus on control when label is clicked
        select.bind('click.selectBox', function(event) {
            control.focus();
            event.preventDefault();
        });

        // Generate control
        if (inline) {
            // Inline controls
            options = this.getOptions('inline');

            control
                .append(options)
                .data('selectBox-options', options).addClass('selectBox-inline selectBox-menuShowing')
                .bind('keydown.selectBox', function(event) {
                    self.handleKeyDown(event);
                })
                .bind('keypress.selectBox', function(event) {
                    self.handleKeyPress(event);
                })
                .bind('mousedown.selectBox', function(event) {
                    if (1 !== event.which) {
                        return;
                    }
                    if ($(event.target).is('A.selectBox-inline')) {
                        event.preventDefault();
                    }
                    if (!control.hasClass('selectBox-focus')) {
                        control.focus();
                    }
                })
                .insertAfter(select);

            // Auto-height based on size attribute
            if (!select[0].style.height) {
                var size = select.attr('size') ? parseInt(select.attr('size')) : 5;
                // Draw a dummy control off-screen, measure, and remove it
                var tmp = control
                    .clone()
                    .removeAttr('id')
                    .css({
                        position: 'absolute',
                        top: '-9999em'
                    })
                    .show()
                    .appendTo('body');
                tmp.find('.selectBox-options').html('<li><a>\u00A0</a></li>');
                var optionHeight = parseInt(tmp.find('.selectBox-options A:first').html('&nbsp;').outerHeight());
                tmp.remove();
                control.height(optionHeight * size);
            }
            this.disableSelection(control);
        } else {
            // Dropdown controls
            var label = $('<span class="selectBox-label" />'),
                arrow = $('<span class="selectBox-arrow" />');

            // Update label
            label.attr('class', this.getLabelClass()).text(this.getLabelText());
            options = this.getOptions('dropdown');
            options.appendTo('BODY');

            control
                .data('selectBox-options', options)
                .addClass('selectBox-dropdown')
                .append(label)
                .append(arrow)
                .bind('mousedown.selectBox', function(event) {
                    if (1 === event.which) {
                        if (control.hasClass('selectBox-menuShowing')) {
                            self.hideMenus();
                        } else {
                            event.stopPropagation();
                            // Webkit fix to prevent premature selection of options
                            options
                                .data('selectBox-down-at-x', event.screenX)
                                .data('selectBox-down-at-y', event.screenY);
                            self.showMenu();
                        }
                    }
                })
                .bind('keydown.selectBox', function(event) {
                    self.handleKeyDown(event);
                })
                .bind('keypress.selectBox', function(event) {
                    self.handleKeyPress(event);
                })
                .bind('open.selectBox', function(event, triggerData) {
                    if (triggerData && triggerData._selectBox === true) {
                        return;
                    }
                    self.showMenu();
                })
                .bind('close.selectBox', function(event, triggerData) {
                    if (triggerData && triggerData._selectBox === true) {
                        return;
                    }
                    self.hideMenus();
                })
                .insertAfter(select);

            // Set label width
            var labelWidth =
                control.width() - arrow.outerWidth() - (parseInt(label.css('paddingLeft')) || 0) - (parseInt(label.css('paddingRight')) || 0);

            label.width(labelWidth);
            this.disableSelection(control);
        }
        // Store data for later use and show the control
        select
            .addClass('selectBox')
            .data('selectBox-control', control)
            .data('selectBox-settings', settings)
            .hide();
    };

    /**
     * @param {String} type 'inline'|'dropdown'
     * @returns {jQuery}
     */
    SelectBox.prototype.getOptions = function(type) {
        var options;
        var select = $(this.selectElement);
        var self = this;
        // Private function to handle recursion in the getOptions function.
        var _getOptions = function(select, options) {
            // Loop through the set in order of element children.
            select.children('OPTION, OPTGROUP').each(function() {
                // If the element is an option, add it to the list.
                if ($(this).is('OPTION')) {
                    // Check for a value in the option found.
                    if ($(this).length > 0) {
                        // Create an option form the found element.
                        self.generateOptions($(this), options);
                    } else {
                        // No option information found, so add an empty.
                        options.append('<li>\u00A0</li>');
                    }
                } else {
                    // If the element is an option group, add the group and call this function on it.
                    var optgroup = $('<li class="selectBox-optgroup" />');
                    optgroup.text($(this).attr('label'));
                    options.append(optgroup);
                    options = _getOptions($(this), options);
                }
            });
            // Return the built strin
            return options;
        };

        switch (type) {
            case 'inline':
                options = $('<ul class="selectBox-options" />');
                options = _getOptions(select, options);
                options
                    .find('A')
                    .bind('mouseover.selectBox', function(event) {
                        self.addHover($(this).parent());
                    })
                    .bind('mouseout.selectBox', function(event) {
                        self.removeHover($(this).parent());
                    })
                    .bind('mousedown.selectBox', function(event) {
                        if (1 !== event.which) {
                            return
                        }
                        event.preventDefault(); // Prevent options from being "dragged"
                        if (!select.selectBox('control').hasClass('selectBox-active')) {
                            select.selectBox('control').focus();
                        }
                    })
                    .bind('mouseup.selectBox', function(event) {
                        if (1 !== event.which) {
                            return;
                        }
                        self.hideMenus();
                        self.selectOption($(this).parent(), event);
                    });

                this.disableSelection(options);
                return options;
            case 'dropdown':
                options = $('<ul class="selectBox-dropdown-menu selectBox-options" />');
                options = _getOptions(select, options);

                options
                    .data('selectBox-select', select)
                    .css('display', 'none')
                    .appendTo('BODY')
                    .find('A')
                    .bind('mousedown.selectBox', function(event) {
                        if (event.which === 1) {
                            event.preventDefault(); // Prevent options from being "dragged"
                            if (event.screenX === options.data('selectBox-down-at-x') &&
                                event.screenY === options.data('selectBox-down-at-y')) {
                                options.removeData('selectBox-down-at-x').removeData('selectBox-down-at-y');
                                if (/android/i.test(navigator.userAgent.toLowerCase()) &&
                                    /chrome/i.test(navigator.userAgent.toLowerCase())) {
                                    self.selectOption($(this).parent());
                                }
                                self.hideMenus();
                            }
                        }
                    })
                    .bind('mouseup.selectBox', function(event) {
                        if (1 !== event.which) {
                            return;
                        }
                        if (event.screenX === options.data('selectBox-down-at-x') &&
                            event.screenY === options.data('selectBox-down-at-y')) {
                            return;
                        } else {
                            options.removeData('selectBox-down-at-x').removeData('selectBox-down-at-y');
                        }
                        self.selectOption($(this).parent());
                        self.hideMenus();
                    })
                    .bind('mouseover.selectBox', function(event) {
                        self.addHover($(this).parent());
                    })
                    .bind('mouseout.selectBox', function(event) {
                        self.removeHover($(this).parent());
                    });

                // Inherit classes for dropdown menu
                var classes = select.attr('class') || '';
                if ('' !== classes) {
                    classes = classes.split(' ');
                    for (var i = 0; i < classes.length; i++) {
                        options.addClass(classes[i] + '-selectBox-dropdown-menu');
                    }

                }
                this.disableSelection(options);
                return options;
        }
    };

    /**
     * Returns the current class of the selected option.
     *
     * @returns {String}
     */
    SelectBox.prototype.getLabelClass = function() {
        var selected = $(this.selectElement).find('OPTION:selected');
        return ('selectBox-label ' + (selected.attr('class') || '')).replace(/\s+$/, '');
    };

    /**
     * Returns the current label of the selected option.
     *
     * @returns {String}
     */
    SelectBox.prototype.getLabelText = function() {
        var selected = $(this.selectElement).find('OPTION:selected');
        return selected.text() || '\u00A0';
    };

    /**
     * Sets the label.
     * This method uses the getLabelClass() and getLabelText() methods.
     */
    SelectBox.prototype.setLabel = function() {
        var select = $(this.selectElement);
        var control = select.data('selectBox-control');
        if (!control) {
            return;
        }

        control
            .find('.selectBox-label')
            .attr('class', this.getLabelClass())
            .text(this.getLabelText());
    };

    /**
     * Destroys the SelectBox instance and shows the origin select element.
     *
     */
    SelectBox.prototype.destroy = function() {
        var select = $(this.selectElement);
        var control = select.data('selectBox-control');
        if (!control) {
            return;
        }

        var options = control.data('selectBox-options');
        options.remove();
        control.remove();
        select
            .removeClass('selectBox')
            .removeData('selectBox-control')
            .data('selectBox-control', null)
            .removeData('selectBox-settings')
            .data('selectBox-settings', null)
            .show();
    };

    /**
     * Refreshes the option elements.
     */
    SelectBox.prototype.refresh = function() {
        var select = $(this.selectElement),
            control = select.data('selectBox-control'),
            type = control.hasClass('selectBox-dropdown') ? 'dropdown' : 'inline',
            options;

        // Remove old options
        control.data('selectBox-options').remove();

        // Generate new options
        options = this.getOptions(type);
        control.data('selectBox-options', options);

        switch (type) {
            case 'inline':
                control.append(options);
                break;
            case 'dropdown':
                // Update label
                this.setLabel();
                $("BODY").append(options);
                break;
        }

        // Restore opened dropdown state (original menu was trashed)
        if ('dropdown' === type && control.hasClass('selectBox-menuShowing')) {
            this.showMenu();
        }
    };

    /**
     * Shows the dropdown menu.
     */
    SelectBox.prototype.showMenu = function() {
        var self = this,
            select = $(this.selectElement),
            control = select.data('selectBox-control'),
            settings = select.data('selectBox-settings'),
            options = control.data('selectBox-options');

        if (control.hasClass('selectBox-disabled')) {
            return false;
        }

        this.hideMenus();

        // Get top and bottom width of selectBox
        var borderBottomWidth = parseInt(control.css('borderBottomWidth')) || 0;
        var borderTopWidth = parseInt(control.css('borderTopWidth')) || 0;

        // Get proper variables for keeping options in viewport
        var pos = control.offset(),
            topPositionCorrelation = (settings.topPositionCorrelation) ? settings.topPositionCorrelation : 0,
            bottomPositionCorrelation = (settings.bottomPositionCorrelation) ? settings.bottomPositionCorrelation : 0,
            optionsHeight = options.outerHeight(),
            controlHeight = control.outerHeight(),
            maxHeight = parseInt(options.css('max-height')),
            scrollPos = $(window).scrollTop(),
            heightToTop = pos.top - scrollPos,
            heightToBottom = $(window).height() - (heightToTop + controlHeight),
            posTop = (heightToTop > heightToBottom) && (settings.keepInViewport == null ? true : settings.keepInViewport),
            top = posTop ? pos.top - optionsHeight + borderTopWidth + topPositionCorrelation : pos.top + controlHeight - borderBottomWidth - bottomPositionCorrelation;


        // If the height to top and height to bottom are less than the max-height
        if (heightToTop < maxHeight && heightToBottom < maxHeight) {

            // Set max-height and top
            if (posTop) {
                var maxHeightDiff = maxHeight - (heightToTop - 5);
                options.css({
                    'max-height': maxHeight - maxHeightDiff + 'px'
                });
                top = top + maxHeightDiff;
            } else {
                var maxHeightDiff = maxHeight - (heightToBottom - 5);
                options.css({
                    'max-height': maxHeight - maxHeightDiff + 'px'
                });
            }

        }

        // Save if position is top to options data
        options.data('posTop', posTop);


        // Menu position
        options
            .width(control.innerWidth())
            .css({
                top: top,
                left: control.offset().left
            })
        // Add Top and Bottom class based on position
        .addClass('selectBox-options selectBox-options-' + (posTop ? 'top' : 'bottom'));


        if (select.triggerHandler('beforeopen')) {
            return false;
        }

        var dispatchOpenEvent = function() {
            select.triggerHandler('open', {
                _selectBox: true
            });
        };

        // Show menu
        switch (settings.menuTransition) {
            case 'fade':
                options.fadeIn(settings.menuSpeed, dispatchOpenEvent);
                break;
            case 'slide':
                options.slideDown(settings.menuSpeed, dispatchOpenEvent);
                break;
            default:
                options.show(settings.menuSpeed, dispatchOpenEvent);
                break;
        }

        if (!settings.menuSpeed) {
            dispatchOpenEvent();
        }

        // Center on selected option
        var li = options.find('.selectBox-selected:first');
        this.keepOptionInView(li, true);
        this.addHover(li);
        control.addClass('selectBox-menuShowing selectBox-menuShowing-' + (posTop ? 'top' : 'bottom'));

        $(document).bind('mousedown.selectBox', function(event) {
            if (1 === event.which) {
                if ($(event.target).parents().andSelf().hasClass('selectBox-options')) {
                    return;
                }
                self.hideMenus();
            }
        });
    };

    /**
     * Hides the menu of all instances.
     */
    SelectBox.prototype.hideMenus = function() {
        if ($(".selectBox-dropdown-menu:visible").length === 0) {
            return;
        }

        $(document).unbind('mousedown.selectBox');
        $(".selectBox-dropdown-menu").each(function() {
            var options = $(this),
                select = options.data('selectBox-select'),
                control = select.data('selectBox-control'),
                settings = select.data('selectBox-settings'),
                posTop = options.data('posTop');

            if (select.triggerHandler('beforeclose')) {
                return false;
            }

            var dispatchCloseEvent = function() {
                select.triggerHandler('close', {
                    _selectBox: true
                });
            };
            if (settings) {
                switch (settings.menuTransition) {
                    case 'fade':
                        options.fadeOut(settings.menuSpeed, dispatchCloseEvent);
                        break;
                    case 'slide':
                        options.slideUp(settings.menuSpeed, dispatchCloseEvent);
                        break;
                    default:
                        options.hide(settings.menuSpeed, dispatchCloseEvent);
                        break;
                }
                if (!settings.menuSpeed) {
                    dispatchCloseEvent();
                }
                control.removeClass('selectBox-menuShowing selectBox-menuShowing-' + (posTop ? 'top' : 'bottom'));
            } else {
                $(this).hide();
                $(this).triggerHandler('close', {
                    _selectBox: true
                });
                $(this).removeClass('selectBox-menuShowing selectBox-menuShowing-' + (posTop ? 'top' : 'bottom'));
            }

            options.css('max-height', '');
            //Remove Top or Bottom class based on position
            options.removeClass('selectBox-options-' + (posTop ? 'top' : 'bottom'));
            options.data('posTop', false);
        });
    };

    /**
     * Selects an option.
     *
     * @param {HTMLElement} li
     * @param {DOMEvent}    event
     * @returns {Boolean}
     */
    SelectBox.prototype.selectOption = function(li, event) {
        var select = $(this.selectElement);
        li = $(li);

        var control = select.data('selectBox-control'),
            settings = select.data('selectBox-settings');

        if (control.hasClass('selectBox-disabled')) {
            return false;
        }

        if (0 === li.length || li.hasClass('selectBox-disabled')) {
            return false;
        }

        if (select.attr('multiple')) {
            // If event.shiftKey is true, this will select all options between li and the last li selected
            if (event.shiftKey && control.data('selectBox-last-selected')) {
                li.toggleClass('selectBox-selected');
                var affectedOptions;
                if (li.index() > control.data('selectBox-last-selected').index()) {
                    affectedOptions = li
                        .siblings()
                        .slice(control.data('selectBox-last-selected').index(), li.index());
                } else {
                    affectedOptions = li
                        .siblings()
                        .slice(li.index(), control.data('selectBox-last-selected').index());
                }
                affectedOptions = affectedOptions.not('.selectBox-optgroup, .selectBox-disabled');
                if (li.hasClass('selectBox-selected')) {
                    affectedOptions.addClass('selectBox-selected');
                } else {
                    affectedOptions.removeClass('selectBox-selected');
                }
            } else if ((this.isMac && event.metaKey) || (!this.isMac && event.ctrlKey)) {
                li.toggleClass('selectBox-selected');
            } else {
                li.siblings().removeClass('selectBox-selected');
                li.addClass('selectBox-selected');
            }
        } else {
            li.siblings().removeClass('selectBox-selected');
            li.addClass('selectBox-selected');
        }

        if (control.hasClass('selectBox-dropdown')) {
            control.find('.selectBox-label').text(li.text());
        }

        // Update original control's value
        var i = 0,
            selection = [];
        if (select.attr('multiple')) {
            control.find('.selectBox-selected A').each(function() {
                selection[i++] = $(this).attr('rel');
            });
        } else {
            selection = li.find('A').attr('rel');
        }

        // Remember most recently selected item
        control.data('selectBox-last-selected', li);

        // Change callback
        if (select.val() !== selection) {
            select.val(selection);
            this.setLabel();
            select.trigger('change');
        }

        return true;
    };

    /**
     * Adds the hover class.
     *
     * @param {HTMLElement} li
     */
    SelectBox.prototype.addHover = function(li) {
        li = $(li);
        var select = $(this.selectElement),
            control = select.data('selectBox-control'),
            options = control.data('selectBox-options');

        options.find('.selectBox-hover').removeClass('selectBox-hover');
        li.addClass('selectBox-hover');
    };

    /**
     * Returns the original HTML select element.
     *
     * @returns {HTMLElement}
     */
    SelectBox.prototype.getSelectElement = function() {
        return this.selectElement;
    };

    /**
     * Remove the hover class.
     *
     * @param {HTMLElement} li
     */
    SelectBox.prototype.removeHover = function(li) {
        li = $(li);
        var select = $(this.selectElement),
            control = select.data('selectBox-control'),
            options = control.data('selectBox-options');

        options.find('.selectBox-hover').removeClass('selectBox-hover');
    };

    /**
     * Checks if the widget is in the view.
     *
     * @param {jQuery}      li
     * @param {Boolean}     center
     */
    SelectBox.prototype.keepOptionInView = function(li, center) {
        if (!li || li.length === 0) {
            return;
        }

        var select = $(this.selectElement),
            control = select.data('selectBox-control'),
            options = control.data('selectBox-options'),
            scrollBox = control.hasClass('selectBox-dropdown') ? options : options.parent(),
            top = parseInt(li.offset().top - scrollBox.position().top),
            bottom = parseInt(top + li.outerHeight());

        if (center) {
            scrollBox.scrollTop(li.offset().top - scrollBox.offset().top + scrollBox.scrollTop() -
                (scrollBox.height() / 2));
        } else {
            if (top < 0) {
                scrollBox.scrollTop(li.offset().top - scrollBox.offset().top + scrollBox.scrollTop());
            }
            if (bottom > scrollBox.height()) {
                scrollBox.scrollTop((li.offset().top + li.outerHeight()) - scrollBox.offset().top +
                    scrollBox.scrollTop() - scrollBox.height());
            }
        }
    };

    /**
     * Handles the keyDown event.
     * Handles open/close and arrow key functionality
     *
     * @param {DOMEvent}    event
     */
    SelectBox.prototype.handleKeyDown = function(event) {
        var select = $(this.selectElement),
            control = select.data('selectBox-control'),
            options = control.data('selectBox-options'),
            settings = select.data('selectBox-settings'),
            totalOptions = 0,
            i = 0;

        if (control.hasClass('selectBox-disabled')) {
            return;
        }

        switch (event.keyCode) {
            case 8:
                // backspace
                event.preventDefault();
                this.typeSearch = '';
                break;
            case 9:
                // tab
            case 27:
                // esc
                this.hideMenus();
                this.removeHover();
                break;
            case 13:
                // enter
                if (control.hasClass('selectBox-menuShowing')) {
                    this.selectOption(options.find('LI.selectBox-hover:first'), event);
                    if (control.hasClass('selectBox-dropdown')) {
                        this.hideMenus();
                    }
                } else {
                    this.showMenu();
                }
                break;
            case 38:
                // up
            case 37:
                // left
                event.preventDefault();
                if (control.hasClass('selectBox-menuShowing')) {
                    var prev = options.find('.selectBox-hover').prev('LI');
                    totalOptions = options.find('LI:not(.selectBox-optgroup)').length;
                    i = 0;
                    while (prev.length === 0 || prev.hasClass('selectBox-disabled') ||
                        prev.hasClass('selectBox-optgroup')) {
                        prev = prev.prev('LI');
                        if (prev.length === 0) {
                            if (settings.loopOptions) {
                                prev = options.find('LI:last');
                            } else {
                                prev = options.find('LI:first');
                            }
                        }
                        if (++i >= totalOptions) {
                            break;
                        }
                    }
                    this.addHover(prev);
                    this.selectOption(prev, event);
                    this.keepOptionInView(prev);
                } else {
                    this.showMenu();
                }
                break;
            case 40:
                // down
            case 39:
                // right
                event.preventDefault();
                if (control.hasClass('selectBox-menuShowing')) {
                    var next = options.find('.selectBox-hover').next('LI');
                    totalOptions = options.find('LI:not(.selectBox-optgroup)').length;
                    i = 0;
                    while (0 === next.length || next.hasClass('selectBox-disabled') ||
                        next.hasClass('selectBox-optgroup')) {
                        next = next.next('LI');
                        if (next.length === 0) {
                            if (settings.loopOptions) {
                                next = options.find('LI:first');
                            } else {
                                next = options.find('LI:last');
                            }
                        }
                        if (++i >= totalOptions) {
                            break;
                        }
                    }
                    this.addHover(next);
                    this.selectOption(next, event);
                    this.keepOptionInView(next);
                } else {
                    this.showMenu();
                }
                break;
        }
    };

    /**
     * Handles the keyPress event.
     * Handles type-to-find functionality
     *
     * @param {DOMEvent}    event
     */
    SelectBox.prototype.handleKeyPress = function(event) {
        var select = $(this.selectElement),
            control = select.data('selectBox-control'),
            options = control.data('selectBox-options'),
            self = this;

        if (control.hasClass('selectBox-disabled')) {
            return;
        }

        switch (event.keyCode) {
            case 9:
                // tab
            case 27:
                // esc
            case 13:
                // enter
            case 38:
                // up
            case 37:
                // left
            case 40:
                // down
            case 39:
                // right
                // Don't interfere with the keydown event!
                break;
            default:
                // Type to find
                if (!control.hasClass('selectBox-menuShowing')) {
                    this.showMenu();
                }
                event.preventDefault();
                clearTimeout(this.typeTimer);
                this.typeSearch += String.fromCharCode(event.charCode || event.keyCode);
                options.find('A').each(function() {
                    if ($(this).text().substr(0, self.typeSearch.length).toLowerCase() === self.typeSearch.toLowerCase()) {
                        self.addHover($(this).parent());
                        self.selectOption($(this).parent(), event);
                        self.keepOptionInView($(this).parent());
                        return false;
                    }
                });
                // Clear after a brief pause
                this.typeTimer = setTimeout(function() {
                    self.typeSearch = '';
                }, 1000);
                break;
        }
    };

    /**
     * Enables the selectBox.
     */
    SelectBox.prototype.enable = function() {
        var select = $(this.selectElement);
        select.prop('disabled', false);
        var control = select.data('selectBox-control');
        if (!control) {
            return;
        }
        control.removeClass('selectBox-disabled');
    };

    /**
     * Disables the selectBox.
     */
    SelectBox.prototype.disable = function() {
        var select = $(this.selectElement);
        select.prop('disabled', true);
        var control = select.data('selectBox-control');
        if (!control) {
            return;
        }
        control.addClass('selectBox-disabled');
    };

    /**
     * Sets the current value.
     *
     * @param {String}      value
     */
    SelectBox.prototype.setValue = function(value) {
        var select = $(this.selectElement);
        select.val(value);
        value = select.val(); // IE9's select would be null if it was set with a non-exist options value

        if (null === value) { // So check it here and set it with the first option's value if possible
            value = select.children().first().val();
            select.val(value);
        }

        var control = select.data('selectBox-control');
        if (!control) {
            return;
        }

        var settings = select.data('selectBox-settings'),
            options = control.data('selectBox-options');

        // Update label
        this.setLabel();

        // Update control values
        options.find('.selectBox-selected').removeClass('selectBox-selected');
        options.find('A').each(function() {
            if (typeof(value) === 'object') {
                for (var i = 0; i < value.length; i++) {
                    if ($(this).attr('rel') == value[i]) {
                        $(this).parent().addClass('selectBox-selected');
                    }
                }
            } else {
                if ($(this).attr('rel') == value) {
                    $(this).parent().addClass('selectBox-selected');
                }
            }
        });

        if (settings.change) {
            settings.change.call(select);
        }
    };

    /**
     * Sets the option elements.
     *
     * @param {String|Object} options
     */
    SelectBox.prototype.setOptions = function(options) {
        var select = $(this.selectElement),
            control = select.data('selectBox-control');

        switch (typeof(options)) {
            case 'string':
                select.html(options);
                break;
            case 'object':
                select.html('');
                for (var i in options) {
                    if (options[i] === null) {
                        continue;
                    }
                    if (typeof(options[i]) === 'object') {
                        var optgroup = $('<optgroup label="' + i + '" />');
                        for (var j in options[i]) {
                            optgroup.append('<option value="' + j + '">' + options[i][j] + '</option>');
                        }
                        select.append(optgroup);
                    } else {
                        var option = $('<option value="' + i + '">' + options[i] + '</option>');
                        select.append(option);
                    }
                }
                break;
        }

        if (control) {
            // Refresh the control
            this.refresh();
        }
    };

    /**
     * Disables the selection.
     *
     * @param {*} selector
     */
    SelectBox.prototype.disableSelection = function(selector) {
        $(selector).css('MozUserSelect', 'none').bind('selectstart', function(event) {
            event.preventDefault();
        });
    };

    /**
     * Generates the options.
     *
     * @param {jQuery} self
     * @param {jQuery} options
     */
    SelectBox.prototype.generateOptions = function(self, options) {
        var li = $('<li />'),
            a = $('<a />');
        li.addClass(self.attr('class'));
        li.data(self.data());
        a.attr('rel', self.val()).text(self.text());
        li.append(a);
        if (self.attr('disabled')) {
            li.addClass('selectBox-disabled');
        }
        if (self.attr('selected')) {
            li.addClass('selectBox-selected');
        }
        options.append(li);
    };

    /**
     * Extends the jQuery.fn object.
     */
    $.extend($.fn, {
        selectBox: function(method, options) {
            var selectBox;

            switch (method) {
                case 'control':
                    return $(this).data('selectBox-control');
                case 'settings':
                    if (!options) {
                        return $(this).data('selectBox-settings');
                    }
                    $(this).each(function() {
                        $(this).data('selectBox-settings', $.extend(true, $(this).data('selectBox-settings'), options));
                    });
                    break;
                case 'options':
                    // Getter
                    if (undefined === options) {
                        return $(this).data('selectBox-control').data('selectBox-options');
                    }
                    // Setter
                    $(this).each(function() {
                        if (selectBox = $(this).data('selectBox')) {
                            selectBox.setOptions(options);
                        }
                    });
                    break;
                case 'value':
                    // Empty string is a valid value
                    if (undefined === options) {
                        return $(this).val();
                    }
                    $(this).each(function() {
                        if (selectBox = $(this).data('selectBox')) {
                            selectBox.setValue(options);
                        }
                    });
                    break;
                case 'refresh':
                    $(this).each(function() {
                        if (selectBox = $(this).data('selectBox')) {
                            selectBox.refresh();
                        }
                    });
                    break;
                case 'enable':
                    $(this).each(function() {
                        if (selectBox = $(this).data('selectBox')) {
                            selectBox.enable(this);
                        }
                    });
                    break;
                case 'disable':
                    $(this).each(function() {
                        if (selectBox = $(this).data('selectBox')) {
                            selectBox.disable();
                        }
                    });
                    break;
                case 'destroy':
                    $(this).each(function() {
                        if (selectBox = $(this).data('selectBox')) {
                            selectBox.destroy();
                            $(this).data('selectBox', null);
                        }
                    });
                    break;
                case 'instance':
                    return $(this).data('selectBox');
                default:
                    $(this).each(function(idx, select) {
                        if (!$(select).data('selectBox')) {
                            $(select).data('selectBox', new SelectBox(select, method));
                        }
                    });
                    break;
            }
            return $(this);
        }
    });
})(jQuery);



// end SELECTBOX