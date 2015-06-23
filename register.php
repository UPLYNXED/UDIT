<!DOCTYPE html>
<html>
	<?php include 'includes/head.php'; ?>
	<body>
		<div class="container">
			<div class="loginScreen">
				<?php
					$pageTitle = 'Register';
					$menuVisible = false;
					include 'includes/nav.php';
				?>
				<h2>Udit</h2>
				<form>
					<input type="text" name="name" placeholder="first name">
					<input type="text" name="lastname" placeholder="last name">
					<input type="text" name="email" placeholder="email">
					<input type="password" name="password" placeholder="password">
					<input type="submit" name="btnAction" value="register">
				</form>
				<div class="noAccount">
					<span>Already have an account?<br>
					<a href="index.php">SIGN IN</a>
					</span>
				</div>
			</div>
		</div>
	</body>
</html>