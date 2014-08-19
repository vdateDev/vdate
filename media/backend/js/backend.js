function fields() {
    
	$(document).ready(function(e) {
                
                $('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
                
                $('ul#sortable').sortable({

		  update : function () {
                        $(this).removeClass('tp');
                        
			var sort_wrap = $(this);

				var order = sort_wrap.sortable('serialize');
                                
				$.ajax({

					type: "POST",

					url: "/backend_ajax/fields/sort",

					data: order
                                        

				});
                              $(this).addClass('tp');   
			  }
                          
                         

		});
                

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend_ajax/fields/status',
			{
				id: $(this).attr('id'),
				status: ($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
	});
}

function admins() {
    
	$(document).ready(function(e) {
                
                $('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});               
	});
}
function roles() {
    
	$(document).ready(function(e) {
                
                $('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});               
	});
}

function banners() {
    
	$(document).ready(function(e) {
                
                $('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
                
                $('ul#sortable').sortable({

		  update : function () {
                        $(this).removeClass('tp');
                        
			var sort_wrap = $(this);

				var order = sort_wrap.sortable('serialize');
                                
				$.ajax({

					type: "POST",

					url: "/backend_ajax/banners/sort",

					data: order
                                        

				});
                              $(this).addClass('tp');   
			  }
                          
                         

		});
                

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend_ajax/banners/status',
			{
				id: $(this).attr('id'),
				status: ($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
	});
}

function page_letters() {
    
	$(document).ready(function(e) {
                
                $('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
                
                $('ul#sortable').sortable({

		  update : function () {
                        $(this).removeClass('tp');
                        
			var sort_wrap = $(this);

				var order = sort_wrap.sortable('serialize');
                                
				$.ajax({

					type: "POST",

					url: "/backend_ajax/letters/sort",

					data: order
                                        

				});
                              $(this).addClass('tp');   
			  }
                          
                         

		});
                

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend_ajax/letters/status',
			{
				id: $(this).attr('id'),
				status: ($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
	});
}

function page_infos() {
	$(document).ready(function(e) {
                
                $('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
                
                $('ul#sortable').sortable({

		  update : function () {
                        $(this).removeClass('tp');
                        
			var sort_wrap = $(this);

				var order = sort_wrap.sortable('serialize');
                                
				$.ajax({

					type: "POST",

					url: "/backend_ajax/infos/sort",

					data: order
                                        

				});
                              $(this).addClass('tp');   
			  }
                          
                         

		});
                

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend_ajax/infos/status',
			{
				id: $(this).attr('id'),
				status: ($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
	});
}

function page_slideshow() {
	$(document).ready(function(e) {
                
                $('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
                
                $('ul#sortable').sortable({

		  update : function () {
                        $(this).removeClass('tp');
                        
			var sort_wrap = $(this);

				var order = sort_wrap.sortable('serialize');
                                
				$.ajax({

					type: "POST",

					url: "/backend_ajax/slideshow/sort",

					data: order
                                        

				});
                              $(this).addClass('tp');   
			  }
                          
                         

		});
                

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend_ajax/slideshow/status',
			{
				id: $(this).attr('id'),
				status: ($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
	});
}

function page_actual() {
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		
        	$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend_ajax/actual/status',
			{
				id: $(this).attr('pid'),
				status: ($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});

	});
}
/**/
function page_news() {
	$(document).ready(function(e) {
		
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
		
        	$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend_ajax/news/status',
			{
				id: $(this).attr('pid'),
				status: ($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
		
		

	});
	
}

function page_languages() {
	$(document).ready(function(e) {
                
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
                
                $('ul#sortable').sortable({

		  update : function () {
                        $(this).removeClass('tp');
                        
			var sort_wrap = $(this);

				var order = sort_wrap.sortable('serialize');
                                
				$.ajax({

					type: "POST",

					url: "/backend_ajax/languages/sort",

					data: order
                                        

				});
                              $(this).addClass('tp');   
			  }
                          
                         

		});
                

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend_ajax/languages/status',
			{
				id: $(this).attr('id'),
				status: ($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
		
		

	});
	
}

function just_warning_delete()
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
	});

}
/**/
function page_products(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		

		$('ul#sortable').sortable({

		  update : function () {
                        $(this).removeClass('tp');
                        
			var sort_wrap = $(this);

				order = sort_wrap.sortable('serialize');
				if (!page_num)
				{
					page_num = 1;	
				}
				$.ajax({

					type: "POST",

					url: "/backend/ajax/products_sort",

					data: order+'&tablename=content&page='+page_num

				});
                              $(this).addClass('tp');   
			  }
                          
                         

		});
		
		
		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/product_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
	});
	
}
/**/
function page_main(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		

		$('ul#sortable').sortable({

		  update : function () {
                        $(this).removeClass('tp');
                        
			var sort_wrap = $(this);

				order = sort_wrap.sortable('serialize');
				if (!page_num)
				{
					page_num = 1;	
				}
				$.ajax({

					type: "POST",

					url: "/backend/ajax/page_sort",

					data: order+'&tablename=content&page='+page_num

				});
                              $(this).addClass('tp');   
			  }
                          
                         

		});
		
		$('.tp').click(function(){
			
			location.href = $(this).attr('href');
		});
		
		$('.ps_coll.menu_item').click(function(){
			_this = $(this);
			$.post('/backend/ajax/change_menu_item_status',
			{
				pid:$(this).attr('pid'),
				menu:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/page_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
		
		$('.ps_coll.index').click(function(){
			if ($(this).is('.active'))
				return false;
			_this = $(this);
			$.post('/backend/ajax/change_index_status',
			{
				pid:$(this).attr('pid'),
			},
			function(data){
				if (data)
				{
					$('.ps_coll.index').removeClass('active').html('Нет');
					$(_this).html('Да');
					$(_this).toggleClass('active');
				}
			});
			return false;
		});


	});
	
}
/**/
function page_regions(page_num)
{
	$(document).ready(function(e) {
		
		

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/regions_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
		
		

	});
	
}
/**/
function page_discussions(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		
		
		
		

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/discussions_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
		
		

	});
	
}
/**/
function page_overviews(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		
		
		
		

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/overviews_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
		
		

	});
	
}


/**/
function page_banners(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		

		$('ul#sortable').sortable({

		  update : function () {

			var sort_wrap = $(this);

				order = sort_wrap.sortable('serialize');
				if (!page_num)
				{
					page_num = 1;	
				}
				$.ajax({

					type: "POST",

					url: "/backend/ajax/sort_banners",

					data: order+'&tablename=content&page='+page_num

				});

			  }

		});
		
		
		

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/banner_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
		
		

	});
	
}
/**/
function page_brands(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		

		$('ul#sortable').sortable({

		  update : function () {

			var sort_wrap = $(this);

				order = sort_wrap.sortable('serialize');
				if (!page_num)
				{
					page_num = 1;	
				}
				$.ajax({

					type: "POST",

					url: "/backend/ajax/sort_brands",

					data: order+'&tablename=content&page='+page_num

				});

			  }

		});

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/brands_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});

	});
	
}
/**/
function page_categories(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		

		$('ul#sortable').sortable({

		  update : function () {

			var sort_wrap = $(this);

				order = sort_wrap.sortable('serialize');
				if (!page_num)
				{
					page_num = 1;	
				}
				$.ajax({

					type: "POST",

					url: "/backend/ajax/sort_categories",

					data: order+'&tablename=content&page='+page_num

				});

			  }

		});

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/categories_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});

	});
	
}

/**/
function page_filters(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
                        _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		

		$('ul#sortable').sortable({

		  update : function () {

			var sort_wrap = $(this);

				order = sort_wrap.sortable('serialize');
				if (!page_num)
				{
					page_num = 1;	
				}
				$.ajax({

					type: "POST",

					url: "/backend/ajax/sort_filters_items",

					data: order+'&tablename=content&page='+page_num

				});

			  }

		});

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/filters_items_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});

	});
	
}

/**/
function page_filters_groups(page_num)
{
	$(document).ready(function(e) {
		
		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});
		

		$('ul#sortable').sortable({

		  update : function () {

			var sort_wrap = $(this);

				order = sort_wrap.sortable('serialize');
				if (!page_num)
				{
					page_num = 1;	
				}
				$.ajax({

					type: "POST",

					url: "/backend/ajax/sort_filters_groups",

					data: order+'&tablename=content&page='+page_num

				});

			  }

		});

		$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/filters_groups_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});

	});
	
}

function page_inner()
{
	$(document).ready(function(e) {
        
			$('.ps_coll.is_visible').click(function(){
			_this = $(this);
			$.post('/backend/ajax/change_visible_status',
			{
				pid:$(this).attr('pid'),
				visible:($(this).is('.active') ? 0 : 1)
				
			},
			function(data){
				if (data)
				{
					$(_this).toggleClass('active');
					$(_this).html(data);
				}
			});
			return false;
		});
        
    });
}

function new_feedback()
{
	$(document).ready(function(e) {
        $('.message_display').click(function(e) {
            _div = $(this).next('div');
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Удалить' : function () {
						document.location='/backend/feedback/delete/'+_div.attr('pid')+'/'+_div.attr('hs');
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Переместить в прочитанные' : function () {
						document.location='/backend/feedback/change_read/'+_div.attr('pid');
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Закрыть': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
        });

		$('.delete_this').click(function(e) {
            _div = $('#message_to_delete');
			_this = $(this);
			$('#dialog').attr('title',_div.attr('title')).html(_div.html());
	
			$("#dialog").dialog({
				width:700,
				buttons: {
					'Да' : function () {
						document.location=_this.attr('href');;
						$(this).dialog( "close" ).dialog("destroy");
					},
					'Отмена': function() {
						$(this).dialog( "close" ).dialog("destroy");
					}
				}
			});
			return false;
		});

    });
	
}

function plane_edit_page()
{
	$(document).ready(function(e) {
        $('select[name="city_id"]').change(function(){
			val = $(this).val();
			street1 = '';
			street2 = '';
			block = '';
			
			$.each(locations, function(a,b){
				if (b.parent_id == val && b.level == 2)
				{
					block += '<option value="'+b.id+'">'+b.name+'</option>';					
				}
				if (b.parent_id == val && b.level == 3)
				{
					street1 += '<option value="'+b.id+'">'+b.name+'</option>';					
				}
				if (b.parent_id == val && b.level == 3)
				{
					street2 += '<option value="'+b.id+'">'+b.name+'</option>';					
				}
			});
			
			_obj = $('select[name="block_id"]');
			$(_obj).find('option').remove();
			$(_obj).append(block);			
			
			_obj = $('select[name="street1_id"]');
			$(_obj).find('option').remove();
			$(_obj).append(street1);			
			
			_obj = $('select[name="street2_id"]');
			$(_obj).find('option[value!=""]').remove();
			$(_obj).append(street2);			
			
			
		});
    });	
	
	just_warning_delete();
	
}


function content_pages() {
    $(document).ready(function(e) {
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

        $('ul#sortable').sortable({

            update : function () {
                $(this).removeClass('tp');

                var sort_wrap = $(this);
                var order = sort_wrap.sortable('serialize');

                $.ajax({
                    type: "POST",
                    url: "/backend_ajax/pages/sort",
                    data: order
                });
                $(this).addClass('tp');   
            }
        });
    });
}

function gift_groups_list() {
    $(document).ready(function(e) {
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

        $('ul#sortable').sortable({

            update : function () {
                $(this).removeClass('tp');

                var sort_wrap = $(this);
                var order = sort_wrap.sortable('serialize');

                $.ajax({
                    type: "POST",
                    url: "/backend_ajax/giftgroups/sort",
                    data: order
                });
                $(this).addClass('tp');   
            }
        });
        
        $('.ps_coll.is_visible').click(function(){
            _this = $(this);
            $.post('/backend_ajax/giftgroups/status',
            {
                    id: $(this).attr('pid'),
                    status: ($(this).is('.active') ? 0 : 1)

            },
            function(data){
                    if (data)
                    {
                            $(_this).toggleClass('active');
                            $(_this).html(data);
                    }
            });
            return false;
      });
    });
}

function virtualgift_groups_list() {
    $(document).ready(function(e) {
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

        $('ul#sortable').sortable({

            update : function () {
                $(this).removeClass('tp');

                var sort_wrap = $(this);
                var order = sort_wrap.sortable('serialize');

                $.ajax({
                    type: "POST",
                    url: "/backend_ajax/virtfualgiftgroups/sort",
                    data: order
                });
                $(this).addClass('tp');   
            }
        });
        
        $('.ps_coll.is_visible').click(function(){
            _this = $(this);
            $.post('/backend_ajax/virtualgiftgroups/status',
            {
                    id: $(this).attr('pid'),
                    status: ($(this).is('.active') ? 0 : 1)

            },
            function(data){
                    if (data)
                    {
                            $(_this).toggleClass('active');
                            $(_this).html(data);
                    }
            });
            return false;
      });
    });
}

function page_gifts() {
    $(document).ready(function(e) {
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

        $('ul#sortable').sortable({

            update : function () {
                $(this).removeClass('tp');

                var sort_wrap = $(this);
                var order = sort_wrap.sortable('serialize');

                $.ajax({
                    type: "POST",
                    url: "/backend_ajax/gifts/sort",
                    data: order
                });
                $(this).addClass('tp');   
            }
        });
        
        $('.ps_coll.is_visible').click(function(){
            _this = $(this);
            $.post('/backend_ajax/gifts/status',
            {
                    id: $(this).attr('pid'),
                    status: ($(this).is('.active') ? 0 : 1)

            },
            function(data){
                    if (data)
                    {
                            $(_this).toggleClass('active');
                            $(_this).html(data);
                    }
            });
            return false;
      });
    });
}

function sprav_page() {
    $(document).ready(function(e) {
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

        $('ul#sortable').sortable({

            update : function () {
                $(this).removeClass('tp');

                var sort_wrap = $(this);
                var order = sort_wrap.sortable('serialize');

                $.ajax({
                    type: "POST",
                    url: "/backend_ajax/sprav/sort",
                    data: order
                });
                $(this).addClass('tp');   
            }
        });
        
        $('.ps_coll.is_visible').click(function(){
            _this = $(this);
            $.post('/backend_ajax/sprav/status',
            {
                    id: $(this).attr('id'),
                    status: ($(this).is('.active') ? 0 : 1)

            },
            function(data){
                    if (data)
                    {
                            $(_this).toggleClass('active');
                            $(_this).html(data);
                    }
            });
            return false;
      });
    });
}

function height_page() {
    $(document).ready(function(e) {
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

        $('ul#sortable').sortable({

            update : function () {
                $(this).removeClass('tp');

                var sort_wrap = $(this);
                var order = sort_wrap.sortable('serialize');

                $.ajax({
                    type: "POST",
                    url: "/backend_ajax/hight/sort",
                    data: order
                });
                $(this).addClass('tp');   
            }
        });
        
        $('.ps_coll.is_visible').click(function(){
            _this = $(this);
            $.post('/backend_ajax/hight/status',
            {
                    id: $(this).attr('id'),
                    status: ($(this).is('.active') ? 0 : 1)

            },
            function(data){
                    if (data)
                    {
                            $(_this).toggleClass('active');
                            $(_this).html(data);
                    }
            });
            return false;
      });
    });
}

function weight_page() {
    $(document).ready(function(e) {
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

        $('ul#sortable').sortable({

            update : function () {
                $(this).removeClass('tp');

                var sort_wrap = $(this);
                var order = sort_wrap.sortable('serialize');

                $.ajax({
                    type: "POST",
                    url: "/backend_ajax/weight/sort",
                    data: order
                });
                $(this).addClass('tp');   
            }
        });
        
        $('.ps_coll.is_visible').click(function(){
            _this = $(this);
            $.post('/backend_ajax/weight/status',
            {
                    id: $(this).attr('id'),
                    status: ($(this).is('.active') ? 0 : 1)

            },
            function(data){
                    if (data)
                    {
                            $(_this).toggleClass('active');
                            $(_this).html(data);
                    }
            });
            return false;
      });
    });
}

function page_virtualgifts() {
    $(document).ready(function(e) {
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

        $('ul#sortable').sortable({

            update : function () {
                $(this).removeClass('tp');

                var sort_wrap = $(this);
                var order = sort_wrap.sortable('serialize');

                $.ajax({
                    type: "POST",
                    url: "/backend_ajax/virtualgifts/sort",
                    data: order
                });
                $(this).addClass('tp');   
            }
        });
        
        $('.ps_coll.is_visible').click(function(){
            _this = $(this);
            $.post('/backend_ajax/virtualgifts/status',
            {
                    id: $(this).attr('pid'),
                    status: ($(this).is('.active') ? 0 : 1)

            },
            function(data){
                    if (data)
                    {
                            $(_this).toggleClass('active');
                            $(_this).html(data);
                    }
            });
            return false;
      });
    });
}

function page_agency() {
    $(document).ready(function(e) {
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

    });
}

function page_girls() {
    $(document).ready(function(e) {
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

    });
}

function admins() {
    
    $(document).ready(function(e) {

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
    });
}

function page_reviews() {
    $(document).ready(function(e) {
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

    });
}

function page_men() {
    $(document).ready(function(e) {
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

    });
}

function list_photos() {
    $(document).ready(function(e){
            /* Delete photo */
        $('#uploaded-images').on('click', '.delete-catalog-image', function(){
            if (!confirm('Are you sure?')) 
                return; 

            var image = $(this);
            var id = image.attr('data-id');

            $.ajax({
                type: 'POST',
                url: '/backend_ajax/photos/delete',
                dataType: 'JSON',
                data: {
                    id: id,                
                },
                success: function(data) {
                    image.parent().parent().remove();
                }
            });
        });
        
        /* set default catalog photo */
        $('#uploaded-images').on('click', '.default-image', function(event) {        

            var target = event.target || event.srcElement;
            if (target.nodeName != 'INPUT') return;

            var imageId = $(this).children('input:last-child').val();

            $.ajax({
                type: 'POST',
                url: '/backend_ajax/photos/defaultimage',
                dataType: 'JSON',
                data: {
                    id : imageId      
                },
                success: {}
            });
        });
        /* .set default catalog photo */
        
        /* Sort catalog images */
            $("#uploaded-images").sortable({		        
                    stop: function () {
                            var order = [];
                            $("#uploaded-images > .catalog-image").each(function() {
                                    order.push($(this).attr('data-image'));
                            });			
                            $.ajax({
                                    type: 'POST',
                                    url: '/backend_ajax/photos/sort',
                                    dataType: 'JSON',
                                    data: {
                                            order : order					
                                    },
                                    success: {}
                            });
                    }		
        });
        $('#uploaded-images .catalog-image').each(function(){
            $(this).width($(this).width())
        })
	
	/* .Sort catalog images */
        
        /* Colorbox for catalog images */
            $('#uploaded-images').on('click', '.colorbox', function() {       
            var rel = $(this).attr('rel');
            var parent = $(this).parent().parent().parent();

            parent.find('a[rel="'+rel+'"]').colorbox({
                open: false,
                rel: rel
            });

            $(this).colorbox();    
            return false;
        });
	/* .Colorbox for catalog images */
    })
}

function page_adminletters() {
    $(document).ready(function(e) {
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

    });
}