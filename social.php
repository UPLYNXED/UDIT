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
				<section class="messageContainer">
					<article class="messageWrapper">
						<div class="messageUserImage" style="background-image: url(assets/images/profiles/jeffrey.jpg); background-size: cover;"></div>
						<div class="messageText">
							<strong style="color: navy;">Jeffrey (facilitator)</strong><br />
							Hey! If anyone needs help, you can reach out to me here! :-) Hope you like Eindhoven
						</div>
					</article>
					<article class="messageWrapper">
						<div class="messageUserImage" style="background-image: url(assets/images/profiles/josh.jpg); background-size: cover;"></div>
						<div class="messageText">
							<strong style="color: orange;">Josh</strong><br />
							Hi Anna, welcome to Eindhoven! :-)
						</div>
					</article>
					<article class="messageWrapper">
						<div class="messageUserImage" style="background-image: url(assets/images/profiles/anna.png); background-size: cover;"></div>
						<div class="messageText">
							<strong style="color: red;">Anna</strong><br />
							Hi there! I am new here!
						</div>
					</article>
				</section>
				<form>
					<input type="text"><input type="submit" value="SEND">
				</form>
			</div>
		</div>
	</body>
</html>