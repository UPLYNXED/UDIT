<!DOCTYPE html>
<html>
	<?php include 'includes/head.php'; ?>
	<body>
		<div class="container">
			<div class="profileScreen">
				<header style="background-image: linear-gradient(to bottom, rgba(14,14,14,0.7) 0%, rgba(255,255,255,0) 20vh), linear-gradient(to top, rgba(26, 26, 26, 0.7) 0, rgba(26, 26, 26, 0.25) 40vh, rgba(26, 26, 26, 0) 50vh), url(assets/images/profiles/josh.jpg); background-position-x: 90%;">
					<?php
						$pageTitle = 'Profile';
						include 'includes/nav.php';
					?>
					<div class="profileInfo">
						<h3 class="profileName">Josh <span class="profileNameLast">Eldridge</span></h3>
						<!--<h5>August 27, 2015</h5>-->
						<div class="profileNationality flagBritain">
							from United Kingdom
						</div>
					</div>
				</header>
				<div class="profileFollow">
					Follow
				</div>
				<div class="profileDetails">
					<div class="profileDetailsBox">
						<h4 style="color: #e67e22;">IT</h4>
						<span>Branch</span>
					</div><div class="profileDetailsBox">
						<h4>54 (2 Y)</h4>
						<span>Days in EHV</span>
					</div><div class="profileDetailsBox">
						<h4>39</h4>
						<span>Followers</span>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>