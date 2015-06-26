<!DOCTYPE html>
<html>
	<?php
		$screenName = "chat";
		include 'includes/head.php'; 
	?>
	<body>
		<div class="container">
			<div class="livingScreen">
				<header>
					<?php 
						$pageTitle = "Living";
						include 'includes/nav.php'; 
					?>
				</header>
				<section>
					<a class="tabButton tabQuarter active jobsBtn" href="living.php">
						Work
					</a><a class="tabButton tabQuarter educationBtn">
						School
					</a><a class="tabButton tabQuarter lifestyleBtn">
						Events
					</a><a class="tabButton tabQuarter housingBtn">
						Housing
					</a>
				</section>
				<section class="vacancyContainer">
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/programmer.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Webprogrammer at ASML
							</h4>
							<span class="branchBodySmall branchIT">IT</span> <span class="vacancyDate">Aug 2015 - Feb 2016</span>
							<p>Full-time</p>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/accountant.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Accountant at Rabobank
							</h4>
							<span class="branchBodySmall branchFinance">Finance</span> <span class="vacancyDate">Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/engineer.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Engineer at Philips
							</h4>
							<span class="branchBodySmall branchTechnology">Technology</span> <span class="vacancyDate">Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/waitress.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Waiter at Vapiano
							</h4>
							<span class="branchBodySmall branchRestaurant">Restaurant</span> <span class="vacancyDate">Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/leraar.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Mechanical engineer at TU/e
							</h4>
							<span class="branchBodySmall branchEducation">Education</span> <span class="vacancyDate">Aug 2015 - Feb 2016</span>
						</div>
					</article>
				</section>
			</div>
		</div>
	</body>
</html>