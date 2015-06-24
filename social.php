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
						<img src="assets/images/group.svg" alt="group" id="groupIcon">
					</div><div class="groupDM">
					</div>
				</section>
				<section class="messageBox">
					<article class="messages">
					</article>
					<article class="messages">
					</article>
					<article class="messages">
					</article>
					<article class="messages">
					</article>
				</section>
			</div>
		</div>
	</body>
</html>