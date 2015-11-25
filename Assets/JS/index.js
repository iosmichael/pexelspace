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

var enterTeam = {
	setup: function() {
		$( "#team-wrapper .profile-content" ).each(function() {
			$( this ).transition({ opacity: 0, x: "-20%" }, 0);
		});
	},
	enter: function(scrollBottom, timePerItem) {
		if (scrollBottom >= $( "#team-wrapper" ).offset().top) {
			var counter = 0;
			$( "#team-wrapper .profile-content" ).each( function(i) {
				var servicesObject = this;
				var loadServices = setInterval(function() {
					if (counter == i) {
						clearInterval(loadServices);

						$( servicesObject ).transition({ opacity: 1, x: 0 }, timePerItem);
						setTimeout(function() { counter += 1 }, timePerItem);
					}
				}, 10);
			});
			return true;
		}
	}
}

var scrollEntrances = Array();
scrollEntrances.push(enterServices);
scrollEntrances.push(enterTeam);

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
			console.log(entrance);
			if (entrance.enter(scrollBottom, 1250))
				scrollEntrances.splice(scrollEntrances.indexOf(entrance), 1);
		});
	};
	scrollEntrances.forEach(function(entrance) { entrance.setup(); });

	tryScrollEntrances();
	$( window ).scroll(tryScrollEntrances);

}