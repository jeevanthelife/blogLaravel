$(function(){
	let ajaxPageReload= (pageUrl) =>{
		$.ajax({
			url: pageUrl,
			method: 'GET',
			success: function(resp){
				$('#pageContainer').html(resp);
			},
			error: function(err){
				console.log(err);
			}
		});
	}

	$('.navigationMenu ul li').on('click',function(e){
		ajaxPageReload($(this).attr('data-url'));
	});
})