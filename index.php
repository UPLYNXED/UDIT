<!DOCTYPE html>
<html>
	<?php include 'includes/head.php'; ?>
	<body>
		<div class="container">
			<div class="loginScreen">
				<?php
					$pageTitle = 'Login';
					$menuVisible = false;
					include 'includes/nav.php';
				?>
				<h2 class="loginTitle">Udit</h2>
				<form>
					<input type="text" name="email" placeholder="email" autocomplete='off'>
					<input type="password" name="password" placeholder="password">
					<input type="checkbox" id="rememberMe">
					<label for="rememberMe">
						<div class="checkbox"></div>
						<span>Remember me</span>
					</label>
					<input type="submit" name="btnAction" value="login">
				</form>
				<div class="noAccount">
					<span>
						Don't have an account yet?<br>
						<a href="register.php">SIGN UP</a>
					</span>
				</div>
			</div>
		</div>
	</body>
</html>