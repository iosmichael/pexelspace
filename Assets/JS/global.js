


var readyStateCheckInterval = setInterval(function() {
    if (document.readyState === "complete") {
        clearInterval(readyStateCheckInterval);
        globalBodyLoad();
    }
}, 10);

function globalBodyLoad() {

	var titleWrapper = document.getElementsByClassName("title-wrapper")[0];
	
	if (titleWrapper) {

		var nextFrame = document.createElement("div");
		nextFrame.classList.add("next-frame");
		
			var glyphicon = document.createElement("span");
			glyphicon.classList.add("glyphicon", "glyphicon-menu-down");
			nextFrame.appendChild(glyphicon);

		$(nextFrame).click(function() { 
			var navHeight = document.getElementsByClassName("navbar")[0].offsetHeight;
			$( "html, body" ).animate({scrollTop: window.innerHeight - navHeight }, 1000, 'easeInOutCubic'); 
		});

		titleWrapper.appendChild(nextFrame);


		var setTitleWrapperHeight = function() {
			var navHeight = $(".navbar").outerHeight();

			$( ".main-content" ).css("margin-top", window.innerHeight + "px");
			$( ".title-wrapper" ).css({	"height": window.innerHeight - navHeight + "px", 
															  	"top" : navHeight + "px" });
		}

		var setTitleWrapperScroll = function() {
			var scrollTop = $( "body" ).scrollTop() || $( "html" ).scrollTop();
			var navHeight = $( ".navbar" ).outerHeight();

			var translateY = "translateY(" + ((scrollTop >= window.innerHeight - navHeight) ? "-100%" : scrollTop / -4 + "px") + ")";
			
			$( ".title-wrapper" ).css({ "transform" : translateY,
																	"webkitTransform" : translateY, "mozTransform" : translateY,
																	"msTransform" : translateY, "oTransform" : translateY });

			if (scrollTop < window.innerHeight - navHeight && $(".title-content")[0])
				$(  ".title-content").css("opacity", 1 - (scrollTop / (window.innerHeight - navHeight)));
		}

		setTitleWrapperHeight();
		setTitleWrapperScroll();
		$( window ).resize(setTitleWrapperHeight)
							 .scroll(setTitleWrapperScroll);

	}


	var resizeUpdate = function() {
		$( ".viewport-section" ).each(function() {
			$( this ).css("height", window.innerHeight - $( ".navbar" ).outerHeight() + "px");
		});
	};

	resizeUpdate();
	$(window).resize(resizeUpdate);

}

function change(icon_name){
	var icon_id = "btn-img-"+icon_name;
	var img_src = document.getElementById(icon_id).src;
	var img_string = img_src.split(".");
	document.getElementById(icon_id).src = img_string[0]+"-highlight.png";
}
function changeback(icon_name){
	var icon_id = "btn-img-"+icon_name;
	var img_src = document.getElementById(icon_id).src;
	var img_string = img_src.split("-highlight");
	document.getElementById(icon_id).src = img_string[0]+".png";
}

