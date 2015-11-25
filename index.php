<!DOCTYPE html>
<html>
<head>
	<?php include "global.php" ?>
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/index.css">
	<script src="./Assets/JS/index.js"></script>
</head>
<body>
	<?php siteHeader(); ?>

	<div class="title-wrapper">
		<div class="title-content">
			
			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
				<h1><strong><ul class="word-rewrite">
					<li>Digital Applications?</li>
					<li>Technical Infrastructures?</li>
					<li>Personal Websites?</li>
				</ul></strong></h1>
				<h1>We can build those too</h1>
				<p>We are a team of student developers who provide affordable technical solutions for student entrepreneurs and small-business endeavors.</p>
			</div>
		
		</div>
	</div>

	<div class="main-content">
		
		<div class="container">
			<div class="col-sm-10 col-sm-offset-1">

				<section class="section viewport-section"> 
					<div class="section-content viewport-section-content" id="services-wrapper">
						
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
				
				<hr>

				<section class="section">
					<div class="section-content" id="team-wrapper">

						<div class="row">
							<div class="col-sm-4 profile-wrapper" id="profile-derek">
								<div class="profile-content">
									<img class="profile-img" src="./Assets/Images/derek.jpg">
									<div class="profile-body">
										<h2 class="profile-name">Derek Schlabach</h2>
										<p class="profile-job">Developer</p>
										<hr>
										<p class="profile-contact">
											derekschlabach@gmail.com
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-4 profile-wrapper" id="profile-michael">
								<div class="profile-content">
									<img class="profile-img" src="./Assets/Images/michael.jpg">
									<div class="profile-body">
										<h2 class="profile-name">Michael Liu</h2>
										<p class="profile-job">Developer</p>
										<hr>
										<p class="profile-contact">
											michael.liu@my.wheaton.edu
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-4 profile-wrapper" id="profile-you">
								<div class="profile-content">
									<img class="profile-img" src="./Assets/Images/silhouette.jpg">
									<div class="profile-body">
										<h2 class="profile-name">&ltYour Name Here&gt</h2>
										<p class="profile-job">TBD</p>
										<hr>
										<p class="profile-contact">
											your.name@my.wheaton.edu
										</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>
				
				<hr>

				<div id="quote-wall">
					<p class="col-sm-8 col-sm-offset-2">
						<em class="quote">
							Creativity is just connecting things. When you ask creative people how they did something, 
							they feel a little guilty because they didn't really do it, 
							they just saw something. It seemed obvious to them after a while. 
							That's because they were able to connect experiences they've had and synthesize new things.
						</em>
						<br> 
						—Steve Jobs, Apple
					</p>
				</div>
			</div>
		</div>

	</div>

	<?php siteFooter(); ?>
</body>
</html>