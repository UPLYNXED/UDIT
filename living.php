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
					<article class="messageWrapper">
						<div class="messageUserImage" style="background-image: url(https://scontent.xx.fbcdn.net/hphotos-xat1/v/t1.0-9/10702232_867950139884848_6160138085780686739_n.jpg?oh=7ad61394e46e95f4c014ac0e63a3717a&oe=5628385A); background-size: cover;"></div>
						<div class="messageText">
							<strong>Joris</strong><br />
							Hoi ik ben Joris en ik ben niet een expat. Ik woon ook niet in Eindhoven dus ik weet niet wat ik hier eigenlijk te zoeken heb maar ok.
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