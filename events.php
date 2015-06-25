<!DOCTYPE html>
<html>
	<?php
		$screenName = "chat";
		include 'includes/head.php'; 
	?>
	<body>
		<div class="container">
			<div class="eventsScreen">
				<header>
					<?php 
						$pageTitle = "Social";
						include 'includes/nav.php'; 
					?>
				</header>
				<section>
					<div class="groupTimeline">
						<a href="events.php" style="color: white; text-decoration: none;">Meetups</a>
					</div><div class="groupDM active">
						<a href="group.php" style="color: white; text-decoration: none;">My Groups</a>
					</div>
				</section>
				<section class="eventsContainer">
					<div class="eventsEvent" style="background: linear-gradient(to top,  rgba(14,14,14,1) 0%,rgba(255,255,255,0) 100%),
				url(assets/images/meetup.png);">
						<div class="eventsText">
							<h5><b class="branchBody branchIT">IT</b> <b class="branchBody branchTechnology">Technology</b> August 27, 2015</h5>
							<a href="meetups.php"><h3>Philips starts a meeting for expats</h3></a>
							<a class="accept">Accept</a><a class="decline">Decline</a>
						</div>
					</div>
				</section>
				<section class="eventsContainer">
					<div class="eventsEvent" style="background: linear-gradient(to top,  rgba(14,14,14,1) 0%,rgba(255,255,255,0) 100%),
				url(assets/images/events/DDW.jpg);">
						<div class="eventsText">
							<h5><b class="branchBody branchGeneral">General</b> <b class="branchBody branchFashion">Fashion</b> August 29, 2015</h5>
							<h3>Dutch Design Week</h3>
							<a class="accept">Accept</a><a class="decline">Decline</a>
						</div>
					</div>
				</section>
				<section class="eventsContainer">
					<div class="eventsEvent" style="background: linear-gradient(to top,  rgba(14,14,14,1) 0%,rgba(255,255,255,0) 100%),
				url(assets/images/events/DTW.jpg);">
						<div class="eventsText">
							<h5><b class="branchBody branchIT">IT</b> <b class="branchBody branchTechnology">Technology</b> September 1, 2015</h5>
							<h3>Dutch Technology Week</h3>
							<a class="accept">Accept</a><a class="decline">Decline</a>
						</div>
					</div>
				</section>
				<section class="eventsContainer">
					<div class="eventsEvent">
						<div class="eventsText">
							<h5><b class="branchBody branchTechnology">Technology</b> October 15, 2015</h5>
							<h3>High Tech Campus yearly expo</h3>
							<a class="accept">Accept</a><a class="decline">Decline</a>
						</div>
					</div>
				</section>
				<section class="eventsContainer">
					<div class="eventsEvent" style="background: linear-gradient(to top,  rgba(14,14,14,1) 0%,rgba(255,255,255,0) 100%),
				url(assets/images/events/Glow.jpg);">
						<div class="eventsText">
							<h5><b class="branchBody branchGeneral">General</b> December 1, 2015</h5>
							<h3>Glow</h3>
							<a class="accept">Accept</a><a class="decline">Decline</a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</body>
</html>