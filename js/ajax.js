$(document).ready( function () {

	$('.btn-load').click( function () {

		var get_url = this.id;
		get_url = get_url + '.php';

		$.ajax({
			url: get_url,
			success: function(data){
				$('#body-content').html(data);
			},
			beforeSend: function(){
				$('#loader').css({display: "block"});
			},

			complete: function(){
				$('#loader').css({display: "none"});
			}
		});
	});
});