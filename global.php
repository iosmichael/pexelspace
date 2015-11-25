<?php
	$stylesheets = [ "./Assets/CSS/bootstrap.min.css", "./Assets/CSS/global.css" ];
	$javascripts = [ "./Assets/JS/jquery.js", "./Assets/JS/global.js", "./Assets/JS/jquery.transit.js", "./Assets/JS/jquery.easing.js" ];

	foreach ($stylesheets as $sheet)
		echo "<link rel='stylesheet' type='text/css' href=$sheet>";

	foreach ($javascripts as $script)
		echo "<script src=$script></script>";

	function siteHeader() { 
		$includer = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], "/") + 1);
		$active = [
			"team" => (strpos($includer, "team.php") !== false) ? " class='active'" : "",
			"services" => (strpos($includer, "services.php") !== false) ? " class='active'" : "",
			"home" => (strpos($includer, "index.php") !== false) ? " class='active'" : "",
		];
		$header = [
			"<header>",
				"<nav class='navbar navbar-default'>",
					"<div class='container-fluid'>",
						"<div class='navbar-header'>",
							"<a class='navbar-brand' href='index.php'>",
								"<img src='./Assets/Images/pex-icon-origin.png'>",
							"</a>",
						"</div>",
						"<div class='collapse navbar-collapse'>",
							"<ul class='nav navbar-nav navbar-right'>",
								"<li" . $active['home'] . "><a href='index.php'>Home</a></li>",
								"<li" . $active['services'] . "><a href='services.php'>Services</a></li>",
								"<li" . $active['team'] . "><a href='team.php'>Team</a></li>",
							"</ul>",
						"</div>",
					"</div>",
				"</nav>",
			"</header>"
		];
		echo join($header);
	}

	function siteFooter() {
		
		$footer = [
			"<footer>",
				"<div class='footer'>",
					"footer",
				"</div>",
			"</footer>"
		];
		echo join($footer);
	}