<!DOCTYPE html>
<html>
	<?php
		$screenName = 'news';
		include 'includes/head.php'; 
	?>
	<body>
		<div class="container">
			<div class="newsScreen">
				<header>
					<?php include 'includes/nav.php'; ?>
					<div class="newsWelcome">
						<span class="greeting">Good day</span> 
						<span class="newsWelcomeName"><?php echo $_SESSION['name'] . ' ' . $_SESSION['lastname'] ?></span>
					</div>
				</header>
				<section>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/coffee.jpg);"></div>
						<div class="newsTitle">
							<h4>
								New meet-up point for expats opened at Strijp-S
							</h4>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/ddw.jpg);"></div>
						<div class="newsTitle">
							<h4>
								Dutch Design Week
							</h4>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/htc.jpg);"></div>
						<div class="newsTitle">
							<h4>
								High Tech Campus, Philips Event
							</h4>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/strp.jpg);"></div>
						<div class="newsTitle">
							<h4>
								STRP Biënnale
							</h4>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/kingsday.jpg);"></div>
						<div class="newsTitle">
							<h4>
								What to do during Kingsday?
							</h4>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/glow.jpg);"></div>
						<div class="newsTitle">
							<h4>
								GLOW goes global
							</h4>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/cycle.jpg);"></div>
						<div class="newsTitle">
							<h4>
								Cycling marathon for good cause
							</h4>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/cafe.JPG);"></div>
						<div class="newsTitle">
							<h4>
								New cafetaria opening in Klokgebouw
							</h4>
						</div>
					</article>
					<article class="newsArticle">
						<div class="newsImage" style="background-image: url(assets/images/news/asml.jpg);"></div>
						<div class="newsTitle">
							<h4>
								Internships available at ASML
							</h4>
						</div>
					</article>
				</section>
			</div>
		</div>
	</body>
</html>