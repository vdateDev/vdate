/*
 * jQuery Litree v 1.0
 * http://
 *
 * Copyright 2010, Linnik
 * Free to use
 * 
 * September 2010
 */
jQuery.fn.litree = function(options){
	var options = jQuery.extend({
		speed: 200, // Скорость анимации
		classActive: '.cur' // Класс активного элемента
	},options);
	return this.each(function() { 
		tree = jQuery(this).addClass('tree');
		
		var ww = 0
		jQuery('.control_link:first',this).children().each(function(){
			ww += $(this).outerWidth()
		})
		
		var wa = 0
		jQuery('.control_link:first',this).find('a').parent('span').each(function(){
			wa += $(this).outerWidth()
		})
		jQuery('.title_actions').width(wa-1)
		
		jQuery('.name',this).css({paddingRight:ww+20})
		jQuery('.name_page').css({paddingRight:ww+20})
		jQuery('.control_link',this).wrapInner('<ins class="control_wrap"></ins>')
		jQuery('.control_wrap',this).each(function(){
			jQuery(this).children('*:first').addClass('coll_first')
		})

		jQuery(options.classActive,this).parents('ul').show(); //открываем активный пункт
		jQuery('.p_wr',this).prepend('<span class="show"></span>');
		jQuery('ul:visible',this).parent('li').addClass('tm'); //ставим маркер "минус" для открытых списков
		jQuery('ul:hidden',this).parent('li').addClass('tp'); //ставим маркер "плюс" для закрытых списков

		jQuery('.show',this)
			.click(function(){  
				jQuery(this).parent().next('ul') 
					.slideToggle(options.speed,function(){  // по клику переключаем состояние вложеных списков		
							jQuery('ul:visible',tree).parent('li').removeClass('tp').addClass('tm');
							jQuery('ul:hidden',tree).parent('li').removeClass('tm').addClass('tp').find('ul').hide(); //закрываем все списки внутри закрытого списка
					});
			return false
			});

		jQuery('.p_wr',this).bind('mouseenter',function(){
			$(this).addClass('name_h')	
		})
		jQuery('.p_wr',this).bind('mouseleave',function(){
			$(this).removeClass('name_h')	
		})
		
		

	});
};