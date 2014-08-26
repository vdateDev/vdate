$(document).ready(function() {

    $('.validat').liValidForm({
        captcha: false
    });

    function contactListCount() {
        $('.contactTitle span').text($('.contactList li').length);
    }




    function addMessChat() {
        var tt = new Date();
        var hrs = ('' + tt.getHours() + '').length == 1 ? '0' + tt.getHours() : tt.getHours();
        var mnt = ('' + tt.getMinutes() + '').length == 1 ? '0' + tt.getMinutes() : tt.getMinutes();
        var scn = ('' + tt.getSeconds() + '').length == 1 ? '0' + tt.getSeconds() : tt.getSeconds();

        //var mas = $(".cText").val('');
        var msV = $(".cText").val();
        var word = /\[:(.*?):\]/g;
        for (m = word.exec(msV); m; m = word.exec(msV)) {
            msV = msV.replace(m[0], '<img src="pic/smiles/' + m[0] + '.gif" alt="">');
            msV = msV.replace('[:', '');
            msV = msV.replace(':]', '');
        }
        //var masLi = $('<li><div class="userName">You:</div><div class="timeMass"><time>19:02</time></div><div class="massCont"><p>' + msV + '</p></div></li>');
        console.log($('.chatConteiner li:last-child').offset().top);
        var newMess = '<li>' +
            '<div class="ccName"><b>Antonina</b> (ID: <span class="ccID">0054546</span>)</div>' +
            '<div class="ccTime">(<span>' + hrs + ':' + mnt + ':' + scn + '</span>)</div>' +
            '<div class="ccTxt">' + /*$(".cText").val()*/ msV + '</span></div>' +
            '</li>';
        $('.chatConteiner').append(newMess);
        //$('.chatConteiner').scrollTop($('.chatConteiner li:last-child').offset().top - $('.chatConteiner').offset().top);
        $('.chatConteiner').scrollTop(-200);
        $(".cText").val('');
    }

    $(window).load(function() {

        // newPage 

        if ($('.langSelect').length) {
            $('.isHeader').on('click', '.langOpen', function(event) {
                console.log(345);
                event.preventDefault();
                $(this).addClass('isOpen');
            });
            $('.isHeader').on('click', '.langOverlay', function(event) {
                event.preventDefault();
                $('.langOpen').removeClass('isOpen');
            });
        }

        if ($('.sliderIndex').length) {
            $('.sliderIndex ul').carouFredSel({
                responsive: true,
                auto: true,
                scroll: {
                    duration: 1000,
                    pauseOnHover: true
                }
            });
        }

        if ($('.sliList').length) {
            $('.sliList').each(function(index, el) {
                var sliPar = $(this).children('.sliList_ini');
                sliPar.children('ul').carouFredSel({
                    auto: true,
                    scroll: {
                        pauseOnHover: true
                    },
                    prev: '.sliList_Prev' + index,
                    next: '.sliList_Next' + index
                });
            });
        }

        //console.log($.date());

        if ($('.isChat').length) {


            $('.chatControlHead').on('click', 'img', function(event) {
                var typed = $('.cText').val();
                $('.cText').focus();
                $('.cText').val(typed + ' [:' + ($(this).attr('src').slice($(this).attr('src').lastIndexOf('/') + 1, $(this).attr('src').length)).slice(0, -4) + ':] ');
            });

            $('.cSend').on('click', function(event) {
                event.preventDefault();
                addMessChat();
            });

            contactListCount();
            $('.contactListWrapp').on('click', '.clDel', function(event) {
                event.preventDefault();
                $(this).closest('li').remove();
                contactListCount();
            });
            $('.contactListClear').on('click', '.butt2', function(event) {
                event.preventDefault();
                $('.contactList li').remove();
                contactListCount();
            });
        }

        if ($('.sbi').length) {
            $('.sbi').selectBox();
        }

        if ($('.sliderMyPhoto').length) {
            $('.sliderMyPhoto ul').carouFredSel({
                responsive: true,
                auto: true,
                items: {
                    visible: 5,
                    height: '140%'
                },
                scroll: {
                    items: 1,
                    duration: 800
                },
                prev: '.sliderMyPhoto_Prev',
                next: '.sliderMyPhoto_Next',
                swipe: {
                    onTouch: true
                }
            });
        }

        if ($('.sliderRegister').length) {
            function slReg() {
                $('.beforeUlRegister ul').carouFredSel({
                    responsive: true,
                    auto: true,
                    items: {
                        visible: 1,
                        height: '140%'
                    },
                    scroll: {
                        items: 1,
                        duration: 800
                    },
                    prev: '.sliderRegister_Prev',
                    next: '.sliderRegister_Next',
                    swipe: {
                        onTouch: true
                    }
                });
            }

            slReg();
        }

        if ($('.accountList').length) {
            $('.leftSIDE_content').on('click', '.accountListOpen', function(event) {
                event.preventDefault();
                if ($('.accountListOpen').hasClass('itsOpn')) {
                    console.log(46);
                    $('.accountListOpen').removeClass('itsOpn');
                    $('.accountListOpen').children('span').text('Open');
                } else {
                    console.log(34);
                    $('.accountListOpen').addClass('itsOpn');
                    $('.accountListOpen').children('span').text('Close');
                }
                $('.accountList').slideToggle(500);
            });
            $(window).resize(function(event) {
                if ($(window).width() > 720) {
                    $('.accountList').removeAttr('style');
                }
            });
        }

        // OPEN BLOCKS RESP

        var opn = 'isOpen';
        var cartflag = true;

        function respBlocks(s, x, y, v, z, w, t) {
            if ($(window).width() < s) {
                $('.' + x + '').on('click', function(event) {
                    event.preventDefault();
                    $('.' + v + '').show();
                    $('.' + z + ', .' + w + ', .' + t + '').css('left', '0px');
                    $('.' + y + '').addClass(opn);
                    $('.langOpen').css('visibility', 'hidden');
                });
                $('.' + v + '').on('click', function(event) {
                    event.preventDefault();
                    $('.' + v + '').hide();
                    $('.' + z + ', .' + w + ', .' + t + '').css('left', '-40px');
                    $('.' + y + '').removeClass(opn);
                    $('.langOpen').css('visibility', 'visible');
                });
            }
        }

        respBlocks(800, 'smOpen', 'statusModule', 'smV', 'tmOpen', 'chOpen', 'lvOpen');
        respBlocks(720, 'chOpen', 'chatModule', 'cmV', 'smOpen', 'tmOpen', 'lvOpen');
        respBlocks(720, 'tmOpen', 'topModule', 'tmV', 'smOpen', 'chOpen', 'lvOpen');
        respBlocks(720, 'lvOpen', 'liveChat', 'lvV', 'smOpen', 'chOpen', 'tmOpen');
        $(window).resize(function(event) {
            respBlocks(800, 'smOpen', 'statusModule', 'smV', 'tmOpen', 'chOpen', 'lvOpen');
            respBlocks(720, 'chOpen', 'chatModule', 'cmV', 'smOpen', 'tmOpen', 'lvOpen');
            respBlocks(720, 'tmOpen', 'topModule', 'tmV', 'smOpen', 'chOpen', 'lvOpen');
            respBlocks(720, 'lvOpen', 'liveChat', 'lvV', 'smOpen', 'chOpen', 'tmOpen');
        });

        function myCartCount(price) {
            var cartprice = 0;
            var cartpricedeliv;
            $('.cartPrice').each(function(index, el) {
                cartprice = cartprice + parseFloat($(this).children('span').text());
            });
            cartpricedeliv = cartprice + parseFloat($('.delivPrice').children('span').text());
            $('.cpt').text(cartprice);
            $('.cartPriceTotal span').text(cartpricedeliv);
        }

        function myCartADD(add) {
            if (!$('.myCartBlock ul').children().length) {
                $('.clearCart').css('display', 'block');
            }
            add.attr('data-class', add.children('p').children('span').text());
            var newpresent = '<li>' +
                '<span class="cartPrice"><span>' + add.children('.presPrc').children('span').text() + '</span> Credits</span>' +
                '<span class="cartDel"></span>' +
                '<span class="cartImg"><img src="' + add.children('.presImg').children('img').attr('src') + '" alt="' + add.children('.presImg').children('img').attr('alt') + '"></span>' +
                '<span class="cartItem">' + add.children('p').children('span').text() + '</span>' +
                '</li>';
            $('.myCartBlock ul').append(newpresent);
            console.timeEnd('start');
        }

        if ($('.myCart').length) {
            $('.contentBlock').on('click', '.presADD', function(event) {
                event.preventDefault();
            });
            myCartCount();
            $('.contentBlock').on('click', '.presentList li', function(event) {
                if ($(this).hasClass('presSel')) {
                    event.preventDefault();
                } else {
                    $(this).addClass('presSel');
                    myCartADD($(this));
                    myCartCount();
                }
            });
            $('.myCartBlock').on('click', '.cartDel', function(event) {
                var campare = $(this).parent('li').children('.cartItem').text();
                $(this).parent('li').remove();
                $('.contentBlock').find('.presentList li').each(function(index, el) {
                    if ($(this).attr('data-class') === campare) {
                        $(this).removeAttr('data-class');
                        $(this).removeClass('presSel');
                    }
                });
                myCartCount();
                if (!$('.myCartBlock ul').children().length) {
                    $('.clearCart').css('display', 'none');
                }
            });
            $('.contentBlock').on('click', '.clearCart', function(event) {
                $('.myCartBlock ul').children().remove();
                myCartCount();
                $('.presSel').removeAttr('data-class');
                $('.presSel').removeClass('presSel');
                $(this).css('display', 'none');
            });
        }

        $('.contentBlock').on('click', '.titleOpener', function(event) {
            if ($(window).width() < 720) {
                if (!($(this).hasClass('ulOpen'))) {
                    console.log(15);
                    $('.ulOpen').removeClass('ulOpen');
                    $('.presentCatList').slideUp(500);
                    $(this).addClass('ulOpen');
                    $(this).next('ul').slideDown(500);
                } else if ($(this).hasClass('ulOpen')) {
                    console.log(16);
                    $(this).next('ul').slideUp(500);
                    $(this).removeClass('ulOpen');
                }
            }
        });

        $('.chatListWrapp').on('click', '.pplOnline', function(event) {
            if ($(window).width() < 720) {
                if (!($(this).hasClass('ulOpen'))) {
                    $(this).addClass('ulOpen');
                    $(this).next('ul').slideDown(500);
                } else if ($(this).hasClass('ulOpen')) {
                    $(this).next('ul').slideUp(500);
                    $(this).removeClass('ulOpen');
                }
            }
        });

        $('.chatControlHead').on('click', 'p', function(event) {
            console.log(10);
            if (!($(this).hasClass('divOpen'))) {
                $(this).addClass('divOpen');
                $(this).next('.smilesList').slideDown(500);
            } else if ($(this).hasClass('divOpen')) {
                $(this).next('.smilesList').slideUp(500);
                $(this).removeClass('divOpen');
            }
        });

        $(window).resize(function(event) {
            if ($(window).width() > 720) {
                $('.presentCatList').removeAttr('style');
                $('.pplList').removeAttr('style');
                $('.ulOpen').removeClass('ulOpen');
            }
        });

        if ($('.favSortBlock').length) {
           /* $('.favSortDel').on('click', function(event) {
                event.preventDefault();
                if ($('.favOneChk').length) {
                    $('.favOneChk').remove();
                    $('.favCHK').prop('checked', false);
                }
            });*/
            $('.favCHK').on('change', function(event) {
                if ($(this).is(':checked')) {
                    $('.favOneDel').each(function(index, el) {
                        $(this).parent('.favOne').addClass('favOneChk').find('input').prop('checked', true);
                    });
                } else {
                    $('.favOneDel').each(function(index, el) {
                        $(this).parent('.favOne').removeClass('favOneChk').find('input').prop('checked', false);
                    });
                }
            });

            $('.favOneDel').on('change', 'input', function(event) {
                if ($(this).is(':checked')) {
                    $(this).prop('checked', true).closest('.favOne').addClass('favOneChk');
                } else {
                    $(this).prop('checked', false).closest('.favOne').removeClass('favOneChk');
                    if ($('.favOneChk').length == 0) {
                        $('.favCHK').prop('checked', false);
                    };
                }
            });
        }

        /* ----------------*/

        if ($(".buyCreditLength").length) {

            $(".datepicker").datepicker({
                onSelect: function(selectedDate) {}
            });

            $('.tNav').on('click', 'span', function(event) {
                if ($(this).hasClass('curr')) {
                    return false;
                } else {
                    tabsNew($(this));
                }
            });

        }

        function tabsNew(x) {
            x.parent('.tNav').children('.curr').removeClass('curr');
            x.addClass('curr');
            x.parent('.tNav').next('.tConteiner').children('.curr').removeClass('curr').parent('.tConteiner').children('.' + x.attr('data-tab-nav')).addClass('curr');
        }

    }); // END WINDOW LOAD

});