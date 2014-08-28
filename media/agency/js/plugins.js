$(document).ready(function(){
	$('.validat').liValidForm()
	//$(".test").colorbox({html:"<h3>Popover Title</h3><p>Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>"});
	
	$('.menu,.menu ul').liColl({
		c_unit: '%', // '%' или 'px' При указании '%' — ширина 'c_width' игнорируется
		n_coll: 7, //колличество колонок
		c_width: 200, //Ширина колонок в 'px'
		p_left: 0.2, //отступ слева %						
		onComplete: function(el){
			var el_height = $('.menu').outerHeight();
			$('.menu ul').css({top:el_height+2});
			$('.menu_wrap').height(el_height+$('.menu ul:visible').outerHeight()).animate({opacity:'1'},1000);	
		}
	});
	//start menu
		if($('ul',$('.menu')).is(':visible')){
			var podcat = $('ul:visible',$('.menu'));
			var podcatTop = podcat.offset().top;
			$(window).bind('scroll',function(){
				if(podcatTop < $(document).scrollTop()){
					$('ul:visible',$('.menu')).addClass('fixed')
				}else{
					$('ul:visible',$('.menu')).removeClass('fixed')	
				}
			})
		}
		//alert(podcat.offset().top)

	//end menu
	/*
	$(".tree").litree({
		speed: 500, // Скорость анимации
		classActive: '.cur' // Класс активного элемента					   
	});
	*/
	//start tabs   
	$('a',$('ul.tabs')).bind('click', function() {
		if(!$(this).is('.current')){
			$(this).addClass('current').closest('li').siblings().find('a').removeClass('current').closest('div.langBox').find('div.box').eq($(this).closest('li').index()).show().siblings('.box').hide();
		}
		return false
	})
	//end rabs
	/*if($('.form_add').length){
		$('.form_add').liTranslit({
			elName: '.s_name',		//Класс елемента с именем
			elAlias: '.s_alias'		//Класс елемента с алиасом
		});
	}*/
	
});