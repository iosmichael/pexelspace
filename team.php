<html lang="en">
	<head>
	<?php include "global.php" ?>
	<link rel="stylesheet" type="text/css" href="Assets/CSS/team.css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"  type="text/css">
	<link rel="stylesheet" type="text/css" href="./Assets/CSS/global.css">
	<script src="./Assets/JS/team.js"></script>
	<title>Our Team</title>
	</head>

	<body>
		<?php siteHeader(); ?>
		<div class="title-wrapper">
			<div class="title-content">
				<h1 id="title-service">Our Community</h1>
				<div id="divider"> </div>
				<h4 id="title-disc">We are a group of passionate programmers, who are thriving to write codes that matter</h4>
			</div>
		</div>
		<div class="divider"></div>

		<div class="main-content">
			<div class= "container">

				<div class= "col-lg-10 col-lg-offset-1" id="mid-content">
					<div class="row">
						<div class="team-1">
							<div class="team-img-1 col-lg-3">
								<img src="./Assets/Images/michael.png" class="img-responsive">
							</div>
							<div class="team-desc-1 col-lg-5 col-lg-offset-2">
								<h4>Position:</h4>
								<p>Front-end Developer/ Project Manager</p>
								<h4>Description: </h4>
								<p> Software developer with two years of programming experience on various programming languages. Bilingual international student from China with experience in forming start-up company and communicating with professionals in financial/technical fields. Passionate about developing creative software and improving business strategy. </p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="team-2">
							<div class="team-img-2 col-lg-3">
								<img src="./Assets/Images/derek.png" class="img-responsive">
							</div>
							<div class="team-desc-2 col-lg-5 col-lg-offset-2">
								<h4>Position:</h4>
								<p>Front-end Developer/ Back-end Developer</p>
								<h4>Description:</h4>
								<p> blablabla </p>
							</div>
						</div>
					</div>
					<div class="row">
						<div id="form-button" onclick="formButtonClicked()">
							<img src="./Assets/Images/plus.png" id="open-form-button" class="img-responsive"><span id="open-form-title">Join Us</span>
						</div>

					</div>
					<form class="form" id="join-team-form">
						<h2>Form Submission</h2>
						<div class="divider"></div>
						<div class="application-requirement">
							<h4>We are looking for experienced student designers/ programmers who: (Preferred)</h4>
							<ul>
								<li>Currently enrolled as undergraduate student pursuing a CS degree</li>
								<li>Can communicate clearly and solve complicated problems</li>
								<li>Are able to collaborate with fellow team-members</li>
								<li>Exibit a passion for what they do</li>
								<li>Have a strong desire to help others </li>
							</ul>
						</div>
						<div class="divider"></div>
						<div class="form-group">
							<label for="first-name">First Name:</label>
    						<input type="text" class="form-control" id="first-name" placeholder="">
						</div>
						<div class="form-group">
							<label for="last-name">Last Name:</label>
    						<input type="text" class="form-control" id="last-name" placeholder="">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="text" class="form-control" id="email" placeholder="">
						</div>
						<div class="form-group">
							<label for="phone">Phone:</label>
							<input type="text" class="form-control" id="phone" placeholder=" ">
						</div>
						<div class="form-group">
							<label for="cpo">CPO:</label>
    						<input type="text" class="form-control" id="cpo" placeholder="">
						</div>
						<div class="form-group">
							<label>What position do you prefer? (*First Choice)</label>
							<select class="form-control">
								<option>UI Designer/ Usability Testing</option>
								<option>Photography/ Art</option>
								<option>Front-end Programmer</option>
								<option>Back-end Programmer</option>
								<option>Project Leader</option>
								<option>Community Member</option>
								<option>Others</option>
							</select>
						</div>
						<div class="form-group">
							<label>What position do you prefer? (Second Choice)</label>
							<select class="form-control">
								<option>UI Designer/ Usability Testing</option>
								<option>Photography/ Art</option>
								<option>Front-end Programmer</option>
								<option>Back-end Programmer</option>
								<option>Project Leader</option>
								<option>Community Member</option>
								<option>Others</option>
							</select>
						</div>
						<div class="form-group">
							<label>When are you able to meet with the team? (Multiple) </label>
							<select multiple class="form-control">
								<option>Monday 4-5pm</option>
								<option>Tuesday 5-6pm</option>
								<option>Saturday 2-4pm</option>
								<option>Sunday 2-4pm</option>
							</select>
						</div>
						<div class="form-group">
							<label>Anything Interesting about you?</label>
							<textarea class="form-control" rows="5"></textarea>
						</div>
						<button type="submit" class="btn btn-success">Submit</button>

					</form>
				</div>

			</div>
		</div>
	</body>

	<?php siteFooter(); ?>
</html>