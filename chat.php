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
				<section class="messageContainer">
					<article class="messageWrapper">
						<a class="messageUserImage" style="background-image: url(assets/images/profiles/jeffrey.jpg);" href="#"></a>
						<div class="messageText">
							<strong>Jeffrey (facilitator)</strong><br />
							Hey! If anyone needs help, you can reach out to me here! :-) Hope you like Eindhoven
						</div>
					</article>
					<article class="messageWrapper">
						<a class="messageUserImage" style="background-image: url(assets/images/profiles/anna.png);" href="profile.php"></a>
						<div class="messageText">
							<strong>Anna</strong><br />
							Hi there! I am new here!
						</div>
					</article>
					<article class="messageWrapper">
						<a class="messageUserImage" style="background-image: url(assets/images/profiles/josh.jpg);" href="profile2.php"></a>
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