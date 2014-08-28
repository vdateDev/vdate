$(document).ready(function(){
	
        if ($('.langTabs').length) {
            $('.langTabs').on('click', 'li', function() {
                var li = $(this);
                var boxId = 'lang-'+li.data('key');
                
                if (!li.hasClass('active')) {
                    $('.langsContentContainer').children('.langBox').each(function() {
                        $(this).removeClass('active');
                    });
                    
                    $('.langTabs').children('li').each(function() {
                        $(this).removeClass('active');
                    });
                    
                    li.addClass('active');
                    $('#'+boxId).addClass('active');
                }
            });
        }
        
	//start tabs show
	$('.tabs').each(function(){
		var tab_link_wrap = $(this);
		var tabs_wrap = tab_link_wrap.parent();
		var tab_length = tab_link_wrap.children().length;
		$('.box:first',tabs_wrap).addClass('visible')
		if(tab_length < 2){
			tab_link_wrap.hide();	
		}
	})
	//end tabs show
	
        
        
	//start meta
	$('.meta').click(function(){
		$('.seo_wrap').toggle()
		return false	
	})
	//end meta
	
	
	$(".tree").litree({
		speed: 200, // Скорость анимации
		classActive: '.cur' // Класс активного элемента					   
	});
	
	
	//start tovars
	var t_list = $('.t_list');
	var t_sop = $('.t_sop');
	
	
	

	//all check
	var but_all = $('.check_all')
	var check = $('.check')
	but_all.click(function(){
		if(but_all.is(':checked')){
			check.attr('checked','checked')
		}
		if(!but_all.is(':checked')){
			check.attr('checked',false)
		}
	})
	//*all check

	//tables style
	$(".table1 tr").mouseover(function() {$(this).addClass("over");}).mouseout(function() {$(this).removeClass("over");});
	$(".table1 tr:even").css({border:'1px solid #fff'}).addClass("alt");
	
});