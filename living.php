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
				<section class="messageContainer">
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/asml.jpg);"></div>
						<div class="newsTitle">
							<h4>
								Webprogrammer at ASML
							</h4>
							<span>Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/asml.jpg);"></div>
						<div class="newsTitle">
							<h4>
								Accountant at Rabobank
							</h4>
							<span>Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/asml.jpg);"></div>
						<div class="newsTitle">
							<h4>
								Engineer at Philips
							</h4>
							<span>Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/asml.jpg);"></div>
						<div class="newsTitle">
							<h4>
								Waiter at Vapiano
							</h4>
							<span>Aug 2015 - Feb 2016</span>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/asml.jpg);"></div>
						<div class="newsTitle">
							<h4>
								Mechanical engineer at TU/e
							</h4>
							<span>Aug 2015 - Feb 2016</span>
						</div>
					</article>
				</section>
			</div>
		</div>
	</body>
</html>