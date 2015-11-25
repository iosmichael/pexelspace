<html lang="en">
	<head>
	<?php include "global.php" ?>
	<link rel="stylesheet" type="text/css" href="Assets/CSS/services.css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"  type="text/css">
	<script src="./Assets/JS/services.js"></script>
	<title>Our Service</title>
	</head>

	<body>
		<?php siteHeader(); ?>
		<div class="title-wrapper">
			<div class="title-content">
				<h1 class="title-service">Ideas Matter</h1>
				<h4 class="title-disc"> Whether you want to advertise your work or communicate with potential investors, we will help you initiate the first step towards your goal. </h4>
			</div>
		</div>
		<div class="divider"></div>

		<div class="main-content">
			<div class= "container">
				<div class="application-forms">
					<div class= "col-lg-10 col-lg-offset-1 form-one" id="mid-content">
						<div class="row" class="step-page">
							<div class="number">
								<p>1</p>
							</div>
							<div class="step-title">
								<h2>Submit Your Project</h2>
							</div>
							<div class="row image-icon col-lg-6 col-lg-offset-3">
								<div class="col-lg-6 col-lg-offset-3">
									<img src="./Assets/Images/submit-project-icon.png">
								</div>
								
							</div>
							<div class="step-descirption col-lg-6 col-lg-offset-3">
								<p>Online project submission: </p>
								<ul>
									<li>What is your idea?</li>
									<li>What is the name of your business/ project?</li>
									<li>What is your team? Who are the members on your team?</li>
									<li>If you want us to develop a website for you, in what way are you foreseeing to use this website</li>
								</ul>
							</div>
						</div>
						<div class="divider"></div>
						<div class="row" class="step-page">
							<div class="number">
								<p>2</p>
							</div>
							<div class="step-title">
								<h2>Consult with The Team</h2>
							</div>
							<div class="row image-icon col-lg-6 col-lg-offset-3">
								<div class="col-lg-6">
									<img src="./Assets/Images/consult-icon-one.png">
								</div>
								<div class="col-lg-6">
									<img src="./Assets/Images/consult-icon-two.png"> 
								</div>
							</div>
							<div class="step-descirption col-lg-6 col-lg-offset-3">
								<ul>
									<li>One UI Designer</li>
									<li>One Software Programmer</li>
								</ul>
								<p><span class="big-letter">By</span> providing our knowledge in technological industry, we want to give beneficial technical consulting to the small businesses. During the process, the entrepreneurial team will meet with one of our marketing team members and one of our technical team members. Together we will polish the ideas and set up the plans for future cooperation at the convenience of both parties.</p>
							</div>
						</div>
						<div class="divider"></div>
						<div class="row" class="step-page">
								<div class="number">
									<p>3</p>
								</div>
								<div class="step-title">
									<h2>Website Development</h2>
								</div>
								<div class="row image-icon col-lg-6 col-lg-offset-3">
									<div class="col-lg-6">
										<img src="./Assets/Images/website-dev.png">
									</div>
									<div class="col-lg-6">
										<img src="./Assets/Images/website-dev-two.png"> 
									</div>
								</div>
								<div class="step-descirption col-lg-6 col-lg-offset-3">
									<p><span class="big-letter">We</span> understand that most of the small business and student project may experience financial difficulty of affording to build their professional websites. Because we want you to enjoy your start-up experience without worrying about the mass cost of building, the price listed on our website is negotiable.</p>
								</div>
						</div>
						<div class="divider"></div>
						<div class="row" class="step-page ">
								<div class="number">
									<p>4</p>
								</div>
								<div class="step-title">
									<h2>Web Applications</h2>
								</div>
								<div class="row image-icon col-lg-6 col-lg-offset-3">
									<div class="col-lg-6 col-lg-offset-3">
										<img src="./Assets/Images/web-app-icon.png">
									</div>
								</div>
								<div class="step-descirption col-lg-6 col-lg-offset-3">
									<p><span class="big-letter">We</span> understand that most of the small business and student project may experience financial difficulty of affording to build their professional websites. Because we want you to enjoy your start-up experience without worrying about the mass cost of building, the price listed on our website is negotiable.</p>
								</div>
						</div>
					</div>

					<div class="form-two" id="form-two">


					</div>
				</div>

				<div class="col-lg-10 col-lg-offset-1 selection">
					<div class="row">
						<div class="col-lg-5" id="selection-form-one">
							<div id="selection-description">
								<h2>Website for Individual</h2>
								<div id="wrapper-desc">
									<p>
									Build personal blog, portfolio, and informative website
									</p>
								</div>
								<button onclick="formButtonClicked('1','#selection-form-one','#selection-form-two')">Learn More</button>
							</div>
						</div>
						<div class="col-lg-5 col-lg-offset-2" id="selection-form-two">
							<div id="selection-description">
								<h2>Website for Organization</h2>
								<div id="wrapper-desc">
									<p>
									Build website creative business ideas and cross-platform ecommerce site
									</p>
								</div>
								<button onclick="formButtonClicked('2','#selection-form-one','#selection-form-two')">Learn More</button>
							</div>
						</div>

					</div>

				</div>


			</div>
		</div>
	</body>

	<?php siteFooter(); ?>
</html>