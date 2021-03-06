$(document).ready(function(){
	$('#cbox').fadeIn('slow');
	$('#password').focus();
	$('#goButton').on('click touchend',function(){
		$('#password').addClass('wait');
		$('#goButton').hide();

		$.post('./scripts/login.php',{pass:$('#password').val()},function(response){
			if(response=='success') {
				window.location.reload();
			} else {
				$('#password').parent().addClass('has-error');
				$('#inf-wrap').removeClass('alert-info');
				$('#inf-wrap').removeClass('alert-success');
				$('#inf-wrap').addClass('alert-warning');
				$('#inf-text').html('Ooops! Forgotten your password? Get in touch with Ed on <a href="mailto:edgehillventure@gmail.com">edgehillventure@gmail.com</a> or <a href="tel:07400906360">07400906360</a>');
				$('#password').removeClass('wait');
				$('#goButton').show();
				console.log(response);		
			}
		});
	});

	$('#password').on('keyup',function(event){
		if(event.keyCode == 13) {
			$('#password').addClass('wait');
			$('#goButton').hide();

			$.post('./scripts/login.php',{pass:$('#password').val()},function(response){
				if(response=='success') {
					window.location.reload();
				} else {
					$('#password').parent().addClass('has-error');
					$('#inf-wrap').removeClass('alert-info');
					$('#inf-wrap').removeClass('alert-success');
					$('#inf-wrap').addClass('alert-warning');
					$('#inf-text').html('Ooops! Forgotten your password? Get in touch with Ed on <a href="mailto:edgehillventure@gmail.com">edgehillventure@gmail.com</a> or <a href="tel:07400906360">07400906360</a>');
					$('#password').removeClass('wait');
					$('#goButton').show();		
					console.log(response);
				}
			});
		}
	});
});
