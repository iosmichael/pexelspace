<html lang="en">
	<head>
	<?php include "global.php" ?>
	<script src="./Assets/JS/dropzone.js"></script>
	<link rel="stylesheet" type="text/css" href="Assets/CSS/dropzone.css">
	<link rel="stylesheet" type="text/css" href="Assets/CSS/submission.css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"  type="text/css">
	<title>Project Submission</title>

	</head>
	<body>
	<?php siteHeader(); ?>

	<div class="application-forms container">
			<div class= "col-lg-10 col-lg-offset-1 form-one" id="mid-content">
				<div class="row" class="step-page">
							<div class="number">
								<p>1</p>
							</div>
							<div class="template">
								<a href="#" target="_blank">Download Form</a>
							</div>
						</div>
						<div class="divider"></div>
						<div class="row" class="step-page">
							<div class="number">
								<p>2</p>
							</div>
							<div class="step-title">
								<h2>Fill Out Form</h2>
							</div>
							<div class="row image-icon col-xs-6 col-xs-offset-3">
								<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
									<img src="./Assets/Images/submit-project-icon.png">
								</div>
							</div>
						</div>
						<div class="divider"></div>
						<div class="row" class="step-page">
								<div class="number">
									<p>3</p>
								</div>
								<form action="upload.php" class="dropzone dropit">
									<div class="dz-message">
										<img class="dz-img" src="Assets/Images/upload.png">
										<br>
										<p class="dz-drop-msg">Drop File Here to Submit</p>
										<br>
										<p class="dz-click-here">Or Click Here</p>
									</div>
								</form>
						</div>
						<div class="divider"></div>
						
					</div>

					<div class="form-two" id="form-two">


					</div>
				</div>
			

		<?php siteFooter(); ?>
		</body>
</html>