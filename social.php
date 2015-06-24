<!DOCTYPE html>
<html>
	<?php
		include 'includes/head.php'; 
	?>
	<body>
		<div class="container">
			<div class="socialScreen">
				<header>
					<?php 
						$pageTitle = "My Group";
						include 'includes/nav.php'; 
					?>
				</header>
				<section>
					<div class="groupTimeline">
						<img src="assets/images/group.png" alt="group" id="groupIcon">
					</div><div class="groupDM">
						<img src="assets/images/messages.png" alt="group" id="groupIcon">
					</div>
				</section>
				<section class="messageBox">
					<article class="messages">
						<div class="messageUserImage">
						</div>
					</article>
					<article class="messages">
						<div class="messageUserImage">
						</div>
					</article>
					<article class="messages">
						<div class="messageUserImage">
						</div>
					</article>
					<article class="messages">
						<div class="messageUserImage">
						</div>
					</article>
				</section>
			</div>
		</div>
	</body>
</html>