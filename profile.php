<!DOCTYPE html>
<html>
	<?php include 'includes/head.php'; ?>
	<body>
		<div class="container">
			<div class="profileScreen">
				<header style="background-image: linear-gradient(to bottom, rgba(14,14,14,0.7) 0%, rgba(255,255,255,0) 20vh), linear-gradient(to top, rgba(26, 26, 26, 0.7) 0, rgba(26, 26, 26, 0.25) 40vh, rgba(26, 26, 26, 0) 50vh), url(assets/images/profiles/anna.png); background-position-x: 90%;">
					<?php
						$pageTitle = 'Profile';
						include 'includes/nav.php';
					?>
					<div class="profileInfo">
						<h3 class="profileName">Anna <span class="profileNameLast">Ahlström</span></h3>
						<!--<h5>August 27, 2015</h5>-->
						<div class="profileNationality flagSweden">
							from Sweden
						</div>
					</div>
				</header>
				<div class="profileFollow">
					Settings
				</div>
				<div class="profileDetails">
					<div class="profileDetailsBox">
						<h4 style="color: #9b59b6;">Fashion</h4>
						<span>Branch</span>
					</div><div class="profileDetailsBox">
						<h4>117 (5 Y)</h4>
						<span>Days in EHV</span>
					</div><div class="profileDetailsBox">
						<h4>343</h4>
						<span>Followers</span>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>