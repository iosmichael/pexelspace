


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

	// Word_rewrite starter
	var w_r_lists = [];
	var word_rewrites = document.getElementsByClassName("word-rewrite");
	for (var i = 0; i < word_rewrites.length; i++) {
		w_r_lists.splice(i, 0, []);
		var w_r_items = word_rewrites[i].getElementsByTagName("li");
		for (var j = 0; j < w_r_items.length; j++) {
			w_r_lists[i].splice(j, 0, w_r_items[j]);
		}

	}

	var w_r_start_list = function(liArray) {
		var i = 0;
		var processing = 0;
		setInterval(function() {
			if (!processing) {
				var done = [0];
				w_r_write_item(liArray[i], done);
			
				var checkWrite = setInterval(function() {
					if (done[0]) {
						clearInterval(checkWrite);

						liArray[i].parentNode.classList.add("waiting");
						setTimeout(function() { 
							liArray[i].parentNode.classList.remove("waiting");
							done[0] = 0;
							w_r_delete_item(liArray[i], done)

							var checkDelete = setInterval(function() {
								if (done[0]) {
									clearInterval(checkDelete);
									liArray[i].style.display = "";
									i = (i + 1) % liArray.length;
									processing = 0; 
								}
							}, 100);
						}, 2000);

					}
				}, 100);
				processing = 1;
			}

		}, 100);
	};

	var w_r_write_item = function(li, finished) {
		var str = li.innerHTML;
		li.innerHTML = "";
		li.style.display = "inline";

		var i = 0;
		var interval = setInterval(function() {
			li.innerHTML = li.innerHTML + str[i];
			if (++i >= str.length) {
				clearInterval(interval);
				finished[0] = 1;
			}
		}, 100);
	};

	var w_r_delete_item = function(li, finished) {
		var str = li.innerHTML;

		var interval = setInterval(function() {
			li.innerHTML = li.innerHTML.substring(0, li.innerHTML.length - 1);
			if (li.innerHTML <= 0) {
				clearInterval(interval);
				li.style.display = "";
				li.innerHTML = str;
				finished[0] = 1;
			}
		}, 50);
	}

	w_r_lists.forEach(function(list) { w_r_start_list(list); });
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

