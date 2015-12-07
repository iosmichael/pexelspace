<!DOCTYPE html>
<html>
<head>
	<?php include "global.php" ?>
	<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/index.css">
	<script src="./Assets/JS/index.js"></script>

</head>
<body>
	<?php siteHeader(); ?>

	<div class="title-wrapper">
		<div class="title-content col-xs-offset-2 col-xs-8">
			
				<ul class="word-rewrite">
					<li>Digital Applications?</li>
					<li>Technical Infrastructures?</li>
					<li>Personal Websites?</li>
				</ul>
				<p>We can build those too</p>
				<p>We are a team of developers who provide affordable technical solutions for student entrepreneurs and small-business endeavors.</p>
		
		</div>
	</div>

	<div class="container-fluid main-content">


		<section class="row section viewport-section"> 
			<div class="col-sm-10 col-sm-offset-1 section-content viewport-section-content" id="services-wrapper">
				
			<h2 class="index-section-header">What can we build?</h2>

				<div class="col-sm-4 services-object" id="services-portfolio">
					<h2 class="services-header">
						<img class="services-icon" src="./Assets/Images/portfolio-icon.png">
						<span class="services-title">Portfolio</span>
					</h2>
					<p class="services-desc">
						Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
						Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.
					</p>
				</div>

				<div class="col-sm-4 services-object" id="services-website">
					<h2 class="services-header">
						<img class="services-icon" src="./Assets/Images/website-icon.png">
						<span class="services-title">Website</span>
					</h2>
					<p class="services-desc">
						Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
						Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.
						Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. 
					</p>
				</div>

				<div class="col-sm-4 services-object" id="services-application">
					<h2 class="services-header">
						<img class="services-icon" src="./Assets/Images/application-icon.png">
						<span class="services-title">Application</span>
					</h2>
					<p class="services-desc">
						Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
						Donec rutrum congue leo eget malesuada.
						Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. 
					</p>
				</div>

			</div>
		</section>

		<section class="row" id="quote-wall">
			<div class="col-sm-10 col-sm-offset-1">
				<blockquote>
					<p class="quote">
						Creativity is just connecting things. When you ask creative people how they did something, 
						they feel a little guilty because they didn't really do it, 
						they just saw something. It seemed obvious to them after a while. 
						That's because they were able to connect experiences they've had and synthesize new things.
					</p>
					<p class="citation">Steve Jobs</p>
				</blockquote>
			</div>
		</section>


		<section class="row section" id="team-wrapper">
			<div class="col-xs-10 col-xs-offset-1 section-content" id="team-content">

				<h2 class="index-section-header">Who are we?</h2>

				<div class="row">
					<div class="col-xs-4 profile-wrapper" id="profile-derek">
						<div class="profile-content">
							<img class="profile-img" src="./Assets/Images/derek.jpg">
							<div class="profile-body">
								<h2 class="profile-name">Derek Schlabach</h2>
								<p class="profile-job">Developer</p>
								<hr>
								<a class="profile-contact" href="mailto:derekschlabach@gmail.com">
									<span class="glyphicon glyphicon-envelope"></span>
									derekschlabach@gmail.com
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-4 profile-wrapper" id="profile-michael">
						<div class="profile-content">
							<img class="profile-img" src="./Assets/Images/michael.jpg">
							<div class="profile-body">
								<h2 class="profile-name">Michael Liu</h2>
								<p class="profile-job">Developer</p>
								<hr>
								<a class="profile-contact" href="mailto:michael.liu@my.wheaton.edu">
									<span class="glyphicon glyphicon-envelope"></span>
									michael.liu@my.wheaton.edu
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-4 profile-wrapper" id="profile-you">
						<div class="profile-content">
							<img class="profile-img" src="./Assets/Images/silhouette.jpg">
							<div class="profile-body">
								<h2 class="profile-name">You</h2>
								<p class="profile-job">&nbsp</p>
								<hr>
								<a class="profile-contact">
									&nbsp
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<?php siteFooter(); ?>
</body>
</html>