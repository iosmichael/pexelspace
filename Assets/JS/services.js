function formButtonClicked(formNum,elem1,elem2){
			$(elem2).transition({
					x:'200px',
					opacity:'0'
				},500,'ease');
			$(elem1).transition({
					x:'-200px',
					opacity:'0'
				},500,'ease',function (){
					if (formNum==1) {
							document.getElementsByClassName("form-one")[0].style.display="block";
							document.getElementsByClassName("application-forms")[0].style.display="block";
							$(".application-forms").transition({
									delay:300,
									opacity:'1'
							});

							}else if (formNum==2) {
								document.getElementsByClassName("form-one")[0].style.display="block";
								document.getElementsByClassName("application-forms")[0].style.display="block";
								$(".application-forms").transition({
									delay:300,
									opacity:'1'
								});
							}else{
								return;
							};
							document.getElementsByClassName("selection")[0].style.display="none";

				});
			
		}

