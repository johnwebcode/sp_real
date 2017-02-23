$(function() {
	
	var json = {};
	
	$.get(baseurl + "ajax-floor",
			function(data){
				json = data;
				$('#ms').magicSuggest({
				
					data: json,
					valueField: 'id',
					displayField: 'name'
				});
				});
	
});