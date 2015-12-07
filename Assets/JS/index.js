var readyStateCheckIntervalIndex = setInterval(function() {
    if (document.readyState === "complete") {
        clearInterval(readyStateCheckIntervalIndex);
        bodyLoad();
    }
}, 10);

var enterServices = {
	setup: function() {
		$( "#services-wrapper .services-object" ).each(function() {
			$( this ).transition({ x: "-20%", opacity: 0 }, 0);
		});
	},
	enter: function(scrollBottom, timePerItem) {
		if (scrollBottom >= $( "#services-wrapper" ).offset().top) {
			var counter = 0;
			$( "#services-wrapper .services-object" ).each( function(i) {
				var servicesObject = this;
				var loadServices = setInterval(function() {
					if (counter == i) {
						clearInterval(loadServices);

						$( servicesObject ).transition({ x: 0, opacity: 1 }, timePerItem);
						setTimeout(function() { counter += 1 }, timePerItem);
					}
				}, 10);
			});
			return true;
		}
	}
};

var scrollEntrances = Array();
scrollEntrances.push(enterServices);

function bodyLoad() {
	if ($( "#profile-you .profile-content")[0])
		$( "#profile-you .profile-content" )
			.hover(function(evt) {
			if (evt.type == "mouseenter") evt.currentTarget.classList.add("profile-hover");
			else evt.currentTarget.classList.remove("profile-hover"); 
		})
			.click(function() { 
				window.location.replace("./team.php");
			});

	var tryScrollEntrances = function() {
		var scrollBottom = ($( "body" ).scrollTop() || $( "html" ).scrollTop()) + (window.innerHeight - $( ".navbar" ).outerHeight());
		scrollEntrances.forEach(function(entrance) {
			if (entrance.enter(scrollBottom, 1250))
				scrollEntrances.splice(scrollEntrances.indexOf(entrance), 1);
		});
	};
	scrollEntrances.forEach(function(entrance) { entrance.setup(); });

	$( window ).scroll(tryScrollEntrances);



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