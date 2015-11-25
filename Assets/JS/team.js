function formButtonClicked(){
			if ($("#form-button").hasClass("clicked")) {
				$("#form-button").transition({
																x:'0px'
																},500,'ease');
				$("#open-form-button").transition({ rotate: '0deg'});
				$("#open-form-title").text("Join Us");
				$("#join-team-form").transition({
					opacity:'0',
					display:'none',
					height:'0px'
				},500,'ease');

				$("#form-button").toggleClass("clicked");
				$('html, body').animate({scrollTop:$('.title-wrapper').offset().top-100}, 'slow');


			}else{

				$("#form-button").transition({
																x:'45%'
																},500,'ease');
				$("#open-form-button").transition({rotate:'45deg'});
				$("#open-form-title").text("Cancel");
				$("#join-team-form").transition({
					opacity:'1',
					display:'block',
					height:'1000px'
				},500,'ease');
				$("#form-button").toggleClass("clicked");
				$('html, body').animate({scrollTop:$('#join-team-form').offset().top-100}, 'slow');

			};
		}