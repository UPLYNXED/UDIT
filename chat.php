<!DOCTYPE html>
<html>
	<?php
		$screenName = "chat";
		include 'includes/head.php'; 
	?>
	<body>
		<div class="container">
			<div class="chatScreen">
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
				<section class="messageContainer">
					<article class="messageWrapper">
						<div class="messageUserImage" style="background-image: url(assets/images/profiles/jeffrey.jpg); background-size: cover;"></div>
						<div class="messageText">
							<strong>Jeffrey (facilitator)</strong><br />
							Hey! If anyone needs help, you can reach out to me here! :-) Hope you like Eindhoven
						</div>
					</article>
					<article class="messageWrapper">
						<div class="messageUserImage" style="background-image: url(assets/images/profiles/anna.png); background-size: cover;"></div>
						<div class="messageText">
							<strong>Anna</strong><br />
							Hi there! I am new here!
						</div>
					</article>
					<article class="messageWrapper">
						<div class="messageUserImage" style="background-image: url(assets/images/profiles/josh.jpg); background-size: cover;"></div>
						<div class="messageText">
							<strong>Josh</strong><br />
							Hi Anna, welcome to Eindhoven! :-)
						</div>
					</article>
				</section>
				<form>
					<input type="text" placeholder="Send a message...">
					<input type="submit" value="SEND">
				</form>
			</div>
		</div>
	</body>
</html>