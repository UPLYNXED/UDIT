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
					<div class="jobsBtn">
						Work
					</div><div class="educationBtn">
						School
					</div><div class="lifestyleBtn">
						Events
					</div><div class="housingBtn">
						Housing
					</div>
				</section>
				<section class="vacancyContainer">
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/programmer.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Webprogrammer at ASML
							</h4>
							<span class="">IT</span> <span class="">Aug 2015 - Feb 2016</span>
							<p>Full-time</p>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/accountant.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Accountant at Rabobank
							</h4>
							<span class="">Finance</span> <span class="">Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/engineer.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Engineer at Philips
							</h4>
							<span class="">Technology</span> <span class="">Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/waitress.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Waiter at Vapiano
							</h4>
							<span class="">Restaurant</span> <span class="">Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="jobsImage" style="background-image: url(assets/images/vacancy/leraar.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Mechanical engineer at TU/e
							</h4>
							<span class="">Education</span> <span class="">Aug 2015 - Feb 2016</span>
						</div>
					</article>
				</section>
			</div>
		</div>
	</body>
</html>