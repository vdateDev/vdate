/*
 * jQuery LiColl v 2.0
 * http://
 *
 * Copyright 2010, Linnik Yura
 * Free to use
 * 
 * February 2012
 */
jQuery.fn.liColl = function(options){
	// настройки по умолчанию
	var o = jQuery.extend({
	n_coll: 4, //колличество колонок
	c_unit: '%', //Единица измерения
	c_width: 300, //Ширина колонок
	p_left: 5, //отступ слева %
	onComplete: function(){}
	},options);
	return this.each(function(){

		var element = jQuery(this).append('<div style="clear:both">');
		var nc = o.n_coll;
		
		var pl = o.p_left;
		var i = 1;
		var c_un = 'px';
		
		num_1 = element.children('li').length;
		if(num_1 < nc){
			nc = num_1;
			if(options.c_unit != c_un){
				//coll_w = Math.floor(100/nc);
				coll_w ='auto';
			}else{
				coll_w = options.c_width - pl;
			};	
		}else{
			if(options.c_unit != c_un){
				coll_w = Math.floor(100/nc);
				coll_w = coll_w - pl;
			}else{
				coll_w = options.c_width - pl;
			};
		}
		create();
		function create(){
			n_end = Math.ceil(num_1/nc);
			cc = jQuery('<div />').addClass("coll_s c_" + i).css({width:coll_w+options.c_unit,paddingLeft:pl+options.c_unit,float:'left',clear:'right'});
			element.children('li').slice(0,n_end).wrapAll(cc);
			if(num_1 != n_end){
				i++;
				nc--;
				num_1 = num_1 - n_end;
				create();
			};
		};
		
		o.onComplete(element)
	});
};